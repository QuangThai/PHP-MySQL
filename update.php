<?php
	include_once 'conn.php';
	$ma = $_GET['ma'];
	$query = "SELECT * FROM quatrinhhoctap WHERE ma='".$ma."'";
	$result = mysqli_query($con,$query);

	while($row = mysqli_fetch_assoc($result)) 
	{
		$ma = $row['ma'];
		$tunam = $row['tunam'];
		$dennam = $row['dennam'];
		$tentruong = $row['tentruong'];
		$diachitruong = $row['diachitruong'];
		$masinhvien = $row['masinhvien'];

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Student</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
	<div class="container pt-4">
		<div class="col-lg-6">
			<h3 class="text-center text-monospace pb-2">Edit Student</h3>
			<br>
			<form action="edit.php?ID=<?php echo $ma ?>"  method="POST" class="shadow p-3">
				<div class="form-group">
					<label class="control-label" >Từ năm</label>
					<div class="">	
						<input type="text" class="form-control"  name="txtTuNam" value="<?php echo $tunam ?>" placeholder="Từ Năm">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" >Đến năm</label>
					<div class="">
						<input type="text" id="dennam" class="form-control" name="txtDenNam" placeholder="Đến Năm" value="<?php echo $dennam ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" >Tên trường</label>
					<div class="">
						<input type="text" id="tentruong" class="form-control" name="txtTenTruong" placeholder="Tên Trường" value="<?php echo $tentruong ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" >Địa chỉ trường</label>
					<div class="">
						<input type="text" id="diachitruong" class="form-control" name="txtDiaChiTruong" placeholder="Địa chỉ trường" value="<?php echo $diachitruong ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" >Mã sinh viên</label>
					<div class="">
						<input type="text" id="masinhvien" value="<?php echo $masinhvien ?>" class="form-control" placeholder="Mã sinh viên" name="txtMaSinhVien">
					</div>
				</div>
				<div class="form-group">
					<div class="">
						<button type="submit" name="update" class=" text-white btn btn-warning">
							<i class="fas fa-edit"></i> Update
						</button>
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