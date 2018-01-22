<?php
	include "navbar.php"; 
	include("connect.php");
	$cmd = "SELECT FinanceRequestID FROM FinanceRequests";
	$result = $connect->query($cmd);
	$bill_no = $result->num_rows;
   	$connect->close();				
?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap_4.0/bootstrap.min.css">
		<link rel="stylesheet" href="../css/main.css">
		<script src="../js/jquery_3.2.1/jquery-3.2.1.slim.min.js"></script>
		<script src="../js/popper_1.12.3/popper.min.js"></script>
		<script src="../js/bootstrap_4.0/bootstrap.min.js"></script>
		<title> STEPS : Form Submit </title>
	</head>
	<body>
		<div class="container">
			<center><font size="5">ส่งแบบฟอร์มสำเร็จ!</font>
					<font size="4"><br>เลขที่ใบเสนอซื้อของท่านคือ <B><?php echo $bill_no ?></B><br></font> 
					<font color="red"><U>**โปรดจดจำเลขนี้เพื่อใช้ในการตรวจสอบสถานะต่อไป</U></font><br>
			<a href="ShowFinanceStatus.php" class='btn btn-primary btn-sm' role='button'>ตรวจสอบสถานะใบเสนอซื้อที่นี่</a>
			</center>		
			<p class="text-right"><button class='btn btn'><a href="RequestForm.php">กลับไปหน้าฟอร์ม</a></button></p>
			<p class="text-right"></p>
		</center>
	</body>
	
</html>	