<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;
use App\Models\Profesion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrayectoriaProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* $egresados = Profesion::all(); */
        /* return $users; */
        $egresados = DB::table('egresado')
            ->join('profesion', 'profesion.id_profesion', '=', 'egresado.id_profesion')
            ->select('egresado.matricula', 'profesion.empresa', 'profesion.actividad_empresa', 'profesion.actividad_empresa', 'profesion.puesto', 'profesion.nivel_experiencia', 'profesion.area_puesto', 'profesion.subarea', 'profesion.pais', 'profesion.fecha_inicio', 'profesion.fecha_finalizacion', 'profesion.descripcion_responsabilidades')
            ->where('matricula', Auth::user()->egresado_matricula)
            ->get();
        /* return $egresados; */
        return view('users.trayectoriaprofesional', compact('egresados'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
