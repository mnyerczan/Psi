<?php 

class AboutController extends Controller
{        
    function __construct($matches)
    {      
        $this->Index();
    }

    private function Index()
    {
        $this->view([            
            "about"  => 'active',
            "title" => "- About",
            'view'  => 'about'            
        ]);
    }
}