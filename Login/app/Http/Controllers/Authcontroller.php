<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Egresado;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DatosPersonalesController;

class Authcontroller extends Controller
{
    public function index(Request $data){
        $data = Egresado::select('matricula','ap_paterno','ap_materno','nombres', 'genero', 'fecha_nacimiento', 'celular', 'dni','url')->where('matricula', Auth::user()->egresado_matricula)->get();
        return $data;
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