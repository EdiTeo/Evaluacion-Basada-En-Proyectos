<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showEstudiantes()
    {
        // Obtener el docente autenticado
         $docente = Auth::user()->docente;

        if (!$docente) {
            return redirect()->back()->with('error', 'No eres un docente.');
        }

        // Obtener los estudiantes asignados a este docente
        $estudiantes = $docente->estudiantes()->with('user')->get(); // Traemos los estudiantes con su relación a 'user'

        // Retornar la vista con los estudiantes
        return view('docente.estudiantes', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
