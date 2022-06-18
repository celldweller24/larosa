<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Repositories\EmployeeRepository;

class AdminController extends Controller
{
    private $employeeRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->middleware('auth');

        $this->employeeRepository = $employeeRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees = Employee::all()->sortBy('sort');
        return view('admin.dashboard', ['employees' => $employees]);
    }

    public function employeeSort(Request $request)
    {
        $sortingData = $request->all();

        $this->employeeRepository->changeEmployeeSorting($sortingData['allResortedElementsData']);
    }
}
