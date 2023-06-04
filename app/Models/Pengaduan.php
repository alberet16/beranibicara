<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';

    protected $guarded = ['id'];

    public function StatusPengaduan(){
        return $this->belongsTo(StatusPengaduan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
