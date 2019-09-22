<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'deskripsi', 
    ];
    
    public function jenis_sertifikat()
    {
        return $this->hasMany(JenisSertifikat::class, 'level_id');
    }
}
