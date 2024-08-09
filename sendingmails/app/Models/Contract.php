<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $table = 'contracts';
    protected $fillable = ['email', 'first_name', 'last_name', 'created_at', 'updated_at'];
}
