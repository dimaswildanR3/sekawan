<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalLevel extends Model
{
    protected $table = 'approval_levels';
    protected $fillable = ['nama_level', 'deskripsi'];
}
