

 <form action="" method="post">
  <p>Eerste getal: <input type="number" name="First" /></p>
  <p>Tweede getal: <input type="number" name="Second" /></p>

  <input type="submit" name="Operator" value="Plus">
  <input type="submit" name="Operator" value="Min">
  <input type="submit" name="Operator" value="Keer">
  <input type="submit" name="Operator" value="Gedeeld">
  <input type="submit" name="Operator" value="Modulo">

 </form>

 <?php

  $a = (int)$_POST['First'];

  $b = (int)$_POST['Second'];

  // $Keer = $_POST['Keer'];
  // $Plus = $_POST['Plus'];
  // $Min = $_POST['Min'];
  // $Gedeeld = $_POST['Gedeeld'];
  // $Modulo = $_POST['Modulo'];

// if (isset($_POST["Operator"])) {
//   echo $_POST["Operator"];
// }

if (isset($_POST["Operator"])) {
  switch ($_POST["Operator"]) {
    case "Plus":
      $antwoord = $a += $b;
      echo $antwoord;
      break;

    case "Min":
      $antwoord = $a -= $b;
      echo $antwoord;
      break;

    case "Keer":
      $antwoord = $a *= $b;
      echo $antwoord;
      break;

    case "Gedeeld":
      $antwoord = $a /= $b;
      echo $antwoord;
      break;

    case "Modulo":
      $antwoord = $a %= $b;
      echo $antwoord;
      break;
  }
}
  ?>
