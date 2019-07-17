<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'topic_id',
    	'quest'
    ];
    
    public function tipe_pelatihan()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }
}
