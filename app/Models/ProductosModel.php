<?php
 namespace App\Models;
    use CodeIgniter\Model;
    class ProductosModel extends Model
    {
        protected $table         = 'productos';
        protected $primaryKey    = 'producto_id';
        protected $allowedFields = [
            'producto_id','nombre','marca_id','descripcion','categoria','precio', 'cantidad_peso'
        ];
        //protected $returnType    = \App\Entities.User::class;
        //protected $useTimestamps = true;
    }   