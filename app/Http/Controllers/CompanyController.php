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
     
}