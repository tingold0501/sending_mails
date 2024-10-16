<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $table = 'campaigns';
    protected $fillable = ['sendto','from_name', 'from_email', 'subject', 'text','active' ,'user_id','created_at', 'updated_at'];
}
