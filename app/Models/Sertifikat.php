<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    protected $table = 'sertifikat';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'tipe_pelatihan_id',
    	'judul', 
    	'deskripsi', 
    	'tanggal_pelatihan',
    	'status',
    	'entry_user'
    ];
    
    public function tipe_pelatihan()
    {
        return $this->belongsTo(TipePelatihan::class, 'tipe_pelatihan_id');
    }
}
