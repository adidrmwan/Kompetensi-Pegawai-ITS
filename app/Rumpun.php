<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumpun extends Model
{	

	protected $table = 'rumpuns';
    protected $primaryKey = 'id';

    protected $fillable = [
        'deskripsi',
    ];

    public function jabatans()
    {
        return $this->hasMany('App\Models\Jabatan', 'rumpun_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
