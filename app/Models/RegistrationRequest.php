<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrationRequest extends Model
{
    protected $fillable = ['nim', 'name', 'department', 'major', 'phone', 'status'];
}