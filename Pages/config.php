<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=eldiabloairsoft;charset=utf8', 'root', '');
    }catch(Exeption $e)
    {
        die('Erreur' .$e->getmessage());
    }