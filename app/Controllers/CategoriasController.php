<?php

namespace App\Controllers;
use App\Models\CategoriasModel;
class CategoriasController extends BaseController
{
    public function index()
    {
        $categoria = new CategoriasModel();
        $datos['datos'] = $categoria->findAll();
        return view('vista_categorias', $datos);
        
    }
}