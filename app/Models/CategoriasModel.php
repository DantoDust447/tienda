<?php
 namespace App\Models;
    use CodeIgniter\Model;
    class CategoriasModel extends Model
    {
        protected $table         = 'cat_productos';
        protected $primaryKey    = 'categoria_id';
        protected $allowedFields = [
            'categoria_id','categoria'
        ];
        //protected $returnType    = \App\Entities.User::class;
        //protected $useTimestamps = true;
    }   