<html>

	<form action="Result.php" method = "POST"enctype="multipart/form-data">

		<table>
			<caption>STUDENT MARKSHEET FORM</caption>
			<tr>
				<td> Name</td>
				<td><input type=text name=sn size=30></td>
			</tr>

			<tr>
				<td>Exam No</td>
				<td><input type=text name=stn size=30></td>
			</tr>
			<tr>
			<td> Course  </td>
			<td>
			<select name=course>
			<option value="MCA">Mca</option>
			<option value="MBA">MBA</option>
			<option value="ENGINEERING">ENGINEERING </option>
			</select>
			</td>
			</tr>
			<tr>
			<tr>
			<td>  Semester  </td>
			<td>
			SEM1 : <input type="radio" name="radio" value="SEM1">
			SEM2 : <input type="radio" name="radio" value="SEM2">
			SEM3 : <input type="radio" name="radio" value="SEM3">
			SEM4 : <input type="radio" name="radio" value="SEM4">
			SEM5 : <input type="radio" name="radio" value="SEM5">
			SEM6 : <input type="radio" name="radio" value="SEM6">
			</td>
			<br>
			</tr>
				<td>PYTHON </td>
				<td><input type=text name=hin size=30></td>
			</tr>

			<tr>
				<td>JAVA</td>
				<td><input type=text name=eng size=30></td>
			</tr>

			<tr>
				<td>PHP</td>
				<td><input type=text name=math size=30></td>
			</tr>

			<tr>
				<td>ISP</td>
				<td><input type=text name=phy size=30></td>
			</tr>

			<tr>
				<td>CNS</td>
				<td><input type=text name=chem size=30></td>
			</tr>
			<tr>
			 <td> Select File: </td>  
      <td>   <input type="file" name="image" /></td>
		
			<tr>
				<td align=center> <input type="submit" name="submit"/></td>
				</tr>
		</table>
		
	</form>
	<?php
	$nameErr ="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sn"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["sn"]);
  }
	}
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>
</html>
