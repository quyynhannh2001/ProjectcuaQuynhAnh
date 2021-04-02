<?php
$title = "Liên hệ";
 require_once("layout/header.php");

?>
<style type="text/css">
	#lienhe{
		padding: 15px;
	}
	#lienhe table{
		width: 100%;
		/*padding: 15px;*/

	}
	tr,td{
		padding: 15px;
		border-bottom: 1px solid lightgray;
	}
	div.vien {
  position: static;
  border: 3px solid gray;
}
div#form.vien{
	padding: 20px;
	background-color: lightgray;
	text-align: center;
	margin-left: 80px;
	margin-right: 80px;
}
input{
	width: 700px;
}
.err{
			border-color: red;
			/*border-width: 5px;*/
		}
		.success{
			border-color: green;
			/*border-width: 5px;*/
		}
		
		.show{
			color: red;
			font-style: italic;
			font-size: 17px;
</style>
<script type="text/javascript">
			
		function validatejs(){
			
			var vEmail = document.getElementById('email');
			var vName = document.getElementById('name');

			
			var vErmail = document.getElementById('ermail');
			var vErname = document.getElementById('ername');

	
			var email = vEmail.value.trim();
		
			var name = vName.value.trim();

		
			var flagE=false;
		
			var flagN=false;
		
			const check=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
			
			

			var classErr = document.getElementsByClassName('err');
            var i;
            for(i = 0; i< classErr.length; i++){
            	classErr[i].classList.remove('err');
            }
            var classSuccess = document.getElementsByClassName('success');
            for(i = 0; i< classSuccess.length; i++){
            	classSuccess[i].classList.remove('success');
            }       
            
            var classShowErr = document.getElementsByClassName('show');
            for(i = 0; i< classShowErr.length; i++){
            	classShowErr[i].innerHTML = "";
            } 

			if(email==""){
				vErmail.innerHTML="Hãy nhập email của bạn!";
			 	vEmail.classList.add('err');
			}
			else if(check.test(email)){
				flagE=true;
				vEmail.classList.add('success');
			}
			else{
				vErmail.innerHTML="Email đăng ký không hợp lệ!";
			 	vEmail.classList.add('err');
			}
			// if(phone==""){
			// 	vErphone.innerHTML="Hãy nhập số điện thoại của bạn!";
			//  	vPhone.classList.add('err');
			// }
			// else if(RegP.test(phone)){
			// 	flagP=true;
			// 	vPhone.classList.add('success');
			// }
			// else{
			// 	vErphone.innerHTML="Số điện thoại đăng kí không hợp lệ!";
			//  	vPhone.classList.add('err');
			// }
			
			if(name==""){
				vErname.innerHTML="Hãy nhập tên của bạn!";
				vName.classList.add('err');
			}
			else{
				flagN=true;
				vName.classList.add('success');
			}
			
			if(flagN==true&&flagE==true)return true;
			else return false;
			// if (flagN==false&&flagE==false) {
			// 	return false;
				
			// }
			// else{
			// 	return true;
			// 	// alert("Gửi thư thành công");
			// 	document.write("Gửi thư thành công");
			// }
		}
</script>

<div id="lienhe">
	<h2 align="center">Liên hệ</h2>
	<p>
		Chúng tôi rất sẵn sàng lắng nghe ý kiến của bạn! Nếu bạn cần bất kỳ trợ giúp nào hoặc bạn muốn chia sẻ với chúng tôi phản hồi của mình, vui lòng liên hệ bằng cách sử dụng một trong các tùy chọn bên dưới.
		<br><br>

Bạn cũng có thể tìm thấy thông tin bạn đang tìm kiếm trong phần Hỏi đáp của chúng tôi.
<br><br>

Nhấp vào bên dưới để trò chuyện với chúng tôi ngay bây giờ hoặc chọn một trong các tùy chọn liên hệ khác: 
<br><br>

<b>QACARE </b>
<br><br>

Địa chỉ: Đường Nguyễn Đức Thuận, Thị trấn Trâu Quỳ, Huyện Gia Lâm, Thành phố Hà Nội, Việt Nam
	</p>
	<br>
	<table>
		<tr>
			<td>Số điện thoại</td>
			<td>:</td>
			<td>0921143167</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>quyynh.annh.ngth@gmail.com</td>
		</tr>
	</table>
	<br>
	<p>Mọi thắc mắc và phản hồi về sản phẩm, dịch vụ của chúng tôi, vui lòng gửi e-mail cho chúng tôi để nhận được sự hỗ trợ tốt nhất. Xin cảm ơn.</p>
	<br><br>
	<div id="form" class="vien">
		<form method="POST" onsubmit="return validatejs()">
		<h3>LIÊN HỆ CHÚNG TÔI</h3>
		<br>
		Họ tên(Yêu cầu)
		<br>
		<input type="text" name="name" id="name">
		<br>
		<span id="ername" class="show"></span>
		<br><br>
		Email(Yêu cầu)
		<br>
		<input type="mail" name="email" id="email">
		<br>
		<span id="ermail" class="show"></span>
		<br><br>
		Chủ đề
		<br>
		<input type="text" name="chude">
		<br><br>
		Nội dung
		<br>
		<textarea rows="10" cols="100" style="border-radius: 2%;"></textarea>
		<br><br>
		<button type="submit" style="width: 250px; height: 38px;">Gửi</button>
		</form>
	</div>
</div>

<?php require_once("layout/footer.php")  ?>