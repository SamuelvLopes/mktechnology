<?php
namespace App\Controllers;
use App\Models\Basic;

class Home extends BaseController
{
    public function index()
    {
         $model = model(Basic::class);
         $categoriamodel= new \App\Models\ProdutoModel();
         $data=array(
         'codprod'=>1,
         'nome'=>'teste',
         'valor'=>1.5
         );
         $categoriamodel->insert($data);

	   // $this->load->model("basic");
		echo"teste";

        //return view('welcome_message');
    }
}
