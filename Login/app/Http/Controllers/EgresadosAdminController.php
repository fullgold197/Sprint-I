<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EgresadoCreateRequest;
use App\Models\Egresado;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Http\Requests\EgresadoEditRequest;
use PDF;

class EgresadosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if( $request->texto == "" ){
        $string = "empty";

    }
        else{
        $string = $request->texto;


        }
        $texto=$request->get('texto');
        //trae de la tabla egresa$egresados todo los campos
        $egresados=DB::table('egresado')
        ->select('matricula','ap_paterno','ap_materno','nombres','genero','fecha_nacimiento','telefono')
        ->where('ap_paterno','LIKE','%'.$texto.'%')
        ->orWhere('nombres', 'LIKE', '%'.$texto.'%')
        ->orWhere('matricula', 'LIKE', '%'.$texto.'%')
        ->orderBy('ap_paterno','asc')
        ->paginate(5);
        return view('admin.egresado.index',compact('egresados','texto'),[ 'valor' => $string ]);
    }
    public function TrayectoriaAcademicaindex(Request $request)
    {
        $egresados = new Egresado;
        $egresados->matricula = $request->input('matricula');
        $egresados->ap_paterno = $request->input('ap_paterno');
        $egresados->ap_materno = $request->input('ap_materno');
        $egresados->nombres = $request->input('nombres');
        $egresados->genero = $request->input('genero');
        $egresados->fecha_nacimiento = $request->input('fecha_nacimiento');
        $egresados->telefono = $request->input('telefono');
        $egresados->id_academico = $request->input('telefono');
        $egresados->save();
        /* return $egresados; */
        return redirect()->route('egresado.index');
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
    public function store(EgresadoCreateRequest $request)
    {
        //

        $egresados=new Egresado;
        $egresados->matricula=$request->input('matricula');
        $egresados->ap_paterno=$request->input('ap_paterno');
        $egresados->ap_materno = $request->input('ap_materno');
        $egresados->nombres = $request->input('nombres');
        $egresados->genero = $request->input('genero');
        $egresados->fecha_nacimiento = $request->input('fecha_nacimiento');
        $egresados->telefono = $request->input('telefono');
        $egresados->id_academico = $request->input('telefono');
        $egresados->save();
        /* return $egresados; */
        return redirect()->route('egresado.index');
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
        //

       /*  $egresados=Egresado::findOrFail($matricula);

        //return $egresados;
        return view('admin.egresado.edit',compact('egresados')); 
        //No se utiliza este metodo, en admin.egresado.index se @include('admin.egresado.edit') y esta vista envia los datos a egresado.update
        */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EgresadoEditRequest $request,$matricula)
    {
        //
        /* $data=$request->validate([
            'matricula' => ['required',Rule::unique('egresado')->ignore($user->id), 'matricula']
        ]); */
        $egresados=Egresado::findOrFail($matricula);
        $egresados->matricula=$request->input('matricula');
        $egresados->ap_paterno=$request->input('ap_paterno');
        $egresados->ap_materno = $request->input('ap_materno');
        $egresados->nombres = $request->input('nombres');
        $egresados->genero = $request->input('genero');
        $egresados->fecha_nacimiento = $request->input('fecha_nacimiento');
        $egresados->telefono = $request->input('telefono');
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
    public function destroy($matricula)
    {
        //
        $egresados = Egresado::findOrFail($matricula);
        $egresados->delete();
        return redirect()->route('egresado.index');
    }
    //funcion para exportar datos a formato PDF esta ubicado ahora en ReporteAdminController

}
