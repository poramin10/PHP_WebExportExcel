<?php
$url = 'localhost';
$username = 'poraminr_webExport';
$password = 'NDezWDo8O';
$conn = mysqli_connect($url, $username, $password, "poraminr_webExport");
if (!$conn) {
  echo "Error";
}
if (isset($_POST["delete"])) {
  $sql = "DELETE FROM `data` WHERE `data`.`RFID10digit` = `RFID10digit`";
  $result = $conn->query($sql);
  if ($result) {
    echo '<script> alert("Delete Data Success!!")</script>';
    header('Refresh:0 url=./ForCard.php');
  } else {
    echo "Sorry! Unable to impo.";
  }
}
