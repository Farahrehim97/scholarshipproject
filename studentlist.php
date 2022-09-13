<?php
include("dbconnect.php");
$sql="select * from registration_details order by batch";
$result = $conn->query($sql);
$conn->close();
//$result=mysqli_query($conn,$query)
//https://technosmarter.com/php/PHP-form-data-convert-to-excel-file-CSV.html (excel convert code)
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="studentstyle.css">
</head>
<body>
	<form name="selectstud" method="post">
	<h2>Student Registration Details</h2>
	<br>
	 <table align="center" border="1px solid black" style="width:300px line-height:30px;  margin: 0 auto;">
	 	<tr>
	 		<th>Name</th>
	 		<th>StudId</th>
	 		<th>Rollno</th>
	 		<th>Email</th>
	 		<th>Mobile</th>
	 		<th>YOA</th>
	 		<th>Sem</th>
	 		<th>Branch</th>
	 		<th>Batch</th>
	 		<th>Hosteller</th>
	 		<th>Entrance Rank</th>
	 		<th>Entrance Try</th>
	 		<th>Backpaper</th>
	 		<th>GPA</th>
	 		<th>Bankreceipt</th>
	 		<th>Other Scholarship</th>
	 		<th>Sem Fee</th>
	 		<th>Hostel Fee</th>
	 		<th>Exam Fee</th>
	 		<th>Stationary Fee</th>
	 		<th>Other Fee Details</th>
	 		<th>Other Fee</th>
	 		<th>Selected</th>
	 	</tr>

	 		<?php
	 		//while($rows=mysql_fetch_assoc($result))
	 		while($rows=$result->fetch_assoc())
	 		{
	 			?>
	 			 <tr>
	 			 	<td><?php echo $rows['fullname']; ?></td>
	 			 	<td><?php echo $rows['studid']; ?></td>
	 			 	<td><?php echo $rows['rollno']; ?></td>
	 			 	<td><?php echo $rows['email']; ?></td>
	 			 	<td><?php echo $rows['mobile']; ?></td>
	 			 	<td><?php echo $rows['yoa']; ?></td>
	 			 	<td><?php echo $rows['semester']; ?></td>
	 			 	<td><?php echo $rows['branch']; ?></td>
	 			 	<td><?php echo $rows['batch']; ?></td>
	 			 	<td><?php echo $rows['hosteller']; ?></td>
	 			 	<td><?php echo $rows['entrancerank']; ?></td>
	 			 	<td><?php echo $rows['entrancetry']; ?></td>
	 			 	<td><?php echo $rows['backpaper']; ?></td>
	 			 	<td><?php echo $rows['gpa']; ?></td>
	 			 	<td><?php echo $rows['bankreceipt']; ?></td>
	 			 	<td><?php echo $rows['otherscholarship']; ?></td>
	 			 	<td><?php echo $rows['semfee']; ?></td>
	 			 	<td><?php echo $rows['hostelfee']; ?></td>
	 			 	<td><?php echo $rows['examfee']; ?></td>
	 			 	<td><?php echo $rows['stationaryfee']; ?></td>
	 			 	<td><?php echo $rows['otherfeedetails']; ?></td>
	 			 	<td><?php echo $rows['otherfee']; ?></td>
	 			 	<td><input type="checkbox" name="check1"></td>
	 			 </tr>
	 		<?php	 
	 		}
	 		?>
	 	
	 </table>
	 <br>
	 <center>
	 <button class="sumbit" name="register" style="text-align: center">
      <span class="btnText">Submit</span>
      </center>
	</form>
	<?php
	include("dbconnect.php");
	if(isset($_POST["check1"])){
		$query="update registration_details set selected = 'selected'";
		 if(mysqli_query($conn,$sql))
		 	echo "success check";
		 else
		 	echo "unsuccess check";
		$conn->close();
	}
	?>
</body>
</html>
