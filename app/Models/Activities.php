<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;
    protected $table = '_activities';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'videoUrl','desc'];
}
