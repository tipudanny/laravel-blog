<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationRequest;
use App\Http\Traits\Registerable;
use App\Models\User;
use App\Services\Payment\Facade\Payment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use Registerable;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome', [
            'users' => User::with('posts.user')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UserRegistrationRequest $request)
    {
        $user = $this->register($request->validated());
        return response()->json(['data' => $user], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function payment($id, \App\Services\Payment\Payment $payment)
    {
        //$payment = new Payment(['name' => 'john doe']);

       Payment::setAmount(1000);
       /* $payment->setAmount(1000);

        $payment->setUser(User::find($id));

        $payment->pay(500);*/
    }
}
