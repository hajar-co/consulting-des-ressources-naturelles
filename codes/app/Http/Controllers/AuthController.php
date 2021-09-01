<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class AuthController extends Controller
{
    
    use AuthenticatesUsers;
   
    public function signUp(Request $request)
    {  
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
        
        $utilisateur = User::create([
            'name' =>$validatedData['name'] ,
            'email' => $validatedData['email'] ,
            'password' => bcrypt($validatedData['password']),
            'role' => $request['role'],
        ]);

        $token = $utilisateur->createToken('mytoken')->plainTextToken;
        $response = [
            'utilisateur' => $utilisateur,
            'token' =>  $token 
        ];
        return response($response, 201);

        // return redirect("dashboard")->withSuccess('You have signed-in');
        // return redirect()->route('dashClient');
    }
   
    public function loginUser(Request $request)
    {
        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        
        // check email
        // $utilisateur = User::where('email',  $validatedData['email'])->first();

        // check password

        if(Auth::attempt($request->only('email', 'password'))){
            $user= Auth::user();
            if( $user->role == "3"){

             $token = $user->createToken('mytoken')->plainTextToken;
                 $response = [
                'utilisateur' => $user,
                'token' =>  $token 
        ];
        return response($response, 201);
                
        } if($user->role == "2"){
            $token = $user->createToken ('mytoken')->plainTextToken;
                 $response = [
                'utilisateur' => $user,
                'token' =>  $token 
                  ];
        return response($response, 201);
        }elseif($user->role == "1"){
            $token = $user->createToken ('mytoken')->plainTextToken;
                 $response = [
                'utilisateur' => $user,
                'token' =>  $token 
        ];
        return response($response, 201);
        };
       

        // if(Auth::attempt($request->only('email', 'password'))){
       
        
        // $token = $utilisateur->createToken('mytoken')->plainTextToken;
        // $response = [
        //     'utilisateur' => $utilisateur,
        //     'token' =>  $token 
        // ];
        // return response($response, 201);
        
        // if(!Auth::attempt($request->only('email', 'password'))){
        //     return back()->width('status', 'invalid login details');
        // };
        // return redirect()->route('dashClient');


       
    }else{
        return('no allowed');
    }}

  
    
    public function logout(Request $request) {
        
        $request->user()->currentAccessToken()->delete();
        return[
            'message' => 'Logged out'
        ];
    //     return Redirect('login');
    // }
}
}
