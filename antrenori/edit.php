<?php
 $name = isset($_POST['name']) ? trim($_POST['name']) : null;
 $varsta = isset($_POST['varsta']) ? trim($_POST['varsta']) : null;
 $clienti = isset($_POST['clienti']) ? trim($_POST['clienti']) : null;
 $userId = isset($_POST['userId']) ? $_POST['userId'] : null;
 $id = isset($_POST['id']) ? $_POST['id'] : null;

 if ($id && $userId && $name && strlen($name) > 0) {
   require_once('./readDb.php');   

   foreach($toDos as &$todo) {
     if ($todo['userId'] == $userId && $todo['id'] == $id) {
       $todo['name'] = $name;
       $todo['clienti'] = $clienti;
       $todo['varsta'] = $varsta;
     }
   }
   $stringData = json_encode($toDos);
   file_put_contents($dbFile, $stringData);   
   header('Location: index.php');       
 } else {
   header('Location: index.php');
 }
?>