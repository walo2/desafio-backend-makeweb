<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'summary',
        'cover',
    ];

    public static function index()
    {
        return $films = Film::query()->orderBy('created_at', 'asc')->paginate(12);
    }
}
