<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyStatus extends Model
{
    protected $table = "family_status";
    protected $fillable = ["nama", "deskripsi", "value"];
}
