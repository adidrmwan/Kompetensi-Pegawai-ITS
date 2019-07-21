<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partisipasi extends Model
{
    protected $table = 'partisipasi';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'deskripsi', 
    ];
    
    public function jenis_sertifikat()
    {
        return $this->hasMany(JenisSertifikat::class, 'partisipasi_id');
    }
}
