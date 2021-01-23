<?php 
if (isset($_POST['btn'])) {
	$name = $_POST['name'];
	$price = $_POST['price'];
	$status = $_POST['status'];
	$description = $_POST['description'];
	$id_type = $_POST['type'];
	$id_brand = $_POST['brand'];
	if ($_FILES['url']['size'] > 0) {
		$folder ="../public/";
		$img = $_FILES['url']['name'];
		$url = $folder.$img;
		move_uploaded_file($_FILES['url']['tmp_name'], $url);
			}
	$sql = "INSERT INTO products VALUES (NULL,'$name','$url','$price','$description','$status','$id_type','$id_brand')";
	$result = mysqli_query($conn,$sql);
	if (!$result) {
		echo "Error: ".mysqli_error($conn);
	}
	else{
		header("Location: index.php?module=products&action=list");
	}
	
}

 ?>
<?php
$title = "Thêm sản phẩm";
require_once("layout/header.php");
?>
<style type="text/css">
	#insert-products{
		padding: 15px;
		text-align: center;
		font-size: large;
		background-color: #EEEEEE;
		margin-left: 30px;
		margin-top: 20px;
		margin-bottom: 20px;
	}
	#i1{
		width: 100%;
		height: 13vh;
		float: left;
	}
	#t1{
		width: 50%;
		float: left;
	}
	#t1{
		width: 50%;
		float: left;
	}
	#i2{
		width: 100%;
		height: 13vh;
		float: left;
	}
	#t2{
		width: 50%;
		float: left;
	}
	#t2{
		width: 50%;
		float: left;
	}
	#i3{
		width: 100%;
		height: 13vh;
		float: left;
	}
	#t3{
		width: 50%;
		float: left;
	}
	#t3{
		width: 50%;
		float: left;
	}
</style>
<div id="insert-products">
	<form method="POST" enctype="multipart/form-data"> 
		<div id="i1">
			<div id="t1">
		<label>
			<b>Sản phẩm</b><br>
			<input type="text" name="name" placeholder="Tên sản phẩm"  required="" style="height: 25px; width: 250px; text-align: center;">
		</label>
			</div>
		<div id="p1">
		<label>
			<b>Hình ảnh</b><br>
			<input type="file" name="url" accept="*/images" required="">
		</label>
			</div>
		</div>
		<div id="i2">
			<div id="t2">
		<label>
			<b>Giá NY</b><br>
			<input type="number" step="1" name="price" placeholder="Giá sản phẩm:" required="" style="height: 25px; width: 250px; text-align: center;">
		</label>
		</div>
		<div id="p2">
		<label>
			<b>Tình trạng</b><br>
			<select name="status" style="height: 25px; width: 250px; text-align: center;">
				<option value="1">Còn hàng</option>
				<option value="0">Hết hàng</option>
				<option value="2">Đang về hàng</option>
				<option value="-1">Ngừng kinh doanh</option>
			</select>
		</label>
		</div>
		</div>
		<div id="i3">
			<div id="t3">
		<label>
			<b>Thương hiệu</b><br>
			<select name="brand" style="height: 25px; width: 250px; text-align: center;">
				<?php 
					$sql = "SELECT id,name FROM brands";
					$result = mysqli_query($conn,$sql);
					if (!$result) {
						echo "Error: ".mysqli_error($conn);		
					}
					else if(mysqli_num_rows($result)>0){
						foreach($result as $row){
							$id_brand = $row['id'];
							echo "<option value = '$id_brand'>".$row['name']."</option>";
						}
					}
				 ?>
			</select>
		</label>
		</div>
		<div id="p3">
			<label>
			<b>Loại sản phẩm</b><br>
			<select name="type" style="height: 25px; width: 250px; text-align: center;">
				<?php 
					$sql = "SELECT id,name FROM types";
					$result = mysqli_query($conn,$sql);
					if (!$result) {
						echo "Error: ".mysqli_error($conn);		
					}
					else if(mysqli_num_rows($result)>0){
						foreach($result as $row){
							$id_type = $row['id'];
							echo "<option value = '$id_type'>".$row['name']."</option>";
						}
					}
				 ?>
			</select>
		</label>
		</div>

		</div>
		<div id="i4">		<label>
			<b>Mô tả sản phẩm</b><br>
			<textarea name="description" rows="7" cols="90"></textarea>
		</label>
		</div>
		<br>
		<button name="btn" type="submit" style="height: 25px; width: 60px;"><b>Thêm</b></button>


	</form>

</div>

<?php 
require_once("layout/footer.php");
 ?>