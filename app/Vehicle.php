<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $fillable = ['nama_kendaraan', 'jenis_kendaraan', 'nomor_plat', 'status'];
}
