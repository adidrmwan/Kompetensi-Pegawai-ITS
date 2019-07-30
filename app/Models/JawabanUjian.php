<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JawabanUjian extends Model
{
    protected $table = 'jawaban_ujian';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'no_soal',
    	'ujian_id',
        'user_id',
    	'soal_ujian_id', 
    	'jawaban',
        'poin',
        'status',
    ];

    public function ujian()
    {
        return $this->belongsTo(Ujian::class, 'ujian_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function soal()
    {
        return $this->belongsTo(SoalUjian::class, 'soal_ujian_id');
    }
}
