<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotaController extends Controller
{
    public function notaPorId($id){
        $resultado = DB::table('notas as n')
            ->select('e.nombres, e.apellidos, c.nombre, n.ta1, n.ta2, n.ta3, n.ta4, n.emc, n.ef')
            ->join()
            ->join()
            ->join()
            ->where('e.id', $id);
        return $id;
    }
}
