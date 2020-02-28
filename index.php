<?php
    

    ini_set('display_errors', 1);

    define('APPPATH', 'Application/');

    /**
     * Az APPROOT szükséges ahhoz, hogy amennyiben nem nem a webszerver
     * győkérmappájában lakik az alkalmazásunk, a routing helyesen működjön.
     */
    define('APPROOT', '/Project');       

    /**
     * Az adatbázis kacsolódásho szükséges adatokat tartalmazó json fájl.
     */
    $confPath = 'config.json';
   

    require_once APPPATH.'Core/functions.php';
    require_once APPPATH.'Core/controllers.php';
    require_once APPPATH.'Database/database.php';
    /**
     * A core.php-ban megyünk tovább.
     */
    require_once APPPATH.'Core/core.php';    
    