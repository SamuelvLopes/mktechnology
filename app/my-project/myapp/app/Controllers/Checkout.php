<?php
namespace App\Controllers;
use App\Models\Basic;
use App\Libraries\Template;

class Checkout extends BaseController
{
    public function index(){
        
        $session = \Config\Services::session($config);
        $produtomodel= new \App\Models\ProdutoModel();
        $imagemodel= new \App\Models\ImageModel();
         $template=new Template();
         
        $lista_produtos=array();
       
      
            foreach($_SESSION['carrinho'] as $item){
               
            
               $produtos=$produtomodel->where('codprod',$item['codigo'])->findAll();
       

               foreach($produtos as $linha){
                       $produtos=(array) $linha;
                       $produtos['url']=$imagemodel->where('id_image',$produtos['codprod'])->findAll()[0]->caminho;
                       $produtos['codigo']=$imagemodel->where('id_image',$produtos['codprod'])->findAll()[0]->id_image;
                       $produtos['qtd']=$item['qtd'];
                       $total=$total+$produtos['valor']*$item['qtd'];
                       array_push($lista_produtos,$produtos);
       
                }


            }
            
        
        
      
       $data=array(
            'produtos'=>$lista_produtos,
            'total'=>$total
          );
          
         $template->show("checkout",  $data);

    }
}