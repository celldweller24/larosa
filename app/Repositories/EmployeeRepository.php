<?php

namespace App\Repositories;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeRepository
{
    public const SORTING = 'desc';

    /**
     * @param int $categoryId
     * @return array
     */
    public function getEmployeesByCategory(int $categoryId): array
    {
        $employees = DB::table('employees')
                        ->join('category_employees', 'employees.id', '=', 'category_employees.employee_id')
                        ->where('category_employees.category_id', '=', $categoryId)
                        ->select('employees.*')
                        ->orderBy('employees.sort', self::SORTING);

        return $employees->get()->toArray();
    }

    /**
     * @param array $employees
     * @return array
     */
    public function getPhotosByCategorisedEmployee(array $employees): array
    {
        $photos = [];
        foreach ($employees as $key => $employee) {

            $collectedData = Employee::with(['photos'])->findOrFail($employee->id);
            $photos[$key]['items'] = $collectedData->photos;
            $photos[$key]['employee_id'] = $employee->id;
        }

        return $photos;
    }

    public function changeEmployeeSorting($sortingData)
    {
        foreach ($sortingData as $item) {
            Employee::where('id', $item['id'])
                ->update(['sort' => $item['sort']]);
        }

        return true;
    }
}
