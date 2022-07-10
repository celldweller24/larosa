<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class EmployeePhoto extends Model
{
    use HasFactory;

    protected $fillable = ["file_path", "created_at", "updated_at"];
}
