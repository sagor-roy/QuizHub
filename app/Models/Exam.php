<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'user_id'
    ];

    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
