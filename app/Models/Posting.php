<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'foto', 'text']; // Kolom yang bisa diisi
}
