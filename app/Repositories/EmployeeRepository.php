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
                        ->where('employees.active', '=', '1')
                        ->select('employees.*')
                        ->orderBy('employees.sort', self::SORTING);

        return $employees->get()->toArray();
    }

    /**
     * @return array
     */
    public function getAllEmployeesWIthPhoto(): array
    {
        $employees = DB::table('employees')
            ->where('employees.active', '=', '1')
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

            $employee = (object) $employee;

            $collectedData = Employee::with(['photos' => function($query) {
                return $query->orderBy('sort', 'asc');
            }])->findOrFail($employee->id);

            $photos[$key]['items'] = $collectedData->photos;
            $photos[$key]['employee_id'] = $employee->id;
            $photos[$key]['employee_name'] = $employee->name;
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
