<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;
use PDF;

class ReporteAdminController extends Controller
{
    //
    public function showReporteEgresados( Request $request,$string)
    {
        if( $string == "empty" )

        $string = "";

        $egresados = Egresado::select()
        ->where( 'habilitado','=', 1 )
        ->orderBy( 'ap_paterno', 'desc' )
        ->get();

        $pdf = PDF::LoadView('admin.egresado.pdf',compact('egresados'),['valor'=>$string]);
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }

}

