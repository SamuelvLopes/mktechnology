<?php

namespace App\Controllers;
use App\Models\Basic;
use App\Libraries\Template;
class Home extends BaseController
{
    public function index(){
        $session = \Config\Services::session($config);
        unset($_SESSION['carrinho']);
        $produtomodel= new \App\Models\ProdutoModel();
        $imagemodel= new \App\Models\ImageModel();
        $template=new Template();
       
       $produtos=$produtomodel->where('deleted',0)->findAll();
       
       $lista_produtos=array();

       foreach($produtos as $linha){
      
       $produtos=(array) $linha;
       $produtos['url']=$imagemodel->where('id_image',$produtos['codprod'])->findAll()[0]->caminho;
       $produtos['codigo']=$imagemodel->where('id_image',$produtos['codprod'])->findAll()[0]->id_image;
       array_push($lista_produtos,$produtos);
       
       }

            
        
        
      
       $data=array(
            'produtos'=>$lista_produtos
          );
        
        $template->show("home",  $data);

    }
}
