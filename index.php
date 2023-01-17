<?php
if (isset($_POST['button1'])) {
  // Redirect to the specified URL when button1 (Clienti) is clicked
  header('Location: http://localhost/fanuta_adrian_proiect_php/clienti/index.php');
  exit;
} elseif (isset($_POST['button2'])) {
  // Redirect to the specified URL when button2 (Antrenori) is clicked
  header('Location: http://localhost/fanuta_adrian_proiect_php/antrenori/index.php');
  exit;
} elseif (isset($_POST['button3'])) {
  // Redirect to the specified URL when button3 (Abonamente) is clicked
  header('Location: http://localhost/fanuta_adrian_proiect_php//abonamente/index.php');
  exit;
} elseif (isset($_POST['button4'])) {
  // Redirect to the specified URL when button4 (Clase) is clicked
  header('Location: http://localhost/fanuta_adrian_proiect_php/clase/index.php');
  exit;
} elseif (isset($_POST['button5'])) {
  // Redirect to the specified URL when button5 (Locatii) is clicked
  header('Location: http://localhost/fanuta_adrian_proiect_php/locatii/index.php');
  exit;
} elseif (isset($_POST['button6'])) {
  // Redirect to the specified URL when button6 (Echipamente) is clicked
  header('Location: http://localhost/fanuta_adrian_proiect_php/echipamente/index.php');
  exit;
} elseif (isset($_POST['button7'])) {
  // Redirect to the specified URL when button7 (Programe de Nutritie) is clicked
  header('Location: http://localhost/fanuta_adrian_proiect_php/nutritie/index.php');
  exit;
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>

  <style>
  body {
    background-color: #6B5B95;
  }
</style>
</head>
<body>
<h1>Fanuta Adrian Stefan-CRUD Fitness Gym</h1>
  <h3>Mai jos puteti accesa urmatoarele tabele, iar mai departe puteti crea, citi, modifica sau sterge date din acestea:</h3>


  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="submit" name="button1" value="Clienti" style="background-color: lightgreen; height: 50px; width: 100px; margin: 1cm;" />
  <input type="submit" name="button2" value="Antrenori" style="background-color: lightgreen; height: 50px; width: 100px; margin: 1cm;" />
  <input type="submit" name="button3" value="Abonamente" style="background-color: lightgreen; height: 50px; width: 100px; margin: 1cm;" />
  <input type="submit" name="button4" value="Clase" style="background-color: lightgreen; height: 50px; width: 100px; margin: 1cm;" />
  <input type="submit" name="button5" value="Locatii" style="background-color: lightgreen; height: 50px; width: 100px; margin: 1cm;" />
  <input type="submit" name="button6" value="Echipamente" style="background-color: lightgreen; height: 50px; width: 100px; margin: 1cm;" />
  <input type="submit" name="button7" value="Nutritie" style="background-color: lightgreen; height: 50px; width: 100px; margin: 1cm;" />
</form>

</body>
</html>

