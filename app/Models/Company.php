<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'email',
        'phone',
        'website',
        'gst_number',
        'roc_number',
        'currency',
        'timezone',
        'status',
    ];
}