<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Degree;

class DegreeController extends Controller
{
    public function index()
    {
        return Degree::all();
    }

    public function store(Request $request1)
    {
        $inputs = $request1-> input();
        $e = Degree::create($inputs);
        return response()->json([
            'data'=>$e,
            'mensaje'=>'Se ha creado correctamente'
        ]);
    }

    public function update (Request $request, $id)
    {
        $e = Degree::find($id);
        if(isset($e)){
            $e->nombre = $request -> nombre;
            if($e->save()){
                return response()->json([
                    'data'=>$e,
                    'mensaje'=>'Se ha actualizado correctamente'
                ]);
            } else{
                return response()->json([
                    'error'=>true,
                    'mensaje'=>'No se ha podido actualizar'
                ]);
            }
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'No existe la carrera'
            ]);
        }
    }

    public function show($id){
        $e = Degree::find($id);
        if(isset($e)){
            return response()->json([
                'data'=>$e,
                'mensaje'=>'Se ha encontrado la carrera correctamente'
            ]);
        }else{
            return response()->json([  // Aquí está la corrección: 'reponse' -> 'response'
                'error'=>true,
                'mensaje'=>'No existe la carrera'
            ]);
        }
    }

    public function destroy($id){
        $e = Degree::find($id);
        if(isset($e)){
            $e->delete();
            return response()->json([
                'data'=>$e,
                'mensaje'=>'Se ha eliminado correctamente'
            ]);
        }else{
            return response()->json([  // Aquí está la corrección: 'reponse' -> 'response'
                'error'=>true,
                'mensaje'=>'No existe la carrera'
            ]);
        }
    }
}