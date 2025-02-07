<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Student extends Model
{
    protected $table = 'students';

    protected $primaryKey = 'id';

    protected $fillable = [
        'student_code',
        'first_name',
        'middle_name',
        'last_name',
        'profile_image',
        'birth_date',
        'age',
        'address_one',
        'city',
        'district',
        'contact_no'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'student_code' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'profile_image' => 'string',
        'birth_date' => 'date',
        'age' => 'integer',
        'address_one' => 'string',
        'city' => 'string',
        'district' => 'string',
        'contact_no' => 'string'

    ];
}
