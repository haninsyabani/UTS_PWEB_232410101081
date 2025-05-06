<?php

namespace App\Models;

class Data
{
    public static function allUsers()
    {
        return [
            [
                'username' => 'Hanun',
                'password' => '10'
            ],
        ];
    }

    public static function checkCredentials($username, $password)
    {
        foreach (self::allUsers() as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }
        return false;
    }
}

