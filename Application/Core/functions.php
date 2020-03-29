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

