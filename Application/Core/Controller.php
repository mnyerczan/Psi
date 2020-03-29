<?php

abstract class Controller
{
    /**
     * A view függvény a kapott adatokat kibontja és átadja a layoutnak.
     * A $datas-nak tartalmaznia kell egy 'view' és egy 'title' kulcsot!
     * 
     * @param array $datas Datas from controller to view
     */
    function view($datas)
    {
        extract($datas);

        require_once APPPATH.'Templates/_layout.php';
    }
}