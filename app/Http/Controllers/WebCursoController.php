<?php

declare(strict_types=1);

namespace App\Http\Controllers;



use App\Models\Curso;

class WebCursoController extends Controller
{
    public function list()
    {
        return view('curso.list', [
            'cursos' => Curso::all(),
        ]);
    }
}