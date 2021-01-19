<?php 
$title = "Danh sách sản phẩm";
require_once ("layout/header.php");

require_once ("config/connect.php");
$sql = "SELECT * FROM products";
if(isset($_GET['page'])){
	$page = $_GET['page'];
}
else{
	$page = 1;
}
$tong_sp = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(id) as 'tong_sp' FROM `products`"))['tong_sp'];
$limit = 3;
$tong_so_trang = ceil($tong_sp/$limit);
if($page > $tong_so_trang){
	$page = $tong_so_trang;
}
if($page < 1){
	$page = 1;
}
$offset = ($page - 1)* $limit;

$sql = $sql." LIMIT $offset,$limit";
$result = mysqli_query($conn,$sql);
if($result == false){
	$error = mysqli_error($conn);
	require_once("config/close.php");
	die($error);
}
require_once("config/close.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		table{
			width: 100%;
			border-collapse:collapse;
			border: 2px solid black;
			text-align: center;
			font-size: large;

		}
		tr, th, td{
			border: 2px solid black;
		}
		a{
			text-decoration: none;
		}

		
	</style>
</head>
<body style="text-align: center;"> 
		<a href="index.php?module=products&action=list&page=<?php if($page > 1) {echo ($page-1);} else echo $page; ?>" ><i class="fa fa-arrow-left" style="font-size:24px"></i></a>
	    <b style="font-size: 25px;"><?php echo $page; ?></b>
	    <a href="index.php?module=products&action=list&page=<?php if($page < $tong_so_trang) {echo ($page+1);} else echo $page; ?>"><i class="fa fa-arrow-right" style="font-size:24px"></i></a>
 
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
			<th>Thương hiệu</th>
			<th>Thao tác</th>
		</tr>
		<?php 
			if(mysqli_num_rows($result)==0){
				echo "<tr><td colspan = '9'><i>Chưa có sản phẩm nào...</i></td></tr>";
			}
			else{
				foreach($result as $row){
					echo "<tr>";
						echo "<td>".$row['id']."</td>";
						echo "<td>".$row['name']."</td>";
						echo "<td>";
							$url = $row['url'];
							echo "<img src='$url' width='130.49px' >";
						echo "</td>";
						echo "<td>".$row['price']."</td>";
						echo "<td>".$row['description']."</td>";
						$status = "";
						
							if ($row['status'] == 1) {
								$status = "Còn";
								// echo $status;
							}
							else{
								$status = "Hết";
								// echo $status;
							}
						echo "<td>".$status."</td>";
							$type = "";
							if ($row['id_type'] == 1) {
								$type = "Chăm sóc sắc đẹp";
								// echo $type;
							}
							elseif ($row['id_type'] == 2) {
								$type = "Chăm sóc cá nhân";
								// echo $type;
							}
							elseif ($row['id_type'] == 3) {
								$type = "Chăm sóc sức khỏe";
								// echo $type;
							}
							elseif ($row['id_type'] == 4) {
								$type = "Dành cho phái mạnh";
								// echo $type;
							}
							elseif ($row['id_type'] == 5) {
								$type = "Thời trang và phụ kiện";
								// echo $type;
							}
							else {
								$type = "Chăm sóc da mụn";
								// echo $type;
							}
						echo "<td>".$type."</td>";
						$brand = "";
						if ($row['id_brand'] == 1) {
							$brand = "MAC";
							// echo $brand;
						}
						elseif ($row['id_brand'] == 2) {
							$brand = "BBIA";
							// echo $brand;
						}
						elseif ($row['id_brand'] == 3) {
							$brand = "ROMANO";
							// echo $brand;
						}
						elseif ($row['id_brand'] == 4) {
							$brand = "SAKURA";
							// echo $brand;
						}
						else{
							$brand = "3CE";
							// echo $brand;
						}
						echo "<td>".$brand."</td>";
						
					echo "</tr>";
				}
			}
		 ?>
	</table>

</body>
</html>



<?php require_once ("layout/footer.php")  ?>