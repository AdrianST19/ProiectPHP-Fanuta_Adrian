<?php
 $name = isset($_POST['name']) ? trim($_POST['name']) : null;
 $durata = isset($_POST['durata']) ? trim($_POST['durata']) : null;
 $calorii = isset($_POST['calorii']) ? trim($_POST['calorii']) : null;
 $userId = isset($_POST['userId']) ? $_POST['userId'] : null;
 $id = isset($_POST['id']) ? $_POST['id'] : null;

 if ($id && $userId && $name && strlen($name) > 0) {
   require_once('./readDb.php');   

   foreach($toDos as &$todo) {
     if ($todo['userId'] == $userId && $todo['id'] == $id) {
       $todo['name'] = $name;
       $todo['calorii'] = $calorii;
       $todo['durata'] = $durata;
     }
   }
   $stringData = json_encode($toDos);
   file_put_contents($dbFile, $stringData);   
   header('Location: index.php');       
 } else {
   header('Location: index.php');
 }
?>