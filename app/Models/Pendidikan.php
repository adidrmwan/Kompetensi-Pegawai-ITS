<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'pendidikans';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'deskripsi', 
    ];
    
    public function jenis_sertifikat()
    {
        return $this->hasMany(JenisSertifikat::class, 'pendidikan_id');
    }
}
