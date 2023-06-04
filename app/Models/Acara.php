<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $table ='acaras';

    protected $guarded = ['id'];

    public function kategoriAcara()
    {
        return $this->belongsTo(KategoriAcara::class);
    }
}
