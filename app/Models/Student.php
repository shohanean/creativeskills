<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['course_id', 'date', 'student_name', 'course_fee', 'vat', 'net_amount'];

    function course(){
        return $this->hasOne(Course::class, 'id', 'course_id');
    }
}
