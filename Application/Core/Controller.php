<?php

abstract class Controller
{
    protected $db;
    /**
     * A view függvény a kapott adatokat kibontja és átadja a layoutnak.
     * A $datas-nak tartalmaznia kell egy 'view' és egy 'title' kulcsot!
     * 
     * @param array $datas Datas from controller to view
     */
    public function view($datas)
    {
        extract($datas);

        require_once APPPATH.'Templates/_layout.php';
    }
}