<?php
namespace App\Controllers;
use App\Models\PedidoModel;
class PedidoController extends BaseController
{
    public function index(): string 
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pedido');
        $builder->select('pedido.*, estado.*, detalle_pedido.*, productos.*');
        $builder->join('estado', 'pedido.estado_id = estado.estado_id');
        $builder->join('detalle_pedido', 'detalle_pedido.pedido_id = pedido.pedido_id');
        $builder->join('productos', 'detalle_pedido.producto_id = productos.producto_id');
        $query['query'] = $builder->get();
        /*$pedido = new PedidoModel();

        $datos['datos'] = $pedido->findAll();*/
        return view('vista_pedido', $query);
    }
}
