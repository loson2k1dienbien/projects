<?php 
	//change file
	include('connect.php');
	if (isset($_GET['id'])) {
		if (isset($_POST['edit'])) {
			$id = $_GET['id'];
			$name_cat = $_POST['name_cat'];
			$status = $_POST['status'];
			$sql = "UPDATE category set name_cat = '$name_cat', status =$status WHERE id_cat =$id";
			$rs = mysqli_query($conn,$sql) or die (" toang ");
			header('Location: post.php');
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>addnew</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</head>
<body>
	<div class="container-fluid">
		<form action="" method="POST" role="form">
			<legend>Thêm danh mục</legend>

			<div class="form-group">
				<label for="">Tên danh mục</label>
				<input type="text" name="name_cat" class="form-control" id="" placeholder="Tên danh mục">
			</div>
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" class="form-control">
					<option value="1">Hiện</option>
					<option value="0">Ẩn</option>
				</select>
			</div>
			<button type="submit" name="edit" class="btn btn-primary">Sửa </button>
		</form>
	</div>

</body>
</html>