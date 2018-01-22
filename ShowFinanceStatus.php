<?php
	include "navbar.php";
?>
<!DOCTYPE = html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap_4.0/bootstrap.min.css">
		<link rel="stylesheet" href="../css/main.css">
		<script src="../js/jquery_3.2.1/jquery-3.2.1.slim.min.js"></script>
		<script src="../js/popper_1.12.3/popper.min.js"></script>
		<script src="../js/bootstrap_4.0/bootstrap.min.js"></script>
		<title> STEPS : Show Finance Requisition Status </title>
	</head>
	<body>
		<div class="container">
			<div class="page-header"><h1>Finance Requisition Status</h1></div>
			<div class='row'><p class="text-center"><label><font size='3'>กรอกเลขที่ใบเสนอซื้อเพื่อตรวจสอบสถานะ</font></label></p></div>	

			<form action='' method="post">
				<div class='form-group'>
				<div class='row'><p class="text-center">
					<div class='col-xs-4'></div>
					<div class='col-xs-4'><input type=text name="id" class="form-control" placeholder="เลขที่..."></div>
					<div class='col-xs-4'><input type=submit value="ค้นหา" class="btn btn-primary"></div>
				</div>
			</div>
		</form>

		<?php
		if(!(empty($_POST['id']))){
		
			include("connect.php");

			$show_info = "SELECT * FROM FinanceRequests WHERE FinanceRequestID='".$_POST['id']."'";
			$result = $connect->query($show_info);

			echo '<div class="container">';
			if ($result->num_rows > 0) {
			    echo "<table class='table table-striped'><tr><th>#</th><th>โครงการ</th><th>ฝ่าย</th><th>การอนุมัติ</th><th>สถานะ</th></tr>";
			    while($row = $result->fetch_assoc()) {
			        echo "<tr><td>" . $row["FinanceRequestID"]. "</td>
			        		<td>" . $row["Project"]. " </td>
			        		<td>" . $row["Field"]. "</td>
			        		<td>". ($row["Approvement"]==0 ? "รอการอนุมัติ" : "อนุมัติแล้ว") . "</td>
			        		<td>". $row["Status"]. "</td>
			        		</tr>
			        		";

		    	}
		    	echo "</table>";
			} else {
			    echo "<center><font color='red'>ไม่พบใบเสนอซื้อ กรุณากรอกเลขที่ให้ถูกต้อง</font></center>";
			}
			echo "</div>";
			$connect->close();
		}
		?>
	</body>
</html>

