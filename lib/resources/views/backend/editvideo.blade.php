@extends('backend.master')
@section('title','Dự án')
@section('main')

<div class="">
	
	<div class=" col-md-6 mainContent">
		<h3>Thêm Video</h3>
		<form  method="post" enctype="multipart/form-data">
			<div class="" >
				<div class="form-group">
					<label>Tiêu đề</label>
					<input type="text" class="form-control" name="name" value="{{$edit->name}}" required>
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Hình ảnh</label>
					<input required id="img" type="file" name="img" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" height="300px" src="{{ asset('lib/storage/app/video/'.$edit->img) }}">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Video</label>
					<input id="img" type="file" name="video">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Nội Dung</label>
					<textarea class="form-control ckeditor" rows="10" name="content">{!!$edit->content!!}</textarea>
					<script type="text/javascript">
						var editor = CKEDITOR.replace('content',{
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
				<input type="submit" name="" class="btn btn-primary" value="Thêm mới">
			</div>
			{{csrf_field()}}
		</form>
	</div>
	<div class=" col-md-6 mainContent">
		<h3>Danh sách Video</h3>
		<table class="table table-hover">
			<tr>
				<th>#</th>
				<th>Hình ảnh</th>
				<th>Tiêu đề</th>
				<th>Tùy chọn</th>
			</tr>
			@foreach($video as $item)
			<tr>
				<td>{{$item->id}}</td>
				
				<td class="listImg">
					<img class="thumbnail" height="100px;" src="{{ asset('lib/storage/app/video/'.$item->img) }}">
				</td>
				<td>
					{{ $item->name}}
				</td>
				<td class="tableOption">
					<a class="btn btn-primary" href="{{asset('admin/video/edit/'.$item->id)}}">Sửa</a>
					@if(Auth::user()->id == $item->id)
						<a class="btn btn-danger" onclick="return alert('Bạn không được xóa chình mình')">Xóa</a>
					@else
						<a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa!!')" href="{{asset('admin/video/delete/'.$item->id)}}">Xóa</a>
					@endif 
					
				</td>
			</tr>
			@endforeach

		</table>
		{{$video->links()}}
	</div>
</div>
@stop