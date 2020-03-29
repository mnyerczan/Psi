<?php

class NotFoundController extends Controller
{

    function __construct()
    {       
        $this->Index();
    }

    public function Index()
    {
        $this->view([            
            "title" => "- Page Not Found",
            'view'  => '_404'
        ]);
    }
}