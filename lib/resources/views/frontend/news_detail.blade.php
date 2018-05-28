
@extends('frontend.master')
@section('title', 'Dự án')
@section('main')
<link rel="stylesheet" type="text/css" href="css/news.css">
<div>
	<div class="container">
		<div class="row newsDetailMain">
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="news_detail">
					<div class="news_detail_img">
						<img src="{{ asset('lib/storage/app/news/'.$news->img) }}">
					</div>
					<div class="news_detail_title txt30">
						{{ $news->title }}
					</div>
					<div class="news_detail_time orange">
						<span class="glyphicon glyphicon-time"></span>
						Post {{ date('d/m/Y', strtotime($news->created_at)) }}
					</div>
					<div class="news_detail_content">
						{!! $news->content !!}
					</div>
				</div>

				<div class="row news_related">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="title">
							<div class="line"></div>
							<div class="titleContent txt28">tin liên quan</div>
						</div>
					</div>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						@foreach($related as $item)
						<a href="{{ asset('news/detail/'.$item->slug) }}" class="row news_press_item">
							<div class="col-md-4 col-sm-4 col-xs-4">
								<div class="news_press_item_img">
									<img src="{{ asset('lib/storage/app/news/'.$item->img) }}">
								</div>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<div class="newsItemPressContent">
									<div class="txt18">
										{{ $item->title }}
									</div>
									<div class="txt16">
										{!! substr($item->content, 0, 300).'...' !!}
									</div>
								</div>
								<div class="newsItemPressTime orange">
									<span class="glyphicon glyphicon-time"></span>
									Post {{ date('d/m/Y', strtotime($item->created_at)) }}
								</div>
							</div>

						</a>
						@endforeach
						
						

					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="news_new">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="titleContent txt28">tin mới</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							@foreach($new as $item)
							<a href="{{ asset('news/detail/'.$item->slug) }}" class="row news_new_item">
								<div class="col-md-5 col-sm-5 col-xs-5">
									<div class="news_press_item_img">
										<img src="{{ asset('lib/storage/app/news/'.$item->img) }}">
									</div>
								</div>
								<div class="col-md-7 col-sm-7 col-xs-7">
									<div class="news_new_item_content">
										<div class="txt16">
											{{ $item->title }}
										</div>
									</div>
									<div class="orange">
										<span class="glyphicon glyphicon-time"></span>
										Post {{ date('d/m/Y', strtotime($item->created_at)) }}
									</div>
								</div>
							</a>
							@endforeach
							
						</div>
					</div>
				</div>
				<div class="news_social_network">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<a class="news_social_network_item">
								<img src="img/news_facebook.png">
							</a>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<a class="news_social_network_item">
								<img src="img/news_youtube.png">
							</a>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<a class="news_social_network_item">
								<img src="img/news_youtube.png">
							</a>
						</div>
							
					</div>
				</div>
				<div class="news_social">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="titleContent txt28">tin xã hội</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							@foreach($internal as $item)
							<a href="{{ asset('news/detail/'.$item->slug) }}" class="news_social_item">
								<div class="news_social_item_img">
									<img src="{{ asset('lib/storage/app/news/'.$item->img) }}">
								</div>
								<div class="news_social_item_content">
									<div class="txt16">
										Sự bắt tay mang tính chiến lược của Cphonevn và VNGroup
									</div>
								</div>
								<div class="orange">
									<span class="glyphicon glyphicon-time"></span>
									Post {{ date('d/m/Y', strtotime($item->created_at)) }}
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
