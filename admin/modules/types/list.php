<?php 
$title = "Loại sản phẩm";
require_once("layout/header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	#list-types{
		padding: 15px;
	}
	#list-types table{
		width: 100%;
		text-align: center;
		font-size: larger;
	}
	#list-types table,tr,td,th{
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
	<div id="list-types">
	<a href="index.php?module=types&action=insert"><h2><u>Thêm loại sản phẩm</u></h2></a>
	<br>
	<table>
		<tr>
			<th>ID</th>
			<th>Loại sản phẩm</th>
			<th>Thao tác</th>
		</tr>
		<?php 
			$sql = "SELECT * FROM types";
			$result = mysqli_query($conn,$sql);
			if ($result == false) {
				echo "Error: ".mysqli_error($conn);
			}
			else if (mysqli_num_rows($result) == 0) {
				echo "<tr><td colspan = '3'><i>Chưa có loại sản phẩm nào...</i></td></tr>";
			}
			else{
				foreach ($result as $row) {
					echo "<tr>";
						echo "<td>".$row['id']."</td>";
						echo "<td>".$row['name']."</td>";
						echo "<td>";
						$id = $row['id'];
							echo "<a href = 'index.php?module=types&action=edit&id=$id'>Sửa</a>";
							echo "||";
							echo "<a onclick = 'return confirmDelete()' href = 'index.php?module=s&action=delete&id=$id'>Xóa</a>";

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