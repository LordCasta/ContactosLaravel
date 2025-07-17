<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['name', 'phone_number', 'note', 'user_id'];

}
