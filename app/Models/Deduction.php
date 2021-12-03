<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    protected $table = "deductions";
    protected $fillable = ["nama", "value"];

    public function Employee(){
        return $this->belongsToMany(Employee::class);
    }
}
