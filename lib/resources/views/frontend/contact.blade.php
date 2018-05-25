
@extends('frontend.master')
@section('title', 'Dự án')
@section('main')
<link rel="stylesheet" type="text/css" href="css/contact.css">
<div>
	<div class="container contact">
		<div class="row">
			<div class="col-md-6">
				<div class="contactLeft">
					<div class="contactLeftItem">
						<div class="txt30 orange">
							trụ sở chính hà nội
						</div>
						<div class="txt16">
							Địa chỉ: Tầng 5, Tòa Diamond Flower Tower, Hoàng Đạo Thúy, Nhân <br>Chính, Thanh Xuân, Hà Nội<br>
							Tel: 024 66666 989 Hotline: 096 310 6969<br>
							Email: info@vngvietnam.com.vn<br>
							Website: www.vnggroup.com.vn<br>
						</div>
					</div>
					<div class="contactLeftItem">
						<div class="txt30 orange">
							chi nhánh miền trung
						</div>
						<div class="txt16">
							Địa chỉ: Tầng 5, Tòa Diamond Flower Tower, Hoàng Đạo Thúy, Nhân <br>Chính, Thanh Xuân, Hà Nội<br>
							Tel: 024 66666 989 Hotline: 096 310 6969<br>
							Email: info@vngvietnam.com.vn<br>
							Website: www.vnggroup.com.vn<br>
						</div>
					</div>
					<div class="contactLeftItem">
						<div class="txt30 orange">
							chi nhánh miền nam
						</div>
						<div class="txt16">
							Địa chỉ: Tầng 5, Tòa Diamond Flower Tower, Hoàng Đạo Thúy, Nhân <br>Chính, Thanh Xuân, Hà Nội<br>
							Tel: 024 66666 989 Hotline: 096 310 6969<br>
							Email: info@vngvietnam.com.vn<br>
							Website: www.vnggroup.com.vn<br>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<div class="contactRight">
					<div class="contactRightMap">
						<img src="img/contact_map.png">
					</div>
					<div class="contactRightMess contact01">
						<img src="img/contact_mess.png">
						<span class="txt24">Hà Nội</span>
					</div>
					<div class="contactRightMess contact02">
						<img src="img/contact_mess.png">
						<span class="txt24">Đà Nẵng</span>
					</div>
					<div class="contactRightMess contact03">
						<img src="img/contact_mess.png">
						<span class="txt24">Hồ Chí Minh</span>
					</div>

				</div>
			</div>
		</div>
		<div class="row contactForm">
			<div class="col-md-5">
				<div class="contactFormLeft">
					<div class="contactFormLeftImg">
						<img src="img/jay-cee-181272-unsplash - Copy.png">
					</div>
					<div class="contactFormLeftContent">
						<img src="img/contact04.png">
						<div class="txt24">
							Brochure công ty
						</div>
						<p>Download brochure mới nhất của Novaland để hiểu rõ hơn về chúng tôi</p>
						<a class="txt24 orange">
							Tải xuống >>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="contactFormRight">
					<div class="txt36 orange">
						liên hệ với chúng tôi
					</div>
					<form method="post">
						<input type="text" name="name" placeholder="Họ và tên">
						<input type="text" name="email" placeholder="Email">
						<textarea rows="7" placeholder="Nội dung"></textarea>
						<input type="submit" name="btnsbm" value="GỬI">
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/contact.js"></script>
@stop
