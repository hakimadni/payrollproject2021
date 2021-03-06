<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    protected $table = "allowances";
    protected $fillable = ["nama", "value"];

    public function Employee(){
        return $this->belongsToMany(Employee::class);
    }
}
