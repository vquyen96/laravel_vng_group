
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
			@foreach($data as $item)
			<li >
				<a href="{{ $item->link }}" class="active" target="blank">
					<span class="text">
						{{ $item->title}}
					</span>
					<div class="listPageItemHide">
						<div class="content">
							{!! $item->content!!} 
						</div>
						<div class="link">
							{{ asset('lib/storage/app/home/'.$item->img)}}
						</div>
					</div>
				</a>
			</li>
			@endforeach
			
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

