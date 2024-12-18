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
  margin-right: 30px;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง ภาษา PHP และ bootstap </title>
</head>
<body>
    <h1> โปรแกรมการบันทึกข้อมูลหนังสือ  </h1>
    <br>
    <form class="row g-3">
  <div class="col-md-6">
    <label for="BookID" class="form-label">รหัสหนังสือ</label>
    <input type="text" class="form-control" id="BookID"placeholder="000045">
  </div>
  <div class="col-md-6">
    <label for="BookTitle" class="form-label">ชื่อหนังสือ</label>
    <input type="text" class="form-control" id="BookTitle"placeholder="นักเดินทาง">
  </div>
  <div class="col-6">
    <label for="Author" class="form-label">ชื่อผู้แต่ง</label>
    <input type="text" class="form-control" id="Author"placeholder="join rock">
  </div>
  <div class="col-6">
    <label for="Publisher" class="form-label">สำนักพิมพ์</label>
    <input type="text" class="form-control" id="Publisher" placeholder="น้ำพุ">
  </div>
  <div class="col-md-6">
    <label for="PublishYear" class="form-label">ปีที่พิมพ์</label>
    <input type="text" class="form-control" id="PublishYeary"placeholder="ค.ศ. 1922">
  </div>
  <div class="col-md-6">
    <label for="Genre" class="form-label">ประเภทหนังสือ</label>
    <input type="text" class="form-control" id="Genre"placeholder="วรรณกรรม">
  </div>
  <div class="col-md-6">
    <label for="NumberOfPages" class="form-label">จำนวนหน้า</label>
    <input type="text" class="form-control" id="NumberOfPages"placeholder="289 หน้า">
  </div>
  <div class="col-md-6">
    <label for="Price" class="form-label">ราคา</label>
    <input type="text" class="form-control" id="Price"placeholder="250">
  </div>
  <div class="col-md-6">
    <label for="Quantity" class="form-label">จำนวนเล่ม</label>
    <input type="text" class="form-control" id="Quantity"placeholder="1 เล่ม">
  </div>
  <div class="col-md-4">
    <label for="Status" class="form-label">สถานะ</label>
    <select id="Status" class="Status">
      <option selected>Choose...</option>
      <option>มีอยู่</option>
      <option>ยืม</option>
      <option>สูญหาย</option>
    </select>
  </div>
  <div class="col-12">
  <button type="button" class="btn btn-outline-primary"id="alert">บันทึกข้อมูล</button>
<button type="reset" class="btn btn-outline-danger"id="reset">ยกเลิกบันทึก</button>
</div>
</form>
<br><br>
    <h1> ผู้จัดทำ </h1>
    664485013 ศิวกร แก้วมีมาก <br>
    หมู่เรียน 66/96 <br>
    <br>


</body>
<!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').on('click', function(e) {
                e.preventDefault();
                var form = $('.pt_upld_page_frm');
                swal.fire({
                title: "คุณต้องการบันทึกข้อมูลหรือไม่?",
                 type: "warning",
                 showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "ใช่ทำการบันทึกข้อมูล!",
                    closeOnConfirm: false
                }, function(isConfirm) {
                    console.log("sdfsf");
                    if (isConfirm) form.submit();
                });
            });
        });
        
    </script>
</html>