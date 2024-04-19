<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teszt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesztController extends Controller
{
    public function index()
    {
        return Teszt::all();
    }

    public function store(Request $request)
    {
        $teszt = new Teszt();
        $teszt->kerdes = $request->kerdes;
        $teszt->v1 = $request->v1;
        $teszt->v2 = $request->v2;
        $teszt->v3 = $request->v3;
        $teszt->v4 = $request->v4;
        $teszt->helyes = $request->helyes;
        $teszt->kategoriaId = $request->kategoriaId;
        $teszt->save();

        return $teszt;
    }

    public function show($id)
    {
        return Teszt::find($id);
    }

    public function update(Request $request, $id)
    {
        $teszt = Teszt::find($id);
        if ($teszt) {
            $teszt->kerdes = $request->kerdes;
            $teszt->v1 = $request->v1;
            $teszt->v2 = $request->v2;
            $teszt->v3 = $request->v3;
            $teszt->v4 = $request->v4;
            $teszt->helyes = $request->helyes;
            $teszt->kategoriaId = $request->kategoriaId;
            $teszt->save();
        }

        return $teszt;
    }

    public function destroy($id)
    {
        $teszt = Teszt::find($id);
        if ($teszt) {
            $teszt->delete();
        }
    }

    public function tesztLista()
    {
        $teszt = DB::table('teszts')
            ->select('teszts.kerdes', 'teszts.v1', 'teszts.v2', 'teszts.v3', 'teszts.v4', 'teszts.helyes')
            ->get();

        return response()->json($teszt);
    }
}
