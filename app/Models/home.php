<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;
    const ACTIVE_STATUS = '1';
    const INACTIVE_STATUS = '0';
    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
    ];
}
