@extends('backend.master')
@section('title','Giới thiệu')
@section('main')



<div class="">
	<div class="mainHead col-md-12">
		<ul class="nav nav-tabs">
		  	<li role="presentation" @if(Request::segment(3) == 'letter') class="active" @endif><a href="{{asset('admin/about/letter')}}">Thư ngỏ</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'detail') class="active" @endif><a href="{{asset('admin/about/detail')}}">Giới thiệu</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'history') class="active" @endif><a href="{{asset('admin/about/history')}}">Lịch Sử</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'vision') class="active" @endif><a href="{{asset('admin/about/vision')}}">Tầm nhìn</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'cultural') class="active" @endif><a href="{{asset('admin/about/cultural')}}">Văn hóa</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'download') class="active" @endif><a href="{{asset('admin/about/download')}}">Tải về</a></li>
		</ul>
			
	</div>
	<div class="col-md-12">
		@include('errors.note')
		<form method="post">
			<div class="" >
				<div class="form-group">
					<label>Tên Mục</label>
					<input type="text" name="name" value="{{$item->name}}" class="form-control">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Nội Dung</label>
					<textarea class="form-control ckeditor" rows="10" name="content">{{$item->content}}</textarea>
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
			<div class="form-group">
				<input type="submit" name="" class="btn btn-primary" value="Thay đổi">
				
			</div>
			{{csrf_field()}}
		</form>
	</div>
</div>
@stop