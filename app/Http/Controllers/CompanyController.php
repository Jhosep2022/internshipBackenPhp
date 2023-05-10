<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Company;

class CompanyController extends Controller{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
    */
    public function index(){
        return Company::all();
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
    */

    public function store(Request $request){
        $inputs = $request->input();
        $respuesta = Company::create($inputs);
        return $respuesta;
    
    }
    
    public function update (Request $request, $id){
        $e = Company::find($id);
        if(isset($e)){
            $e->nombre = $request -> nombre;
            $e->descripcion = $request -> descripcion;
            $e->fecha = $request -> fecha;
            $e->foto = $request -> foto;
            $e->contact_id = $request -> contact_id;
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
        $e = Company::find($id);
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
        $e = Company::find($id);
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