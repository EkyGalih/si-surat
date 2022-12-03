<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;

class Helpers extends Facade
{
    public static function Role()
    {
        $role = User::where('id', '=', Auth::user()->id)->first();

        if ($role)
        return $role->jenis_user;
    }
}