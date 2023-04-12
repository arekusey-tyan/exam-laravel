<?php

namespace App\Http\Controllers;

use App\Models\Instruction;
use App\Models\Claim;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (session('user') != 'admin')
            return redirect()->action("\App\Http\Controllers\InstructionController@index");
        $users = User::all();
        $instructions = Instruction::all();
        $claims = Claim::all();
        return view('admin.admin', ['users'=>$users, 'instructions'=>$instructions, 'claims'=>$claims]);
    }
}