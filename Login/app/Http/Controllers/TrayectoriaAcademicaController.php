<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;
use App\Models\Academico;
use App\Models\Maestria;
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
            ->join('doctorado', 'academico.id_academico', '=', 'doctorado.id_academico')
            ->select('egresado.matricula', 'academico.carr_profesional', 'academico.id_academico','maestria.id_academico','maestria.grado_academico', 'maestria.pais','maestria.institución', 'maestria.fecha_inicial','maestria.fecha_final', 'doctorado.grado_academico as doctorado_grado_academico', 'doctorado.pais as doctorado_pais', 'doctorado.institución as doctorado_institución', 'doctorado.fecha_inicial as doctorado_fecha_inicial', 'doctorado.fecha_final as doctorado_fecha_final' )
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
    public function edit($id_academico)
    {
        $egresados = Maestria::findOrFail($id_academico);

        return $egresados;
        /* return view('users.modalEgresados.academico_edit', compact('egresados')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_academico)
    {
        $egresados = Maestria::findOrFail($id_academico);
        $egresados->matricula = $request->input('grado_academico');
        /* $egresados->ap_paterno = $request->input('ap_paterno');
        $egresados->ap_materno = $request->input('ap_materno');
        $egresados->nombres = $request->input('nombres');
        $egresados->genero = $request->input('genero');
        $egresados->fecha_nacimiento = $request->input('fecha_nacimiento');
        $egresados->telefono = $request->input('telefono'); */
        $egresados->save();
        /* return $egresados; */
        return redirect()->route('egresado.index');
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
