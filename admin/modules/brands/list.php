<?php 
$title = "Thương hiệu";
require_once("layout/header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	#list-brands{
		padding: 15px;
	}
	#list-brands table{
		width: 100%;
		text-align: center;
		font-size: larger;
	}
	#list-brands table,tr,td,th{
		border: 2px solid black;
		border-collapse: collapse;
	}
	a{
		text-decoration: none;
		color: blue;

	}
</style>
<script type="text/javascript">
	function confirmDelete(){
		return confirm("Thao tác này sẽ xóa toàn bộ bản ghi nhưng bạn vẫn có thể thêm lại?");
	}
</script>
</head>
<body>
	<div id="list-brands">
	<a href="index.php?module=brands&action=insert"><h2><u>Thêm thương hiệu</u></h2></a>
	<br>
	<table>
		<tr>
			<th>ID</th>
			<th>Tên thương hiệu</th>
			<th>Xuất xứ</th>
			<th>Thao tác</th>
		</tr>
		<?php 
			$sql = "SELECT * FROM brands";
			$result = mysqli_query($conn,$sql);
			if ($result == false) {
				echo "Error: ".mysqli_error($conn);
			}
			else if (mysqli_num_rows($result) == 0) {
				echo "<tr><td colspan = '4'><i>Chưa có thương hiệu nào...</i></td></tr>";
			}
			else{
				foreach ($result as $row) {
					echo "<tr>";
						echo "<td>".$row['id']."</td>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['madein']."</td>";
						echo "<td>";
						$id = $row['id'];
							echo "<a href = 'index.php?module=brands&action=edit&id=$id'>Sửa</a>";
							echo "||";
							echo "<a onclick = 'return confirmDelete()' href = 'index.php?module=brands&action=delete&id=$id'>Xóa</a>";

						echo "</td>";


					echo "</tr>";
				}
			}

		 ?>
	</table>

	
</div>

</body>
</html>


<?php 
require_once("layout/footer.php");
 ?>