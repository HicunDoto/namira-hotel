<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articleDashboard extends Model
{
    protected $table = 'articles';
    protected $fillable = ['judulArticle','tglTerbit','keterangan','fotoAticle'];
}
