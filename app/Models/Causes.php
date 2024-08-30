<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Causes extends Model
{
    use HasFactory;
    protected $table = '_causes';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'raised',	'goal',	'pre',	'imgUrl',	'smallDisc',	'desc'];
}
