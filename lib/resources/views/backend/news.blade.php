@extends('backend.master')
@section('title','Giới thiệu')
@section('main')



<div class="">
	
	{{-- <div class=" col-md-5 mainContent">
		<h3>
			Thêm tin tức - 
			@switch(Request::segment(3))
				@case('featured')
					Nổi bật
					@break
				@case('internal')
					Nội bộ
					@break
				@case('project')
					Dự Án
					@break
				@case('press')
					Báo chí
					@break
				@case('socially')
					Xã hội
					@break
				@case('video')
					Video
					@break
				@case('recruit')
					Tuyển Dụng
					@break
			@endswitch
		</h3>
		<form method="post" enctype="multipart/form-data">
			
			<div class="" >
				<div class="form-group">
					<label>Tiêu đề</label>
					<input type="text" class="form-control" name="title" required>
				</div>
			</div>
			
			<div class="" >
				<div class="form-group">
					<label>Hình Ảnh</label>
					<input required id="img" type="file" name="img" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="50%" src="img/new_seo-10-512.png">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Chi tiết</label>
					<textarea class="form-control ckeditor" rows="10" name="content"></textarea>
					<script type="text/javascript">
						var editor = CKEDITOR.replace('content',{
							language:'vi',
							filebrowserImageBrowseUrl: '../../ckfinder/ckfinder.html?Type=Images',
							filebrowserFlashBrowseUrl: '../../ckfinder/ckfinder.html?Type=Flash',
							filebrowserImageUploadUrl: '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							filebrowserFlashUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
						});
					</script>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="" class="btn btn-primary" value="Thêm mới">
				
			</div>
			{{csrf_field()}}
		</form>
	</div> --}}
	<div class=" col-md-12 mainContent">
		<a href="{{ asset('admin/news/add') }}" class="btnAddNew btn btn-success" >
			Thêm mới
		</a>
		<div class="mainHead">
			<ul class="nav nav-tabs">
				
			  	<li role="presentation" @if(Request::segment(4) == 'featured') class="active" @endif><a href="{{asset('admin/news/detail/featured')}}">Nổi bật</a></li>
			  	<li role="presentation" @if(Request::segment(4) == 'internal') class="active" @endif><a href="{{asset('admin/news/detail/internal')}}">Nội bộ</a></li>
			  	
			  	<li role="presentation" @if(Request::segment(4) == 'project') class="active" @endif><a href="{{asset('admin/news/detail/project')}}">Dự án</a></li>
			  	<li role="presentation" @if(Request::segment(4) == 'press') class="active" @endif><a href="{{asset('admin/news/detail/press')}}">Báo chí</a></li>
			  	<li role="presentation" @if(Request::segment(4) == 'sociallyc') class="active" @endif><a href="{{asset('admin/news/detail/socially')}}">Xã hội</a></li>
			  	
			  	<li role="presentation" @if(Request::segment(4) == 'recruit') class="active" @endif><a href="{{asset('admin/news/detail/recruit')}}">Tuyển dụng</a></li>
			  	<li role="presentation" @if(Request::segment(4) == 'video') class="active" @endif><a href="{{asset('admin/news/detail/video')}}">Video</a></li>
			  	
			</ul>
				
		</div>
		<table class="table table-hover ">
			<tr>
				<th>Hình Ảnh</th>
				<th>Tiêu đề</th>
				<th>Thời gian</th>
				<th>Tùy chọn</th>
			</tr>
			@foreach($items as $item)
			<tr>
				<td class="listImg">
					<img class="thumbnail" height="100px;" src="{{asset('lib/storage/app/news/'.$item->img)}}">
				</td>
				<td>
					{{$item->title}}
				</td>
				<td>
					{{ $item->created_at }}
				</td>
				<td class="tableOption">
					<a class="btn btn-primary" href="{{asset('admin/news/edit/'.$item->id)}}">Sửa</a>
					<a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa!!')" href="{{asset('admin/news/delete/'.$item->id)}}">Xóa</a>
				</td>

			</tr>
			@endforeach
		</table>
		{{$items->links()}}
	</div>
</div>

@stop