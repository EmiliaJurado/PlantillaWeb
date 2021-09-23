<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function categoria1(){
        $vistas =view('categorias/uno');
        return $vistas;
    }
    public function categoria2(){
        $vistas =view('categorias/dos');
        return $vistas;
    }
    public function categoria3(){
        $vistas =view('categorias/tres');
        return $vistas;
    }
    public function categoria4(){
        $vistas =view('categorias/cuatro');
        return $vistas;
    }
    public function categoria5(){
        $vistas =view('categorias/cinco');
        return $vistas;
    }
    public function categoria6(){
    $vistas =view('categorias/seis');
    return $vistas;
    }

    public function categoria7(){
    $vistas =view('categorias/siete');
    return $vistas;
    }

    public function categoria8(){
    $vistas =view('categorias/ocho');
    return $vistas;
    }
    
    public function categoria9(){
    $vistas =view('categorias/nueve');
    return $vistas;
}
}
