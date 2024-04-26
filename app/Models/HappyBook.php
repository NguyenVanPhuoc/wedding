<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HappyBook extends Model
{
    use HasFactory;

    protected $table = 'happy_books';

    protected $fillable = [
        'name',
        'email',
        'content',
        'created_at',
        'updated_at'
    ];
}
