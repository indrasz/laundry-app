<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Laundry extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'phoneNumber',
        'clothes',
        'weight',
        'message',
        'category',
        'price'
    ];
}
