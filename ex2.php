<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- เพิ่ม sweetaleart  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
    body{
  font-family: "Kanit", serif;
  font-weight: 400px;
  font-style: normal;
  margin-left: 30px;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง ภาษา PHP และ bootstap </title>
</head>
<body>
    <h1> การเขียนโปรแกรมด้วย PHP </h1>
    664485013 ศิวกร แก้วมีมาก <br>
    หมู่เรียน 66/96 <br>


    <div class="alert alert-info">
  <strong>สำเร็จ!</strong> Indicates a successful or positive action.
</div>
    <button type="button" class="btn btn-success">กดบันทึก</button>
    <button type="button" class="btn btn-danger">ยกเลิกบันทึก</button> <br>
    <br>
    <div class="card bg-dark text-white">
    <div class="card-body">ยินดีต้อนรับ</div>
  </div>
  <br>
  <div class="card" style="width:400px">
  <img class="card-img-top" src="pic6.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-text">ศิวกร แก้วมีมาก</h4>
    <p class="card-text">คติประจำใจ: </p>
    <a href="https://youtu.be/QLCpqdqeoII?si=MW7WP8gkrhskQP19" class="btn btn-primary">See Profile</a>
  </div>
</div>
<br><br>
<button type="button" class="btn btn-outline-primary"id="alert">ทดสอบการใช้งาน</button>
<button type="button" class="btn btn-outline-danger"id="alert2">ไม่ทดสอบการใช้งาน</button>




</body>
<!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                            'success'
                );
            });
            $('#alert2').click(function() {
                Swal.fire(
                    'ดีมาก!',
                    'คุณกดปุ่มแล้ว!',
                            'success'
                );
            });
        });
        
    </script>
</html>