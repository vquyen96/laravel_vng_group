
@extends('frontend.master')
@section('title', 'Dự án')
@section('main')
<link rel="stylesheet" type="text/css" href="css/video_detail.css">
<link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="video_detail">
					<div class="video_detail_video">
						{{-- <video src="{{ asset('lib/public/uploads/'.$video->video) }}"></video> --}}
						<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
						<video id="my-video" class="video-js" controls preload="auto"
					  poster="" data-setup="{}" autoplay>

						    <source src="{{ asset('lib/public/uploads/'.$video->video) }}" type='video/mp4'>
						    <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
						    
					 	</video>
					</div>
					<div class="video_detail_title txt30">
						{{$video->name}}
					</div>
					<div class="video_detail_time orange">
						<span class="glyphicon glyphicon-time"></span>
						Post {{ date('d/m/Y', strtotime($video->created_at)) }}
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
			@foreach($video_related as $item)
			<div class="col-md-4 col-sm-4 col-xs-4">
				<div class="video_related_item">
					<div class="video_related_img">
						<img src="{{ asset('lib/storage/app/video/'.$item->img) }}">
					</div>
					<div class="video_related_title">
						{{$item->name}}
					</div>
					<div class="orange">
						<span class="glyphicon glyphicon-time"></span>
						Post {{ date('d/m/Y', strtotime($item->created_at)) }}
					</div>
				</div>
			</div>
			@endforeach
			{{-- <div class="col-md-4 col-sm-4 col-xs-4">
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
			</div> --}}
		</div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/video_detail.js"></script>
	<script src="http://vjs.zencdn.net/6.6.3/video.js"></script>
@stop
