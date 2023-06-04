<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriDukungan extends Model
{
    use HasFactory;

    
    protected $table ='kategoris_dukungans';

    protected $guarded = ['id'];
}
