<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores= Profesor::all();
       // dd($profesores);
        //\Laravel\Prompts\info("Profesores",$profesores);
        return view("profesores.listado", compact("profesores"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("profesores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {
        $datos = $request->input();
        $profesor = new Profesor($datos);
        $profesor->save();
        \Laravel\Prompts\info("Profesor: ".$profesor);
        return redirect(route("profesores.index"));
       /* $profesor=Profesor::all();
        return view("profesores.listado",["profesores"=>$profesor]);*/
        //helper funcion laravel

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $profesor = Profesor::find($id);
        return view("profesores.edit",["profesor"=>$profesor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, int $id)
    {
        $profesor = Profesor::find($id);
        $profesor->update($request->input());
        $profesores = Profesor::all();
        return view("profesores.listado",compact("profesores"));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $profesor= Profesor::find($id);

        //borrar elementos
        \Laravel\Prompts\info("Profesor a borrar: ".$profesor);
        $profesor->delete();
        $profesores = Profesor::all();
        return view("profesores.listado", compact("profesores"));
    }
}
