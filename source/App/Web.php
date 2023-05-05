<?php

namespace Source\App;

use League\Plates\Engine;

class Web
{

    private $view;

    public function __construct () 
    {
        $this->view = new Engine( __DIR__ . "/../../themes/web", "php");
    }

    public function home()
    {
        echo $this->view->render("home", [
            "name" => "Thaís",
            "age" => 16
        ]);
    }

    public function about()
    {
        echo $this->view->render("about");
    }

    public function location()
    {
        echo "Essa é a minha localização!";
    }

    public function blog (){
        echo "esse é o meu blog bonitinho...";
    }

    public function contact () {
        echo "Olá, esse é meu contato!";
    }

    public function profile () {
        echo "Olá, esse é meu perfil!";
    }

}