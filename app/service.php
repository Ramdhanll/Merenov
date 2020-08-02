<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable = ['pelayanan','alamat','luas_bangunan','deskripsi','nama','no_telepon','email','jadwal_survey'];
}
