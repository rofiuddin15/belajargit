<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>PHP FORM</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Username</td>
        <td><input type="text" name="user" id=""></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="pass" id=""></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit">Login</button></td>
      </tr>
    </table>
  </form>
  <?php
    $username = $_REQUEST['user'];
    $password = $_REQUEST['pass'];

    if ($username == 'kambing' && $password == '12345678')
    {
      echo "anda berhasil masuk! hore";
    } else {
      echo "password anda salah! dul";
    }
  ?>
</body>
</html>

<?php
//$halo = "<h1>halo gaes...</h1>";
// $hewan =  'kambing';
// $uang = 200;
// $harta = ["mobil", "jet", "pesawat antariksa", "rumah", "emas batangan"];

// include("oncom.php");

// echo $kue;

// var_dump($harta);
// echo "<table border='1'>";
// foreach ($harta as $value) {
//   echo "<tr>";
//   echo "<td>$value</td>";
//   echo "</tr>";
// }
// echo "</table>";

// echo $halo . $hewan;