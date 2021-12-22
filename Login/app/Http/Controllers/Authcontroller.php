<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctorado;
use App\Models\Maestria;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Egresado;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DatosPersonalesController;

class Authcontroller extends Controller
{
    public function datospersonales(Request $data){
        $data = Egresado::select('matricula','ap_paterno','ap_materno','nombres', 'genero', 'fecha_nacimiento', 'celular', 'dni','url')->where('matricula', Auth::user()->egresado_matricula)->get();
        return $data;
    }

    public function updatedp(Request $request, $matricula)
    {
        $egresados = Egresado::findOrFail($matricula);

        $egresados->ap_paterno = $request->input('ap_paterno');
        $egresados->ap_materno = $request->input('ap_materno');
        $egresados->nombres = $request->input('nombres');
        $egresados->genero = $request->input('genero');
        $egresados->fecha_nacimiento = $request->input('fecha_nacimiento');
        $egresados->fecha_nacimiento = $request->input('fecha_nacimiento');
        //$egresados->url=$url;
        
        $egresados->save();
        //return $url;
        return $egresados;
    }


    public function trayectoriaaca(Request $request)
    {
        $egresados0= DB::table('egresado')
        ->select('grado_academico', 'semestre_ingreso', 'semestre_egreso')
        ->where('matricula', Auth::user()->egresado_matricula)
        ->get();

        $egresados1 = DB::table('academico')
            ->join('egresado', 'academico.id_academico', '=', 'egresado.id_academico')
            ->join('doctorado', 'academico.id_academico', '=', 'doctorado.id_academico')
            ->select('egresado.matricula', 'academico.carr_profesional', 'academico.id_academico', 'doctorado.id_doctorado', 'doctorado.id_academico', 'doctorado.grado_academico as doctorado_grado_academico', 'doctorado.pais as doctorado_pais', 'doctorado.institución as doctorado_institución', 'doctorado.fecha_inicial as doctorado_fecha_inicial', 'doctorado.fecha_final as doctorado_fecha_final')
            ->where('matricula', Auth::user()->egresado_matricula)
            ->get();

        $egresados= DB::table('academico')
            ->join('egresado', 'academico.id_academico', '=', 'egresado.id_academico')
            ->join('maestria', 'academico.id_academico', '=', 'maestria.id_academico')
            ->select('egresado.matricula', 'academico.carr_profesional', 'academico.id_academico', 'maestria.id_maestria', 'maestria.id_academico', 'maestria.grado_academico as maestria_grado_academico', 'maestria.pais as maestria_pais', 'maestria.institución as maestria_institución', 'maestria.fecha_inicial as maestria_fecha_inicial', 'maestria.fecha_final as maestria_fecha_final')
            ->where('matricula', Auth::user()->egresado_matricula)
            ->get();
        /* return $egresados; */
        return compact('egresados0','egresados','egresados1');
    }

    public function trayectoriapro(Request $request)
    {
        /* $egresados = Profesion::all(); */
        /* return $users; */
        $egresados = DB::table('profesion')
            ->select('id_profesion','empresa', 'actividad_empresa', 'actividad_empresa', 'puesto', 'nivel_experiencia', 'area_puesto', 'subarea', 'pais', 'fecha_inicio', 'fecha_finalizacion', 'descripcion_responsabilidades')
            ->where('matricula', Auth::user()->egresado_matricula)
            ->get();
        /* $egresados = DB::table('profesion')
            ->join('egresado', 'profesion.matricula', '=', 'egresado.matricula')
            ->select('profesion.id_profesion', 'profesion.empresa', 'profesion.actividad_empresa',  'profesion.puesto', 'profesion.nivel_experiencia', 'profesion.area_puesto', 'profesion.subarea', 'profesion.pais', 'profesion.fecha_inicio', 'profesion.fecha_finalizacion', 'profesion.descripcion_responsabilidades')
            ->where('profesion.matricula', Auth::user()->egresado_matricula)
            ->get(); */
        /* return $egresados; */

        return compact('egresados');
    }


    public function register(Request $data){

        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'egresado_matricula' => ['required', 'string', 'max:255', Rule::unique(User::class)],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $result = User::create([
            'name' => $data->name,
            'egresado_matricula' => $data['egresado_matricula'],
            'email' => $data['email'],
            'password' => Hash::make($data->password),
        ]);

        return $result;
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'egresado_matricula'=>'required',
            'password'=>'required'
        ]);

        if( Auth::attempt($credentials) ){
            $user = Auth::user();
            $token = md5( time() ).'.'.md5($request->egresado_matricula);
            $user->forceFill([
                'api_token'=>$token,
            ])->save();

            return response()->json([
                'token'=>$token
            ]);
        }

        return response()->json([
            'message'=>'Los datos ingresados son incorrectos.'
        ],401);
    }


    public function logout(Request $request){
        $request->user()->forceFill([
            'api_token'=>null,
        ])->save();

        return response()->json(['message'=>'success']);
    }

}