<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class='modal fade' id='alert' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' data-keyboard='false' data-backdrop='static' aria-hidden='true' style='margin: 0px 0px; overflow-y: hidden;'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <!--<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>-->
            <h4 class='modal-title' id='myModalLabel'>ข้อควรทราบเกี่ยวกับ การเติมเงินเพื่อเปลี่ยนชื่อ Facebook !!!</h4>
          </div>
          <div class='modal-body' style='text-align: center'>
            <h4>เงื่อนไขข้อตกลงในการเปลี่ยนชื่อ Facebook</h4>
            ผู้ใช้บริการยอมรับที่จะเปิดเผยรหัสส่วนตัวให้กับเรา เพื่อดำเนินการเปลี่ยนชื่อ Facebook <br>กรณีการเปลี่ยนชื่อ Facebook ครบกำหนดซึ่งทำให้ไม่สามารถเปลี่ยนได้ <br>ทางเราขอสงวนสิทธิ์ในการคืนเงิน<b> กรุณาตรวจสอบและเติมเงินด้วยความระมัดระวัง</b> <br><h5 style='color: red;'><b>หากเกิดข้อผิดพลาดทางเราจะไม่รับผิดชอบทุกกรณี !!!</b></h5>
            <br>
            <button class='btn btn-danger btn-block login' type='button' onclick='javascript:accept();'>ฉันเข้าใจและยอมรับ</button>
          </div>
        </div>
      </div>
    </div>



<script>
$('#alert').modal('show');
      function home(){
        window.location.assign("http://fb.wuttinunt.me");
      };
</script>

</body>
</html>

