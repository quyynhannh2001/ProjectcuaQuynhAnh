<?php 
$title = "Danh sách sản phẩm";
require_once ("layout/header.php"); 
// include "connect.php";
// $sql = "SELECT * FROM products";

// // Xu li phan trang
// if(isset($_GET['page'])){
// 	$page = $_GET['page'];
// }
// else{
// 	$page = 1;
// }

// // Cần lấy ra tổng sp ở database
// $tong_sp = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(id) as 'tong_sp' FROM `san_pham`"))['tong_sp'];

// // Tinh tong so trang
// $limit = 3;
// $tong_so_trang = ceil($tong_sp/$limit);

// // Kiem tra xem nguoi dung co nhap so trang > tong_so_trang
// if($page > $tong_so_trang){
// 	$page = $tong_so_trang;
// }
// // Kiem tra page < 1
// if($page < 1){
// 	$page = 1;
// }

// // Tinh offset
// $offset = ($page - 1)* $limit;

// // Tao cau lenh SQL
// $sql = $sql." LIMIT $offset,$limit";

// // Chay cau lenh
// $result = mysqli_query($conn,$sql);
// if($result == false){
// 	// Cu phap sai
// 	$error = mysqli_error($conn);
// 	mysqli_close($conn);
// 	die($error);
// }
// require_once("close.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Danh sách sản phẩm</h2>
	<br>
    <a href="?page=<?php if($page > 1) {echo ($page-1);} else echo $page; ?>">Previous</a>
    <b><?php echo $page; ?></b>
    <a href="?page=<?php if($page < $tong_so_trang) {echo ($page+1);} else echo $page; ?>">Next</a>
  <br><br>
	<table>
		<tr>
			<th>ID</th>
			<th>Tên</th>
			<th>Hình ảnh</th>
			<th>Giá</th>
			<th>Mô tả</th>
			<th>Tình trạng</th>
			<th>Kiểu</th>
			<th>Xuất xứ</th>
		</tr>
		<?php 
			if(mysqli_num_rows($result)==0){
				echo "<h2>Không có sản phẩm</h2>";
			}
			else{
				foreach($result as $row){
					echo "<tr>";
						echo "<td>".$row['id']."</td>";
						echo "<td>".$row['name']."</td>";
						echo "<td>";
							$url = $row['url'];
							echo "<img src='$url' width='200px' >";
						echo "</td>";
						echo "<td>".$row['price']."</td>";
						echo "<td>".$row['description']."</td>";
						echo "<td>".$row['status']."</td>";
						echo "<td>".$row['id_type']."</td>";
						echo "<td>".$row['id_brand']."</td>";
					echo "</tr>";
				}
			}
		 ?>
	</table>

</body>
</html>



<?php require_once ("layout/footer.php")  ?>