
@extends('frontend.master')
@section('title', 'Dự án')
@section('main')
<link rel="stylesheet" type="text/css" href="css/video_detail.css">
<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="video_detail">
					<div class="video_detail_video">
						<img src="img/MG_6852-768x569.png">
					</div>
					<div class="video_detail_title txt30">
						Dương Thị Huệ – PGĐ VNG Media (VNG Group) vinh dự nhận giải nhất cuộc thi thiết kế logo Hội Kiến trúc sư Việt Nam
					</div>
					<div class="video_detail_time orange">
						<span class="glyphicon glyphicon-time"></span>
						Post 28/05/2018
					</div>
				</div>
			</div>
		</div>
		<div class="row video_related">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="txt24 orange">
					Video liên quan
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4">
				<div class="video_related_item">
					<div class="video_related_img">
						<img src="img/vng-13-768x576.png">
					</div>
					<div class="video_related_title">
						Sự bắt tay mang tính chiến lược của Cphonevn và VNGroup
					</div>
					<div class="orange">
						<span class="glyphicon glyphicon-time"></span>
						Post 28/05/2018
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4">
				<div class="video_related_item">
					<div class="video_related_img">
						<img src="img/vng-13-768x576.png">
					</div>
					<div class="video_related_title">
						Sự bắt tay mang tính chiến lược của Cphonevn và VNGroup
					</div>
					<div class="orange">
						<span class="glyphicon glyphicon-time"></span>
						Post 28/05/2018
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4">
				<div class="video_related_item">
					<div class="video_related_img">
						<img src="img/vng-13-768x576.png">
					</div>
					<div class="video_related_title">
						Sự bắt tay mang tính chiến lược của Cphonevn và VNGroup
					</div>
					<div class="orange">
						<span class="glyphicon glyphicon-time"></span>
						Post 28/05/2018
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/video_detail.js"></script>
@stop
