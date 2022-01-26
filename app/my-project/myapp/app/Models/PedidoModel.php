<?php 
namespace app\Models;

use CodeIgniter\Model;


class ProdutoModel extends Model {
     protected $table      = 'ped';
     protected $primaryKey = 'numped';
     protected $allowedFields= ['numped','data','valor'];
     protected $returnType = 'object';

}