<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriaController extends Controller
{
    public function index()
    {
        return Kategoria::all();
    }

    public function store(Request $request)
    {
        $kategoria = new Kategoria();
        $kategoria->kategoriaNev = $request->kategoriaNev;
        $kategoria->save();

        return $kategoria;
    }

    public function show($id)
    {
        return Kategoria::find($id);
    }

    public function update(Request $request, $id)
    {
        $kategoria = Kategoria::find($id);
        if ($kategoria) {
            $kategoria->kategoriaNev = $request->kategoriaNev;
            $kategoria->save();
        }

        return $kategoria;
    }

    public function kategoriaLista()
    {
        $kategoria = DB::table('kategorias')
            ->select('kategorias.id','kategorias.kategoriaNev')
            ->get();

        return response()->json($kategoria);
    }
}
