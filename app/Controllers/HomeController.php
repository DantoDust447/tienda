<?php

namespace App\Controllers;
use App\Models\CategoriasModel;
use App\Models\ProductosModel;
class HomeController extends BaseController
{
    public function index()
    {
        $producto = new ProductosModel();
        $categoria = new CategoriasModel();
        $datos['categorias'] = $categoria->findAll();
        $datos['productos'] = $producto->findAll();
        return view('index', $datos);
    }
}