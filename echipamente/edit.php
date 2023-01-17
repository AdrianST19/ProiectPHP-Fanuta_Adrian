<?php
 $name = isset($_POST['name']) ? trim($_POST['name']) : null;
 $pret = isset($_POST['pret']) ? trim($_POST['pret']) : null;
 $furnizor = isset($_POST['furnizor']) ? trim($_POST['furnizor']) : null;
 $userId = isset($_POST['userId']) ? $_POST['userId'] : null;
 $id = isset($_POST['id']) ? $_POST['id'] : null;

 if ($id && $userId && $name && strlen($name) > 0) {
   require_once('./readDb.php');   

   foreach($toDos as &$todo) {
     if ($todo['userId'] == $userId && $todo['id'] == $id) {
       $todo['name'] = $name;
       $todo['furnizor'] = $furnizor;
       $todo['pret'] = $pret;
     }
   }
   $stringData = json_encode($toDos);
   file_put_contents($dbFile, $stringData);   
   header('Location: index.php');       
 } else {
   header('Location: index.php');
 }
?>