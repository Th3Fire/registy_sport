<html>
<body>
<form action="registration.php" method="post">

<p><u>Select table</u></p>

<p>Select date:</p>
<select name="day">
<?php
for($i=1;$i<=31;$i++)
{
    echo '<option value='.$i.'>'.$i.'</option>';
}
?>
</select>
<select name="month">
<option value="January">January</option>
<option value="February">February</option>
<option value="Mars">Mars</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>

<select name="year">
<?php
$year = date("Y");
for($i=1980;$i<=$year;$i++)
{
    echo '<option value='.$i.'>'.$i.'</option>';
}

?>
</select>
<br/><br/>
<input type="submit" value="Submit" />
</form>

</body>
</html>