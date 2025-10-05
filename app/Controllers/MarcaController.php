<?php

namespace App\Controllers;
use App\Models\MarcasModel;
class MarcaController extends BaseController
{
    public function index()
    {
    $marcas = new MarcasModel();
    $datos['marcas'] = $marcas->findAll();
    return view ('vista_marcas',$datos);
    }
}