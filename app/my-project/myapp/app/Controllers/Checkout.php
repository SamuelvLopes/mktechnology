<?php
namespace App\Controllers;
use App\Models\Basic;
use App\Libraries\Template;

class Checkout extends BaseController
{
    public function index(){

         $template=new Template();
        $data=array();
         $template->show("checkout",  $data);
    }
}