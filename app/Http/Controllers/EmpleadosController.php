<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;


class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('empleados.index'); //nos devuelve la vista index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleados.create'); //nos devuelve la vista create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       // $datosEmpleado =request()->all(); //hago que se almacene todo lo que se envia al metodo storage

       $datosEmpleado=request()->except('_token');

       //recolectar para las fotos que va a storage/apps/public/uploads
       if($request->hasFile('Foto')){
        $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');

       }
       Empleados::insert($datosEmpleado); //para insertarlo en la bd

       return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleados $empleados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleados $empleados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleados $empleados)
    {
        //
    }
}
