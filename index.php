<?php    

    ini_set('display_errors', 1);

    define('APPPATH', 'Application/');

    /**
     * Az APPROOT szükséges ahhoz, hogy amennyiben nem nem a webszerver
     * győkérmappájában lakik az alkalmazásunk, a routing helyesen működjön.
     * 
     * Pl.: winsql.vereb.dc/diakXX/feladat/index.php
     *    ekkor:              --> /feladat
     */
    define('APPROOT', '');       

    /**
     * Az adatbázis kacsolódásho szükséges adatokat tartalmazó json fájl.
     */
    define('CONFPATH', 'config.json');
   
    /**
     * Az URL szétszedése. Első körben megtisztítjuk a ?-jel utáni
     * query_string-től.
     */
    $uriPart = explode('?', $_SERVER['REQUEST_URI'])[0]; 

    /**
     * Második körben az APPROOT értékét kivágjuk az URL-ből.
     */
    $cleanedUri = str_replace(APPROOT, '', $uriPart);

    /**     
     * A $stepBack változó, ha a tisztított url üres string,
     * vagyis a tratalmazó mappa végén nem szerepel /-jel, akkor
     * értékül kapja az APPROOT konstanst egy / jellel megtoldva.
     * Ez ahhoz kell, hogy a css letöltés ne egy mappával a projektmappa 
     * fölött keresse az APPPATH mappát.
     */ 
    $stepBack = $cleanedUri == '' ? APPROOT.'/' : '';

    /** 
     * Aktuális gyökérmappa visszakeresése és a visszalépés (STEPBACK) 
     * konstans definiálása. A példában a böngésző a /jhhj/Application/Style/style.css-t
     * keresné, mert az url-ben a /jhhj/ az aktuális mappa, amihez hozzáfűzi 
     * a kapott path. Ezért nekünk ki kell számolni, hogy hány mappával feljebb található
     * az Application mappa, hogy a kérés helyes útvonalra mutasson. Mivel az explode függvény
     * a /jhhj/ stringet a / jelek mentén három részre osztja, de nekünk innen csak egyel kell
     * visszalápnünk, ezért:
     * Pl.: /jhhj/ 
     *      0 => string '' (length=0)
     *      1 => string 'jhhj' (length=4)
     *      2 => string '' (length=0)
     * 
     * ...a ciklusnak 2-től kell indulnia
     */       
    for($i = 2; $i< count(explode('/', $cleanedUri)); $i++)
    {
        $stepBack .= '../';
    }
    define('STEPBACK', $stepBack);




    /**
     * Az Application objektum indítja az alkalmazást és végzi el a megfelelő kontroller meghívását.
     */
    require_once APPPATH.'Core/Application.php';      
    
    (new Application($cleanedUri))->Index();
    