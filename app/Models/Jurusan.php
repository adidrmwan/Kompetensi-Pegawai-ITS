<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusans';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'deskripsi', 
    ];
    
    public function jenis_sertifikat()
    {
        return $this->hasMany(JenisSertifikat::class, 'jurusan_id');
    }
}
