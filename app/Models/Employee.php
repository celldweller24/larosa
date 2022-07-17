<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeePhoto;
use App\Models\Category;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ["name", "sort", "gender", "active", "created_at", "updated_at"];

    public function photos() {
        return $this->hasMany(EmployeePhoto::class);
    }

    /**
     * The categories that belong to the employee.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_employees')->withPivot('employee_id', 'category_id');
    }

    public function getRelatedCategory($categoryId)
    {
        return $this->belongsToMany(Category::class, 'category_employees')->wherePivot('category_id', $categoryId);
    }
}
