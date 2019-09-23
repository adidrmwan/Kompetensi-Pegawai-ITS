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
        'partisipasi_id',
    	'deskripsi',
        'level_id', 
        'pendidikan_id', 
        'jurusan_id', 
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

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'pendidikan_id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

    public function partisipasi()
    {
        return $this->belongsTo(Partisipasi::class, 'partisipasi_id');
    }
}
