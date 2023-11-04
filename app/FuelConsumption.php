<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelConsumption extends Model
{
    protected $table = 'fuel_consumption';
    protected $fillable = ['id_vehicle','tanggal_pengisian','jumlah_liter','kilometer_awal','kilometer_akhir'];


    public function vehicle()
    {
      return $this->belongsTo(Vehicle::class, 'id_vehicle');
        // return $this->hasOne('App\Kriteria');
      }
}
