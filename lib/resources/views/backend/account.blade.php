@extends('backend.master')
@section('title','Dự án')
@section('main')

<div class="">
	
	<div class=" col-md-6 mainContent">
		<h3>Thêm Thành Viên</h3>
		<form  method="post" enctype="multipart/form-data">
			<div class="" >
				<div class="form-group">
					<label>Email đăng nhập</label>
					<input type="text" class="form-control" name="email" required>
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Mật khẩu</label>
					<input type="text" class="form-control" name="password" required>
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Quyền truy cập</label>
					<select name="level" class="form-control"> 
						<option value="2">Nhân viên</option>
						<option value="1">Sếp</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="" class="btn btn-primary" value="Thêm mới">
				
			</div>
			{{csrf_field()}}
		</form>
	</div>
	<div class=" col-md-6 mainContent">
		<h3>Danh sách tài khoản</h3>
		<table class="table table-hover">
			<tr>
				<th>#</th>
				<th>Tên tài khoản</th>
				<th>Chức vụ</th>
				<th>Tùy chọn</th>
			</tr>
			@foreach($items as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td><b>{{$item->email}}</b></td>
				<td>@if($item->level == 1) Sếp @else Nhân viên @endif</td>
				<td class="tableOption">
					<a class="btn btn-primary" href="{{asset('admin/account/edit/'.$item->id)}}">Sửa</a>
					@if(Auth::user()->id == $item->id)
						<a class="btn btn-danger" onclick="return alert('Bạn không được xóa chình mình')">Xóa</a>
					@else
						<a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa!!')" href="{{asset('admin/account/delete/'.$item->id)}}">Xóa</a>
					@endif 
					
				</td>
			</tr>
			@endforeach

		</table>
		{{$items->links()}}
	</div>
</div>
@stop