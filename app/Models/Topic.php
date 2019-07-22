<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'title'
    ];
    
    public function jenis_sertifikat()
    {
        return $this->hasMany(Question::class, 'topic_id');
    }
}
