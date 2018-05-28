
@extends('frontend.master')
@section('title', 'Tin tức')
@section('main')
<link rel="stylesheet" type="text/css" href="css/news.css">
<div>
	<div class="container">
		<div class="row slideHeader">
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div id="carousel-news-header" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner" role="listbox">
				  	@foreach($featured_slide as $item)
				    <div class="item">
				    	<a href="{{ asset('news/detail/'.$item->slug) }}">
				    		<img src="{{ asset('lib/storage/app/news/'.$item->img) }}" alt="VNG chính thức phân phối dự án Hinode">
				    	</a>
				    </div>
				    @endforeach
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-news-header" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-news-header" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="slideHeadRight">
					@foreach($featured_right as $item)
					<a href="{{ asset('news/detail/'.$item->slug) }}" class="slideHeadRightItem">
						<div class="slideHeadRightImg">
							<img src="{{ asset('lib/storage/app/news/'.$item->img) }}">
						</div>
						<div class="slideHeadRightContent">
							{{ $item->title }}
						</div>
					</a>
					@endforeach
					
				</div>
			</div>
		</div>
		<div class="row newsMain">
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="row news_internal">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="title">
							<div class="line"></div>
							<div class="titleContent txt28">tin nội bộ</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 left">
						@foreach($internal as $item)
						<a href="{{ asset('news/detail/'.$item->slug) }}" class="newsItemSmall">
							<div class="newsItemImg">
								<img src="{{ asset('lib/storage/app/news/'.$item->img) }}">
							</div>
							<div class="newsItemContent">
								<div class="newsItemTitle">
									{{ $item->title }}
								</div>
								<div class="newsItemText">
									{!! substr($item->content,0 , 400).'...' !!}
								</div>
							</div>
							<div class="newsItemTime orange">
								<span class="glyphicon glyphicon-time"></span>
								Post {{ date('d/m/Y', strtotime($item->created_at)) }}
							</div>
						</a>
						@endforeach
						
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 right">
						@foreach($internal as $item)
						<a href="{{ asset('news/detail/'.$item->slug) }}" class="newsItemSmall">
							<div class="newsItemImg">
								<img src="{{ asset('lib/storage/app/news/'.$item->img) }}">
							</div>
							<div class="newsItemContent">
								<div class="newsItemTitle">
									{{ $item->title }}
								</div>
								<div class="newsItemText">
									{!! substr($item->content,0 , 400).'...' !!}
								</div>
							</div>
							<div class="newsItemTime orange">
								<span class="glyphicon glyphicon-time"></span>
								Post {{ date('d/m/Y', strtotime($item->created_at)) }}
							</div>
						</a>
						@endforeach
					</div>
				</div>
				<div class="row news_project">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="title">
							<div class="line"></div>
							<div class="titleContent txt28">tin dự án</div>
						</div>


					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						@foreach($project as $item)
						<a href="{{ asset('news/detail/'.$item->slug) }}" class="newsItemSmall">
							<div class="newsItemImg">
								<img src="{{ asset('lib/storage/app/news/'.$item->img) }}">
							</div>
							<div class="newsItemContent">
								<div class="newsItemTitle">
									{{ $item->title }}
								</div>
								<div class="newsItemText">
									{!! substr($item->content,0 , 400).'...' !!}
								</div>
							</div>
							<div class="newsItemTime orange">
								<span class="glyphicon glyphicon-time"></span>
								Post {{ date('d/m/Y', strtotime($item->created_at)) }}
							</div>
						</a>
						@endforeach
					</div>
				</div>
				<div class="row news_press">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="title">
							<div class="line"></div>
							<div class="titleContent txt28">tin báo chí</div>
						</div>
					</div>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						@foreach($press as $item)
						<a href="{{ asset('news/detail/'.$item->slug) }}" class="row news_press_item">
							<div class="col-md-5 col-sm-5 col-xs-5">
								<div class="news_press_item_img">
									<img src="{{ asset('lib/storage/app/news/'.$item->img) }}">
								</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-7">
								<div class="newsItemPressContent">
									<div class="txt18">
										{{ $item->title }}
									</div>
									<div class="txt16">
										{!! substr($item->content,0 , 400).'...' !!}
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
							<div class="titleContent txt28">tin báo chí</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							@foreach($internal as $item)
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
		<div class="row video">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="titleContent txt28">Video</div>
			</div>
			<div class="col-md-12 col-ms-12 col-xs-12">
				@foreach($video as $item)
				<a href="{{ asset('video/detail/'.$item->slug) }}" class="videoItem">
					<div class="videoItemImg">
						<img src="{{ asset('lib/storage/app/video/'.$item->img) }}">
					</div>
					<div class="videoItemContent">
						<div class="videoItemContentTitle">
							{{cut_string($item->name, 50)}}
						</div>
						<div class="videoItemContentTime orange">
							<span class="glyphicon glyphicon-time"></span>
								Post {{ date('d/m/Y', strtotime($item->created_at)) }}
						</div>
					</div>
				</a>
				@endforeach
			</div>
		</div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/news.js"></script>
@stop
