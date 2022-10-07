<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactDashboard extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['namaContact','subject','no_telp','email','keteranganContact'];
}
