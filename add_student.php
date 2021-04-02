<html>
<head>
	<script>
		function confirm()
		{
			window.alert("New Student Sucessfully Added!!!");
		}
	</script>
	<style>
		.container 
		{
			width:400px;
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
	<table width=100%>
		<tr>
			<td width=30%><center><img src="logo.jpg" height=100% width=75%></center></td>
			<td><img src="front.jpg" height=60% width=100%></td>
		</tr>
		<tr>
			<td width=30%><center><a href="attendance.php"><button class="buttn">TAKE ATTENDANCE</button></a></center></td>
			<td rowspan=4>
				<center><br><br><font class="f2">ADD STUDENT</font>
				<br><br>
				<form class="container" method="post" action="add_student.php">
				<table width=100%>
				<tr>
					<td width=30%><font class="f1">Name:</td>
					<td><input type="text" name="name" id="name" /></td>
				</tr>
				<tr>
					<td width=30%><font class="f1">Date Of Birth:</td>	
					<td><input type="date" name="dob" id="dob" /></td>
				</tr>
				<tr>
					<td width=30%><font class="f1">Gender:</td>
					<td>
						<input type="radio" name="gender" value="Male">MALE 
						<input type="radio" name="gender" value="Female">FEMALE
					</td>
				</tr>
				<tr>
					<td width=30%><font class="f1">Address:</td>
					<td><textarea rows=3 name="add" id="add" /></textarea></td>
				</tr>
				<tr>
					<td width=30%><font class="f1">Class:</td>
					<td><input type="text" name="class" id="class" /></td>
				</tr>
				<tr>
					<td width=30%><font class="f1">Father's Name:</td>
					<td><input type="text" name="fname" id="fname" /></td>
				</tr>
				<tr>
					<td width=30%><font class="f1">Phone No.: </td>
					<td><input type="text" name="num" id="num" /></td>
				</tr>
			</table>
			<input type="submit" class="buttn1" name="submit" onclick="confirm()" value="SUBMIT">
			</center>
			</form>		
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
</center>
</body>
</html>