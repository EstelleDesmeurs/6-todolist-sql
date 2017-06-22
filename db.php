<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root', '12root++');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>