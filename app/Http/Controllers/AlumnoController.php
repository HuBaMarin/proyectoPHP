<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdatealumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos= Alumno::all();
        return view("alumnos.listado", compact("alumnos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("alumnos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        //
        $datos = $request->input();
        $alumno = new Alumno($datos);
        info ("AlumnoController store -$alumno-");
        $alumno->save();
        info("Alumno: ".$alumno);
        session()->flash("info","se ha creado correctamente");
        return redirect(route("alumnos.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $alumno = Alumno::find($id);
        return view("alumnos.edit",compact("alumno"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatealumnoRequest $request, int $id)
    {
        $alumno = Alumno::find($id);
        $alumno->update($request->input());
        $alumnos = Alumno::all();
        session()->flash("info","se ha actualizado correctamente!");
        return view("alumnos.listado",compact("alumnos"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $alumno= Alumno::find($id);

        //borrar elementos
        info("Alumno a borrar: ".$alumno);
        $alumno->delete();
        session()->flash("info","se ha borrado correctamente!");
        $alumnos = Alumno::all();
        return view("alumnos.listado", compact("alumnos"));
    }
}
