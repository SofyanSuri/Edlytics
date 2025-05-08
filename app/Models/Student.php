<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;

    // Custom primary key configuration
    protected $primaryKey = 'student_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'student_id',
        'nim',
        'name',
        'department',
        'major',
        'phone',
        'password'
    ];

    protected $hidden = ['password'];

    // Proper route key name for URL binding
    public function getRouteKeyName()
    {
        return 'student_id';
    }

    public function changeRequests()
    {
        return $this->hasMany(DataChangeRequest::class, 'student_id');
    }
}