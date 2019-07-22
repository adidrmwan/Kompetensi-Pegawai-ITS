<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lingkup extends Model
{
    protected $table = 'lingkup';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'deskripsi', 
    ];
    
    public function jenis_sertifikat()
    {
        return $this->hasMany(JenisSertifikat::class, 'lingkup_id');
    }
}
