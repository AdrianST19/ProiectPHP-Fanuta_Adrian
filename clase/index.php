<?php 
  $name = 'Fanuta Adrian Stefan-Proiect';   
  
  require_once('./readDb.php');


  if (isset($_POST['button1'])) {
    // Redirect to the specified URL when button1 (Clienti) is clicked
    header('Location: http://localhost/fanuta_adrian_proiect_php/index.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $name ?></title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}


.big-green-button {
  height: 50px;
  width: 100px;
  background-color: green;
  margin-top: 10px;
}

body {
    background-color: #FF0033;
  }

</style>
</head>
<body>
<h3>Fanuta Adrian Stefan-CRUD Fitness Gym</h3>
  <h5>Mai jos puteti crea, citi, modifica sau sterge date din tabela clase:</h5>

<button class="accordion">Sectiunea Clase</button>
<div class="panel">
  <?php include_once('./addForm.php'); ?>    
  <?php include_once('./table.php'); ?>    
</div>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="submit" name="button1" value="Inapoi" style="height: 50px; width: 100px; background-color: green; margin-top: 10px;float: right;" />
</form>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
      sessionStorage.setItem("accordionState", "closed");
    } else {
      panel.style.display = "block";
      sessionStorage.setItem("accordionState", "open");
    }
  });
  acc[i].nextElementSibling.addEventListener("click", function(event) {
    event.stopPropagation();
  });
}

// Check the stored state of the accordion when the page loads
var storedState = sessionStorage.getItem("accordionState");
if (storedState === "open") {
  acc[0].classList.add("active");
  acc[0].nextElementSibling.style.display = "block";
}
</script>

</body>
</html>