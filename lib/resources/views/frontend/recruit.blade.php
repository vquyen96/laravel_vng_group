
@extends('frontend.master')
@section('title', 'Dự án')
@section('main')
<link rel="stylesheet" type="text/css" href="css/news.css">
<div>
	<div class="container">
		<div class="row recruitTitle">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="txt60 orange">
					tuyển dụng
				</div>
			</div>
		</div>
		<div class="row recruitDetailMain">
			<div class="col-md-8 col-sm-8 col-xs-12">
				@foreach($recruit as $item)
				<a href="{{ asset('news/detail/'.$item->slug) }}" class="row recruitDetailLeft">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<div class="recruitDetailImg">
							<img src="{{ asset('lib/storage/app/news/'.$item->img) }}">
						</div>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-8">
						<div class="recruitDetailContent">
							<div class="txt18">
								{{$item->title}}
							</div>
							<div class="txt16">
								{!! cut_string($item->content, 200)!!}
							</div>
						</div>
						<div class="recruitDetailTime orange">
							<span class="glyphicon glyphicon-time"></span>
							Post {{ date('d/m/Y', strtotime($item->created_at)) }}
						</div>
					</div>
				</a>
				@endforeach
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="news_new">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="titleContent txt28">tin mới</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							@foreach($new as $item)
							<a href="{{ asset('news/detail/'.$item->slug) }}" class="news_new_item">
								<div class="row">
									<div class="col-md-5 col-sm-5 col-xs-5">
										<div class="news_press_item_img">
											<img src="{{ asset('lib/storage/app/news/'.$item->img) }}">
										</div>
									</div>
									<div class="col-md-7 col-sm-7 col-xs-7">
										<div class="news_new_item_content">
											<div class="txt16">
												{{ cut_string( $item->title , 60)  }}
											</div>
										</div>
										<div class="orange">
											<span class="glyphicon glyphicon-time"></span>
											Post {{ date('d/m/Y', strtotime($item->created_at)) }}
										</div>
									</div>
								</div>
									
							</a>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/news_detail.js"></script>
@stop
