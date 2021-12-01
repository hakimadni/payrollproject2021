<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeHasAllowance extends Model
{
    protected $table = "employee_has_allowance";
    protected $fillable = ['employee_id', 'allowance_id'];

    public function employee()
    {
        return $this->belongsTo('App\employee');
    }

    public function allowance()
    {
        return $this->belongsTo('App\allowance');
    }
}
