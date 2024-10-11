<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $table = 'contracts';
    // protected $timestap = false;
    protected $fillable = ['id','email', 'first_name', 'last_name','active',',contract_statue_id','list_contract_id','user_id', 'created_at', 'updated_at'];
}
