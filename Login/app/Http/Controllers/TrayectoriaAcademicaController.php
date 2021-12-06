<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;
use App\Models\Academico;
use App\Models\Doctorado;
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
        $egresados1 = DB::table('academico')
            ->join('egresado', 'academico.id_academico', '=', 'egresado.id_academico')
            ->join('doctorado', 'academico.id_academico', '=', 'doctorado.id_academico')
            ->select('egresado.matricula', 'academico.carr_profesional', 'academico.id_academico', 'doctorado.id_doctorado', 'doctorado.id_academico', 'doctorado.grado_academico as doctorado_grado_academico', 'doctorado.pais as doctorado_pais', 'doctorado.institución as doctorado_institución', 'doctorado.fecha_inicial as doctorado_fecha_inicial', 'doctorado.fecha_final as doctorado_fecha_final')
            ->where('matricula', Auth::user()->egresado_matricula)
            ->get();
        $egresados= DB::table('academico')
            ->join('egresado', 'academico.id_academico', '=', 'egresado.id_academico')
            ->join('maestria', 'academico.id_academico', '=', 'maestria.id_academico')
            /* ->select('egresado.matricula', 'academico.carr_profesional', 'academico.id_academico','maestria.id_maestria','maestria.id_academico','maestria.grado_academico', 'maestria.pais','maestria.institución', 'maestria.fecha_inicial','maestria.fecha_final', 'doctorado.id_doctorado', 'doctorado.grado_academico as doctorado_grado_academico', 'doctorado.pais as doctorado_pais', 'doctorado.institución as doctorado_institución', 'doctorado.fecha_inicial as doctorado_fecha_inicial', 'doctorado.fecha_final as doctorado_fecha_final') */
            ->select('egresado.matricula', 'academico.carr_profesional', 'academico.id_academico', 'maestria.id_maestria', 'maestria.id_academico', 'maestria.grado_academico as maestria_grado_academico', 'maestria.pais as maestria_pais', 'maestria.institución as maestria_institución', 'maestria.fecha_inicial as maestria_fecha_inicial', 'maestria.fecha_final as maestria_fecha_final')
            ->where('matricula', Auth::user()->egresado_matricula)
            ->get();
        /* return $egresados; */
        return view('users.trayectoriaacademica', compact('egresados','egresados1'));
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
        $prueba = $request->input('grado_academico');
        if ($prueba == 'Maestro') {
            $egresados = new Maestria();
            $egresados->grado_academico = $request->input('grado_academico');
            $egresados->pais = $request->input('pais');
            $egresados->institución = $request->input('institución');
            $egresados->fecha_inicial = $request->input('fecha_inicial');
            $egresados->fecha_final = $request->input('fecha_final');
            $egresados->id_academico = $request->input('id_academico');
            $egresados->save();
            /* return $egresados; */
            return redirect()->route('trayectoria-academica.index');
        } else {
            if ($prueba == 'Doctor') {
                $egresados = new Doctorado();
                $egresados->grado_academico = $request->input('grado_academico');
                $egresados->pais = $request->input('pais');
                $egresados->institución = $request->input('institución');
                $egresados->fecha_inicial = $request->input('fecha_inicial');
                $egresados->fecha_final = $request->input('fecha_final');
                $egresados->id_academico = $request->input('id_academico');
                $egresados->save();
                /* return $egresados; */
                return redirect()->route('trayectoria-academica.index');
            }
        }
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
