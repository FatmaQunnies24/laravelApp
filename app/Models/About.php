<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = '_about';
    protected $primaryKey = 'id';
    protected $fillable = ['phone', 'email','facebook',	'pinterest',	'linkedin',	'twitter'];
}
