<?php

namespace App\Controllers;
use App\Models\Basic;
use App\Libraries\Template;
class Home extends BaseController
{
    public function index(){
        $produtomodel= new \App\Models\ProdutoModel();
        $imagemodel= new \App\Models\ImageModel();
        $template=new Template();
       
       $produtos=$produtomodel->where('deleted',0)->findAll();
       
       $lista_produtos=array();

       foreach($produtos as $linha){
       $produtos=(array) $linha;
       $produtos['url']=$imagemodel->where('id_image',$produtos['codprod'])->findAll()[0]->caminho;
       array_push($lista_produtos,$produtos);
       
       }

            
        
        
      
       $data=array(
            'produtos'=>$lista_produtos
          );
        ;
        $template->show("home",  $data);

    }
}
