<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;
use App\Models\Academico;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrayectoriaAcademicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $egresados = DB::table('egresado')
            ->join('academico', 'academico.id_academico', '=', 'egresado.id_academico')
            ->join('maestria', 'academico.id_academico', '=', 'maestria.id_academico')
            ->select('egresado.matricula', 'academico.carr_profesional', 'academico.id_academico','maestria.grado_academico', 'maestria.institución' )
            ->where('matricula', Auth::user()->egresado_matricula)
            ->get();
        /* return $egresados; */
        return view('users.trayectoriaacademica', compact('egresados'));
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
        $egresados = new Academico;
        $egresados->carr_profesional = $request->input('carr_profesional');
        $egresados->grado_academico = $request->input('grado_academico');
        $egresados->pais = $request->input('pais');
        $egresados->tipo_estudio = $request->input('tipo_estudio');
        $egresados->institución = $request->input('institución');
        $egresados->fecha_inicial = $request->input('fecha_inicial');
        $egresados->fecha_final = $request->input('fecha_final');
        $egresados->save();
        /* return $egresados; */
        return redirect()->route('trayectoria-academica.index');
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
