<?php 
$title = "Danh sách sản phẩm";
$key="";
require_once ("layout/header.php");

require_once ("config/connect.php");
$sql = "SELECT id, name, url, price, status FROM products";
if (isset($_GET['key'])) {
	$key = $_GET['key'];
	$sql = " SELECT id, name, url, price, status FROM products WHERE name LIKE '%$key%'";
}
if(isset($_GET['page'])){
	$page = $_GET['page'];
}
else{
	$page = 1;
}
$tong_sp = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(id) as 'tong_sp' FROM `products`"))['tong_sp'];
$limit = 2;
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
			/*font-size: large;*/
			/*margin-top: 10px;*/
		}
		tr, th, td{
			border: 2px solid black;
			padding: 5px;
		}
		a{
			text-decoration: none;
		}
		.phantren{
			width: 100%;
			padding-bottom: 10px;
		}
		#trentrai{
			width: 35%;
			float: left;
		}
		#trengiua{
			width: 30%;
			float: left;
			padding-top: 40px;
		}
		#trenphai{
			width: 35%;
			float: left;
			text-align: right;
		}
		button, input{
			border: 0;
			border-radius: 20px;
			}
		input{
			/*width: 250px;*/
			border-bottom: 2px solid #444;
			padding: 12px 12px 12px 20px;
			/*height: 38px;*/
		}
		button{
			/*width: 250px;*/
			/*padding-right: 10px;*/
			margin-left: 5px;
		}
		input, button{
			font-size: 13.3333px;
			font-weight: 600;
		}
		button{
			color: #fff;
			background-image: linear-gradient(to right, #868686, black); 
			cursor: pointer;
		}
		input:focus, input:focus::placeholder, input:focus+i{
			color: black;
		}
		input:focus, button: focus{
			outline: 0;
		}


		
	</style>
	<script type="text/javascript">
	function confirmDelete(){
		return confirm("Thao tác này sẽ xóa toàn bộ bản ghi nhưng bạn vẫn có thể thêm lại?");
	}
</script>
</head>
<body style="text-align: center;"> 
	<div class="phantren">
		<div id="trentrai">
		<a style="float: left;" href="index.php?module=products&action=insert"><button style="width: 200px; height: 38px;">Thêm sản phẩm</button></a>
		</div>
		<!-- <br><br> -->
		<div id="trengiua">
		<a href="index.php?module=products&action=list&key=<?php echo $key; ?>&page=<?php if($page > 1) {echo ($page-1);} else echo $page; ?>" ><i class="fa fa-arrow-left" style="font-size:24px"></i></a>
	    <b style="font-size: 25px;"><?php echo $page; ?></b>
	    <a href="index.php?module=products&action=list&key=<?php echo $key; ?>&page=<?php if($page < $tong_so_trang) {echo ($page+1);} else echo $page; ?>"><i class="fa fa-arrow-right" style="font-size:24px"></i></a>
	    </div>
	    <div id="trenphai">
	 		<form>
	 			<input type="hidden" name="module" value="products">
	 			<input type="hidden" name="action" value="list">
						<input type="text" name="key" placeholder="Nhập sản phẩm cần tìm" style="width: 250px; height: 38px; font-size: 15px;" autocomplete="off">
						<button style="padding-bottom: 4px;" type="submit" name="btnSearch" ><i class="fa fa-search" style="font-size: 25px; height: 25px; color: white;"></i></button>
					</form>
		</div>
	</div>
  <br><br> 
	<table>
		<tr>
			<th>ID</th>
			<th>Sản phấm</th>
			<th>Giá</th>
			<th>Tình trạng</th>
			<th>Thao tác</th>
		</tr>
		<?php 
			if(mysqli_num_rows($result)==0){
				echo "<tr><td colspan = '5'><i>Chưa có sản phẩm nào...</i></td></tr>";
			}
			else{
				foreach($result as $row){
					echo "<tr>";
						echo "<td>".$row['id']."</td>";
						echo "<td>";
							echo "<b>".$row['name']."</b><br>";
							$url = $row['url'];
							echo "<img src='$url' width='165px' height='165px;' >";

						echo "</td>";
						echo "<td>".$row['price']."<u>đ</u>"."</td>";
						$status = "";
						
							if ($row['status'] == 1) {
								$status = "Còn";
							}
							else if ($row['status'] == 0) {
								$status = "Hết";
							}
							else if ($row['status'] == 2) {
								$status = "Đang về hàng";
							}
							else{
								$status = "Ngừng kinh doanh";
							}
						echo "<td>".$status."</td>";
						echo "<td>";
						$id = $row['id'];
							echo "<a href = 'index.php?module=products&action=edit&id=$id'>Sửa</a>";
							echo "||";
							echo "<a onclick = 'return confirmDelete()' href = 'index.php?module=products&action=delete&id=$id'>Xóa</a>";

						echo "</td>";
					echo "</tr>";
				}
			}
		 ?>
	</table>

</body>
</html>



<?php require_once ("layout/footer.php")  ?>