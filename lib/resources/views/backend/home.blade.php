@extends('backend.master')
@section('title','Giới thiệu')
@section('main')



<div class="">
	<div class="mainHead col-md-12">
		<ul class="nav nav-tabs">
		  	<li role="presentation" @if(Request::segment(4) == 'overview') class="active" @endif><a href="{{asset('admin/home/detail/overview')}}">Tổng quan</a></li>
		  	<li role="presentation" @if(Request::segment(4) == 'history') class="active" @endif><a href="{{asset('admin/home/detail/history')}}">Lịch sử</a></li>
		  	<li role="presentation" @if(Request::segment(4) == 'vision') class="active" @endif><a href="{{asset('admin/home/detail/vision')}}">Tầm nhìn</a></li>
		  	<li role="presentation" @if(Request::segment(4) == 'cultural') class="active" @endif><a href="{{asset('admin/home/detail/cultural')}}">Văn hóa</a></li>
		  	<li role="presentation" @if(Request::segment(4) == 'bds') class="active" @endif><a href="{{asset('admin/home/detail/bds')}}">Sàn BDS</a></li>
		  	<li role="presentation" @if(Request::segment(4) == 'appraisal') class="active" @endif><a href="{{asset('admin/home/detail/appraisal')}}">Thẩm định giá</a></li>
		  	<li role="presentation" @if(Request::segment(4) == 'law') class="active" @endif><a href="{{asset('admin/home/detail/law')}}">Văn phòng luật sư</a></li>
		  	<li role="presentation" @if(Request::segment(4) == 'media') class="active" @endif><a href="{{asset('admin/home/detail/media')}}">Truyền thông VNG</a></li>
		  	<li role="presentation" @if(Request::segment(4) == 'tiktak') class="active" @endif><a href="{{asset('admin/home/detail/tiktak')}}">Tiktak</a></li>
		  	<li role="presentation" @if(Request::segment(4) == 'vpcc') class="active" @endif><a href="{{asset('admin/home/detail/vpcc')}}">VPCC</a></li>
		</ul>
			
	</div>
	<div class="col-md-12">
		@include('errors.note')
		<form method="post" enctype="multipart/form-data">
			<div class="" >
				<div class="form-group">
					<label>Tiêu đề</label>
					<input type="text" name="title" value="{{$data->title}}" class="form-control">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Link liên kết</label>
					<input type="text" name="link" value="{{$data->link}}" class="form-control">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Nội Dung</label>
					<textarea class="form-control ckeditor" rows="10" name="content">{!!$data->content!!}</textarea>
					<script type="text/javascript">
						CKEDITOR.replace('content',{
							language:'vi',
							filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
							filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
							filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							filebrowserFlashUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
						});
					</script>

				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<input id="img" type="file" name="file" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" height="300px" src="{{asset('lib/storage/app/home/'.$data->img)}}">
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="" class="btn btn-primary" value="Thay đổi">
			</div>
			{{csrf_field()}}
		</form>
	</div>
</div>
@stop