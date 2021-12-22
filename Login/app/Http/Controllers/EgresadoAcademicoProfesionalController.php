<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EgresadoAcademicoProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $egresado=Egresado::findOrFail($request->input('matricula_id'));
/*         $egresados = Egresado::select('matricula', 'ap_paterno', 'ap_materno', 'nombres', 'grado_academico', 'dni', 'genero', 'fecha_nacimiento', 'semestre_ingreso', 'semestre_egreso', 'celular', 'pais_origen', 'departamento_origen', 'pais_residencia', 'ciudad_residencia', 'lugar_residencia', 'linkedin')->where('matricula', 2016200241)->get();
 */
        /* $egresados = DB::table('academico')
        ->join('egresado', 'academico.id_academico', '=', 'egresado.id_academico')
        ->join('doctorado', 'academico.id_academico', '=', 'doctorado.id_academico')
        ->select('egresado.matricula', 'academico.carr_profesional', 'academico.id_academico', 'doctorado.id_doctorado', 'doctorado.id_academico', 'doctorado.grado_academico as doctorado_grado_academico', 'doctorado.pais as doctorado_pais', 'doctorado.institución as doctorado_institución', 'doctorado.fecha_inicial as doctorado_fecha_inicial', 'doctorado.fecha_final as doctorado_fecha_final')
        ->where('egresado.matricula', $egresados)
            ->get();
 */
        /* $egresados2 = DB::table('academico')
        ->join('egresado', 'academico.id_academico', '=', 'egresado.id_academico')
        ->join('maestria', 'academico.id_academico', '=', 'maestria.id_academico')
        ->select('egresado.matricula', 'academico.carr_profesional', 'academico.id_academico', 'maestria.id_maestria', 'maestria.id_academico', 'maestria.grado_academico as maestria_grado_academico', 'maestria.pais as maestria_pais', 'maestria.institución as maestria_institución', 'maestria.fecha_inicial as maestria_fecha_inicial', 'maestria.fecha_final as maestria_fecha_final')
        ->where('matricula', 2016200241)
            ->get(); */

        /* return $egresados2; */
        return view('admin.egresado.academico_profesional',compact('egresado'));

/* return $egresado; devuelve un arreglo(findOrfail) pero no de objetos asi que no necesita ser iterado en un forearch
 */}

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
    public function edit($matricula)
    {
        /* $egresados = Egresado::findOrFail($matricula);
        //return $cliente;
        return view('c.edit', compact('egresados')); */
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
