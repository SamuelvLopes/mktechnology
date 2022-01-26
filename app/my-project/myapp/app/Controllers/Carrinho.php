<?php
namespace App\Controllers;
use App\Models\Basic;
use App\Libraries\Template;
class Carrinho extends BaseController
{
    public function index(){

        $template=new Template();
        $data=array();
        $template->show("carrinho", $data);

    }
}