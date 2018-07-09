<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller
{
    public function index(){
        $tareas = Tarea::all();
        return view('index',compact('tareas'));
    }
    public function editar(){
        return view('edit');
    }
    public function store(Request $request){
        if($request->input('tarea'))
        {
            $tarea = new Tarea();
            $tarea->contenido = $request->input('tarea');
            Auth::user()->tareas()->save($tarea);
        }

        return redirect()->back();

    }
    public function update(){
        return view('edit');
    }
}
