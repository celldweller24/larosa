<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeePhoto;
use App\Models\Category;
use App\Models\CategoryEmployee;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    public const FEMALE = 1;

    public const MALE = 2;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.employee_create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $employee = new Employee();

        $sort = Employee::all()->sortBy("sort")->all();

        $employee->name = $request->input('employeeName');
        $employee->gender = ((int) $request->input('gender') === self::FEMALE) ? 'F' : 'M';
        $employee->sort = ($sort) ? ++end($sort)->sort : 1;
        $employee->active = ($request->input('activityCheckbox')) ? 1 : 0;

        $employee->save();

        if ($request->input('categoryCheckbox')) {
            foreach ($request->input('categoryCheckbox') as $checkboxValue) {
                $employee->categories()->attach($checkboxValue);
            }
        }

        if ($request->file('photos')) {
            $files = $request->file('photos');

            // point to refactoring
            foreach ($files as $index => $file) {

                $employeePhoto = new EmployeePhoto();
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(storage_path('app/public/images/photos'), $filename);

                $employeePhoto->file_path = $filename;
                $employeePhoto->employee_id = $employee->id;
                $employeePhoto->sort = (int) $index + 1;

                $employeePhoto->save();
            }
        }

        return redirect()->route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Request $request)
    {
        $employee = Employee::with(['photos' => function($query) {
            return $query->orderBy('sort', 'asc');
        }])->findOrFail($request->id);

        $categories = Category::all();

        $attachedCategories = [];
        foreach ($employee->categories->all() as $item) {
            array_push($attachedCategories, $item->pivot->category_id);
        }

        return view('admin.employee_edit', [
            'employee' => $employee,
            'categories' => $categories,
            'attachedCategories' => $attachedCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request)
    {
        $employee = Employee::find($id);

        $employee->name = $request->input('employeeName');
        $employee->active = ($request->input('activityCheckbox')) ? 1 : 0;

        $employee->save();

        CategoryEmployee::where('employee_id', $employee->id)->delete();

        if ($request->input('categoryCheckbox')) {
            foreach ($request->input('categoryCheckbox') as $checkboxValue) {
                $categoryEmployee = new CategoryEmployee();
                $categoryEmployee->category_id = $checkboxValue;
                $categoryEmployee->employee_id = $employee->id;
                $categoryEmployee->timestamps = false;

                $categoryEmployee->save();
            }
        }

        if ($request->file('photos')) {
            $files = $request->file('photos');

            // point to refactoring
            foreach ($files as $file) {

                $employeePhoto = new EmployeePhoto();
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(storage_path('app/public/images/photos'), $filename);

                $employeePhoto['file_path'] = $filename;
                $employeePhoto['employee_id'] = $id;

                $employeePhoto->save();
            }
        }

        if ($photos = $request['photo-sort']) {
            $initialSortValue = 0;

            foreach ($photos as $idKey => $sortValue) {

                if (is_null($sortValue)) {
                    $sortValue = $initialSortValue + 1;
                    $initialSortValue = $sortValue;
                }

                $photoEntity = EmployeePhoto::find($idKey);

                $photoEntity['sort'] = $sortValue;

                $photoEntity->save();
            }
        }

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $employee = Employee::with(['photos'])->findOrFail($id);

        foreach ($employee->photos->all() as $employeePhoto) {
            $fileName = $employeePhoto->getAttributes()['file_path'];

            if (File::exists(storage_path('app/public/images/photos/') . $fileName)) {
                File::delete(storage_path('app/public/images/photos/') . $fileName);
            }
        }

        Employee::where('id', $id)->delete();

        return redirect()->route('dashboard');
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function deletePhoto(Request $request)
    {
        $photoId = (int) $request->all()['photoId'];

        $photoEntity = EmployeePhoto::find($photoId);

        $fileName = $photoEntity->getAttributes()['file_path'];

        if (File::exists(storage_path('app/public/images/photos/') . $fileName)) {
            File::delete(storage_path('app/public/images/photos/') . $fileName);
        }

        EmployeePhoto::where('id',$photoId)->delete();

        return true;
    }
}
