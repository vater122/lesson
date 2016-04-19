<?php

function __autoload($className)
{
    if(file_exists(__DIR__ . '/controllers/' . $className . '.php' )){
        require __DIR__ . '/controllers/' . $className . '.php';
    }
    if(file_exists(__DIR__ . '/components/' . $className . '.php' )){
        require __DIR__ . '/components/' . $className . '.php';
    }
    if(file_exists(__DIR__ . '/models/' . $className . '.php' )){
        require __DIR__ . '/models/' . $className . '.php';
    }

}