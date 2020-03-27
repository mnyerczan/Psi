<?php

function homeController($datas)
{
    view([
        "home"  => 'active',
        "title" => "- Home",
        'view'  => 'home'
    ]);
}

function aboutController($datas)
{
    view([
        "about"  => 'active',
        "title" => "- About",
        'view'  => 'about'
    ]);
}


function notFoundController()
{
    view([        
        "title" => "- Page Not Found",
        'view' => '_404'
    ]);   
}
