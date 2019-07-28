<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilUjian extends Model
{
    protected $table = 'hasil_ujians';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'user_id',
        'ujian_id',
        'jawaban_ujian',
        'nilai_ujian',
    ];

    public function ujian()
    {
        return $this->belongsTo(Ujian::class, 'ujian_id');
    }
    
}
