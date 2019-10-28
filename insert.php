<?php 
include_once 'conn.php';
if(isset($_POST['done'])) {
	$tuNam = $_POST['txtTuNam'];
	$denNam = $_POST['txtDenNam'];
	$tenTruong = $_POST['txtTenTruong'];
	$diaChiTruong = $_POST['txtDiaChiTruong'];
	$maSinhVien = $_POST['txtMaSinhVien'];
	
	$query = "INSERT INTO `quatrinhhoctap`(`tunam`, `dennam`, `tentruong`, `diachitruong`, `masinhvien`)
	VALUES ('$tuNam','$denNam','$tenTruong','$diaChiTruong','$maSinhVien')";
	$result = mysqli_query($con,$query);

	header('location:datatable.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Student</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
	<div class="container pt-4">
		<div class="col-lg-6">
			<h3 class="text-center text-monospace pb-2">Insert Student</h3>
			<br>
			<form  method="POST" class="shadow p-3">
				<div class="form-group">
					<label class="control-label" >Từ Năm</label>
					<div class="">	
						<input type="text" class="form-control" name="txtTuNam" placeholder="Từ Năm">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" >Đến Năm</label>
					<div class="">
						<input type="text" class="form-control" name="txtDenNam" placeholder="Đến Năm">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" >Tên Trường</label>
					<div class="">
						<input type="text" class="form-control" name="txtTenTruong" placeholder="Tên Trường">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" >Địa chỉ trường</label>
					<div class="">
						<input type="text" class="form-control" name="txtDiaChiTruong" placeholder="Địa chỉ trường">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" >Mã sinh viên</label>
					<div class="">
						<input type="text" class="form-control" placeholder="Mã sinh viên" name="txtMaSinhVien">
					</div>
				</div>
				<div class="form-group">
					<div class="">
						<button type="submit" class="btn btn-success" name="done"><i class="fas fa-plus-circle"></i> Create</button>
					</div>
				</div>
			</form>
		</div>
	</div>




	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>