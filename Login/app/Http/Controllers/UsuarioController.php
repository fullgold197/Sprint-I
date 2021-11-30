<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;
use App\Http\Requests\EgresadoEditRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        ->join('egresado','users.egresado_matricula','=','egresado.matricula')
        ->select('users.id', 'users.name', 'users.email', 'users.role_as', 'users.password','egresado.ap_paterno','egresado.ap_materno','egresado.nombres', 'egresado.matricula')
        ->where('name', 'LIKE', '%' . $texto . '%')
        ->orWhere('email', 'LIKE', '%' . $texto . '%')
        ->orWhere('role_as', 'LIKE', '%' . $texto . '%')
        ->orderBy('name', 'asc')
        ->paginate(5);
        /* return $usuarios; */
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
        $usuarios = new User;
        $usuarios->name = $request->input('name');
        $usuarios->email = $request->input('email');
        $usuarios->password = Hash::make($request->input('password'));
        $usuarios->egresado_matricula = $request->input('egresado_matricula');
        /* $usuarios->role_as = $request->input('role_as'); */
        $usuarios->save();
        return redirect()->route('usuario.index');
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
        /* $usuarios = User::findOrFail($id);
        $usuarios->name = $request->input('name');
        $usuarios->email = $request->input('email');
        $usuarios->password = Hash::make($request->input('password'));
        $usuarios->egresado_matricula = $request->input('egresado_matricula');
        $usuarios->save();
        return redirect()->route('usuario.index'); */
        $usuarios = User::findOrFail($id);
        $data = $request->only('name','email');
        
        if (trim($request->password) == '') {
            $data = $request->except('password');
        } else {
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
        }
        $usuarios->update($data);
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
