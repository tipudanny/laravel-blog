<?php

namespace App\Http\Traits;
use App\Models\User;
use Illuminate\Http\Request;

Trait Registerable
{
    public function register(array $data){
        return User::create($data);
    }
}
