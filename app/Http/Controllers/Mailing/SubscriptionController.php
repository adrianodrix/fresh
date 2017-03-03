<?php

namespace Fresh\Http\Controllers\Mailing;

use Fresh\Models\Token;
use Illuminate\Http\Request;
use Fresh\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function unsubscribe(Token $token)
    {
        dd($token->user);
    }
}
