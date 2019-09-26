<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeaderUjian extends Model
{
    protected $table = 'header_ujian';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'ujian_id',
    	'user_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'nilai_akhir',
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


}