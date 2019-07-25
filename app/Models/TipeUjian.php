<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeUjian extends Model
{
    protected $table = 'tipe_ujian';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'kode_tipe',
    	'deskripsi', 
    ];
    
    public function ujian()
    {
        return $this->hasMany(Ujian::class, 'tipe_ujian_id');
    }
}
