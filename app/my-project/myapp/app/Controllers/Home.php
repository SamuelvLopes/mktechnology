<?php
namespace App\Controllers;
use App\Models\Basic;
use App\Libraries\Template;
class Home extends BaseController
{
    public function index(){

          $template=new Template();
          $data=array();
          $template->show("home",  $data);

    }
}
