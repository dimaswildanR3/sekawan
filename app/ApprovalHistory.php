<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalHistory extends Model
{
    protected $table = 'approval_history';
    protected $fillable = ['id_booking','id_user','id_level','status_persetujuan','catatan'];

    public function User()
    {
      return $this->belongsTo(User::class, 'id_user');
        // return $this->hasOne('App\Kriteria');
      } public function booking()
      {
        return $this->belongsTo(VehicleBooking::class, 'id_booking');
          // return $this->hasOne('App\Kriteria');
        } public function level()
        {
          return $this->belongsTo(ApprovalLevel::class, 'id_level');
            // return $this->hasOne('App\Kriteria');
          }
          public function vehicle()
          {
            return $this->belongsTo(Vehicle::class, 'id_vehicle');
              // return $this->hasOne('App\Kriteria');
            }
}
