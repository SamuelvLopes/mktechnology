<?php
namespace App\Controllers;
use App\Models\Basic;
use App\Libraries\Template;
class Produto extends BaseController
{
    public function index(){

          $template=new Template();
          $data=array();
          $template->show("foraescopo",  $data);

    }
    public function criarcategoria(){

         $apikeymodel= new \App\Models\ApiKeyModel();
         $categorymodel= new \App\Models\CategoryModel();

        //Aguarda os valores chave e nome
       
         if(!isset($_POST['nome'])){exit();}


          $api = $apikeymodel->where('chave', $_POST['chave'])->findAll();
          if($api[0]->permision=="root"){
          
          $data=array(
              "nome"=>$_POST['nome']
          );
          $categorymodel->insert($data);
           $data=array(
              "type"=>"sucess",
              "mensage"=>"categoria criada com sucesso"
              );

          }else{

              $data=array(
              "type"=>"error",
              "mensage"=>"api key not allowed"
              );

              
          
          }
          echo json_encode($data);
    
    
    }
    public function cadastro(){
          //aguarda a chave,nome,valor,categoria,url

          $apikeymodel= new \App\Models\ApiKeyModel();
          $imagemodel= new \App\Models\ImageModel();
          $produtomodel= new \App\Models\ProdutoModel();
          $produto_image_model= new \App\Models\ProductImageModel();

        
          //$_POST['chave']=$apikeymodel->where('id',1)->findAll()[0]->chave;
          
         if(!isset($_POST['nome'])){exit();}

          $api = $apikeymodel->where('chave', $_POST['chave'])->findAll();

          if($api[0]->permision=="root"){

              $data = [
                    'chave' =>sha1($_POST['chave'])
                ];

              $apikeymodel->update(1, $data);

              $data=array(
                  'nome'=>$_POST['nome'],
                  'valor'=>$_POST['valor'],
                  'id_category'=>$_POST['categoria']
              );
              $produtomodel->insert($data);

              
              $data=array(
                  'id_formato'=>1,
                  'caminho'=>$_POST['url']
              );
              $imagemodel->insert($data);

              $idimage=$imagemodel->where('caminho', $_POST['url'])->findAll()[0]->id_image;
              $codprod=$produtomodel->where('nome', $_POST['nome'])->findAll()[0]->codprod;
             
              $data=array(

                  'codprod'=>$codprod,
                  'id_image'=>$idimage
              
              );
              $produto_image_model->insert($data);
            
            $data=array(
              "type"=>"sucess",
              "mensage"=>"produto $codprod criado com sucesso"
              );

          
          }else{

              $data=array(
              "type"=>"error",
              "mensage"=>"api key not allowed"
              );

              
          
          }
          echo json_encode($data);
          echo'<hr>';
}
    
}
