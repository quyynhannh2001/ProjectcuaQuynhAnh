<?php 
	$sql = "SELECT id, name, url, price FROM products ";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		$error = "Error: ".mysqli_error($conn);
		mysqli_close($conn);
		die($error);
	}
 ?>
<?php 
$title = "Chăm sóc sắc đẹp";
require_once("layout/header.php");
 ?>
 <style type="text/css">
 	#list_sacdep td{
 		padding-left: 10px;
 	}
 </style>
<div id="list_sacdep">
	<table>
		<?php 
			$total = mysqli_num_rows($result);
			$count = 0;
			while ($count != $total) {
				echo "<tr>";
					while($row = mysqli_fetch_assoc($result)){
						$count++;
						echo "<td id = 'item'>";
							$url = $row['url'];
							echo "<img src='$url' width = '130px'><br>";
							echo "<b>".$row['name']."</b><br>";
							echo "<b>".$row['price']."<u>đ</u>"."</b><br>";
						echo "</td>";
					}

				echo "</tr>";
			}

		 ?>
	</table>
</div>


<?php require_once("layout/footer.php"); ?>