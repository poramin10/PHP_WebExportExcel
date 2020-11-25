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
            $PlateNo = $filesop[14];
            $Brand = $filesop[17];
            $Modal = $filesop[18];
            $Color = $filesop[19];
            $LicensePlateProvinceNo1 = $filesop[16];
            $Column2 = $filesop[12];
            $EN1 = $filesop[1];
            $EN2 = $filesop[2];
            $EN3 = $filesop[3];

            $sql = "insert into data2(PlateNo,Brand,Model,Color,LicensePlateProvinceNo1,Column2,EN1,EN2,EN3) values ('$PlateNo','$Brand','$Modal','$Color','$LicensePlateProvinceNo1','$Column2','$EN1','$EN2','$EN3')";
            $stmt = mysqli_prepare($conn, $sql) or die(mysqli_error($conn));
            mysqli_stmt_execute($stmt);
        }
        $c = $c + 1;
    }

    if ($sql) {
        echo '<script> alert("Import Excel Success!!")</script>';
        header('Refresh:0 url=./ForVehicle.php');
    } else {
        echo "Sorry! Unable to impo.";
    }
}
