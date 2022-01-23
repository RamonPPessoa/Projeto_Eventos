<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Ramon";
        $idade = 42;
    
        $arr = [1,2,3,4,5];
        $nomes = ["João","Maria","Paulo"];
        return view('welcome', [
            'nome'=> $nome,
            'idade2'=>$idade, 
            'profissao'=> "Programador",
            'arr'=> $arr,
            'nomes'=> $nomes
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
