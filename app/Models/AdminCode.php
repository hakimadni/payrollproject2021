<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCode extends Model
{
    protected $table = "admin_code";
    protected $fillable = ["code"];
}
