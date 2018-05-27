@extends('backend.master')
@section('title','Giới thiệu')
@section('main')



<div class="">
	<div class="mainHead col-md-12">
		<ul class="nav nav-tabs">
		  	<li role="presentation" @if(Request::segment(3) == 'letter') class="active" @endif><a href="{{asset('admin/about/letter')}}">Thư ngỏ</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'history') class="active" @endif><a href="{{asset('admin/about/history')}}">Lịch Sử</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'vision') class="active" @endif><a href="{{asset('admin/about/vision')}}">Tầm nhìn</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'cultural') class="active" @endif><a href="{{asset('admin/about/cultural')}}">Văn hóa</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'ceo') class="active" @endif><a href="{{asset('admin/about/ceo')}}">ceo</a></li>
		</ul>
			
	</div>
	<div class="col-md-12">
		@include('errors.note')
		@foreach($items as $item)
		<form method="post" action="{{ asset('admin/about/'.Request::segment(3).'/'.$item->id) }} "  enctype="multipart/form-data">
			@if($item->title != null)
			<div class="" >
				<div class="form-group">
					<label>Tiêu đề</label>
					<input type="text" name="title" value="{{$item->title}}" class="form-control">
				</div>
			</div>
			@endif
			<div class="" >
				<div class="form-group">
					<label>Nội Dung</label>
					<textarea class="form-control ckeditor" rows="10" name="content{{$item->id}}">{{$item->content}}</textarea>
					<script type="text/javascript">
						CKEDITOR.replace('content{{$item->id}}',{
							language:'vi',
							filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
							filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
							filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							filebrowserFlashUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
						});
					</script>

				</div>
			</div>
			@if($item->img != null)
			<div class="" >
				<div class="form-group">
					<input id="img" type="file" name="file" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="50%" src="{{asset('lib/storage/app/about/'.$item->img)}}">
				</div>
			</div>
			@endif
			<div class="form-group">
				<input type="submit" name="" class="btn btn-primary" value="Thay đổi">
				@if(Request::segment(3) == 'history' && $item->img == null) 
				<a href="{{ asset('admin/about/delete/history/'.$item->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa!!')">Xóa</a>
				@endif
			</div>
			{{csrf_field()}}
		</form>
		@endforeach
		@if(Request::segment(3) == 'history') 
		<div class="btnAddHis btn btn-success">
			Thêm mới
		</div>
		<form method="post" class="formAddHis" action="{{ asset('admin/about/add/history') }} "  enctype="multipart/form-data">
			
			<div class="" >
				<div class="form-group">
					<label>Tiêu đề</label>
					<input type="text" name="title" class="form-control">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Nội Dung</label>
					<textarea class="form-control ckeditor" rows="10" name="contentAdd"></textarea>
					<script type="text/javascript">
						CKEDITOR.replace('contentAdd',{
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
				<input type="submit" name="" class="btn btn-success" value="Thêm mới">
				
			</div>
			{{csrf_field()}}
		</form>
		@endif
	</div>
</div>
@stop