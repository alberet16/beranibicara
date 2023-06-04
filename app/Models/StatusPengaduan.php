<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_pengaduan',
        'kode_status'
    ];
    

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
