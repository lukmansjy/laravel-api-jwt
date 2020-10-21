<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterRequest $request)
    {
        
        User::create([
            'name' => request('name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password')
        ]);

        $response = ['message' => 'success'];

        return response($response);
    }
}
