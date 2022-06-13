<?php

namespace App\Http\Controllers;

use App\Models\subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias= subject::all();
        return view('materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia= new subject();
        return view('materias.crear', compact('materia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia=new subject();
        $materia->nombre=$request->nombree;
        $materia->version=$request->version;
        $materia->save();
        session()->flash("flash.banner","Estudiante creado de manera exitosa");
        return Redirect::route('materias.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(subject $materia)
    {
        return view('materias.ver', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(subject $materia)
    {
        return view('materias.editar',compact("materia"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subject $materia)
    {
        $materia->nombre=$request->nombree;
        $materia->version=$request->version;
        $materia->save();
        session()->flash("flash.banner","Materua actualizada de manera exitosa");
        return Redirect::route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject $materia)
    {
        $materia->delete();
        return back()->with("flash.banner","Materia eliminada correctamente");
        
    }
}
