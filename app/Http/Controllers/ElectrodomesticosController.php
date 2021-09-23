<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectrodomesticosController extends Controller
{
    public function Electrodomesticos(){
        $vistas =view('electrodomesticos');
        return $vistas;
    }
}
