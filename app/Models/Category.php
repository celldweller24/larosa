<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = ["title", "created_at", "updated_at"];

    /**
     * The employees that belong to the category.
     */
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'category_employees');
    }
}