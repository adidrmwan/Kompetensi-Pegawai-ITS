<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeUjian extends Model
{
    protected $table = 'tipe_ujian';
    protected $primaryKey = 'id';
    
    const TYPE_TEKNIS = 'A';
    const TYPE_UMUM = 'B';
    const TYPE_SOFT = 'C';
    
    protected $fillable = [
    	'kode_tipe',
    	'deskripsi', 
    ];
    
    public function ujian()
    {
        return $this->hasMany(Ujian::class, 'tipe_ujian_id');
    }

    public function isKompetensiTeknis()
    {   
        return $this->kode_tipe == self::TYPE_TEKNIS;
    }

    public function isKompetensiUmum()
    {
        return $this->kode_tipe == self::TYPE_UMUM;
    }

    public function isSoftKompetensi()
    {
        return $this->kode_tipe == self::TYPE_SOFT;
    }
}
