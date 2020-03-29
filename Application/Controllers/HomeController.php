<?php

class HomeController extends Controller
{
    function __construct()
    {       
        $this->Index();
    }

    private function Index()
    {

        $this->view([
            "home"  => 'active',
            "title" => "- Home",
            'view'  => 'home'
        ]);
    }
}