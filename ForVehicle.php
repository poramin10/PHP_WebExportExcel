<?php
$url = 'localhost';
$username = 'poraminr_webExport';
$password = 'NDezWDo8O';
$conn = mysqli_connect($url, $username, $password, "poraminr_webExport");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Main For Vehicle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- DataTables -->
    <link rel="stylesheet" href="./plugin/datatables/dataTables.bootstrap4.min.css">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Image and text -->
                <nav class="navbar navbar-dark bg-primary">
                    <a class="navbar-brand" href="#">
                        Data Main For Vehicle
                    </a>
                    <form class="form-inline">
                        <a href="ForCard.php" class="btn btn-success mr-2" type="submit">Data Main For Card</a>
                        <a href="index.php" class="btn btn-danger" type="submit">Back</a>
                    </form>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 3rem">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">หน้า Form การ Uplaod Data Main For Vehicle </h5>
                    <div class="card-body">
                        <form action="php_Import2.php" enctype="multipart/form-data" method="post" role="form">
                            <div class="form-group">
                                <label for="exampleInputFile">File Excel Upload </label>
                                <input type="file" class="form-control" name="file" id="file" size="150" required>
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Import</button>
                        </form>
                        <form action="php_delete2.php" method="post">
                            <button type="delete" name="delete" value="delete" class="btn btn-danger mt-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php
        $sql = "SELECT * FROM `data2`";
        $result = $conn->query($sql);


        ?>

        <div class="row" style="margin-top: 3rem">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Table Excel</h5>
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr class="text-center">
                                    <th>PlateNo</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Color</th>
                                    <th>Ticket</th>
                                    <th>Photo</th>
                                    <th>VehicleStatus</th>
                                    <th>VehicleType</th>
                                    <th>ActivationDate</th>
                                    <th>DeactivationDate</th>
                                    <th>Deactivation</th>
                                    <th>CardNo</th>
                                    <th>CodeType</th>
                                    <th>UserDefine01</th>
                                    <th>UserDefine02</th>
                                    <th>UserDefine03</th>
                                    <th>UserDefine04</th>
                                    <th>UserDefine05</th>
                                    <th>UserDefine06</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $row['PlateNo'] ?></td>
                                        <td><?php echo $row['Brand'] ?></td>
                                        <td><?php echo $row['Model'] ?></td>
                                        <td><?php echo $row['Color'] ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "0" ?></td>
                                        <td><?php echo "0" ?></td>
                                        <td><?php echo "1" ?></td>
                                        <td><?php echo "1" ?></td>
                                        <td><?php echo ""  ?></td>
                                        <td><?php echo ""  ?></td>
                                        <td><?php echo "0" ?></td>
                                        <td><?php echo $row['LicensePlateProvinceNo1'] ?></td>
                                        <td><?php echo $row['Column2'] ?></td>
                                        <td><?php echo $row['EN1'] ?></td>
                                        <td><?php echo $row['EN2'] ?></td>
                                        <td><?php echo $row['EN3'] ?></td>
                                        <td><?php echo ""   ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>PlateNo</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Color</th>
                                    <th>Ticket</th>
                                    <th>Photo</th>
                                    <th>VehicleStatus</th>
                                    <th>VehicleType</th>
                                    <th>ActivationDate</th>
                                    <th>DeactivationDate</th>
                                    <th>Deactivation</th>
                                    <th>CardNo</th>
                                    <th>CodeType</th>
                                    <th>UserDefine01</th>
                                    <th>UserDefine02</th>
                                    <th>UserDefine03</th>
                                    <th>UserDefine04</th>
                                    <th>UserDefine05</th>
                                    <th>UserDefine06</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- DataTable -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="./plugin/datatables/dataTables.bootstrap4.min.js"></script>

</html>

<style>
    #file {
        height: initial !important;
    }
</style>

<script>
    $(function() {
        $('#dataTable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>