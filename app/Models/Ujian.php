<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $table = 'ujian';
    protected $primaryKey = 'id';
    
    const STATUS_ACTIVE = 'active';
    const STATUS_PENDING = 'pending';
    const STATUS_CLOSED = 'closed';
    const STATUS_ONTEST = 'on_test';
    const STATUS_FINISHED = 'finished';

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
        return $this->hasMany(HeaderUjian::class, 'ujian_id');
    }
    
    public function jawaban_ujians()
    {
        return $this->hasMany(JawabanUjian::class, 'ujian_id');
    }

    public function isPending()
    {
        return $this->status == self::STATUS_PENDING;
    }

    public function isClosed()
    {
        return $this->status == self::STATUS_CLOSED;
    }

    public function isActive()
    {
        return $this->status == self::STATUS_ACTIVE;
    }

    public function header_ujian()
    {
        return $this->headers()->where('user_id', auth()->user()->id)->first();
    }

    public function nilai_ujian()
    {
        return $this->header_ujian()->nilai_akhir;
    }

    public function isOnTest()
    {
        return $this->header_ujian()->status == self::STATUS_ONTEST;
    }

    public function isFinished()
    {
        return $this->header_ujian()->status == self::STATUS_FINISHED;
    }

}