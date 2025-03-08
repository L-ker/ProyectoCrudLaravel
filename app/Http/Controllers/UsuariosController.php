<?php

namespace App\Http\Controllers;
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
    public function update(Request $request, Usuarios $usuario)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:50',
            'usuario' => 'required|string|max:25|unique:usuarios,usuario,' . $usuario->id, 
            'email' => 'required|email|max:320|unique:usuarios,email,' . $usuario->id, 
            'password' => 'required|string|min:8', 
        ]);

        if ($validator->fails()) {
            return redirect()->route('usuarios.edit', $usuario->id)
                ->withErrors($validator)
                ->withInput();
        }

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
        session()->flash("mensaje","Alumno $usuario->nombre eliminado");
        return redirect()->route('usuarios.index');
    }
}
