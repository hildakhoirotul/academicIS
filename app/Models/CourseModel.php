<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class CourseModel extends Model
{
    use HasFactory;
    protected $table='course'; //Eloquent will create a student model to store records in the student table
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'course_name',
        'sks',
        'hour',
        'semester',
    ];


    public function student()
    {
        return $this->belongsToMany(Student::class, 'course_student', 'student_id', 'course_id')
        ->withPivot('value');
    }
}
