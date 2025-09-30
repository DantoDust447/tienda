<?php

namespace App\Controllers;
use App\Models\CategoriasModel;
class Categorias extends BaseController
{
    public function categorias(): string
    {
        $libros = new CategoriasModel();
        $datos['datos'] = $categoria->findAll();
        return view('vista_categorias', $datos);
    }
}