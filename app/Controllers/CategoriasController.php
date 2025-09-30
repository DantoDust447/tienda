<?php

namespace App\Controllers;
use App\Models\CategoriasModel;
use App\Models\ProductosModel;
class CategoriasController extends BaseController
{
    public function index()
    {
        $categoria = new CategoriasModel();
        $producto = new ProductosModel();
        $datos['productos'] = $producto->findAll();
        $datos['categorias'] = $categoria->findAll();
        return view('vista_categorias', $datos);
        
    }
}