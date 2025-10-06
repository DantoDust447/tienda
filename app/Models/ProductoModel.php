<?php
 namespace App\Models;
    use CodeIgniter\Model;
    class ProductoModel extends Model
    {
        protected $table         = 'productos';
        protected $primaryKey    = 'producto_id';
        protected $allowedFields = [
        'nombre',"marca_id","descripcion","precio","cantidad_peso","categoria_id",
        ];
        //protected $returnType    = \App\Entities.User::class;
        //protected $useTimestamps = true;
    }