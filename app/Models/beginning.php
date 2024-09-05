<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beginning extends Model
{
    use HasFactory;
    protected $table = '_beginning';
    protected $primaryKey = 'id';
    protected $fillable = ['p1', 'p2',	'p3'];
}
