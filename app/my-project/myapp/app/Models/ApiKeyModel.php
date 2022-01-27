<?php 
namespace app\Models;

use CodeIgniter\Model;


class ApiKeyModel extends Model {
     protected $table      = 'api_key';
     protected $primaryKey = 'id';
     protected $allowedFields= ['id','chave'];
     protected $returnType = 'object';

}