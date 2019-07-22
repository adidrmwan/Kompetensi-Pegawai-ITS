<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoalUjian extends Model
{
    protected $table = 'soal_ujian';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'ujian_id', 
    	'no_soal', 
    	'deskripsi', 
    	'pilihan_a', 
    	'pilihan_b', 
    	'pilihan_c', 
    	'pilihan_d', 
    	'kunci_jawaban', 
    	'status', 
    	'entry_user', 
    ];
    
    public function ujian()
    {
        return $this->belongsTo(Ujian::class, 'ujian_id');
    }
}
