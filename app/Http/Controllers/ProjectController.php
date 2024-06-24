<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Exception;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectController extends Controller
{

    public function index(){
        $proyectos = Proyecto::all();

        return view('dashboard', compact('proyectos'));
    }

    public function create(){
        return view('project.create');
    }

    public function store(Request $request){

    
        $project = new Proyecto();

        $project->id = $request->input('id');
        $project->nombre = $request->input('name');
        $project->plantilla = $request->input('plantilla');
        $project->numero_pagina = $request->input('pagina');
        $project->configuracion_correo = $request->input('email');
        $project->copia_correo = $request->input('emailco');
        $project->password = $request->input('password');
        $project->servidor = $request->input('servidor');
        $project->puerto = $request->input('puerto');
        $project->criptografia = $request->input('criptografia');
    
        $project->save();

        return redirect()->route('dashboard');

    }

    public function show($id){

        $proyecto = Proyecto::find($id);
        $campos = $proyecto->campos;
        
        return view('project.show', compact('proyecto', 'campos'));
    }

    public function edit($id){
        
        $proyecto = Proyecto::find($id);
        return view('project.edit', compact('proyecto'));
    }
    
    public function update(Request $request, $id){

            $proyecto = Proyecto::find($id);
    
            $proyecto->nombre = $request->input('name');
            $proyecto->plantilla = $request->input('plantilla');
            $proyecto->numero_pagina = $request->input('pagina');
            $proyecto->configuracion_correo = $request->input('email');
            $proyecto->copia_correo = $request->input('emailco');
            $proyecto->password = $request->input('password');
            $proyecto->servidor = $request->input('servidor');
            $proyecto->puerto = $request->input('puerto');
            $proyecto->criptografia = $request->input('criptografia');
            $proyecto->save();
    
            return redirect()->route('dashboard', compact('proyecto'))->with('mensaje', 'Proyecto fue modificado correctamente');
    }

    public function destroy($id){
        $proyecto = Proyecto::find($id);
        $proyecto->delete();
        return redirect()->route('dashboard', compact('proyecto'))->with('mensaje','PROYECTO ELIMINADO');
    }
}
