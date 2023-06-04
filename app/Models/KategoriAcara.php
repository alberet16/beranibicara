<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAcara extends Model
{
    use HasFactory;

    protected $table ='kategoris_acaras';

    protected $guarded = ['id'];

    public function acara()
    {
        return $this->hasMany(Acara::class);
    }
}
