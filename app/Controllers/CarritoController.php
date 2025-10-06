<?php

namespace App\Controllers;
use App\Models\ProductosModel;
class CarritoController extends BaseController
{
    public function index()
    {
        $producto = new ProductosModel();
        $datos['productos'] = $producto->findAll();
        return view('vista_carrito', $datos);
        
    }
}