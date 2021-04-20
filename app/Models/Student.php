<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $appends = ['is_approved'];

    public function getIsApprovedAttribute()
    {
        return (int) $this->attributes['grade'] >= 5;
    }
}
