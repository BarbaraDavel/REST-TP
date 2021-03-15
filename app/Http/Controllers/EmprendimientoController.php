<?php

namespace App\Http\Controllers;

use App\Emprendimiento;
use Illuminate\Http\Request;

use function PHPUnit\Framework\directoryExists;

class EmprendimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['emprendimiento']= Emprendimiento::paginate(3);
        return view('emprendimiento.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('emprendimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosUsuario=request()->all();

        $campos=[
            'nombre'=> 'required|string|max:100',
            'descripcion'=> 'required|string|max:500',
            'instagram'=> 'required|string|max:100',
            'facebook'=> 'required|string|max:100',
            'sitio_web'=> 'required|string|max:100',
            'nro_telefono'=> 'required|string|max:100',
            'calle'=> 'required|string|max:100',
            'calle_numero'=> 'required|string|max:100',
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje);

        $datosEmprendimiento=request()->except('_token');

        Emprendimiento::insert($datosEmprendimiento);

        //return response()->json($datosEmprendimiento);

        return redirect('Emprendimiento')->with('Mensaje','Emprendimiento agregado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emprendimiento  $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Emprendimiento $emprendimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emprendimiento $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $emprendimiento= Emprendimiento::findOrFail($id);

        return view('emprendimiento.edit',compact('emprendimiento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emprendimiento  $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos=[
            'nombre'=> 'required|string|max:100',
            'descripcion'=> 'required|string|max:500',
            'instagram'=> 'required|string|max:100',
            'facebook'=> 'required|string|max:100',
            'sitio_web'=> 'required|string|max:100',
            'nro_telefono'=> 'required|string|max:100',
            'calle'=> 'required|string|max:100',
            'calle_numero'=> 'required|string|max:100',

        ];
        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje);

        $datosEmprendimiento=request()->except(['_token','_method']);

        Emprendimiento::where('id','=',$id)->update($datosEmprendimiento);
                
        //$emprendimiento= emprendimiento::findOrFail($id);
        //return view('emprendimiento.edit',compact('emprendimiento'));

        return redirect('emprendimiento')->with('Mensaje','Empleado actualizado con éxito');
      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emprendimiento  $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //$usuario= emprendimiento::findOrFail($id)
        
        Emprendimiento::destroy($id);
        return redirect('emprendimiento')->with('Mensaje','Emprendimiento eliminado');
        
    }
    
}
