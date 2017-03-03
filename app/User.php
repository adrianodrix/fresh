<?php

namespace Fresh;

use Fresh\Models\PhoneNumber;
use Fresh\Models\Token;
use Fresh\Models\Topic;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function phoneNumber()
    {
        return $this->hasOne(PhoneNumber::class);
    }

    public function token()
    {
        return $this->hasOne(Token::class);
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
