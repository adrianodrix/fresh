<?php

namespace Fresh\Models;

use Fresh\User;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
