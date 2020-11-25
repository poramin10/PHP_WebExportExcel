<?php
if (isset($_POST["submit"]) && isset($_FILES['file']['tmp_name'])) {

  $url = 'localhost';
  $username = 'poraminr_webExport';
  $password = 'NDezWDo8O';
  $conn = mysqli_connect($url, $username, $password, "poraminr_webExport");
  if (!$conn) {
    echo "Error";
  }

  $file = $_FILES['file']['tmp_name'];
  $handle = fopen($file, "r");
  $c = 0;
  while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {

    if ($c >= 1) {
      $RFID10digit = $filesop[2];
      $EN = $filesop[1];
      $NameSurname = $filesop[3];
      $EmployeeType = $filesop[4];
      $Department = $filesop[5];
      $Column2 = $filesop[10];

      $sql = "insert into data(RFID10digit,EN,NameSurname,EmployeeType,Department,Column2) values ('$RFID10digit','$EN','$NameSurname','$EmployeeType','$Department','$Column2')";
      $stmt = mysqli_prepare($conn, $sql) or die(mysqli_error($conn));
      mysqli_stmt_execute($stmt);
    }

    $c = $c + 1;
  }

  if ($sql) {
    echo '<script> alert("Import Excel Success!!")</script>';
    header('Refresh:0 url=./ForCard.php');
  } else {
    echo "Sorry! Unable to impo.";
  }
}
