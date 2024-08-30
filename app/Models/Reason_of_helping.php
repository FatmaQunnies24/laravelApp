<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reason_of_helping extends Model
{
    use HasFactory;
    protected $table = '_reason_of_helping';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'imgUrl'	,'desc'];
}
