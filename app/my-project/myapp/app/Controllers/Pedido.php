<?php

namespace App\Controllers;
use App\Libraries\Template;
class Pedido extends BaseController
{
    public function index(){

        

    }

    public function gerar_pedido(){
        $_POST['cpf']="12526707400";
        $_POST['nome']="samuel2";
        $_POST['sobrenome']="lopes";
        $_POST['email']="lope11@2s.d";
        $_POST['cep']="51320400";
        $_POST['logradouro']="rua visconde de santo alal";
        $_POST['numero']="32";
        $_POST['cidade']="recife";
        $_POST['bairro']="pe";
        $_POST['complemento']="pe";
        $_POST['estado']="pe";
        $_POST['dt_nascimento']="16/03/2001";
        $_POST['cidade']="16/03/2001";
        $_POST['logradouro']="16/03/2001";

        $_POST['pedido']=json_encode(
            array(
                "items"=>array(
                      array("codigo"=>1,"qtd"=>1),   
                      array("codigo"=>2,"qtd"=>2)   
                         
                 ),
                 "valor"=>454.4
                     
            )
        );

        $apikeymodel= new \App\Models\ApiKeyModel();
        $pedidomodel= new \App\Models\ProdutoModel();
        $clientmodel= new \App\Models\ClientModel();

        $api = $apikeymodel->where('chave', $_POST['chave'])->findAll();
        if($api[0]->permision=="root"||true==true){

            $data_cliente=array(
                'nome'=>$_POST['nome'],
                'cpf'=>$_POST['cpf'],
                'email'=>$_POST['email'],
                'dt_nascimento'=>$_POST['dt_nascimento'],
                'cep'=>$_POST['cep'],
                'logradouro'=>$_POST['logradouro'],
                'numero'=>$_POST['numero'],
                'bairro'=>$_POST['bairro'],
                'complemento'=>$_POST['complemento'],
                'cidade'=>$_POST['cidade'],
            );
         
            $data_pedido=array(
                'nome'=>$_POST['nome_entrega'],
                'sobrenome'=>$_POST['sobrenome_entrega'],
                'email'=>$_POST['email_entrega'],
                'telefone'=>$_POST['telefone_entrega'],
                'cep'=>$_POST['cep_entrega'],
                'logradouro'=>$_POST['lougradouro_entrega'],
                'numero'=>$_POST['numero_entrega'],
                'cidade'=>$_POST['cidade_entrega'],
                'estado'=>$_POST['estado_entrega'],
                'nota'=>$_POST['nota_entrega'],
                'valor'=>$_POST['valor']
            
            );

            $pedido=json_decode($_POST['pedido']);
            $client_data=$clientmodel->where('cpf',$data_cliente['cpf'])->findAll();

            if($client_data==null){
                
                
                $clientmodel->insert($data_cliente);
                $client_data=$clientmodel->where('cpf',$data_cliente['cpf'])->findAll();

            }
            
                $data_cliente['codcli']=$client_data[0]->codcli;
                $time=time();
                $data_ped=array(
                "codcli"=>$data_cliente['codcli'],
                "valor"=>$pedido->valor,
                "data"=>$time
                );
                 var_dump($data_ped);
            
               $pedidomodel->insert($data_ped);
              // $teste=$pedidomodel->where('data',$time)->findAll();

               var_dump($teste);
            

        }

            
        }

    
}


