<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListM extends Model
{
    protected $table = 'lists';
    protected $fillable = ['id','name','created_at','updated_at'];
    use HasFactory;
}
