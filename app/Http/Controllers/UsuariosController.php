<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
                // Validar los datos de la solicitud
                // $validatedData = $request->validate([
                //     'nombre' => 'required|string|max:255',
                //     'usuario' => 'required|string|max:255|unique:usuarios',
                //     'email' => 'required|string|email|max:255|unique:usuarios',
                //     'password' => 'required|string|min:8',
                // ]);
        
                // // Encriptar la contraseña
                // $validatedData['password'] = Hash::make($validatedData['password']);
        
                // // Crear un nuevo usuario
                // $usuario = Usuario::create($validatedData);
        
                // return response()->json($usuario, 201);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuario)
    {
        // return view('alumnos.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuario)
    {
        // return view('alumnos.edit',compact('usuario'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
