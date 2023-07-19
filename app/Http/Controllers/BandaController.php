<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banda;

class BandaController extends Controller
{
    public function index () {
        $banda = Banda::orderBy('id','desc')->paginate(); //paginate()me envia a vista solo una parte de los registros
        return view('banda.index', compact('banda'));
    }
    public function create (){
        return  view('banda.create'); 
    }
    public function store (Request $request) {
        $banda = new Banda();
        $banda->name = $request->name;
        $banda->categoria = $request->descripcion;
        $banda->descripcion = $request->categoria;
        $banda->save();
        return redirect()->route('banda.show',$banda);
    }
    //mando variable a la vista (var rescatada de url la paso por esta funcion)
    public function show (Banda $banda){
        return  view('banda.show',compact('banda'));
   
    }

    public function edit(Banda $banda){
        return view('banda.edit', compact('banda'));
    }
    public function update(Request $request,Banda $banda){
        $banda->name = $request->name;
        $banda->categoria = $request->descripcion;
        $banda->descripcion = $request->categoria; 
        $banda->save();
        return redirect()->route('banda.show',$banda);

    }
}
