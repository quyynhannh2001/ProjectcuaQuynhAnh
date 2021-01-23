<?php 
$name = $url = $price = $status = $description = $id_type = $id_brand = "";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM products WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		echo "Error; ".mysqli_error($conn);
	}
	else if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_assoc($result);
		$name = $row['name'];
		$url = $row['url'];
		$price = $row['price'];
		$status = $row['status'];
		$description = $row['description'];
		$type = $row['id_type'];
		$brand = $row['id_brand'];
	}
}
if (isset($_POST['btn'])) {
	$name = $_POST['name'];
	$url = $_POST['url'];
	$price = $_POST['price'];
	$status = $_POST['status'];
	$description = $_POST['description'];
	$type = $_POST['id_type'];
	$brand = $_POST['id_brand'];
	$sql = "UPDATE products SET name = '$name', url = $url, price = $price, description = $description, status = $status,  type = $id_type, brand = $id_brand WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		echo "Error: ".mysqli_error($conn);
	}
	else{
		header("Location: index.php?module=products&action=list");
	}

}
 ?>


<?php 
$title = "Chỉnh sửa sản phẩm";
require_once("layout/header.php");
 ?>
  <style type="text/css">
	#edit-products{
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

<div id="edit-products">
	<form method="POST" enctype="multipart/form-data"> 
		<div id="i1">
			<div id="t1">
		<label>
			<b>Sản phẩm</b><br>
			<input type="text" name="name" placeholder="Tên sản phẩm"  required="" style="height: 25px; width: 250px; text-align: center;" value="<?php echo $name; ?>">
		</label>
			</div>
		<div id="p1">
		<label>
			<b>Hình ảnh</b><br>
			<input type="file" name="url" accept="*/images" required="" value="<?php echo $url; ?>">
		</label>
			</div>
		</div>
		<div id="i2">
			<div id="t2">
		<label>
			<b>Giá NY</b><br>
			<input type="number" step="1" name="price" placeholder="Giá sản phẩm:" required="" style="height: 25px; width: 250px; text-align: center;" value="<?php echo $price; ?>">
		</label>
		</div>
		<div id="p2">
		<label>
			<b>Tình trạng</b><br>
			<select name="status" style="height: 25px; width: 250px; text-align: center;" value="<?php echo $status; ?>">
				<option value="1" <?php if ($status == 1) echo "selected"; ?>>Còn hàng</option>
				<option value="0" <?php if ($status == 0) echo "selected"; ?>>Hết hàng</option>
				<option value="2" <?php if ($status == 2) echo "selected"; ?>>Đang về hàng</option>
				<option value="-1" <?php if ($status == -1) echo "selected"; ?>>Ngừng kinh doanh</option>
			</select>
		</label>
		</div>
		</div>
		<div id="i3">
			<div id="t3">
		<label>
			<b>Thương hiệu</b><br>
			<select name="brand" style="height: 25px; width: 250px; text-align: center;" >
				<?php 
					$sql = "SELECT id,name FROM brands";
					$result = mysqli_query($conn,$sql);
					if (!$result) {
						echo "Error: ".mysqli_error($conn);		
					}
					else if(mysqli_num_rows($result)>0){
						foreach($result as $row){
							$id_brand = $row['id'];
							if($id_brand = $brand) $selected = "selected";
							else $selected = "";
							echo "<option value = '$id_brand' $selected>".$row['name']."</option>";
						}
					}
				 ?>
			</select>
		</label>
		</div>
		<div id="p3">
			<label>
			<b>Loại sản phẩm</b><br>
			<select name="type" style="height: 25px; width: 250px; text-align: center;" >
				<?php 
					$sql = "SELECT id,name FROM types";
					$result = mysqli_query($conn,$sql);
					if (!$result) {
						echo "Error: ".mysqli_error($conn);		
					}
					else if(mysqli_num_rows($result)>0){
						foreach($result as $row){
							$id_type = $row['id'];
							if($id_type == $type) $selected = "selected";
							else $selected = "";
							echo "<option value = '$id_type' $selected>".$row['name']."</option>";
						}
					}
				 ?>
			</select>
		</label>
		</div>

		</div>
		<div id="i4">		<label>
			<b>Mô tả sản phẩm</b><br>
			<textarea name="description" rows="7" cols="90"><?php echo $description; ?></textarea>
		</label>
		</div>
		<br>
		<button name="btn" type="submit" style="height: 25px; width: 60px;"><b>Thêm</b></button>


	</form>

</div>
<?php 
require_once("layout/footer.php");
 ?>