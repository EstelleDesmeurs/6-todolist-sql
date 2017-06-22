<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root', '12root++');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



function sanitize($x) { 
    $x = filter_var($x, FILTER_SANITIZE_STRING);
    $x = htmlspecialchars($x, FILTER_SANITIZE_STRING);    
    return $x;
}

function validate($y) {
    $y= filter_var($y, FILTER_VALIDATE_STRING);
    return $y;
}

$content = sanitize($_POST['content']);	
//print_r($content);

function todo {
		
		$req = $bdd->prepare(('INSERT INTO id, todo FROM todos) VALUES (?, false)');
		$req = execute->(array($content));
}

?>


