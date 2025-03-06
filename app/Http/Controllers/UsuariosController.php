<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

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
    public function store(Request $request)
    {
        // $datos = $request->only("nombre","email","f_nac","dni");
        // $alumno = new Alumno($datos);
        // $alumno->save();

        // if ($request->has("idiomas")){
        //     foreach ($request->idiomas as $idioma_hablado){
        //         $idioma = new Idioma();
        //         $idioma->alumno_id= $alumno->id;
        //         $idioma->idioma = $idioma_hablado;
        //         $idioma->nivel = $request->nivel[$idioma_hablado];
        //         $idioma->titulo = $request->titulo[$idioma_hablado];
        //         $idioma->save();
        //     }
        // }

        // $alumno->save();
        // session()->flash("mensaje","Alumno $alumno->nombre registrado");

        // return redirect()->route('alumnos.index');
        // //
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
    public function update(Request $request, string $id)
    {
        // $alumno->update($request->input());
        // session()->flash("mensaje","Alumno $alumno->nombre actualizado");
        // return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuario)
    {
        $usuario->delete();
        session()->flash("mensaje","Alumno $usuario->nombre eliminado");
        return redirect()->route('usuarios.index');
    }
}
