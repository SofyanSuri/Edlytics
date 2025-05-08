<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataChangeRequest extends Model
{
    protected $fillable = ['student_id', 'field', 'old_value', 'new_value', 'status'];
    
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}