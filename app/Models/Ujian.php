<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $table = 'ujian';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'bidang_ujian_id',
        'tipe_ujian_id',
        'jabatan_id',
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

    public function tipe_ujian()
    {
        return $this->belongsTo(TipeUjian::class, 'tipe_ujian_id');
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
    
    public function soal_ujians()
    {
        return $this->hasMany(SoalUjian::class, 'ujian_id');
    }
    
    public function headers()
    {
        return $this->hasOne(HeaderUjian::class, 'ujian_id');
    }
    
    public function jawaban_ujians()
    {
        return $this->hasMany(JawabanUjian::class, 'ujian_id');
    }

}