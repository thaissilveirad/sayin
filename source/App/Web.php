<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Faq;

class Web
{

    private $view;

    public function __construct () 
    {
        $this->view = new Engine( __DIR__ . "/../../themes/web", "php");
    }

    public function about()
    {
        echo $this->view->render("about");
    }

    public function home()
    {
        echo $this->view->render("home");
    }

    public function login()
    {
        echo $this->view->render("login");
    }

    public function menu()
    {
        echo $this->view->render("menu");
    }

    public function products (){
        echo $this->view->render("products");
    }

    public function register () {
        echo $this->view->render("register");
    }

    public function faq ()
    {
        $faqs = new Faq();
        //var_dump($faqs->selectAll());

        echo $this->view->render("faq",[
            "faqs" => $faqs->selectAll(),
            "name" => "Thais"
        ]);
    }

    public function dishes () {
        echo $this->view->render("dishes");
    }

}