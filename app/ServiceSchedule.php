<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSchedule extends Model
{
    protected $table = 'service_schedules';
    protected $fillable = ['id_vehicle', 'tanggal_servis', 'deskripsi', 'status_servis'];

    public function vehicle()
    {
      return $this->belongsTo(Vehicle::class, 'id_vehicle');
        // return $this->hasOne('App\Kriteria');
      }
}
