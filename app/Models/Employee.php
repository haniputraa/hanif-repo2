<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ["employee_name", "employee_email", "company_id"];
    protected $primaryKey = 'employee_id';
}
