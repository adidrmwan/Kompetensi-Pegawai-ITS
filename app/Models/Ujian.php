<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $table = 'ujian';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'bidang_ujian_id',
        'durasi_jam',
        'durasi_menit',
    	'total_durasi',
        'jumlah_soal',
    	'status', 
        'entry_user',
    ];

    public function bidang_ujian()
    {
        return $this->belongsTo(BidangUjian::class, 'bidang_ujian_id');
    }
    
    public function soal_ujians()
    {
        return $this->hasMany(SoalUjian::class, 'ujian_id');
    }
}