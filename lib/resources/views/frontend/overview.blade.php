
@extends('frontend.master')
@section('title', 'Tổng quan')
@section('main')
<link rel="stylesheet" type="text/css" href="css/overview.css">
<div>
	<div class="container">
		<div class="row thu_ngo">
			<div class="col-md-8 col-sm-8 col-xs-12">
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
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="thu_ngo_Img">
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
			<img src="img/GTCL.png">
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
					{{-- <div class="txt48 orange">
						Kinh doanh
					</div> --}}
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
				{{-- <div class="cultureItem culture2">
					<div class="cultureImg">
						<img src="img/chuttersnap-387758-unsplash.png">
					</div>
					<div class="cultureContent">
						<div class="txt18">Môi trường làm việc</div>
						<div class="txt14">
							Tại VNGroup chúng tôi luôn cố gắng tạo ra những môi trường làm việc có không gian thoải mái nhất, nơi các thành viên được làm việc , được công hiến hết sức với niềm đam mê của mình.Tại VNGroup luôn có sự tôn trọng, lắng nghe và tạo điều kiện đẻ mỗi thành viên được là chính mình, được cống hiến, sáng tạo và tự do thể hiện bản thân.
						</div>
					</div>
				</div>
				<div class="cultureItem culture3">
					<div class="cultureImg">
						<img src="img/chuttersnap-387758-unsplash.png">
					</div>
					<div class="cultureContent">
						<div class="txt18">Lao động và hưởng thụ</div>
						<div class="txt14">
							Bên cạnh môi trường làm việc có tính độc lập và sáng tạo, VNGroup còn tạo nên một môi trường lao động hưởng thụ cho nhân viên của mình. Tất cả các thành viên của VNGroup đều cố gắng nỗ lực vun đắp xây dựng để VNGroup có nền văn hóa riêng biệt và đặc sắc nhất.Trong những ngày lễ Tết VNGroup đều tổ chức những đều tổ chức những buổi liên hoan, sôi nổi, đầm ấm vui tươi cho cán bộ nhân viên. Bên cạnh đó VNGroup còn thường xuyên tổ chức các hoạt động văn nghệ, thể thao hay những chuyến đi du lịch xa nhằm đem lại sự thoải mái cho nhân viên sau một thời gian dài làm việc căng thẳng và  vất vả. Và sau mỗi buổi tổng kết của từng quý , từng năm, VNGroup luôn có những phần thưởng xứng đáng động viên và trao bằng khen cho những cá nhân xuất sắc….Tất cả những hoạt động trên giống như một món ăn tinh thần khích lệ động viên các thành viên của VNGroup được vui vẻ, yên tâm và tích cực làm việc tốt hơn, nâng cao hiệu quả công việc và sức sáng tạo của mỗi con người.

						</div>
					</div>
				</div> --}}
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
			{{-- <div class="col-md-4 col-md-4 col-xs-12">
				<div class="ceoItem">
					<img src="img/rawpixel-648558-unsplash.png">
					<div class="ceoItemTag">
						<div class="ceoItemTagContent">
							<div class="txt18">
								Nguyễn văn A
							</div>
							<div class="txt16 orange">
								Ceo and Founder
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-4 col-xs-12">
				<div class="ceoItem">
					<img src="img/rawpixel-648558-unsplash.png">
					<div class="ceoItemTag">
						<div class="ceoItemTagContent">
							<div class="txt18">
								Nguyễn văn A
							</div>
							<div class="txt16 orange">
								Ceo and Founder
							</div>
						</div>
						
					</div>
				</div>
			</div> --}}
			
		</div>
		{{-- <div class="row project">
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
					<div class="col-md-6">
						<div class="investmentItem">
							<div class="investmentItemHead">
								<div class="txt145">01</div>
								<div class="txt20">Dự án Cẩm An - Hội An</div>
							</div>
							<div class="investmentItemImg">
								<img src="img/nha-co-cam-an-hoi-an1.png">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="investmentItem">
							<div class="investmentItemHead">
								<div class="txt145">02</div>
								<div class="txt20">Dự án Khu dân cư bên bở sông Đà - TP. Hòa Bình</div>
							</div>
							<div class="investmentItemImg">
								<img src="img/chuttersnap-366594-unsplash - Copy.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row distribution">
			<div class="row">
				<div class="col-xs-12">
					<div class="txt48 orange">
						dự án phân phối
					</div>
				</div>
			</div>
		</div> --}}
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript" src="js/overview.js"></script>
@stop
