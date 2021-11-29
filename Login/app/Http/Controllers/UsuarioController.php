<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;
use App\Http\Requests\EgresadoEditRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->texto == "") {
            $string = "empty";
        } else {
            $string = $request->texto;
        }
        $texto = $request->get('texto');
        //trae de la tabla $egresados todo los campos
        $usuarios = DB::table('users')
        ->select('id','name', 'email', 'role_as')
        ->where('name', 'LIKE', '%' . $texto . '%')
        ->orWhere('email', 'LIKE', '%' . $texto . '%')
        ->orWhere('role_as', 'LIKE', '%' . $texto . '%')
        ->orderBy('name', 'asc')
        ->paginate(5);
        return view('admin.usuarios.index', compact('usuarios', 'texto'), ['valor' => $string]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $egresados = new Egresado;
        $egresados->matricula = $request->input('matricula');
        $egresados->ap_paterno = $request->input('ap_paterno');
        $egresados->ap_materno = $request->input('ap_materno');
        $egresados->nombres = $request->input('nombres');
        $egresados->genero = $request->input('genero');
        $egresados->fecha_nacimiento = $request->input('fecha_nacimiento');
        $egresados->telefono = $request->input('telefono');
        $egresados->save();
        return redirect()->route('egresado.index'); */
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
        $usuarios = User::findOrFail($id);

        //return $egresados;
        return view('admin.usuarios.editar', compact('usuarios'));
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
        $usuarios = User::findOrFail($id);
        $usuarios->name = $request->input('name');
        $usuarios->email = $request->input('email');
        $usuarios->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = User::findOrFail($id);
        $usuarios->delete();
        return redirect()->route('usuario.index');
    }
}
