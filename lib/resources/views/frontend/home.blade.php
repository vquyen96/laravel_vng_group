
@extends('frontend.master')
@section('title', 'Home')
@section('main')
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="../OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />

<div class="homeBig">
	<div class="home home1">
		<div class="home1Main">
			<div class="home1Content">
				<div class="txt60 orange">
					{{ $data->get(0)->title}}
				</div>
				<div class="txt16">
					{!!$data->get(0)->content!!}
				</div>
			</div>
			<div class="home1Img">
				<img src="{{ asset('lib/storage/app/home/'.$data->get(0)->img) }}">
			</div>
		</div>
			
	</div>
	<div class="home home2">
		<div class="home2Main">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="home2Name orange">
							giới thiệu
						</div>
					</div>
				</div>
				<div class="row">
					@for($i=5; $i < 8; $i++)
					<div class="col-md-4 col-sm-4 col-xs-12">
						<a href="{{ asset($data->get($i)->link) }}" class="home2Item">
							<img src="{{ asset('lib/storage/app/home/'.$data->get($i)->img) }}">
							<div class="home2ItemTitle">
								{{$data->get($i)->title}}
							</div>
							<div class="home2ItemHide">
								{!!$data->get($i)->content!!}
							</div>
						</a>
					</div>
					@endfor
					
				</div>
			</div>
		</div>
			
	</div>
	<div class="home home3">
		<div class="home3Main">
			<div class="container-fluid">
				<div class="row">
					@for($i=1; $i<5; $i++)
					<div class="col-md-3 col-sm-3 col-xs-6 home3Item">
						<div class="home3ItemImg">
							<img src="{{ asset('lib/storage/app/home/'.$data->get($i)->img )}}">
						</div>
						<a href="{{ asset($data->get($i)->link) }}" class="home3ItemContent">
							<div class="home3ItemContentNum">
								0{{$i}}
								<div class="home3ItemContentNumUnder">_</div>
							</div>
							<div class="home3ItemContentText">{{$data->get($i)->title}}</div>
						</a>
					</div>
					@endfor
					
				</div>
			</div>
		</div>
			
	</div>
	<div class="home home4">
		<div class="home4Main">
			<div class="home4Content">
				<div class="home4ContentTitle">dự án</div>
				<div class="home4ContentText">Đây là 1 đoạn nói về dự án , chỉ có dự án thôi .. các phần khác sẽ không nằm ở phần này!</div>
			</div>
			<div class="home4MainSmaill">
				<div class="owl-carousel owl-theme">
					@foreach($project as $item)
					<div class="home4MainItem">
						<a href="{{ asset('project/detail/'.$item->slug) }}" class="home4MainLineItem">

							<div class="home4MainLineItemImg">
								<img src="{{ asset('lib/storage/app/project/resized-'.$item->img) }}">
							</div>
							<div class="home4MainLineItemContent">
								{{$item->name}}
							</div>
						</a>
					</div>
					
					@endforeach
				  
				</div>
				<div class="home4MainContent">
					<div class="home4MainContentTitle">dự án</div>
					<div class="home4MainContentText">Đây là 1 đoạn nói về dự án , chỉ có dự án thôi .. các phần khác sẽ không nằm ở phần này!</div>
				</div>
			</div>
			<div class="home4Main02ContentTitle">dự án</div>
			<div class="home4Main02">
				<div class="home4Main02Main">
				@foreach($project as $item)
					<div class="home4Main02Item">
						<a href="{{ asset('project/detail/'.$item->slug) }}" class="home4MainLineItem">

							<div class="home4MainLineItemImg">
								<img src="{{ asset('lib/storage/app/project/'.$item->img) }}">
							</div>
							<div class="home4MainLineItemContent">
								{{$item->name}}
							</div>
						</a>
					</div>
				@endforeach	
				</div>
			</div>
		</div>
			
	</div>
	<div class="home home5">
		<div class="home5Main">
			<div class="home5Left">
				@foreach($contact as $item)
				<div class="home5LeftItem">
					<div class="txt30 orange">
						{{$item->name}}
					</div>
					<div class="txt16">
						{!! $item->content!!}
					</div>
				</div>
				@endforeach
			</div>
			<div class="home5Right">
				<div class="home5RightMap">
					<img src="img/contact_map.png">
					<div class="home5RightMess home501">
						<img src="img/contact_mess.png">
						<span class="txt24">Hà Nội</span>
					</div>
					<div class="home5RightMess home502">
						<img src="img/contact_mess.png">
						<span class="txt24">Đà Nẵng</span>
					</div>
					<div class="home5RightMess home503">
						<img src="img/contact_mess.png">
						<span class="txt24">Hồ Chí Minh</span>
					</div>
				</div>
			</div>
		</div>
			
		
	</div>
	<div class="btnScrollDown">
		<div class="btnScrollDownContent">
			scroll
		</div>
		<div class="btnScrollDownIcon">
			<i class="fa fa-angle-double-down" aria-hidden="true"></i>
		</div>
	</div>
	<div class="dotScroll">
		<div class="dotScrollItem dotScroll_1"></div>
		<div class="dotScrollItem dotScroll_2"></div>
		<div class="dotScrollItem dotScroll_3"></div>
		<div class="dotScrollItem dotScroll_4"></div>
		<div class="dotScrollItem dotScroll_5"></div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/home.js"></script>
	<script src="../OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
@stop

