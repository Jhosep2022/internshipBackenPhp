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
}