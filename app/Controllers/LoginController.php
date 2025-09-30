<?php

namespace App\Controllers;
use App\Models\CategoriasModel;
class LoginController extends BaseController
{
    public function index()
    {
        return view('vista_login');
        
    }
}