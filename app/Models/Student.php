<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Student as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;//Model Eloquent

class Student extends Model // Model definition
{
    protected $table='student'; //Eloquent will create a student model to store records in the student table
    protected $primaryKey = 'id_student';//calling DB content with primary key
    /**
     * The attributes that are ,ass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'Nim',
        'Name',
        'Class',
        'Major',
    ];
};
