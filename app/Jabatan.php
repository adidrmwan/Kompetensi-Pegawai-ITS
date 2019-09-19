<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatans';
    protected $primaryKey = 'id';

	protected $fillable = [
        'nama','rumpun_id','kelas','nilai',
    ];


    public function rumpuns()
    {
       return $this->belongsTo(Rumpun::class, 'rumpun_id');
    }

    public function jabatanSekarang()
    {
        return $this->hasMany('App\User', 'jabatan_sekarang');
    }
    public function jabatanImpian()
    {
        return $this->hasMany('App\User', 'jabatan_impian');
    }
}
