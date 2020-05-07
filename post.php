<?php 
	include('connect.php');
		$sql ="SELECT * FROM `category`";
		$rs = mysqli_query($conn,$sql)	or die ("toang");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<table>
 		<tr>
 			<td>#</td>
 			<td>ten danh muc</td>
 			<td>Trang thai</td>
 			<td>Ngay tao </td>
 			<td>Chinh sua</td>
 		</tr>
 		<?php 
 		$i =0;
 		foreach ($rs as $value) { 
 		$i ++;
 			?>
 		<tr>

 			<td><?php echo $i;  ?></td>
 			<td><?php echo $value['name_cat']; ?></td>
 			<td><?php echo $value['status']; ?></td>
 			<td> <?php echo date("d-m-Y",strtotime($value["create_at"])); ?></td>
 			<td>
 				<a href="edit.php?id=<?php echo $value['id_cat']  ?>" >sua</a>
 				<a href="delete.php?id=<?php echo $value['id_cat']  ?>" title="">xoa</a>
 			</td>
 		</tr>
 		<?php } ?>
 	</table>
 </body>
 </html>