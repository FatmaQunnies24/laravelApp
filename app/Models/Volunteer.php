<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $table = '_volunteer';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'info',	'imgUrl',	'facebook',	'pinterest',	'linkedin',	'twitter'];
}
