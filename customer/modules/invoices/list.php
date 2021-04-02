<?php 
	$title = "Lịch sử mua hàng";
	require_once("layout/header.php");
 ?>
 <style type="text/css">
 	.invoice-list table{
 		width: 90%;
 		margin: auto;
 		padding: 16px;
 		font-size: large;
 		text-align: center;
 	}
 	table, th, td, tr{
 		border: 1px solid black;
 		border-collapse: collapse;
 		padding: 10px;
 	}
 	a{
 		text-decoration: none;
 		color: black;
 	}
 </style>
<div class="invoice-list">
	<table>
		<tr>
		<th>STT</th>
		<th>Mã đơn hàng</th>
		<th>Tổng số tiền</th>
		<th>Ngày mua</th>
		<th>Tình trạng</th>
	</tr>
	
	<?php 
		$id_customer = $_SESSION['user']['id'];
		$sql = "SELECT * FROM invoices WHERE id_customer = '$id_customer'";
		$result = mysqli_query($conn, $sql);
		if(!$result){
			echo "Error: ".mysqli_error($conn);
		}
		else if(mysqli_num_rows($result) == 0){
			echo "<tr><th colspan = '5'>Chưa có đơn hàng nào</th></tr>";
		}
		else {
			$count = 0;
			foreach($result as $row){
				$count ++;
				echo "<tr>";
				echo "<td>".$count."</td>";
				echo "<td>";
				$id = $row['id'];
					echo "<a tile='Click để xem chi tiết' href = 'index.php?module=invoices&action=details&id=$id' >".$id."</a>";
				echo "</td>";
				echo "<td>".$row['total_amounts']."</td>";
				echo "<td>".$row['create_at']."</td>";
				echo "<td>";
					$arrStatus = array(-1 => "Đã hủy", 2 => "Giao thành công", 1 => "Chờ lấy hàng", 0 => "Đang chờ duyệt");
					$status = $row['status'];
					echo $arrStatus[$status];
				echo "</td>";
				echo "</tr>";

			}
		}
	 ?>
	 </table>
</div>
 <?php 
 	require_once("layout/footer.php");
  ?>