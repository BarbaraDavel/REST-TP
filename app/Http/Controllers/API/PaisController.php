<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = DB::select('select * from pais');
        return response()->json($paises);
    }

    /**
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    private function validar(Request $request)
    {
        $validador = Validator::make($request->all(), [
            'nombre'   => 'required',
        ], [
            'required' => 'El campo :attribute es obligatorio'
        ]);
        $validador->validate();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pais = DB::select("select * from pais where id = :id", ['id' => $id]);
        return response()->json($pais);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validar($request);
        $cantidadPaisesAfectados = DB::table('pais')
            ->where(['id'=>$id])
            ->update(['nombre' => $request->post('nombre')]);
        return response()->json($cantidadPaisesAfectados);
    }
}
