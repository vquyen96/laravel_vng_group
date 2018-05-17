@extends('backend.master')
@section('title','Giới thiệu')
@section('main')



<div class="">
	
	<div class=" col-md-6 mainContent">
		<h3>
			Thêm tin tức - 
			@switch(Request::segment(3))
				@case('vng')
					VNG Group
					@break
				@case('project')
					Dự Án
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
	</div>
	<div class=" col-md-6 mainContent">
		
		<div class="mainHead">
			<ul class="nav nav-tabs">
			  	<li role="presentation" @if(Request::segment(3) == 'vng') class="active" @endif><a href="{{asset('admin/news/vng')}}">VNG Group</a></li>
			  	<li role="presentation" @if(Request::segment(3) == 'project') class="active" @endif><a href="{{asset('admin/news/project')}}">Dự án</a></li>
			  	<li role="presentation" @if(Request::segment(3) == 'recruit') class="active" @endif><a href="{{asset('admin/news/recruit')}}">Tuyển dụng</a></li>
			  	
			</ul>
				
		</div>
		<table class="table table-hover ">
			<tr>
				<th>Hình Ảnh</th>
				<th>Tiêu đề</th>
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