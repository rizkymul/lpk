<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{
    protected $table = 'content';
    protected $fillable = ['content1', 'content2', 'content3'];
    public $timestamps = false;
}
