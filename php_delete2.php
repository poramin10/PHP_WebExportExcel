<?php
$url = 'localhost';
$username = 'poraminr_webExport';
$password = 'NDezWDo8O';
$conn = mysqli_connect($url, $username, $password, "poraminr_webExport");
if (!$conn) {
  echo "Error";
}
if (isset($_POST["delete"])) {
  $sql = "DELETE FROM `data2` WHERE `data2`.`PlateNo` = `PlateNo`";
  $result = $conn->query($sql);
  if ($result) {
    echo '<script> alert("Delete Data Success!!")</script>';
    header('Refresh:0 url=./ForVehicle.php');
  } else {
    echo "Sorry! Unable to impo.";
  }
}
