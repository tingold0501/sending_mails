<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractStatus extends Model
{
    use HasFactory;
    protected $table = 'contact_statues';
    protected $fillable = ['id','name'];

}
