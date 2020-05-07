<?php 
	include ('connect.php');
	$sqlCat = "SELECT * FROM category";
	$resultCat = mysqli_query($conn,$sqlCat);
	if (isset($_POST['addnew'])) {
		$name_pro = $_POST['name_pro'];
			$id_cat = $_POST['id_cat'];
			$price = $_POST['price'];
			$image = ($_FILES['image']["name"]);
			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
			$description = $_POST['description'];
			$status = $_POST['status'];
			$query = "INSERT INTO product(name_pro,id_cat,price,image,description,status) VALUES ('$name_pro','$id_cat','$price','$image','$description','$status')";
			$rs = mysqli_query($conn,$query) or die ($sql);
			
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>add_produc</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	  <form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>pro name</td>
				<td><input type="text" name="name_pro" id="name_pro" /></td>
			</tr>
			<tr>
				<td>category</td>
				<td>
					<select name="id_cat" id="id_cat">
						<option value="">--- Chọn Danh Mục --</option>
						<?php  
							while($rowCat = mysqli_fetch_assoc($resultCat)){
						?>
							<option value="<?php echo $rowCat["id_cat"] ?>"><?php echo $rowCat["name_cat"]; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Giá</td>
				<td>
					<input type="text" name="price" id="price" />
				</td>
			</tr>
			<tr>
				<td>Ảnh</td>
				<td>
					<input type="file" name="image" id="image">
				</td>
			</tr>
			<tr>
				<td>Trạng thái</td>
				<td>
				<select name="status" class="form-control">
					<option value="1" class="form-control">Hiện</option>
					<option value="0" class="form-control">Ẩn</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Mô tả</td>
				<td>
					<textarea name="description" id="description" cols="30" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit" name="addnew" class="btn btn-primary">Thêm sản phẩm</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>