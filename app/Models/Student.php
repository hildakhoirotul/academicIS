<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Student as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;//Model Eloquent
use App\Models\ClassModel;
use App\Models\CourseModel;

class Student extends Model // Model definition
{
    use Hasfactory;
    protected $table='student'; //Eloquent will create a student model to store records in the student table
    public $timestamps = false;
    protected $primaryKey = 'nim';//calling DB content with primary key
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'nim',
        'name',
        'class_id',
        'major',
        'picture',
    ];

    public function class()
    {
        return $this->belongsTo(ClassModel::class);
    }
    public function course()
    {
        return $this->belongsToMany(CourseModel::class,'course_student','student_id','course_id')
        ->withPivot('value');
    }
};
