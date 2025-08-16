<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail',];

    public static $rules = array(
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => '',
        'email' => '',
        'tel' => 'integer',
        'address' => '',
        'building' => '',
        'detail' => '',
    );
}
