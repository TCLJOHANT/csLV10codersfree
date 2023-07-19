<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banda;
use App\Http\Requests\StoreBanda; //request
class BandaController extends Controller
{
    public function index () {
        $banda = Banda::orderBy('id','desc')->paginate(); //paginate()me envia a vista solo una parte de los registros
        return view('banda.index', compact('banda'));
    }

    public function create (){
        return view('banda.create');
    }
    public function store (StoreBanda $request) {
        $banda =Banda::create($request->all()); //agarra todod los  datos de form y los guarda en base de datos pero ahi un problem de seguridad que se debe cooregir en el modelo
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
          //valida formulario (si falta algo reenvia de nuevo a pagina de formulario)
          $request->validate([
            'name'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required'

        ]);
        $banda->update($request->all());
        return redirect()->route('banda.show',$banda);

    }
    public function destroy(Banda $banda){
        $banda->delete();
        return redirect()->route('banda.index');
    }
}
