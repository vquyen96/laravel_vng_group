
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
					<?php $count = 1 ?>
					@foreach($investment as $item)
					<div class="col-md-6">
						<a href="{{ asset('project/detail/'.$item->slug) }}" class="investmentItem">
							<div class="investmentItemHead">
								<div class="txt145">0{{$count++}}</div>
								<div class="txt20">{{$item->name}}</div>
							</div>
							<div class="investmentItemImg">
								<img src="{{asset('lib/storage/app/project/'.$item->img)}}">
							</div>
						</a>
					</div>
					@endforeach
					{{-- <div class="col-md-6">
						<div class="investmentItem">
							<div class="investmentItemHead">
								<div class="txt145">02</div>
								<div class="txt20">Dự án Khu dân cư bên bở sông Đà - TP. Hòa Bình</div>
							</div>
							<div class="investmentItemImg">
								<img src="img/chuttersnap-366594-unsplash - Copy.png">
							</div>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
		<div class="row distribution">
			<div class="col-xs-12">
				<div class="txt48 orange">
					dự án phân phối
				</div>
			</div>
			@foreach($distribution as $item)
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="distributionItem">
					<div class="distributionItemImg">
						<img src="{{ asset('lib/storage/app/project/'.$item->img) }}">
					</div>
					<div class="distributionItemContent">
						<div class="txt18">
							{{cut_string($item->name, 50)}}
						</div>
						<div class="txt16">
							{!!cut_string($item->overviewContent, 100)!!}
						</div>
					</div>
					<a href="{{ asset('project/detail/'.$item->slug) }}" class="distributionItemButton">
						<img src="img/arrow_right.png">
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/project.js"></script>
@stop
