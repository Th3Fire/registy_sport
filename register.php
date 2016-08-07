<!DOCTYPE html>
<html>
<head>
	<title>สมัครสมาชิก Sport Club SUT</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Itim|Mitr" rel="stylesheet">

	<style>
		body{
			background: url("img/sport_bg.jpg") no-repeat center center fixed;
			-moz-background-size: cover;
			-webkit-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			font-family: 'Itim', cursive;
		}

		input:required:invalid, input:focus:invalid {
			background-image: url(img/invalid.png);
			background-position: right center;
			background-repeat: no-repeat;
		}
		input:required:valid {
			background-image: url(img/valid.png);
			background-position: right center;
			background-repeat: no-repeat;
		}

		input:required:invalid, input:focus:invalid {
			background-image: url(img/invalid_1.png);
			background-position: right center;
			background-repeat: no-repeat;
		}
		input:required:valid {
			background-image: url(img/valid_1.png);
			background-position: right center;
			background-repeat: no-repeat;
		}

	</style>
	

</head>
<body>
	<br>
	<div id='main'>
		<article><!-- Content -->
			<div class="containerA">
				<br>
				<center><p><font face="Itim" size="5"><b>แบบฟอร์มสมัครสมาชิก Sport Club SUT</b></font></p></center>
				<p><font color="red">&nbsp;&nbsp;ข้อควรระวัง</font></p>
				<p><font color="red">&nbsp;&nbsp;* รหัสนักศึกษาสามารถสมัครสมาชิกได้เพียงครั้งเดียว<u> เท่านั้น</u></font></p>
				<p><font color="red">&nbsp;&nbsp;** กรอกข้อให้ถูกต้องและใช้อีเมลที่มีอยู่จริง <u>เท่านั้น</u> เพราะต้องใช้ยืนยันการสมัคร</font></p>
				<form action="get_data.php" method="POST" name="save" id="save">
					<table width="100%" border="0px">
						<th width="30%"></th>
						<th width="50%"></th>
						<th width="10%"></th>

						<tr class="spaceUnder">
							<td align="right">คำนำหน้า :&nbsp;</td>
							<td style="padding: 0px">
								<select name="prefix" required class="selectPrefix">
									<option value="นาย">นาย</option>
									<option value="นาง">นาง</option>
									<option value="นางสาว">นางสาว</option>
								</select>
							</td>
							<td></td>
						</tr>

						<tr class="spaceUnder">
							<td align="right">ชื่อ :&nbsp;</td>
							<td style="padding: 0px"><input class="inputA" type="text" name="fname" id="fname" maxlength="50" required placeholder="โปรดระบุ" pattern='[^0-9!@#$%^&*()_+\-=\[\]{};:"\\|,.<>\/?]*$' ></td>
							<td></td>
						</tr>

						<tr class="spaceUnder">
							<td align="right">นามสกุล :&nbsp;</td>
							<td style="padding: 0px"><input class="inputA" type="text" name="lname" id="lname" maxlength="50" required placeholder="โปรดระบุ" pattern='[^0-9!@#$%^&*()_+\-=\[\]{};:"\\|,.<>\/?]*$' ></td>
							<td></td>
						</tr>

						<tr class="spaceUnder">
							<td align="right">เพศ :&nbsp;</td>
							<td style="padding: 0px">
								<select class="selectGender" name="sex" required>
									<option value="ชาย">ชาย</option>
									<option value="หญิง">หญิง</option>
								</select>
							</td>
							<td></td>
						</tr>

						<tr class="spaceUnder">
							<td align="right">วันเกิด :&nbsp;</td>
							<td style="padding: 0px">
								<select class="selectDay" name="day" >
									<?php
									for($i=1;$i<=31;$i++)
										{ echo '<option value='.$i.'>'.$i.'</option>';}
									?>
								</select>
								<select class="selectMonth" name="month" required>
									<option value="1">มกราคม</option>
									<option value="2">กุมภาพันธ์</option>
									<option value="3">มีนาคม</option>
									<option value="4">เมษายน</option>
									<option value="5">พฤษภาคม</option>
									<option value="6">มิถุนายน</option>
									<option value="7">กรกฎาคม</option>
									<option value="8">สิงหาคม</option>
									<option value="9">กันยายน</option>
									<option value="10">ตุลาคม</option>
									<option value="11">พฤศจิกายน</option>
									<option value="12">ธันวาคม</option>

								</select>


								<select class="selectYear" name="year" >
									<?php
									$year = date("Y");
									for($i=1980;$i<=$year;$i++)
									{
										if($i == $year){
											echo '<option selected="selected" value='.$i.'>'.$i.'</option>';
										}else
										echo '<option value='.$i.'>'.$i.'</option>';

									}
									?>
								</select>
							</td>
							<td></td>
						</tr>

						<tr class="spaceUnder">
							<td align="right">น้ำหนัก :&nbsp;</td>
							<td style="padding: 0px"><input class="inputB" type="number" min="0" max="150" name="weight" required >
								กิโลกรัม.&nbsp;</td>
								<td></td>
							</tr>

							<tr class="spaceUnder">

								<td align="right">ส่วนสูง :&nbsp;</td>
								<td style="padding: 0px"><input class="inputB" type="number" min="0" max="220"  name="height" required pattern="/\d{3}/" >
									เซนติเมตร.</td>
									<td></td>
								</tr>

								<tr class="spaceUnder">

									<td align="right">สาขาวิชา :&nbsp;</td>
									<td style="padding: 0px">
										<input class="inputA" type="text" name="major" required placeholder="ex. วิศวกรรมคอมพิวเตอร์" >
									</td>
									<td></td>
								</tr>

								<tr class="spaceUnder">

									<td align="right">เบอร์โทรศัพท์ มือถือ :&nbsp;</td>
									<td style="padding: 0px">
										<input class="inputA" type="text" name="tel" maxlength="10" required placeholder="ex. 0812345678" pattern="^[0]\d{9}$" >
									</td>
									<td></td>
								</tr>

								<tr class="spaceUnder">

									<td align="right"><font color="red">รหัสนักศึกษา :&nbsp;</font></td>
									<td style="padding: 0px"><input class="inputA" type="text" name="id_student" maxlength="8" required placeholder="ex. B5601234" pattern="^[B,M,D]{1}\d{7}$" ></td>
									<td></td>
								</tr>


								<tr class="spaceUnder">

									<td align="right">รหัสผ่าน :&nbsp;</td>
									<td style="padding: 0px"><input class="inputA" type="password" name="txt_pass" id="txt_pass" maxlength="20" required pattern=".{5,20}" placeholder="ความยาวรหัสผ่านระหว่าง 5-20 ตัวอักษร เท่านั้น"></td>
									<td></td>
								</tr>

								<tr class="spaceUnder">

									<td align="right">ยืนยันรหัสผ่าน :&nbsp;</td>
									<td><input class="inputA" type="password" name="con_pass" id="con_pass" maxlength="20" required pattern=".{5,20}" placeholder="ความยาวรหัสผ่านระหว่าง 5-20 ตัวอักษร เท่านั้น"></td>
									<td></td>
								</tr>

								<tr class="spaceUnder">

									<td align="right"><font color="red">อีเมล :&nbsp;</font></td>
									<td style="padding: 0px"><input class="inputA" type="text" name="txt_email" id="txt_email" maxlength="50" required placeholder="ex. example@domain.com" pattern='^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$' ></td>
									<td></td>
								</tr>

								<tr class="spaceUnder">

									<td align="right"><font color="red">ยืนยันอีเมล :&nbsp;</font></td>
									<td style="padding: 0px"><input class="inputA" type="text" name="con_email" id="con_email" required placeholder="ex. example@domain.com" ></td>
									<td></td>
								</tr>

							</table>

							<div>
								<center>
									<br>
									<input class="submit" id="submit" type="submit" name="submit" value="ยืนยัน">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="cancle" id="reset" type="reset" name="reset" value="ยกเลิก">
								</center>
							</div>
						</form>
						<br>

					</div>
				</article>

				<div class="navside">
				</div><!-- Left side -->
				<aside><!-- Right side -->
				</aside><!-- Right side -->
			</div>

			<!--   Modal      -->
			<!--
			<div class='modal fade' id='alert' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' data-keyboard='false' data-backdrop='static' aria-hidden='true' style='margin: 0px -280px;'>
				<div class='modal-dialog'>
					<div class='modal-content'>
						<div class='modal-header'>
							<!--<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>-->
							<!--<h3 class='modal-title' id='myModalLabel'>แจ้งเตือน</h3>
						</div>
						<div class='modal-body' style='text-align: center'>
							
							<h3 style='color: red;'><b>สามารถสมัครสมาชิกได้ 1 ครั้ง ต่อ 1 รหัสนักศึกษา</b></h5><br>
								<h4>หากระบุอีเมลที่ใช้สมัครสมาชิกผิดจะไม่เปิดใช้งานบัญชีได้</h2>
									<br>
									<button class='btn btn-primary btn-block login' type='button' onclick='javascript:accept();'>ยืนยันสมัครสมาชิก</button>
									<button class='btn btn-danger btn-block login' type='button' onclick='javascript:hidModal();'>ยกเลิก</button>
								</div>
							</div>
						</div>
					</div>

				-->
				<!--   Modal      -->

				<script>

				var form = document.getElementById('save'); // form has to have ID: <form id="formID">
				form.noValidate = true;
				form.addEventListener('submit', function(event) { // listen for form submitting
					if (!event.target.checkValidity()) {
				            event.preventDefault(); // dismiss the default functionality
				            if($('#fname').val() == '' ){
				            	document.getElementById("fname").focus();
				            }else if($('#lname').val() == ''){
				            	document.getElementById("lname").focus();
				            }else if($('#weight').val() == ''){
				            	document.getElementById("weight").focus();
				            }else if($('#height').val() == ''){
				            	document.getElementById("height").focus();
				            }else if($('#major').val() == ''){
				            	document.getElementById("major").focus();
				            }else if($('#tel').val() == ''){
				            	document.getElementById("tel").focus();
				            }else if($('#id_student').val() == ''){
				            	document.getElementById("id_student").focus();
				            }else if($('#txt_pass').val() == ''){
				            	document.getElementById("txt_pass").focus();
				            }else if($('#txt_email').val() == ''){
				            	document.getElementById("txt_email").focus();
				            }else if($('#con_email').val() == ''){
				            	document.getElementById("con_email").focus();
				            }


				        }
    				}, false);
						/*function hidModal(){
							$('#alert').modal('hide');
						}

						$(document).ready(function(){
							$("#myBtn").click(function(){
								$("#myModal").modal();
							});
						});

						$(document).ready(function(){
							$("#submit").click(function(){

						if($('#fname').val() == '' ){
							document.getElementById("fname").focus();
						}else if($('#lname').val() == ''){
							document.getElementById("lname").focus();
						}else if($('#weight').val() == ''){
							document.getElementById("weight").focus();
						}else if($('#height').val() == ''){
							document.getElementById("height").focus();
						}else if($('#major').val() == ''){
							document.getElementById("major").focus();
						}else if($('#tel').val() == ''){
							document.getElementById("tel").focus();
						}else if($('#id_student').val() == ''){
							document.getElementById("id_student").focus();
						}else if($('#txt_pass').val() == ''){
							document.getElementById("txt_pass").focus();
						}else if($('#txt_email').val() == ''){
							document.getElementById("txt_email").focus();
						}else if($('#con_email').val() == ''){
							document.getElementById("con_email").focus();
						}


						else {
							$('#alert').modal('show');
						}

					});
				});*/

				var password = document.getElementById("txt_pass")
				, confirm_password = document.getElementById("con_pass");

				function validatePassword(){
					if(password.value != confirm_password.value) {
						confirm_password.setCustomValidity("รหัสไม่ตรงกัน");
					} else {
						confirm_password.setCustomValidity('');
					}
				}

				password.onchange = validatePassword;
				confirm_password.onkeyup = validatePassword;


				var email = document.getElementById("txt_email")
				, confirm_email = document.getElementById("con_email");

				function validateEmail(){
					if(email.value != con_email.value) {
						con_email.setCustomValidity("อีเมลไม่ตรงกัน");
					} else {
						con_email.setCustomValidity('');
					}
				}

				email.onchange = validateEmail;
				con_email.onkeyup = validateEmail;

				



			</script>

		</body>
		</html>


