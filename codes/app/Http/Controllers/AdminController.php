<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role'=> 'required',
        ]);
        
        $equipe = User::create([
            'name' =>$validatedData['name'] ,
            'email' => $validatedData['email'] ,
            'password' => bcrypt($validatedData['password']),
            'role' => $validatedData['role'] ,
        ]);
        return($equipe);
    }
    public function edit($id){
        return User::find($id);
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update([
            'name' =>$request['name'] ,
            'email' => $request['email'] ,
            'password' => bcrypt($request['password']),
            'role' => $request['role'] ,
        ]);
        return $user;
    }
    public function destroy($id){
        User::destroy($id);
        return ("deleted succefly");
    }
}
