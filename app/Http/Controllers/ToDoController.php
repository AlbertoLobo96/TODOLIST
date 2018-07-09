<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index(){
        $tareas = Tarea::all();
        return view('index',compact('tareas'));
    }
    public function editar(){
        return view('edit');
    }
}
