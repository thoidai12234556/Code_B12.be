<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FakeBook extends Model
{
    use HasFactory;

    protected $table = 'fake_books';

    protected $fillable = [
        'id_user',
        'content_stt',
        'image',
    ];
}
