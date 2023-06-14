<?php

namespace App\Http\Controllers;

use App\Models\Sobre;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function index()
    {
        $sobre = Sobre::find(1);

        return view('sobre', ['sobre' => $sobre]);
    }


    public function editar()
    {
        $id = 1;
        $sobre = Sobre::where('id', $id)->firstOrFail();
        return view(
            'sobre.editar',
            ['sobre' => $sobre]
        );
    }

    public function salvar_alteracao(Request $request)
    {
        $id = 1;

        $sobre = Sobre::where('id', $id)->firstOrFail();
        $sobre->desc          = $request->input('desc');
        $sobre->iframe    = $request->input('iframe');
        $sobre->save();

        return redirect('/admin/sobre');
    }
}
