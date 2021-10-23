<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationRequest;
use App\Http\Traits\Registerable;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    use Registerable;

    public function __invoke(UserRegistrationRequest $request)
    {
        return response()->json([
            'data'=> $this->register($request->validated())
        ],201);
    }
}
