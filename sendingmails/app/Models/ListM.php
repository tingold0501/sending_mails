<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListM extends Model
{
    protected $table = 'list_contracts';
    protected $fillable = ['id','name','contract_id','created_at','updated_at'];
    use HasFactory;
}
