<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $table = 'question_options';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'question_id',
    	'option1', 
    	'option2', 
    	'option3',
    	'option4',
        'option5',
        'answer'
    ];
    
    public function tipe_pelatihan()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
