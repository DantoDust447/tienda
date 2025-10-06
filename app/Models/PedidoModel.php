<?php
 namespace App\Models;
    use CodeIgniter\Model;
    class PedidoModel extends Model
    {
        protected $table         = 'pedido';
        protected $primaryKey    = 'pedido_id';
        protected $allowedFields = [
        'cliente_id',"dpi_empleado","direccion_entrega","telefono","estado_id","total_pedido","observaciones",
        ];
        //protected $returnType    = \App\Entities.User::class;
        //protected $useTimestamps = true;
    }