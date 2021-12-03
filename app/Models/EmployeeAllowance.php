<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAllowance extends Model
{
    protected $table = 'employee_allowance';
    protected $fillable = ["employee_id", "allowance_id"];

    public function Employee(){
        return $this->belongsTo(Employee::class);
    }
    public function Allowance(){
        return $this->belongsTo(Allowance::class);
    }
}
