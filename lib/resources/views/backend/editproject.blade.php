@extends('backend.master')
@section('title','Dự án')
@section('main')



<div class="">
	
	<div class=" col-md-6 mainContent">
		<h3>Sửa dự án</h3>

		<form method="post" enctype="multipart/form-data">
			<div class="" >
				<div class="form-group">
					<label>Tiêu đề</label>
					<input type="text" class="form-control" value="{{$edit->name}}" name="name" required>
				</div>
			</div>
			@include('errors.note')
			<div class="" >
				<div class="form-group">
					<label>Ảnh</label>
					<input id="img" type="file" name="img" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="50%" src="{{asset('lib/storage/app/project/'.$edit->img)}}">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Nội Dung</label>
					<textarea class="form-control ckeditor" rows="10" name="content">{{$edit->content}}</textarea>
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
				<input type="submit" name="" class="btn btn-primary" value="Thay đổi">
			</div>
			{{csrf_field()}}
		</form>
	</div>
	<div class=" col-md-6 mainContent">
		<h3>Danh sách dự án</h3>
		<table class="table table-hover">
			<tr>
				<th>#</th>
				<th>Ảnh Dự Án</th>
				<th>Tên Dự Án</th>
				<th>Tùy chọn</th>
			</tr>
			@foreach($items as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>
					<img class="thumbnail" height="100px" src="{{asset('lib/storage/app/project/'.$item->img)}}">
				</td>
				<td><b>{{$item->name}}</b></td>
				<td class="tableOption">
					<a class="btn btn-primary" href="{{asset('admin/project/edit/'.$item->id)}}">Sửa</a>
					<a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa!!')" href="{{asset('admin/project/delete/'.$item->id)}}">Xóa</a>
				</td>
			</tr>
			@endforeach
		</table>
		{{$items->links()}}
	</div>
</div>

@stop