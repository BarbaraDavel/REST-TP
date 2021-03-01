<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

use function PHPUnit\Framework\directoryExists;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuario']= Usuario::paginate(3);
        return view('usuario.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario.create');
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
            'apellido'=> 'required|string|max:100',
            'nombre_usuario'=> 'required|string|max:100',
            'password'=> 'required|string|max:100',
            'email'=> 'required|email',
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje);

        $datosUsuario=request()->except('_token');

        Usuario::insert($datosUsuario);

        //return response()->json($datosUsuario);

        return redirect('usuario')->with('Mensaje','Usuario agregado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario= Usuario::findOrFail($id);

        return view('usuario.edit',compact('usuario'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos=[
            'nombre'=> 'required|string|max:100',
            'apellido'=> 'required|string|max:100',
            'nombre_usuario'=> 'required|string|max:100',
            'password'=> 'required|string|max:100',
            'email'=> 'required|email',
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje);

        $datosUsuario=request()->except(['_token','_method']);

        Usuario::where('id','=',$id)->update($datosUsuario);
                
        //$usuario= Usuario::findOrFail($id);
        //return view('usuario.edit',compact('usuario'));

        return redirect('usuario')->with('Mensaje','Empleado actualizado con éxito');
      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //$usuario= Usuario::findOrFail($id)
        
        Usuario::destroy($id);
        return redirect('usuario')->with('Mensaje','Usuario eliminado');
        
    }
    
}
