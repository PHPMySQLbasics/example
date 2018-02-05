<?php

$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'mydb';

try
{
    $con = new PDO('mysql:host='.$server.
        ';dbname='.$db.';charset=utf8', $user, $pwd);
} catch(Exception $e)
{
    switch($e->getCode())
    {
        case 1049:
            echo 'Datenbank '.$db.' nicht vorhanden!<br>';
            break;
        default:
            echo $e->getMessage();
    }

}