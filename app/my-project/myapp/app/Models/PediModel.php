<?php 
namespace app\Models;

use CodeIgniter\Model;


class ProdutoModel extends Model {
     protected $table      = 'pedi';
     protected $primaryKey = 'codprod';
     protected $allowedFields= ['valor','quantidade'];
     protected $returnType = 'object';

}
