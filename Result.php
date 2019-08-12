<html>
<?php
if(!$_POST["sn"] || !$_POST["stn"])
{
    $msg = "You left one or more of the required fields.";
    echo $msg ; 
	echo "<br>";
    //header("Location:http://localhost/login.php");
}
   $target_path = "E:/MA002/";  
$target_path = $target_path.basename( $_FILES['image']['name']);   
  
if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path) && $_FILES["image"]["size"] < 90000) {  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}
	$sn=$_POST['sn'];
	$stn=$_POST['stn'];
	$fn=$_POST['course'];
	$sem=$_POST['radio'];
	$hindi=$_POST['hin'];
	$english=$_POST['eng'];
	$maths=$_POST['math'];
	$physics=$_POST['phy'];
	$chemistry=$_POST['chem'];
	//$result = $_POST['image'];

	$total=$hindi+$english+$maths+$physics+$chemistry;
	

	/*
	
	if($hindi<35){
		$remark1="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$hin;
	}else if($hindi>79){
		$remark1="<font color='green'>D</font>";
	}else{
		$remark1='-';
	}

	if($english<35){
		$remark2="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$eng;
	}else if($english>79){
		$remark2="<font color='green'>D</font>";
	}else{
		$remark2='-';
	}

	if($maths<35){
		$remark3="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$math;
	}else if($maths>79){
		$remark3="<font color='green'>D</font>";
	}else{
		$remark3='-';
	}

	if($physics<35){
		$remark4="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$phy;
	}else if($physics>79){
		$remark4="<font color='green'>D</font>";
	}else{
		$remark4='-';
	}

	if($chemistry<35){
		$remark5="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$chem;
	}else if($chemistry>79){
		$remark5="<font color='green'>D</font>";
	}else{
		$remark5='-';
	}
*/
	
?>

<center>
	<table border=1>
		<tr>
		<td>
			<table  width=100%>
			<tr>
					 
				<td>
					
					<font size='5' color='grey'><b><?php  echo "$sn"; ?></b></font>
				</td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
			<table width=100%>
				<tr><td><font size='4'><?php echo "$stn"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo" $fn";?></font></td></tr>
				<tr><td><font size='4'><?php echo "$sem"; ?></td></tr>
				</table>
		</td>
		</tr>
		<tr>
		<td>
			<table border=1 width=100%>
				<tr><th><i>Subject code</i></th><th><i>Subject name</i></th><th><i>Min marks</i></th><th><i>Max marks</i></th><th><i>Marks obtained</i></th></tr>
				<tr><td>101</td><td>Python</td><td>35</td><td>100</td><td><?php echo "$hindi"; ?></td></tr>
				<tr><td>102</td><td>Java</td><td>35</td><td>100</td><td><?php echo "$english"; ?></td></tr>
				<tr><td>103</td><td>Php</td><td>35</td><td>100</td><td><?php echo "$maths"; ?></td></tr>
				<tr><td>104</td><td>Isp</td><td>35</td><td>100</td><td><?php echo "$physics"; ?></td></tr>
				<tr><td>105</td><td>Cns</td><td>35</td><td>100</td><td><?php echo "$chemistry"; ?></td></tr>
				<tr><td></td><td></td><td><b>Total</b></td><td><b>500</b></td><td><b><?php echo "$total"; ?><b></td></tr>
			</table>
		</td>
		</tr>

	</table>
</center>

</html>
