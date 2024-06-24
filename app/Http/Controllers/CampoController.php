<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampoRequest;
use App\Models\Campo;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class CampoController extends Controller
{

    public function create($id){

        $proyecto = Proyecto::findOrFail($id);
        return view('campos.create', compact('proyecto'));
    }

    
    public function store(StoreCampoRequest $request, $id){        
        
        $name = $request->file['file']->getClientOriginalName();
        $path = $request->file['file']->store('public/file');
        
        $proyecto = Proyecto::findOrFail($id);

        $campo = new Campo() ;
        $campo->positionx = $request->input('positionx');
        $campo->positiony = $request->input('positiony');
        $campo->tipografia = $request->input('tipografia');
        $campo->tamano = $request->input('tamano');
        $campo->color = $request->input('color');
        $campo->numeropagina = $request->input('numeropagina');
        $campo->id_proyecto = $proyecto->id;

        $campo->save();
        
        return redirect()->route('project.show', ['project'=>$campo->id_proyecto]);

    }

    public function edit($id){
        
        
        $campo = Campo::find($id);
        return view('campos.edit', compact('campo'));
    }

    public function update(Request $request, $id){

        $campo = Campo::find($id);
        
        $campo->positionx = $request->input('positionx');
        $campo->positiony = $request->input('positiony');
        $campo->tipografia = $request->input('tipografia');
        $campo->tamano = $request->input('tamano');
        $campo->color = $request->input('color');
        $campo->numeropagina = $request->input('numeropagina');
        
        $campo->save();
    
        // with([
        //     'proyecto' => $campo->id_proyecto,
        //     'mensaje' => 'Campos fue modificado correctamente',
        // ]);

        return redirect()->route('project.show', ['project' => $campo->id_proyecto])->with('mensaje', 'Campos fue modificado correctamente');
    }

    public function destroy ($id){

        $campo = Campo::find($id);
        $campo->delete();
        return redirect()->route('project.show', ['project'=>$campo->id_proyecto])->with('mensaje','Campos Eliminado');
    }
}
