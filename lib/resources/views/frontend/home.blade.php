
@extends('frontend.master')
@section('title', 'Home')
@section('main')
<link rel="stylesheet" type="text/css" href="css/home.css">
<div>
	<div class="imageBig">
		<img src="img/image.png">
	</div>
	<div class="listPage">
		<ul>
			<li >
				<a href="{{ asset('overview') }}" class="active">
					<span class="text">
						Tổng quan về VNG
					</span>
					<div class="listPageItemHide">
						<div class="content">
							Là một tập đoàn đa ngành có hệ sinh thái khởi nghiệp khép kín tạo nên giá trị phát triển bền vững. Không chỉ mang lại cuộc sống ấm no hạnh phúc cho CBNV toàn hệ thống, VNGroup còn góp phần tạo ra những giá trị thịnh vượng nhân văn cho cộng đồng . 
						</div>
						<div class="link">
							img/image.png
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="{{ asset('property') }}">
					<span class="text">
						Sàn giao dịch BĐS VNG
					</span>
					<div class="listPageItemHide">
						<div class="content">
							Thẩm định giá BĐS là sự ước tính về giá trị của các quyền sở hữu bất động sản bao gồm: Các loại đất đai, nhà và công trình xây dựng gắn liền với đất đai; Hoặc tài sản gắn liền với đất đai, tài sản khác do pháp luật quy định…
						</div>
						<div class="link">
							img/1.png
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="http://thamdinhgiavng.com/" target="blank">
					<span class="text">
						Thẩm định giá VNG
					</span>
					<div class="listPageItemHide">
						<div class="content">
							Thẩm định giá BĐS là sự ước tính về giá trị của các quyền sở hữu bất động sản bao gồm: Các loại đất đai, nhà và công trình xây dựng gắn liền với đất đai; Hoặc tài sản gắn liền với đất đai, tài sản khác do pháp luật quy định…
						</div>
						<div class="link">
							img/2.png
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="http://vnglaw.com/" target="blank">
					<span class="text">
						Văn phong luật sư VNG
					</span>
					<div class="listPageItemHide">
						<div class="content">
							Văn phòng luật sư VNG Việt Nam (VNG Viet Nam Law Firm) được thành lập từ năm 2009 và ngày càng khẳng định vị trí vững mạnh trong lĩnh vực pháp lý. 
						</div>
						<div class="link">
							img/3.png
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="http://vngmedia.vn/" target="blank">
					<span class="text">
						Truyền thông VNG
					</span>
					<div class="listPageItemHide">
						<div class="content">
							Chiến lược marketing tổng thể/
							Lập kế hoạch marketing/
							Chiến lược quảng cáo/
							Kế hoạch truyền thông/
							Lập kế hoạch bán hàng/
							XD bộ nhận diện thương hiệu
						</div>
						<div class="link">
							img/4.png
						</div>
					</div>
				</a>
			</li>
		</ul>
	</div>
	<div class="lineLeft">
	</div>
	<div class="lineRight">
	</div>
	<div class="title">
		<span class="titleMain">
			Tổng quan về VNG Group
		</span>
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
		</p>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/home.js"></script>
@stop

