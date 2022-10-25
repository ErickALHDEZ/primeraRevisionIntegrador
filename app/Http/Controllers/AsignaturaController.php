<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Esta información que estoy creando es para que yo almacene la info de la bdd
        //Y se la pase directamente al index.

        $datos['asignaturas']=Asignatura::paginate(5);

        return view('asignatura.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Le damos al controlador la información de la vista de tal forma que te redirija a ella.
        return view('asignatura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos=[
            'Clave'=>'required|string|max:100',
            'Nombre'=>'required|string|max:100',
            'Cambio'=>'required|string|max:100',
            'Horas teoricas'=>'required|string|max:100',
            'Horas practicas'=>'required|string|max:100',
            'Caracterizacion'=>'required|string|max:100'

        ];
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);
        //Todos los registros que sean enviados son recepcionados y guardados en la variables $datosAsignatura
        //$datosAsignatura = request()->all();

        //Reemplazando la línea que comentamos anteriormente, esta vez recepcionamos todos los datos pero exceptuando
        //El token de seguridad.
        $datosAsignatura = request()->except('_token');
        //En el modelo insertamos la base de datos, o sea toda la info excepto el token.
        Asignatura::insert($datosAsignatura);

        //return response()->json($datosAsignatura);
        return redirect ('asignatura')->with('mensaje','Asignatura agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(Asignatura $asignatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Buscamos la información a partir del ID
        $asignatura=Asignatura::findOrFail($id);
        return view('asignatura.edit', compact('asignatura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        /* Por alguna razón no me permite validar en editar
        $campos=[
            'Clave'=>'required|string|max:100',
            'Nombre'=>'required|string|max:100',
            'Cambio'=>'required|string|max:100',
            'Horas teoricas'=>'required|string|max:100',
            'Horas practicas'=>'required|string|max:100',
            'Caracterizacion'=>'required|string|max:100',

        ];
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);
        */

        //
        $datosAsignatura = request()->except(['_token','_method']);
        Asignatura::where('id','=',$id)->update($datosAsignatura);

        $asignatura=Asignatura::findOrFail($id);
        //return view('asignatura.edit', compact('asignatura'));

        return redirect('asignatura')->with('mensaje','Asignatura modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Asignatura::destroy($id);
        return redirect('asignatura')->with('mensaje','Asignatura eliminada');
    }
}
