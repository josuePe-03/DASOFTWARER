<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailSetting extends Model
{
    protected $fillable = [
        'mailer', 'from_address', 'from_name', 
        'host', 'port', 'encryption', 
        'username', 'password', 'api_key'
    ];
}
