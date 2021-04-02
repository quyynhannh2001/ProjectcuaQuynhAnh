<?php 
$title = "Chi tiết sản phẩm";
require_once("layout/header.php");
 ?>
<div class="product-details">
	<?php 
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$sql = "SELECT * FROM products WHERE id = '$id'";
			$result = mysqli_query($conn,$sql);
			if (!$result) {
				echo "Error: ".mysqli_error($conn);			
			}
			else if(mysqli_num_rows($result) == 1){
				$row = mysqli_fetch_assoc($result);
				$name = $row['name'];
				$price = $row['price'];
				$url = $row['url']; 
				$description = $row['description'];
				$status = $row['status'];
			}
		}
		else{
			header("Location: index.php?module=home&action=home");
			die();
		}
	 ?>
	 
	 <style type="text/css">
	 	.img{ 
			border: 1px solid #CCC; 
			height: auto; /** Chiều cao tự động **/ 
			margin: 10px auto; /** Cách trên dưới 10px và nằm giữa **/ 
			overflow: hidden; /** DÒNG BẮT BUỘC CÓ **/ 
			position: relative; width: 350px; /** Chiều rộng vùng chứa **/ } 
			
		.img img { 
			width: 100%; /** Hình ảnh rộng 100% so với vùng chứa **/ 
			transition: all 1s; /** Tạo độ mượt **/ } 
			
		.img:hover img { 
			-webkit-transform: scale(4);
			 transform: scale(4);
			transition: 1s; 
		}
		.img-zoom {
		  border: 1px solid #d4d4d4;
		  /*set the size of the result div:*/
		  /*width: 300px;*/
		  /*height: 300px;*/
		}
		table{
			text-align: center;
			width: 100%;
			margin-top: 150px;
			margin-left: 150px;
			margin-right: 150px;
			/*text-align: left;*/
			padding: 30px;
			font-size: 20px;
			font-weight: bold;
		}
		table a{
			text-decoration: none;
			font-size: 20px;
			color: white;

		}
	 </style>
	 <script type="text/javascript">
	
</script>
	 <table >
	 	<tr>
	 		<td rowspan="5" class="img">
	 			<img src="<?php echo $url; ?>" >
	 		
	 		</td>
	 	</tr>
	 	<tr>
	 		<th><?php echo "$name"; ?></th>
	 	</tr>
	 	
	 	<tr>
	 		<!-- <td> -->
	 			<?php 
						$status = "";
						
							if ($row['status'] == 1) {
								$status = "Còn hàng";
							}
							else if ($row['status'] == 0) {
								$status = "Hết hàng";
							}
							else if ($row['status'] == 2) {
								$status = "Đang về hàng";
							}
							else{
								$status = "Ngừng kinh doanh";
							}
						echo "<td>Tình trạng: ".$status."</td>";
	 			 ?>
	 		<!-- </td> -->
	 	</tr>
	 	<tr>
	 		<td style="color: red; font-size: 25px;"><?php echo "Giá: ".$price."<u>đ</u>" ?></td>
	 	</tr>
	 	<tr>
	 		<td>
	 			<button onclick = 'return confirmAdd()' style="background-color: black; color: white; height: 50px; width: 200px;" name="btn"><a href="index.php?module=invoices&action=cart&id=<?php echo $id; ?>&up">Thêm vào giỏ</a></button>


	 		</td>
	 	</tr>
	 	
	 </table>
</div>
<div id="mota">
	<h3>Mô tả sản phẩm </h3>
	<?php echo $description; ?>
</div>
 <?php 
require_once("layout/footer.php");
  ?>