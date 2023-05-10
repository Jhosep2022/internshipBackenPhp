<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Internship;

class InternshipController extends Controller
{
    public function index()
    {
        return Internship::all();
    }

    public function store(Request $request)
    {
        $inputs = $request->input();
        $respuesta = Internship::create($inputs);
        return $respuesta;
    }

    public function update (Request $request, $id)
    {
        $e = Internship::find($id);
        if(isset($e)){
            $e->nombre = $request -> nombre;
            $e->descripcion = $request -> descripcion;
            $e->resposabilidades = $request -> resposabilidades;
            $e->requisitos = $request -> requisitos;
            $e->fecha = $request -> fecha;
            $e->fecha_limite = $request -> fecha_limite;
            $e->contact_id = $request -> contact_id;
            $e->degree_id = $request -> degree_id;
            $e->company_id = $request -> company_id;
            $e->foto = $request -> foto;

            $e->save();
            return response()->json([
                'data'=>$e,
                'mensaje'=>'Se ha actualizado correctamente'
            ]);
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'No existe la empresa'
            ]);
        }
    }

    public function show ($id){
        $e = Internship::find($id);
        if(isset($e)){
            return response()->json([
                'data'=>$e,
                'mensaje'=>'Se ha encontrado la empresa correctamente'
            ]);
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'No existe la empresa'
            ]);
        }
    }

    public function destroy($id){
        $e = Internship::find($id);
        if(isset($e)){
            $e->delete();
            return response()->json([
                'data'=>$e,
                'mensaje'=>'Se ha eliminado correctamente'
            ]);
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'No existe la empresa'
            ]);
        }
    }

    
}