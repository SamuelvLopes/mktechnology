<?php
namespace App\Controllers;
use App\Models\Basic;
use App\Libraries\Template;
class Carrinho extends BaseController{


    public function index(){
        
    

          $template=new Template();
        $session = \Config\Services::session($config);
         $produtomodel= new \App\Models\ProdutoModel();
         $imagemodel= new \App\Models\ImageModel();
       
            $lista_produtos=array();
       
      
            foreach($_SESSION['carrinho'] as $item){
               
            
               $produtos=$produtomodel->where('codprod',$item['codigo'])->findAll();
       

               foreach($produtos as $linha){
                       $produtos=(array) $linha;
                       $produtos['url']=$imagemodel->where('id_image',$produtos['codprod'])->findAll()[0]->caminho;
                       $produtos['codigo']=$imagemodel->where('id_image',$produtos['codprod'])->findAll()[0]->id_image;
                       $produtos['qtd']=$item['qtd'];
                       $total=$total+$item['valor']*$item['qtd'];
                       array_push($lista_produtos,$produtos);
       
                }


            }


            $_SESSION['total']=$total;

           $data=array(
            'produtos'=>$lista_produtos
          );

        $template->show("carrinho", $data);

    }
    public function custo_total(){
    $session = \Config\Services::session($config);
        echo $_SESSION['total'];
    }
    public function count(){
        
         $session = \Config\Services::session($config);
        echo count($_SESSION['carrinho']);
    }
    public function mini_cart(){

         $session = \Config\Services::session($config);
         $produtomodel= new \App\Models\ProdutoModel();
         $imagemodel= new \App\Models\ImageModel();
       
            $lista_produtos=array();
       
      
            foreach($_SESSION['carrinho'] as $item){
               
            
               $produtos=$produtomodel->where('codprod',$item['codigo'])->findAll();
       

               foreach($produtos as $linha){
                       $produtos=(array) $linha;
                       $produtos['url']=$imagemodel->where('id_image',$produtos['codprod'])->findAll()[0]->caminho;
                       $produtos['codigo']=$imagemodel->where('id_image',$produtos['codprod'])->findAll()[0]->id_image;
                       $produtos['qtd']=$item['qtd'];
                       $total=$total+$item['valor']*$item['qtd'];
                       array_push($lista_produtos,$produtos);
       
                }


            }


            $_SESSION['total']=$total;
           $data=array(
            'produtos'=>$lista_produtos
          );

          echo view("mini_cart",$data);
    
    }
    public function add(){
       $session = \Config\Services::session($config);
        if(!isset($_SESSION['carrinho'])){

            $_SESSION['carrinho']=array();
            $data=array(
            "qtd"=>$_POST['qtd'],
            "codigo"=>$_POST['codigo']
            );
            array_push($_SESSION['carrinho'],$data);
            
        }else{
       
            $i=0;
            foreach($_SESSION['carrinho'] as $item){
           
                if($_POST['codigo']==$item['codigo']){
                    $_SESSION['carrinho'][$i]['qtd']=$_POST['qtd']+$_SESSION['carrinho'][$i]['qtd'];
                    $init=true;
                }

                $i++;


            }
           if(!isset($init)){
                $data=array(
                "qtd"=>$_POST['qtd'],
                "codigo"=>$_POST['codigo']
                );
                array_push($_SESSION['carrinho'],$data);
           }                 
        
        }
        var_dump($_SESSION['carrinho']);
    }


    

}