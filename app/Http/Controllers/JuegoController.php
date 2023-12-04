<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
        public function index()
    {
        $juegos = Juego::all(); //eloquent
        return view('juego.index', ['juegos' => $juegos]);
    }
    
    public function create()
    {
        return view('juego.create');
    }

    public function store(Request $request)
    {        
        //1º generar el objeto
        $juego = new Juego($request->all());
        
        //2º 'intentar' guardar
        try {
            $result = $juego->save();
            //3º si lo he guardado volver a 'añgun sitio': index, create
            $afterInsert = session('afterInsert', 'show juegos');
            $target = 'juego';
            if ($afterInsert != 'show juegos') {
                $target = 'juego/create';
            }
            return redirect($target)->with(['message'=>'The juego has been saved']);
        } catch (\Exception $e) {
            //4º si no lo he  guardado volver a la pagina  anterior con sus datos para volver a rellenar el formulario
            return back()->withInput()->withErrors(['message' => 'The juego has not been saved']);
        }
    }

    public function show(Juego $juego)
    {
        return view('juego.show', ['juego' => $juego]);
        
    }

    public function edit(Juego $juego)
    {
        return view('juego.edit', ['juego'=>$juego]);
    }

    public function update(Request $request, Juego $juego)
    {
        try{
            $result = $juego->update($request->all());
            return redirect('juego')->with(['message'=>'The juego has been updated']);
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['message' => 'The juego has not been updated']);
        }
    }

    public function destroy(Juego $juego) {
        try {
            $juego->delete();
            return redirect('juego')->with(['message' => 'The juego has been deleted.']);
        } catch(\Exception $e) {
            return back()->withErrors(['message' => 'The juego has not been deleted.']);
        }
    }
}
