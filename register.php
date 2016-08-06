<!DOCTYPE html>
<html>
<head>
	<title>สมัครสมาชิก Sport</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="js/jquery-1.12.1.min.js"></script>
	
	<style>

		tr.spaceUnder > td
		{
			padding-bottom: 1em;
		}
		.containerDiv{
			width: 100%;
			margin: 0 auto;
		}

		.container {
			margin: 50px auto;
			width: 1000px;
		}

		.login {
			position: relative;
			margin: 0 auto;
			padding: 0px 0px 0px;
			width: 600px;
		}
	</style>
</head>
<body>
	<header><center>แบบฟรอ์มสมัครสามาชิก</center></header>
	<div id='main'>
		<article><!-- Content -->
			

			<form action="get_data.php" method="POST">
				<table >
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<tr class="spaceUnder">
						<div>
							<td align="right">คำนำหน้า :&nbsp;</td>

							<td>
								<select name="prefix" required>
									<option value="นาย">นาย</option>
									<option value="นาง">นาง</option>
									<option value="นางสาว">นางสาว</option>
								</select>
							</td>
						</div>
					</tr>


					<tr class="spaceUnder">
						<div>
							<td align="right">ชื่อ :&nbsp;</td>
							<td><input type="text" name="fname" id="fname" required></td>
						</div>
					</tr>

					<tr class="spaceUnder">
						<div>
							<td align="right">นามสกุล :&nbsp;</td>
							<td><input type="text" name="lname" id="lname" required></td>
						</div>
					</tr>


					<tr class="spaceUnder">
						<div><td align="right">เพศ :&nbsp;</td>
							<td>
								<select name="sex" required>
									<option value="ชาย">ชาย</option>
									<option value="หญิง">หญิง</option>
								</select>
							</td>
						</div>

					</tr>

					<tr class="spaceUnder">
						<div>
							<td align="right">วันเกิด : </td>
							<td>
								<select name="day" >
									<?php
									for($i=1;$i<=31;$i++)
										{ echo '<option value='.$i.'>'.$i.'</option>';}
									?>
								</select>
								<select name="month" required>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">Mars</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
									
								</select>


								<select name="year" >
									<?php
									$year = date("Y");
									for($i=1980;$i<=$year;$i++)
									{
										echo '<option value='.$i.'>'.$i.'</option>';
									}
									?>
								</select>
							</td>
						</div>
					</tr>

					<tr class="spaceUnder">

						<div>
							<td align="right">น้ำหนัก :&nbsp;</td>
							<td><input type="number" min="0" name="weight" required></td>
							<td>กิโลกรัม.&nbsp;</td>

						</div>
					</tr>

					<tr class="spaceUnder">

						<div>
							<td align="right">ส่วนสูง :&nbsp;</td>
							<td><input type="number" min="0" name="height" required></td> 
							<td>เซนติเมตร.</td>
						</div>
					</tr>


					<tr class="spaceUnder">
						<div>
							<td align="right">สาขาวิชา :&nbsp;</td>
							<td>
								<input type="text" name="major" required>
							</td>
						</div>
					</tr>

					<tr class="spaceUnder">
						<div>
							<td align="right">เบอร์โทรศัพท์ :&nbsp;</td>
							<td>
								<input type="text" name="tel" required>
							</td>
						</div>
					</tr>


					<tr class="spaceUnder">
						<div>
							<td align="right">รหัสนักศึกษา :</td>
							<td><input type="text" name="id_student" required></td>
						</div>
					</tr>


					<tr class="spaceUnder">
						<div>
							<td align="right">รหัสผ่าน :&nbsp;</td>
							<td><input type="password" name="txt_pass" required></td>
						</div>
					</tr>

					<tr class="spaceUnder">
						<div>
							<td align="right">ยืนยันรหัสผ่าน :&nbsp;</td>
							<td><input type="password" name="con_pass" required></td>
						</div>
					</tr>

					<tr class="spaceUnder">
						<div>
							<td align="right">อีเมล :&nbsp;</td>
							<td><input type="text" name="txt_email" required></td>
						</div>
					</tr>

					<tr class="spaceUnder">
						<div>
							<td align="right">ยืนยันอีเมล :&nbsp;</td>
							<td><input type="text" name="con_email" required></td>
						</div>
					</tr>

				</table>

				<div>
					<input type="submit" name="submit" value="ยืนยัน">
				</div>

			</form>
			
		</article>

		<div class="navside">
			kkkkk
		</div><!-- Left side -->
		<aside><!-- Right side -->
			yyyy
		</aside><!-- Right side -->
	</div>
</div>
<script>
	
</script>
</body>
</html>


