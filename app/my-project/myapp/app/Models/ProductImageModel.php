<?php 
namespace app\Models;

use CodeIgniter\Model;


class ProductImageModel extends Model {
     protected $table      = 'product_image';
     protected $primaryKey = 'id';
     protected $allowedFields= ['id','codprod','id_image'];
     protected $returnType = 'object';

}