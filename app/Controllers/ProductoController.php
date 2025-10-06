<?php
namespace App\Controllers;
use App\Models\ProductoModel;
class ProductoController extends BaseController  
{
    public function index(): string 
    {
        $producto = new ProductoModel();

        $datos['datos'] = $producto->findAll();
        return view('vista_producto', $datos);
    }
    public function eliminar($producto_id)
    {
        $producto = new ProductoModel();
        $producto->delete($producto_id);
        return redirect()->to('productos');
    }
    public function agregar()
    {
        $producto = new ProductoModel();
        $datos = [
            'nombre' => $this->request->getVar('nombre'),
            'marca_id' => $this->request->getVar('marca_id'),
            'descripcion' => $this->request->getVar('descripcion'),
            'precio' => $this->request->getVar('precio'),
            'cantidad_peso' => $this->request->getVar('cantidad_peso'),
            'categoria_id' => $this->request->getVar('categoria_id'),
        ];
        $producto->insert($datos);
        return redirect()->to('productos');
    }
    public function modificar($producto_id)
    {
        $producto = new ProductoModel();
        $datos['producto'] = $producto->find($producto_id);
        return view('productos', $datos);
    }
    
}