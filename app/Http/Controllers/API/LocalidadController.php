<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($municipioId)
    {
        $localidadesDelMunicipio = DB::table('localidad')
            ->where(['municipio_id' => $municipioId])
            ->select('*')
            ->get();
        return response()->json($localidadesDelMunicipio);
    }

    /**
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    private function validar(Request $request)
    {
        $validador = Validator::make($request->all(), [
            'nombre'        => 'required',
            'cod_postal'    => 'required',
        ], [
            'required' => 'El campo :attribute es obligatorio'
        ]);
        $validador->validate();
    }

    /**
     * @param Request $request
     * @param $municipioId
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, $municipioId)
    {
        $this->validar($request);
        $id = DB::table('localidad')
            ->insert([
                    'nombre'        => $request->post('nombre'),
                    'cod_postal'    => $request->post('cod_postal'),
                    'municipio_id'  => $municipioId,
                ]);
        return response()->json($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $localidad = DB::table('localidad')
            ->where(['id' => $id])
            ->select('*')
            ->get();
        return response()->json($localidad);
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
        $cantLocalidadesAfectadas = DB::table('localidad')
            ->where(['id' => $id])
            ->update([
                    'nombre'        => $request->post('nombre'),
                    'cod_postal'    => $request->post('cod_postal'),
                ]);
        return response()->json($cantLocalidadesAfectadas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('localidad')
            ->delete($id);
        return response()->json();
    }
}
