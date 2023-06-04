<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dukungan extends Model
{
    use HasFactory;

    protected $table ='dukungans';

    protected $guarded = ['id'];

    
    public function kategoriDukungan()
    {
        return $this->belongsTo(kategoriDukungan::class);
    }
}
