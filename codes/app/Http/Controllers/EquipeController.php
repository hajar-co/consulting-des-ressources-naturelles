<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualitie;

class EquipeController extends Controller
{
    public function index(){
        return Actualitie::all();
    }
    public function store(Request $request){
        // ==> juste pour tester  return Actualitie::create([
        //     'image'=>"jhjhkhj",
        //     'title'=>"cop 22",
        //     'content'=>"nknknklnkln",
        //     'date'=>"2010-09-11",
        //     'Equipes_id'=>"1"
        // ]);
        $request -> validate([
            'image' => 'required',
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
        ]);
        return Actualitie::create($request->all());
    }
    public function showById($id){
        return Actualitie::find($id);
    }
    public function edit($id){
        return Actualitie::find($id);
    }
    public function update(Request $request, $id){
        $actualitie = Actualitie::find($id);
        $actualitie->update($request->all());
        return $actualitie;
    }
    public function destroy($id){
        return Actualitie::destroy($id);
    }
}
