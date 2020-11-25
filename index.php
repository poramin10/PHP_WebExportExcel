<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Image and text -->
                <nav class="navbar navbar-dark bg-primary">
                    <a class="navbar-brand" href="#">
                        Homepage
                    </a>
                    <form class="form-inline">
                        <a href="ForVehicle.php" class="btn btn-success mr-2" type="submit">Data Main For Vehicle</a>
                        <a href="ForCard.php" class="btn btn-success" type="submit">Data Main For Card</a>
                    </form>
                </nav>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-white">
                <h1 class="text-center">ระบบจัดการไฟล์ Excel</h1>
                <h3 class="text-center">วิธีการใช้งาน</h3>
                <p class="text-center">
                    1. เลือกหมวดที่ต้องการ <br>
                    2. ทำการเลือกไฟล์ Excel ที่จะ Import  <br>
                    3. ทำการกดปุุ่ม Import <br>
                    4. เมื่อได้ข้อมูลตามที่ต้องการ สามารถกดปุ่มเพื่อเลือก Export ตามที่ต้องการได้เลย <br>
                    <span class="text-danger">5. กรุณาทำการกดปุ่ม Delete หลังเสร็จสิ้นการใช้งาน เพื่อลบข้อมูลทั้งหมด และเตรียมการใช้งานครั้งถัดไป</span>  <br>

             
                    
                </p>
                <h3 class="text-center">หมายเหตุ</h3>
                <p class="text-center   ">หาก Import ข้อมูลผิดไฟล์ สามารถกด Delete เพื่อล้างค่าข้อมูลได้</p>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>