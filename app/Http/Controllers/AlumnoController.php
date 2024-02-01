<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorealumnoRequest;
use App\Http\Requests\UpdatealumnoRequest;
use App\Models\alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumno= alumno::all();
        return view("alumnos.listado", compact("alumno"));
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
    public function store(StorealumnoRequest $request)
    {
        //
        $datos = $request->input();
        $alumno = new alumno($datos);
        $alumno->save();
        \Laravel\Prompts\info("Alumno: ".$alumno);
        return redirect(route("alumnos.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatealumnoRequest $request, alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alumno $alumno)
    {
        //
    }
}
