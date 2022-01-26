<?php 
namespace app\Models;

use CodeIgniter\Model;


class ClientModel extends Model {
     protected $table      = 'client';
     protected $primaryKey = 'codcli';
     protected $allowedFields= ['nome','cpf','dt_nascimento','cep','logradouro','numero','bairro','complemento','cidade'];
     protected $returnType = 'object';

}