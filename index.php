<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Sport Club SUT</title>


  <link rel="stylesheet" href="css/reset.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/myscript.js"></script>

  <style>
    .loginB {
      -moz-box-shadow:inset 0px 1px 0px 0px #f29c93;
      -webkit-box-shadow:inset 0px 1px 0px 0px #f29c93;
      box-shadow:inset 0px 1px 0px 0px #f29c93;
      background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fe1a00), color-stop(1, #ce0100));
      background:-moz-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
      background:-webkit-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
      background:-o-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
      background:-ms-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
      background:linear-gradient(to bottom, #fe1a00 5%, #ce0100 100%);
      filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe1a00', endColorstr='#ce0100',GradientType=0);
      background-color:#fe1a00;
      -moz-border-radius:6px;
      -webkit-border-radius:6px;
      border-radius:6px;
      width: 100% ;
      border:1px solid #d83526;
      display:inline-block;
      cursor:pointer;
      color:#ffffff;
      font-family:Arial;
      font-size:15px;
      font-weight:bold;
      padding:10px 76px;
      text-decoration:none;
      text-shadow:0px 1px 0px #b23e35;
    }
    .loginB:hover {
      background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ce0100), color-stop(1, #fe1a00));
      background:-moz-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
      background:-webkit-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
      background:-o-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
      background:-ms-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
      background:linear-gradient(to bottom, #ce0100 5%, #fe1a00 100%);
      filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ce0100', endColorstr='#fe1a00',GradientType=0);
      background-color:#ce0100;
    }
    .loginB:active {
      position:relative;
      top:1px;
    }

    .inputA 
    { 
      background:#FFFFFF;
      color:#000;
      border:1px solid #DCDCDC;
      border-radius:2px ;
      font-size:17px ;
      height: 40px;
      line-height:28px ;
      width: 98% ;
      padding: 2px ;
      box-shadow: 0px 0px 8px #DCDCDC; 
      -webkit-box-shadow: 0px 0px 8px #DCDCDC; 
      -moz-box-shadow: 0px 0px 8px #DCDCDC; 
    }

  </style>


</head>

<body>


  <div class="container">
    <div class="info">
      <h1>เข้าสู่ระบบ</h1><span>Sport Club <i class="fa fa-heart"></i> @ <a href="http://sport.wuttinunt.me">SUT</a></span>
    </div>
  </div>
  <div class="form">
    <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input class="inputA" type="text" id="username" placeholder="รหัสนักศึกษา" autocomplete="off" />
      <input class="inputA" type="password" id="password" placeholder="รหัสผ่าน"/>
      <input class="loginB" id="loginB" type="submit" value="Login" onclick="validate()">
      <p class="message">ยังไม่มีบัญชี? <a href="http://sport.wuttinunt.me/register.php">สมัครสมาชิก</a></p>
    </form>
  </div>
  <video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
    <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
  </video>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="js/index.js"></script>




</body>
</html>
