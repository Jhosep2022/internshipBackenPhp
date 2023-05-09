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
            return reponse()->json([
                'error'=>true,
                'mensaje'=>'No existe la carrera'
            ]);
        }
    }
}


