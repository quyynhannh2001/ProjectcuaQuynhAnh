<?php 
	if(!isset($_SESSION['user'])){
		header("Location: index.php?module=common&action=login");
	}
	if (isset($_POST['btnConfirm'])) {
		$receiver = $_POST['receiver'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		if (isset($_SESSION['total_amount'])) 
		$total_amount = $_SESSION['total_amount'];
	$id_customer = $_SESSION['user']['id'];
	$sql = "INSERT INTO invoices VALUES (NULL, current_timestamp(), '$total_amount', '$receiver','$address','$phone','0',NULL, '$id_customer')";
	$result = mysqli_query($conn, $sql);
	if ($result == false) {
		echo "Error: ".mysqli_error($conn);
	}
	else{
		 $id_invoice = mysqli_insert_id($conn);
		 foreach($_SESSION['cart'] as $id_product => $quantity){
		 	$sql = "INSERT INTO invoice_details VALUE('$id_invoice', '$id_product', '$quantity')";
		 	$result = mysqli_query($conn, $sql);
		 	if (!$result) {
		 		die("Error: ".mysqli_error($conn)) ;
		 	
		 	}
		 }
		 unset($_SESSION['cart']);
		 header("Location: index.php?module=invoices&action=details&id=$id_invoice");
		 die();
	}
}
 ?>


 
<?php 
$title = "Thanh toán";
require_once("layout/header.php");
 ?>
 <style type="text/css">
 	.checkout form{
 		width: 70%;
 		margin: auto;
 		font-size: large;
 		text-align: center;
 		padding-top: 20px;

 	}
 	.checkout{
 		padding-top: 100px;
 	}
 	table{
 		width: 60%;
 		margin-left: 150px; 
 		border: 1px solid black;
 		padding-right: 50px;

 	}
 	input{
 		font-size: 15px;
 	}
 </style>
 <script type="text/javascript">
 	function OrderConfirm(){
 		return confirm("Xác nhận đặt hàng?");
 	}
 </script>

 <div class="checkout">
 	<?php 
 		$id=$_SESSION['user']['id'];
 		$sql = "SELECT name, phone_no, address FROM customers WHERE id=$id";
 		$result = mysqli_query($conn,$sql);
 		if ($result == false) {
 			echo "Error: ".mysqli_error($conn);
 		}
 		else if(mysqli_num_rows($result)==1){
 			$row = mysqli_fetch_assoc($result);
 			$name = $row['name'];
 			$phone = $row['phone_no'];
 			$address = $row['address'];
 		}
 	 ?>
 	<form method="POST">
 		Tên người nhận:<input type="text" name="receiver" value="<?php echo $name; ?>" placeholder="Người nhận:" required="">
 		<br><br>
 		Số điện thoại:<input type="tel" name="phone" value="<?php echo $phone; ?>" required="" placeholder="Số điện thoại:">
 		<br><br>
 		Địa chỉ nhận hàng:<input type="text" name="address" value="<?php echo $address; ?>" required="" placeholder="Địa chỉ:">
 		<br><br>
 		<?php 
		// $stt = 0;
		// $total = 0;
			foreach ($_SESSION['cart'] as $id => $quantity) {
				// $stt ++;
				$sql = "SELECT name, price, url FROM products WHERE id = '$id'";
				$result = mysqli_query($conn,$sql); 
				if ($result == false) echo "Error: ".mysqli_error($conn); 
				else {
					$row = mysqli_fetch_assoc($result);
					$name = $row['name'];
					$price = $row['price'];
					$url = $row['url'];
					echo "<table>";
					echo "<tr>";
						// echo "<td>".$stt."</td>";
						echo "<td>";
							echo $name."<br>";
							$url = $row['url'];
							echo "<img src='$url' width = '100px'>";
						echo "</td>";
						// 	$price = $row['price'];
						// echo "<td>".$price."<u>đ</u></td>";
						
						// 	echo "<a href = 'index.php?module=invoices&action=cart&id=$id&down'><i class='fa fa-minus-square-o' style='font-size:20px'></i></a>";
						$price = $row['price'];
						echo "<td>".$price."<u>đ</u></td>";
						echo "<td>";
							echo "x".$quantity."&nbsp;";

							// echo "<a style = 'font-size: large;' href = 'index.php?module=invoices&action=cart&id=$id&up'><i class='fa fa-plus-square-o' style='font-size:20px'></i></a>";
						echo "</td>";
						// echo "<td>".($pricse * $quantity)."</td>";
					echo "</tr>";
					echo "</table>";
					// $total += $price * $quantity;
				}
			}
			?>
			<br>
 		<p>Hình thức thanh toán: COD</p>
 		<br>
 		<p>Đơn vị vận chuyển:<select>
 			<option selected="">ViettelPost</option>
 		</select></p>
 		<br>
 		<p>Tổng số tiền: 
 			<?php 
 			if(isset($_SESSION['total_amount'])){
 				echo $_SESSION['total_amount']."đ";
 			
 			}
 			 ?>
 			</p>
 			<button type="submit" name="btnConfirm" onclick="return OrderConfirm()" style="width: 250px; height: 38px; margin-top: 20px; font-size: large;">Đặt hàng</button>
 			
 	</form>
 	<!-- <a href="index.php">
 	<button>Hủy</button>
 </a> -->


 </div> 

 <?php 
 require_once("layout/footer.php");
  ?>