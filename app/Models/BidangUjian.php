<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BidangUjian extends Model
{
    protected $table = 'bidang_ujian';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'deskripsi', 
    ];
    
    public function ujian()
    {
        return $this->hasMany(Ujian::class, 'bidang_ujian_id');
    }
}
