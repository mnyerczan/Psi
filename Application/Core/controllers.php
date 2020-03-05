<?php

function homeController($datas)
{
    view([
        "title" => "- Home",
        'view' => 'home'
    ]);
}


function notFoundController()
{
    view([
        "title" => "- Page Not Found",
        'view' => '_404'
    ]);    
}

function errorController()
{
    view([
        "title" => "- Something is wrong while page loaded",
        'view' => '_error'
    ]);    
}