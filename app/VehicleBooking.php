<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleBooking extends Model
{
    protected $table = 'vehicle_bookings';
    protected $fillable = [
        'id_user', 'id_vehicle', 'tanggal_pemesanan', 'tanggal_mulai', 'tanggal_selesai', 'status_persetujuan', 'catatan'];

        public function vehicle()
        {
          return $this->belongsTo(Vehicle::class, 'id_vehicle');
            // return $this->hasOne('App\Kriteria');
          }
          public function user()
          {
            return $this->belongsTo(User::class, 'id_vehicle');
              // return $this->hasOne('App\Kriteria');
            }
    }
