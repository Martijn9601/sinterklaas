<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lijst extends Model
{
        protected $fillable = [
    	'user_id', 'ticket_id', 'title', 'message',
    ];
}
