<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produca extends Model
{
    use HasFactory;
    protected $table = 'produca';
    protected $fillable = ['id','ten','anh','gia'];
    public $timestamps=false;
}
