<?php

function homeController($datas)
{
    view([
        'view' => 'home'
    ]);
}

function notFoundController()
{
    view([
        'view' => '_404'
    ]);
}