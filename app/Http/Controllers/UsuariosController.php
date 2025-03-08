<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campos = Schema::getColumnListing('usuarios');
        $exclude =["created_at","updated_at"];
        $campos = array_diff($campos,$exclude);
        $filas = Usuarios::select($campos)->get();
        return view('usuarios.index',compact('filas',"campos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("usuarios.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {

        $request->merge([
            'password' => Crypt::encryptString($request->password) 
        ]);

        $usuario = new Usuarios($request->input());

        $usuario->save();
        session()->flash("mensaje","El usuario $usuario->nombre ha sido registrado");

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuario)
    {
        return view('usuarios.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuario)
    {
        return view('usuarios.edit',compact('usuario'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuarios $usuario)
    {
        $request->merge([
            'password' => Crypt::encryptString($request->password) 
        ]);

        $usuario->update($request->input());
        session()->flash("mensaje","El usuario $usuario->nombre ha sido actualizado");
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuario)
    {
        $usuario->delete();
        session()->flash("mensaje","EL usuario $usuario->nombre ha sido eliminado");
        return redirect()->route('usuarios.index');
    }
}
