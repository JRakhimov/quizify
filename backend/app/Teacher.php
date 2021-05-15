<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'subject_id'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function quizes()
    {
        return $this->hasMany(\App\Quiz::class);
    }
}
