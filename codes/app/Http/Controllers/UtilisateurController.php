<?php

namespace App\Http\Controllers;

use App\Models\Ressource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class UtilisateurController extends Controller
{
    use AuthenticatesUsers;
    public function store(Request $request){
     
        $validatedData = $request->validate([
        
            'probleme' => 'required',
            'localisation' => 'required',
            'users_id' => 'required',
            'types_id' => 'required',
        ]);

        $ressource = Ressource::create([
            'probleme' => $validatedData['probleme'],
            'localisation' => $validatedData['localisation'],
            'users_id' => $validatedData['users_id'],
            'types_id' => $validatedData['types_id'],
        ]);
        return ($ressource);
    }
   
        
 

    };
       
          
    
        
        
  