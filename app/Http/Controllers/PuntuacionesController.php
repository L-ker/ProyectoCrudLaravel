<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePuntuacionRequest;
use App\Http\Requests\UpdatePuntuacionRequest;
use App\Models\Puntuaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class PuntuacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campos = Schema::getColumnListing('puntuaciones');
        $exclude =["created_at","updated_at"];
        $campos = array_diff($campos,$exclude);
        $filas = Puntuaciones::select($campos)->get();
        return view('puntuaciones.index',compact('filas',"campos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("puntuaciones.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePuntuacionRequest $request)
    {
        $puntuacion = new Puntuaciones($request->input());

        $puntuacion->save();
        session()->flash("mensaje","La puntuacion $puntuacion->id ha sido registrado");

        return redirect()->route('puntuaciones.index');    }

    /**
     * Display the specified resource.
     */
    public function show(Puntuaciones $puntuacion)
    {
        return view('puntuaciones.show',compact('puntuacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Puntuaciones $puntuacion)
    {
        return view('puntuaciones.edit',compact('puntuacion'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePuntuacionRequest $request, Puntuaciones $puntuacion)
    {
        $puntuacion->update($request->input());
        session()->flash("mensaje","La puntuacion $puntuacion->id ha sido actualizado");
        return redirect()->route('puntuaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puntuaciones $puntuacion)
    {
        $puntuacion->delete();
        session()->flash("mensaje","La puntuacion $puntuacion->id ha sido eliminada");
        return redirect()->route('puntuaciones.index');
    }
}
