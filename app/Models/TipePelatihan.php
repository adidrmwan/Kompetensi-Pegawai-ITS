<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipePelatihan extends Model
{
    protected $table = 'tipe_pelatihan';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'deskripsi', 
    	'nilai'
    ];
    
    public function tipe_pelatihan()
    {
        return $this->hasMany(Sertifikat::class, 'tipe_pelatihan_id');
    }
}
