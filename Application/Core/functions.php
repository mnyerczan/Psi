<?php
/**
 * Kiolvassa a konfigurációs állomány tartalmát és tömbben adja vissza.
 * 
 * @param string $path Path of configuratin file
 * 
 * @return array Content of readed file
 */
function getConfig($confPath)
{
    return json_decode( file_get_contents($confPath),true);
}

/**
 * @param string $message Kiírandó Hibaüzenet
 */
function errorLog($message)
{   
    
    $path       = APPPATH.'Log/dberror.log';
    $msg        = "[".date('Y-m-d H:i:s')."]".$message.PHP_EOL;

    return file_put_contents($path, $msg);
}