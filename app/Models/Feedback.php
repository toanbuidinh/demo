<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedback";

    public function Student()
    {
        return $this->hasOne('App\Models\Student', 'id_student', 'id');
    }
    public function Course()
    {
        return $this->hasOne('App\Models\Course', 'id_course', 'id');
    }
}
