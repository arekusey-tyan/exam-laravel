<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
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
    public function create()
    {
        $user = new User();
        return view('user/create', ['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['login'=>'required']);
        $request->validate(['login'=>'min:5']);
        $request->validate(['password'=>'required']);
        $request->validate(['password'=>'min:8']);
        $request->validate(['confirmPassword'=>'required']);
        $request->validate(['confirmPassword'=>'min:8']);
        $user = User::query()->where('login', $request->login)->first();
        if ($user != null)
            return view('user/error', ['message'=>'Пользователь с таким логином уже зарегестрирован!']);
        $user = new User();
        $user->login = $request->login;
        $user->password = $request->password;
        if ($user->password != $request->confirmPassword)
            return view('user/error', ['message'=>'Пароли не совпадают!']);
        $user->save();
        session(['user'=>$user->login]);
        return redirect()->action("\App\Http\Controllers\InstructionController@index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::query()->where('id', $id)->first();
        $user->locked = $request->locked;
        $user->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::query()->where('id', $id)->first();
        if ($user != null)
            $user->delete();
        return back();
    }

    public function login()
    {
        $user = new User();
        return view('user/login', ['user'=>$user]);
    }

    public function logout()
    {
        session(['user'=>null]);
        return redirect()->action("\App\Http\Controllers\InstructionController@index");
    }

    public function loginHandler(Request $request)
    {
        $user = User::query()->where('login', $request->login)->first();

        $request->validate(['login'=>'required']);
        $request->validate(['password'=>'required']);

        if ($user != null)
        {
            if ($request->password != $user->password)
            {
                return view('user/error', ['message'=>'Не верный пароль!']);
            }
            else
            {
                if ($user->locked == false)
                {
                    session(['user'=>$user->login]);
                    return redirect()->action("\App\Http\Controllers\InstructionController@index");
                }
                else
                    return view('user/error', ['message'=>'Ваш аккаунт заблокирован!']);
            }
        }
        return view('user/error', ['message'=>'Пользователя с таким логином не зарегестрированно!']);
    }
}