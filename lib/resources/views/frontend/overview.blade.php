
@extends('frontend.master')
@section('title', 'Tổng quan')
@section('main')
<link rel="stylesheet" type="text/css" href="css/overview.css">
<div>
	<div class="container">
		<div class="row thu_ngo" id="letter">
			<div class="col-md-8 col-sm-6 col-xs-12">
				<div class="row title">
					<div class="col-md-12">
						<div class="txt48 orange">
							THƯ NGỎ
						</div>
						<div class="txt16">
							{{ $letter->first()->title }}
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($letter as $item)
					<div class="col-md-6">
						<div class="txt14">
							{!! $item->content !!}
						</div>
					</div>
					@endforeach
					{{-- <div class="col-md-6">
						<div class="txt14">
							Bất động sản, tư vấn pháp luật, truyền thông – marketing, thẩm định giá… VNGROUP luôn tự hào là một trong những đơn vị cung cấp các dịch vụ chuyên nghiệp góp phần vào sự phát triển ổn định của thị trường cũng như mang lại lợi ích tối ưu cho Quý khách hàng.
							<br>VNGROUP có được những thành công như ngày hôm nay ngoài những sự nỗ lực và đoàn kết của đội ngũ cán bộ, nhân viên còn có cả sự tín nhiệm và ủng hộ vô cùng to lớn của toàn thể Quý vị.
							<br>
							Với mong muốn đem đến cho Quý khách hàng những dịch vụ tốt nhất toàn thể Ban lãnh đạo và đội ngũ nhân viên luôn cố gắng hết mình, không ngừng phấn đấu tạo những sản phẩm và dịch vụ có ưu điểm vượt trội nhằm nâng cao chất lượng phục vụ để có thể nhận được sự tin tưởng cũng như sự hài lòng từ phía Quý khách hàng.
						</div>
					</div> --}}
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="txt14 orange"><i>
							VNGROUP rất mong sẽ tiếp tục nhận được sự hợp tác và ủng hộ từ Quý vị!
							<br>
							Kính chúc toàn thể Quý khách hàng sức khỏe, thành công và hạnh phúc!

						</i></div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thu_ngo_Img" id="letterImg">
					<img src="{{ asset('lib/storage/app/about/'.$letter->first()->img) }}">
				</div>
			</div>
		</div>
		<div class="row history" id="history">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="historyImg" id="historyImg">
					<img src="{{ asset('lib/storage/app/about/'.$history->first()->img) }}">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="historyContent">
					<div class="txt48 orange">
						lịch sử phát triển
					</div>
					@foreach($history as $item)
					<div class="txt24">
						<i>{{ $item->title }}</i>
					</div>
					<div class="txt16">
						{!! $item->content !!}
					</div>
					<div class="historyContentImg">
						<img src="img/arrow_down.png">
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="row vision">
			<div class="col-md-6 col-sm-6">
				<div class="txt48 orange">
					{{ $vision->get(0)->title }}
				</div>
				<div class="txt16">
					{!! $vision->get(0)->content !!}
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="txt48 orange">
					{{ $vision->get(1)->title }}
				</div>
				<div class="txt16">
					{!! $vision->get(1)->content !!}
				</div>
			</div>
		</div>
		<div class="row visionImg">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<img src="img/GTCL.png">
			</div>
			
		</div>
		<div class="row maxim">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="maximImg">
					<img src="{{ asset('lib/storage/app/about/'.$vision->get(2)->img) }}">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="maximContent">
					
					<div class="txt16">
						{!! $vision->get(2)->content !!}
					</div>
					<div class="txt48 orange">
						{{ $vision->get(2)->title }}
					</div>
					
				</div>
			</div>
		</div>
		<div class="row culture">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="txt48 orange">
					văn hóa vng group
				</div>
				<?php $culture_count = 1?>
				@foreach($culture as $item)
				<div class="cultureItem culture{{ $culture_count }}">
					<div class="cultureImg">
						<img src="{{ asset('lib/storage/app/about/'.$item->img) }}">
					</div>
					<div class="cultureContent">
						<div class="txt18">{{ $item->title }}</div>
						<div class="txt14">
							{!! $item->content !!}
						</div>
					</div>
				</div>
				<?php $culture_count++ ?>
				@endforeach
				
			</div>
		</div>
		<div class="row ceo">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="txt48 orange">
					Ban lãnh đạo
				</div>
			</div>
			@foreach($ceo as $item)
			<div class="col-md-4 col-md-4 col-xs-12">
				<div class="ceoItem">
					<img src="{{ asset('lib/storage/app/about/'.$item->img) }}">
					<div class="ceoItemTag">
						<div class="ceoItemTagContent">
							<div class="txt18">
								{{ $item->title }}
							</div>
							<div class="txt16 orange">
								{!! $item->content !!}
							</div>
						</div>
						
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/overview.js"></script>
@stop
