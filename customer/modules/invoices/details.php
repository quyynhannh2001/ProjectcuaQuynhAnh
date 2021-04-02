<?php 
	if (isset($_GET['id'])) {
		$id_invoice = $_GET['id'];
	}
	else{
		header("Location: index.php?module=home&action=home");
	}
 ?>
<?php 
	$title = "Chi tiết đơn hàng";
	require_once("layout/header.php");
 ?>
 <style type="text/css">
 	.invoice-details{
 		margin: auto;
 		width: 90%;
 		/*text-align: center;*/
 		font-size: large;
 		padding: 20px;
 	}
 	.invoice-details table{
 		width: 90%;
 		/*padding: 16px;*/
 		text-align: center;
 		margin: auto;

 	}
 	tr, td, th, table{
 		padding: 10px;
 		border: 1px solid black;
 		border-collapse: collapse;
 	}

 </style>

<div class="invoice-details">
<?php 
 	$sql = "SELECT * FROM invoices WHERE id = '$id_invoice'";
 	$result = mysqli_query($conn, $sql);
 	if(!$result){
 		echo "Error: ".mysqli_error($conn);
 	}
 	else if(mysqli_num_rows($result) == 1){
 		$row = mysqli_fetch_assoc($result);
 		// $id = $row['id'];
 		$create_at = $row['create_at'];
 		$receiver = $row['receiver'];
 		$address = $row['address'];
 		$status = $row['status'];
 		$phone = $row['phone'];
 		$total_amounts = $row['total_amounts'];
 	}
 ?>
	<p>Mã đơn hàng: <?php echo "<b>$id_invoice</b>"; ?></p>
	<p>Tên người nhận: <?php echo "<b>$receiver</b>"; ?></p>
	<p>Ngày đặt hàng: <?php echo "<b>$create_at</b>"; ?></p>
	<p>Địa chỉ nhận hàng: <?php echo "<b>$address</b>"; ?></p>
	<p>Số điện thoại: <?php echo "<b>$phone</b>"; ?></p>
	<p>Tình trạng: <?php
		$arrStatus = array(-1 => "Đã hủy", 2 => "Giao thành công", 1 => "Chờ lấy hàng", 0 => "Đang chờ duyệt");
		$status = $row['status'];
		echo "<b>".$arrStatus[$status]."</b>";

	 ?></p>
	 <?php  
	 	if ($status == 0) {
	 		echo "<a href = 'index.php?module=invoices&action=cancel&id=$id_invoice'>Hủy đơn hàng</a>";
	 	}
	 ?>
	<p>Danh sách sản phẩm:</p>
	<br>
	<table>
		<tr>
			<th>STT</th>
			<th>Tên sản phẩm</th>
			<th>Đơn giá</th>
			<th>Số lượng</th>
			<!-- <th>Thành tiền</th> -->
		</tr>
		<?php 
			$sql = "SELECT products.name,products.id,products.price,invoice_details.quantity FROM products INNER JOIN invoice_details ON products.id=invoice_details.id_product WHERE invoice_details.id_invoice = '$id_invoice'";
			// echo $sql;
			$result = mysqli_query($conn, $sql);
			if ($result == false) {
				echo "Error: ".mysqli_error($conn);
			}
			else if(mysqli_num_rows($result) == 0){
				echo "<td colspan ='5'>Chưa có đơn hàng nào...</td>";
			}
			else{
				$count = 0;
				foreach($result as $row){
					$count ++;
					echo "<tr>";
						echo "<td>".$count."</td>";
						echo "<td>";
							$id_product = $row['id'];
							echo "<a href='index.php?module=products&action=product_details&id=$id_product'>".$row['name']."</a>";
						echo "</td>";
						echo "<td>".$row['price']."<u>đ</u></td>";
						echo "<td>".$row['quantity']."</td>";
						// echo "<td>".$row['price']."</td>";
						// echo "<td>".$row['total_amounts']."</td>";
					echo "</tr>";
				}
			}

		 ?>
		 <tr style="font-size: larger;">
		 	<th colspan="3">Tổng tiền</th>
		 	<th style="color: red"><?php echo $total_amounts; ?><u">đ<u></th>
		 </tr>
	</table>
</div>
 <?php 
 	require_once("layout/footer.php");
  ?>