<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    use HasFactory;

    protected $table = 'email_templates';
    protected $fillble = [
        'id',
        'name',
        'content',
        'active',
        'body',
        'css_text',
        'variable_keys',
        'campaign_id',
        'created_at',
        'updated_at',
    ];
}
