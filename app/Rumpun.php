<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumpun extends Model
{	

	protected $table = 'rumpuns';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
    ];

    public function jabatans()
    {
        return $this->hasMany('App\Models\Jabatan', 'rumpun_id');
    }
}
