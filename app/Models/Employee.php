<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jenis_kelamin', 'nomor_telepon'];
    protected $datas = ['created_at'];
    // protected $guarded = [];
}
