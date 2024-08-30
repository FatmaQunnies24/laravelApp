<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = '_comment';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'username',	'blog_id',	'date',	'disc'];
}
