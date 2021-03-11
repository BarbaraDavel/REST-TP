<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincias = DB::table('provincia')
            ->select('*')
            ->get();
        return response()->json($provincias);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unaProvincia = DB::table('provincia')
            ->where(['id' => $id])
            ->select('*')
            ->get();
        return response()->json($unaProvincia);
    }
}
