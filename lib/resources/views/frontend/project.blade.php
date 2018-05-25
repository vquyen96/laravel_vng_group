
@extends('frontend.master')
@section('title', 'Dự án')
@section('main')
<link rel="stylesheet" type="text/css" href="css/project.css">
<div>
	<div class="container">
		
		<div class="row project">
			<div class="col-md-9 col-sm-9 col-xs-12">
				<div class="projectImg">
					<img src="img/derek-torsani-227207-unsplash (1) - Copy.png">
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="projectContent">
					<div class="txt48 orange">Dự án</div>
					<div class="txt16 ">
						orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
					</div>
				</div>
			</div>
		</div>
		<div class="row investment">
			<div class="col-md-3 title">
				<div class="txt48 orange">
					Dự án đầu tư
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-6">
						<div class="investmentItem">
							<div class="investmentItemHead">
								<div class="txt145">01</div>
								<div class="txt20">Dự án Cẩm An - Hội An</div>
							</div>
							<div class="investmentItemImg">
								<img src="img/nha-co-cam-an-hoi-an1.png">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="investmentItem">
							<div class="investmentItemHead">
								<div class="txt145">02</div>
								<div class="txt20">Dự án Khu dân cư bên bở sông Đà - TP. Hòa Bình</div>
							</div>
							<div class="investmentItemImg">
								<img src="img/chuttersnap-366594-unsplash - Copy.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row distribution">
			<div class="col-xs-12">
				<div class="txt48 orange">
					dự án phân phối
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="distributionItem">
					<div class="distributionItemImg">
						<img src="img/david-paschke-100138-unsplash (1) copy 3.png">
					</div>
					<div class="distributionItemContent">
						<div class="txt18">
							Cocobay đà nẵng
						</div>
						<div class="txt16">
							Cocobay là Tổ hợp giải trí và du lịch tại Đà Nẵng – Hội An phục vụ 10.000 phòng khách sạn từ 3 – 5 sao 
						</div>
					</div>
					<a href="{{ asset('project/detail') }}" class="distributionItemButton">
						<img src="img/arrow_right.png">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/project.js"></script>
@stop
