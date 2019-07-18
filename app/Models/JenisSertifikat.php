<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisSertifikat extends Model
{
    protected $table = 'jenis_sertifikat';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'lingkup_id',
    	'bidang_id',
    	'deskripsi', 
    	'poin',
        'entry_user',
    ];
    
    public function sertifikats()
    {
        return $this->hasMany(Sertifikat::class, 'jenis_sertifikat_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'sertifikat');
    }

    public function lingkup()
    {
        return $this->belongsTo(Lingkup::class, 'lingkup_id');
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
