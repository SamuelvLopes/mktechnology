<?php
namespace App\Controllers;
use App\Models\Basic;
use App\Libraries\Template;
class Nimplementado extends BaseController
{
    public function index(){

          $template=new Template();
          $data=array();
          $template->show("foraescopo",  $data);

    }
}
