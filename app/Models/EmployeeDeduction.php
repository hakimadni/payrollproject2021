<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDeduction extends Model
{
    protected $table = 'employee_deduction';
    protected $fillable = ["employee_id", "deduction_id"];

    public function Employee(){
        return $this->belongsTo(Employee::class);
    }
    public function Deduction(){
        return $this->belongsTo(Deduction::class);
    }
}
