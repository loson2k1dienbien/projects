<?php 
	
	include('connect.php');
	if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$sql = "DELETE FROM category WHERE id_cat=$id ";
			$rs = mysqli_query($conn,$sql) or die ( $sql);
			echo 'ban co muon xoa khong ';
			header('Location: post.php');
			
	}
 ?>
