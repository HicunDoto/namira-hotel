<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promoDashboard extends Model
{
    protected $table = 'promos';
    protected $fillable = ['namaPromo','judulPromo','keteranganPromo','fotoPromo'];
}
