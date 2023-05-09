<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Contact::all();
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */

    public function store(Request $request)
    {
        
        $inputs = $request->input();
        $respuesta = Contact::create($inputs);
        return $respuesta;
    }

    public function update (Request $request, $id)
    {
        $e = Contact::find($id);
        if(isset($e)){
            $e->email = $request -> email;
            $e->phone = $request -> phone;
            $e->facebook = $request -> facebook;
            if($e->save()){
                return response()->json([
                    'data'=>$e,
                    'mensaje'=>'Se ha actualizado correctamente'
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
        $e = Contact::find($id);
        if(isset($e)){
            return response()->json([
                'data'=>$e,
                'mensaje'=>'Se ha encontrado el contacto correctamente'
            ]);
        }else{
            return response()->json([  // Aquí está la corrección: 'reponse' -> 'response'
                'error'=>true,
                'mensaje'=>'No existe el contacto'
            ]);
        }
    }
    

    public function destroy($id){
        $e = Contact::find($id);
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


