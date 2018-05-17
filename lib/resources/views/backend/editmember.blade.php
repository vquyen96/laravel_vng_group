@extends('backend.master')
@section('title','Dự án')
@section('main')




<div class="">
	
	<div class=" col-md-6 mainContent">
		<h3>Thêm Thành Viên</h3>
		@include('errors.note')
		<form  method="post" enctype="multipart/form-data">
			<div class="" >
				<div class="form-group">
					<label>Tên Công ty</label>
					<input type="text" class="form-control" value="{{$edit->name}}" name="name" required>
				</div>
			</div>
			
			<div class="" >
				<div class="form-group">
					<label>Hình Ảnh</label>
					<input  id="img" type="file" name="img" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="50%" src="{{asset('lib/storage/app/member/'.$edit->img)}}">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Chi tiết</label>
					<textarea class="form-control ckeditor" rows="10" name="content">{{$edit->content}}</textarea>
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
				<input type="submit" name="" class="btn btn-primary" value="Thay đổi">
				
			</div>
			{{csrf_field()}}
		</form>
	</div>
	<div class=" col-md-6 mainContent">
		<h3>Danh sách công ty</h3>
		<table class="table table-hover">
			<tr>
				<th>#</th>
				<th>Hình Ảnh</th>
				<th>Tên Công Ty</th>
				<th>Tùy chọn</th>
			</tr>
			@foreach($items as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>
					<img class="thumbnail" height="100px" src="{{asset('lib/storage/app/member/'.$item->img)}}">
				</td>
				<td><b>{{$item->name}}</b></td>
				<td class="tableOption">
					<a class="btn btn-primary" href="{{asset('admin/member/edit/'.$item->id)}}">Sửa</a>
					<a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa!!')" href="{{asset('admin/member/delete/'.$item->id)}}">Xóa</a>
				</td>
			</tr>
			@endforeach
		</table>
		{{$items->links()}}
	</div>
</div>
@stop