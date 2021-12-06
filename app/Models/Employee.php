<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";
    protected $fillable = ["nama", "no_ktp", "npwp", "foto_profil", "position_id", "family_status_id"];

    public function Position(){
        return $this->belongsTo('App\Models\Position');
    }

    public function FamilyStatus(){
        return $this->belongsTo('App\Models\FamilyStatus');
    }

    public function Allowance(){
        return $this->belongsToMany(Allowance::class, 'employee_allowance');
    }
    public function Deduction(){
        return $this->belongsToMany(Deduction::class, 'employee_deduction');
    }
}
