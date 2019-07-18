<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    protected $table = 'sertifikat';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'user_id',
        'jenis_sertifikat_id',
    	'judul', 
    	'deskripsi', 
        'partisipasi', 
        'penyelenggara', 
        'tempat_diselenggarakan', 
    	'tanggal_mulai',
        'tanggal_selesai',
        'no_sertifikat',
        'tanggal_sertifikat',
        'uploaded_file',
    	'status',
        'entry_user',
    ];
    
    public function jenis_sertifikat()
    {
        return $this->belongsTo(JenisSertifikat::class, 'jenis_sertifikat_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
