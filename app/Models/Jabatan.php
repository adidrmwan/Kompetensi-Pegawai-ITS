<?php

namespace App\Models;

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
       return $this->belongsTo('App\Rumpun', 'rumpun_id');
    }

    public function userSekarang()
    {
        return $this->belongsTo('App\User');
    }

    public function userImpian()
    {
        return $this->belongsTo('App\User');
    }
    // public function jabatanSekarang()
    // {
    //     return $this->hasMany('App\User', 'jabatan_sekarang');
    // }
    // public function jabatanImpian()
    // {
    //     return $this->hasMany('App\User', 'jabatan_impian');
    // }
}