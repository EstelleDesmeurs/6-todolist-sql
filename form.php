<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

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


//$content = sanitize($_POST['content']); 
$todos = array(
    "todo" => "eeeee",
    "done" => false);
print_r($todos);

// if (isset($content)) {
    function todo () {

    //     $req = $bdd->prepare('INSERT INTO todos(todo, done) VALUES(:todo, :done)');
    //     $req->execute(array(
    //     'todo' => $content,
    //     'done' => false
    //     ));
    // }
//}        
    $req = $bdd->prepare('INSERT INTO todos(ID, todo, done) VALUES("", "aller à la commune", false)');
    $req->execute(array($todos));
    $req->closeCursor();
}
?>
