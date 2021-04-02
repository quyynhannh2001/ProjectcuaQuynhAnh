<?php 
	$sql = "SELECT id, name, url, price FROM products WHERE id_type = 2 ";
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}
	else{
		$page = 1;
	}
	$tong_sp = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(id) as 'tong_sp' FROM `products`"))['tong_sp'];
	$limit = 9;
	$tong_so_trang = ceil($tong_sp/$limit);
	if($page > $tong_so_trang){
		$page = $tong_so_trang;
	}
	if($page < 1){
		$page = 1;
	}
	$offset = ($page - 1)* $limit;

	$sql = $sql." LIMIT $offset,$limit";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		$error = "Error: ".mysqli_error($conn);
		mysqli_close($conn);
		die($error);
	}
 ?>
<?php 
$title = "Chăm sóc cá nhân";
require_once("layout/header.php");
 ?>
 <style type="text/css">
 	#item a{
 		text-decoration: none;
 	}
 	#list_canhan table{
 		padding: 15px;

 	}
 	#list_canhan #item{
 		padding: 25px;
 		min-width: 255px;
 		text-align: center;
 	} 
 	#list_canhan #item:hover{

		box-shadow: inset 10px 10px 5px #888888, 10px 10px 5px #888888;
	}
	body #list_canhan{
		text-align: center;
	}
	.i{
		font-size: 25px;
	}
 </style>
<div id="list_canhan">
	<table>
		<tr>
			<?php 
			if(mysqli_num_rows($result)==0){
				echo "<tr><td colspan = '4'><i class = 'i'>Chưa có sản phẩm nào...</i></td></tr>";
			}
			 ?>
		</tr>
		<?php 
			$total = mysqli_num_rows($result);
			$count = 0;
			$n = 3;
			while ($count != $total) {
				echo "<tr>";
					while($row = mysqli_fetch_assoc($result)){
						$count++;
						echo "<td id = 'item'>";
							// echo "<a href='index.php?module=products&action=product_details&id=$id'>";
							$url = $row['url'];
							$id = $row['id'];
							echo "<a href='index.php?module=products&action=product_details&id=$id'>";
							echo "<img src='$url' width = '170px' height = '170px'><br>";
							// echo "</a>";
							echo "<b style = 'font-size: larger;'>".$row['name']."</b><br>";
							echo "<b style = 'color: red; font-size: larger;'>".$row['price']."<u>đ</u>"."</b><br>";
							echo "</a>";
						echo "</td>";
						if($count % $n ==0) break;
					}
					

				echo "</tr>";
			}

		 ?>
	</table>

	<br>
	<a href="index.php?module=products&action=list_canhan&page=<?php if($page > 1) {echo ($page-1);} else echo $page; ?>" ><i class="fa fa-arrow-left" style="font-size:24px"></i></a>
	    <b style="font-size: 25px;"><?php echo $page; ?></b>
	    <a href="index.php?module=products&action=list_canhan&page=<?php if($page < $tong_so_trang) {echo ($page+1);} else echo $page; ?>"><i class="fa fa-arrow-right" style="font-size:24px"></i></a>
</div>


<?php require_once("layout/footer.php"); ?>