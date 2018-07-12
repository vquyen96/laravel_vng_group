
@extends('frontend.master')
@section('title', 'Dự án')
@section('main')
<link rel="stylesheet" type="text/css" href="css/project_detail.css">
<div>
	<div class="container">
		<div class="row imageHeader">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="imageHeaderImg">
					<img src="{{ asset('lib/storage/app/project/'.$item->img) }}">
				</div>
			</div>
		</div>
		<div class="row contentHeader">
			<div class="txt60 orange">
				{{$item->name}}
			</div>
			<div class="col-md-4">
				<div class="contentHeaderLeft">
					<ol>
						<li> Tổng quan dự án</li>
						<li> Vị trí</li>
						<li> Tiện ích</li>
						<li> Thư viện ảnh</li>
					</ol>
				</div>
			</div>
			<div class="col-md-8">
				<div class="contentHeaderRight txt16">
					{!!$item->investor!!}
				</div>
			</div>
		</div>
		<div class="row content01">
			
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="content01Left">
					@if ($item->overviewImg == null)
						<img src="img/tong-quan-du-an-cocobay-da-nang.png">
					@else
						<img src="{{ asset('lib/storage/app/project/'.$item->overviewImg) }}">
					@endif
					
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="content01Right">
					<div class="txt145 orange">
						01
					</div>
					<div class="txt36">
						tổng quan dự án
					</div>
					<div class="txt16">
						{!!$item->overviewContent!!}
					</div>
				</div>
			</div>
		</div>
		<div class="row content02">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="content02Left">
					<div class="txt145 orange">
						02
					</div>
					<div class="txt36">
						vị trí dự án
					</div>
					<div class="txt16">
						{!!$item->locationContent!!}
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="content02Right">
					@if ($item->locationImg == null)
						<img src="img/vi-tri-du-an-cocobay-da-nang-viet-nam.png">
					@else
						<img src="{{ asset('lib/storage/app/project/'.$item->locationImg) }}">
					@endif
				</div>
			</div>
		</div>
		<div class="row content03">
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="content03Left">
					@if ($item->utilityImg == null)
						<img src="img/tien-ich-du-an-cocobay-da-nang.png">
					@else
						<img src="{{ asset('lib/storage/app/project/'.$item->utilityImg	) }}">
					@endif
					
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="content03Right">
					<div class="txt145 orange">
						03
					</div>
					<div class="txt36">
						Tiện ích
					</div>
					<div class="txt16">
						{!!$item->utilityContent!!}
					</div>
				</div>
			</div>
		</div>
		<div class="row content04">
			<div class="col-md-2 col-sm-12 col-xs-12">
				<div class="content04Left">
					<div class="txt145 orange">
						04
					</div>
					<div class="txt36">
						Hình ảnh
					</div>
				</div>
			</div>
			<div class="col-md-10 col-sm-12 col-xs-12">
				<div class="album">
					<?php $count = 0;?>
					@for($i = 1; $i < 9; $i++)
					<?php $albumImg = "albumImg".$i; ?>
						@if($item->$albumImg != null)
						<div class="albumItem album{{$i}}">
							<div class="albumItemImg">
								<img src="{{ asset('lib/storage/app/project/'.$item->$albumImg) }}">
							</div>
							<div class="albumItemContent txt16">
								{{$item->name}}
							</div>
						</div>
						<?php $count++?>
						@endif
						
					@endfor
					@if($count == 0)
						<img src="img/ha.png" class="albumImg">
					@endif

				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/project_detail.js"></script>
@stop
