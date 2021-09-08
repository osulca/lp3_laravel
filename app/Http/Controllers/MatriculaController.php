<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MatriculaController extends Controller
{
    public function mostrar(){
        $resultado = DB::select('SELECT e.nombres, e.apellidos, c.nombre
                                 FROM matriculas as m
                                 JOIN estudiantes as e
                                 ON m.id_estudiante = e.id
                                 JOIN cursos as c
                                 ON m.id_curso = c.id');
        dd($resultado);
    }
}
