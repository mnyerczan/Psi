<?php

class Database extends PDO
{
    function __construct($host, $db, $user, $pass)
    {        
        parent::__construct("mysql:host={$host};dbname={$db};charset=utf8",$user,$pass);
    }
}
