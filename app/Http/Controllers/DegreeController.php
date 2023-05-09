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
            'mensaje'=>'Se ha actualizado correctamente'
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
            return reponse()->json([
                'error'=>true,
                'mensaje'=>'No existe la carrera'
            ]);
        }
    }

    public function show($id)
    {
        $e = Degree::find($id);
        if(isset($e)){
            return response()->json([
                'data'=>$e,
                'mensaje'=>'Se ha encontrado la carrera correctamente'
            ]);
        }else{
            return reponse()->json([
                'error'=>true,
                'mensaje'=>'No existe la carrera'
            ]);
        }
    }

    public function destroy($id){
        $e = Degree::find($id);
        if(isset($e)){
            $res = Degree::destroy($id);
            if($res){
                return response()->json([
                    'data'=>$e,
                    'mensaje'=>'Se ha eliminado correctamente'
                ]); 
            }else{
                return response()->json([
                    'data'=>$e,
                    'mensaje'=>'No se ha podido eliminar'
                ]);
            }
        }else{
            return reponse()->json([
                'error'=>true,
                'mensaje'=>'No existe la carrera'
            ]);
        }
    }
}