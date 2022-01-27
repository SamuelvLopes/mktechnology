<?php 
namespace app\Models;

use CodeIgniter\Model;


class ProdutoModel extends Model {
     protected $table      = 'product';
     protected $primaryKey = 'codprod';
     protected $allowedFields= ['codprod','nome','valor','id_category'];
     protected $returnType = 'object';

}
