<?php

namespace App\Http\Controllers;

use App\Signin;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        $user->roles()->attach(Role::where('name', 'user')->first());
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Signin  $Signin
     * @return \Illuminate\Http\Response
     */
    public function show(Signin $Signin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Signin  $Signin
     * @return \Illuminate\Http\Response
     */
    public function edit(Signin $Signin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Signin  $Signin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Signin $Signin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Signin  $Signin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signin $Signin)
    {
        //
    }
}
