<?php
/**
 * Created by PhpStorm.
 * User: silviobarretto
 * Date: 11/03/16
 * Time: 08:17
 */

namespace CarreiraEad\OAuth;


use Illuminate\Support\Facades\Auth;

class Verifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email' => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}