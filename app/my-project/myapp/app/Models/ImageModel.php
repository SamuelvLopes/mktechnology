<?php 
namespace app\Models;

use CodeIgniter\Model;


class ImageModel extends Model {
     protected $table      = 'image';
     protected $primaryKey = 'id_image';
     protected $allowedFields= ['id_image','id_formato','caminho'];
     protected $returnType = 'object';

}