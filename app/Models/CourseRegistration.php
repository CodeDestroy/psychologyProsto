<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    protected $fillable = [
        'user_id',
        'shouldBeCheckedOut',
        'managerCheckedOut',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
