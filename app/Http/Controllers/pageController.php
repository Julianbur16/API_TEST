<?php

namespace App\Http\Controllers;

use App\Models\estudiante;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        $registros=estudiante::orderBy('id','desc')->paginate();
        return view('cursos/index',compact('registros'));
    }

    public function create(){
        return view('cursos/create');
    }

    public function store(Request $respuestas){
        $saveinfo=new estudiante();
        $saveinfo->Gmail=$respuestas->Gmail;
        $saveinfo->save();
   
        return redirect()->route('cursos.show',$saveinfo);

    }

    public function show($id){
        $curso=estudiante::find($id);
        return view('cursos/show',['curso' => $curso]);
    }

    public function edit($id){
        $curso=estudiante::find($id);
        return view('cursos.edit',compact('curso'));
    }

    public function store1(Request $modificar){
        $curso=estudiante::find($modificar->id);
        $curso->Gmail=$modificar->gmail;
        $curso->save();
        return redirect()->route('cursos.show',$curso);
    }

    public function destroy($id){
        $curso=estudiante::find($id);
        return view('cursos.destroy',compact('curso'));
    }

    public function store2(Request $id){
        $curso=estudiante::find($id->id);
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
