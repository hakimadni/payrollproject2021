<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeHasDeduction extends Model
{
    protected $table = "employee_has_deduction";
    protected $fillable = ['employee_id', 'deduction_id'];

    public function employee()
    {
        return $this->belongsTo('App\employee');
    }

    public function deduction()
    {
        return $this->belongsTo('App\deduction');
    }
}
