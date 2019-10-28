<?php
	include_once "conn.php";
	if(isset($_POST['update']))
	{
		$ma = $_GET['ID'];
		$tuNam = $_POST['txtTuNam'];
		$denNam = $_POST['txtDenNam'];
		$tenTruong = $_POST['txtTenTruong'];
		$diaChiTruong = $_POST['txtDiaChiTruong'];
		$maSinhVien = $_POST['txtMaSinhVien'];

		$query = "UPDATE  quatrinhhoctap SET tunam='".$tuNam."',dennam='".$denNam."',tentruong='".$tenTruong."',diachitruong='".$diaChiTruong."',masinhvien='".$maSinhVien."'  WHERE ma='".$ma."'";
		$result = mysqli_query($con,$query);

		if($result) 
		{
			header('location:datatable.php');
		}
		else 
		{
			echo  " Vui lòng xem lại";
		}
	} 
	else 
	{
		header('location:datatable.php');
	}
 ?>