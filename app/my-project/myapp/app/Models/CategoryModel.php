<?php 
namespace app\Models;

use CodeIgniter\Model;


class CategoryModel extends Model {
     protected $table      = 'category';
     protected $primaryKey = 'id_category';
     protected $allowedFields= ['id_category','nome'];
     protected $returnType = 'object';

}