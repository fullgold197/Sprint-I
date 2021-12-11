<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Egresado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DatosPersonalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $egresados = Egresado::select('matricula','ap_paterno','ap_materno','nombres', 'genero', 'fecha_nacimiento', 'telefono','Provincia','Distrito','url')->where('matricula', Auth::user()->egresado_matricula)->get();
        /* return $users; */
        return view('users.datospersonales', compact('egresados'));
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
    public function update(Request $request, $matricula)
    {
        $request->validate(
            [
                'file' => 'image|max:2048'
            ]
        );
/*         return $request->all();*/
/*          return $request->file('file')->store('public/imagenes'); //ahora devuelve una url public/imagenes/da$%1¿.png , pero queremos cambiar el nombre public por storage(storage/imagenes/da$%1¿.png) con el Facade Storage */

$imagenes='';
    if ($request->hasFile('file')){
    $imagenes=$request->file('file')->store('public/imagenes');
}
$url=Storage::url($imagenes); //ahora si podemos almacenar esta url en nuestra BD
/*    $img=new Egresado();
   $img->url=$url;
   $img->save(); */
    /*   $egresados=Egresado::create(
       [
           'url' =>$url
       ]
       ); */

        $egresados = Egresado::findOrFail($matricula);
        $egresados->ap_paterno = $request->input('ap_paterno');
        $egresados->ap_materno = $request->input('ap_materno');
        $egresados->nombres = $request->input('nombres');
        $egresados->genero = $request->input('genero');
        $egresados->fecha_nacimiento = $request->input('fecha_nacimiento');
        $egresados->fecha_nacimiento = $request->input('fecha_nacimiento');
        $egresados->Provincia = $request->input('Provincia');
        $egresados->Distrito = $request->input('Distrito');
        $egresados->url=$url;

        $egresados->save();
        /* return $egresados; */
        return redirect()->route('datos-personales.index');
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
