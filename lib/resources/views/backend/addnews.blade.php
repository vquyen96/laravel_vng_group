@extends('backend.master')
@section('title','Giới thiệu')
@section('main')



<div class="">
	
	<div class=" col-md-12 mainContent">
		<h3>
			Thêm tin tức
		</h3>
		<form method="post" enctype="multipart/form-data">
			<div class="col-md-4">
				<div class="" >
					<div class="form-group">
						<label>Tiêu đề</label>
						<input type="text" class="form-control" name="title" required>
					</div>
				</div>
				
				<div class="" >
					<div class="form-group">
						<label>Hình Ảnh</label>
						<input id="img" type="file" name="img" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
	                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="100%" src="img/new_seo-10-512.png">
					</div>
				</div>
				<div class="" >
					<div class="form-group">
						<label>Loại tin</label>
						<select name="type" class="form-control" >
							<option value="1">Tin nổi bật</option>
							<option value="2">Tin nội bộ</option>
							<option value="3">Tin dự án</option>
							<option value="4">Tin báo chí</option>
							<option value="5">Tin xã hội</option>
							<option value="6">Tin tuyển dụng</option>
							<option value="7">Video</option>
						</select>
					</div>
				</div>
			</div>
			
			<div class="col-md-8" >
				<div class="form-group">
					<label>Chi tiết</label>
					<textarea class="form-control ckeditor" rows="20" name="content"></textarea>
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
			<div class="col-md-12">
				<div class="form-group">
					<input type="submit" name="" class="btn btn-primary" value="Thay đổi">
					
				</div>
			</div>
			{{csrf_field()}}
		</form>
	</div>
	{{-- <div class=" col-md-6 mainContent">
		
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
				<td>
					<img class="thumbnail" height="100px;" src="{{asset('lib/storage/app/news/'.$item->img)}}">
				</td>
				<td>
					{{$item->title}}
				</td>
				<td class="tableOption">
					<a class="btn btn-primary" href="">Sửa</a>
					<a class="btn btn-danger" href="">Xóa</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div> --}}
</div>

@stop