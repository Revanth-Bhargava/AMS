<html>
<head>
	<style>
		.container 
		{
			width:100%;
			height:250px;
			margin:0 auto;
			padding:10px 35px;
			border:5px solid #3090C7;
			background:#add8e6; 
		}
		.buttn 
		{
			box-shadow:inset 0px 1px 0px 0px #CEECF5;
			background:linear-gradient(to bottom, #f 5%, #CEECF5 100%);
			background-color:#add8e6;
			border-radius:20px;
			border:0px;
			color:#2874A6;
			font-family:Arial;
			font-size:18px;
			font-weight:bold;
			padding:5px 15px;
		}
		.buttn:hover 
		{
			background:linear-gradient(to bottom, #80b5ea 5%, #bddbfa 100%);
			background-color:#CEECF5;
		}
		.buttn1 
		{
			box-shadow:inset 0px 1px 0px 0px #CEECF5;
			background-color:#ffffff;
			border-radius:20px;
			border:3px solid #2874A6;
			color:#2874A6;
			font-family:Arial;
			font-size:18px;
			font-weight:bold;
			padding:5px 15px;
		}
		.buttn1:hover 
		{
			background:linear-gradient(to bottom, #80b5ea 5%, #bddbfa 100%);
			background-color:#CEECF5;
		}
		.f1
		{
			font-size: 20px;
			color: #2874A6;
			font-weight:none;
			text-decoration:none;
		}
		.f2
		{
			font-size: 30px;
			color: #2874A6;
			font-weight:bold;
			text-decoration:none;
		}
	</style>
</head>
<body bgcolor="#add8e6">
<center>
	<?php
		include("connection.php");
		//Getting student id of next student***
		$retrive = "SELECT * FROM student";
		$result = $connect->query($retrive);
		while($row = $result->fetch_assoc())
		{
			$sid = $row["sid"];
			$pp = ($row['present_days']/$row['total_days'])*100;
			$update = "UPDATE student "."SET present_percent=$pp "."WHERE sid=$sid";
			$connect->query($update);
		}
		//*************************************
		//Inserting new sudent into list***
		if(!empty($_POST['name']))
		{
			$n = $_POST['name'];
			$add = "INSERT INTO student VALUES($sid+1,'$n',0,0,0);";
			$connect->query($add);
		}
		//*********************************
	?>
	<table width=100%>
		<tr>
			<td width=30%><center><img src="logo.jpg" height=100% width=75%></center></td>
			<td><img src="front.jpg" height=60% width=100%></td>
		</tr>
		<tr>
			<td width=30%><center><a href="attendance.php"><button class="buttn">TAKE ATTENDANCE</button></a></center></td>
			<td rowspan=4>
				<center><br><br><font class="f2">STUDENT DETAILS</font>
				<br><br><table class="container" border=1 width=100%>
					<tr>
					</tr>
					<tr>
						<th><font class="f1">Student ID</font></th>
						<th><font class="f1">Name</font></th>
						<th><font class="f1">No.of Days Present</font></th>
						<th><font class="f1">Present Percentage</font></th>
					</tr>
					<?php
					$retrive = "SELECT * FROM student";
					$result = $connect->query($retrive);
					while($row = $result->fetch_assoc())
					{ ?>
						<tr>
							<td><font class="f1"><?php echo $row["sid"]; ?></font></td>
							<td><font class="f1"><?php echo $row["name"]; ?></font></td>
							<td><font class="f1"><?php echo $row["present_days"]; ?></font></td>
							<td><font class="f1"><?php echo $row["present_percent"]; ?></font></td>
						</tr>
					<?php }
					?>
				</table>
		</tr>
		<tr>
			<td width=30%><center><a href="add_student.php"><button class="buttn">ADD STUDENT</button></a></center></td>
		</tr>
		<tr>
			<td width=30%><center><a href="student_list.php"><button class="buttn">STUDENT DETAILS</button></a></center></td>
		</tr>
		<tr>
			<td width=30%><center><a href="history.php"><button class="buttn">ATTENDANCE HISTORY</button></a></center></td>
		</tr>
	</table>
	<?php
	if(isset($_POST["submit"]))
	{
		$retrive = "SELECT * FROM details";
		$result = $connect->query($retrive);
		$sid=0;
		while($row = $result->fetch_assoc())
			$sid = $sid+1;
		$name=$_POST["name"];
		$gen=$_POST["gender"];
		$dob=$_POST["dob"];
		$class=$_POST["class"];
		$fname=$_POST["fname"];
		$add=$_POST["add"];
		$phone=$_POST["num"];
		$update = "INSERT INTO DETAILS VALUES($sid+1,'$name','$gen','$dob','$class','$fname','$add','$phone')";
		$connect->query($update);
	}
	?>
</center>
</body>
</html>