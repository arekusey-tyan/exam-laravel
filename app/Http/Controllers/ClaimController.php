<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\User;
use Illuminate\Http\Request;

class ClaimController extends Controller
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
    public function create(Request $request)
    {
        $claim = new Claim();
        return view('claim.create', ['claim'=>$claim, 'instructionId'=>$request->instructionId]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $claim = new Claim();
        $request->validate(['description'=>'min:5']);
        $claim->description = $request->description;
        $user = User::query()->where('login', session('user'))->first();
        $claim->userId = $user->id;
        $claim->instructionId = $request->instructionId;
        $claim->save();
        return view('claim.store');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $claim = Claim::query()->where('id', $id)->first();
        if ($claim != null)
            $claim->delete();
        return back();
    }
}