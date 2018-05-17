@extends('backend.master')
@section('title','Hình ảnh')
@section('main')

<div class="">
	<div class=" col-md-6 mainContent">\
		<h3>Sửa hình ảnh</h3>
		@include('errors.note')
		<form method="post" enctype="multipart/form-data">
			
			<div class="" >
				<div class="form-group">
					<label>{{$edit->name}}</label>
					<input id="img" type="file" name="img" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="100%" src="{{asset('lib/storage/app/image/'.$edit->img)}}">
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="" class="btn btn-primary" value="Thay đổi">
			</div>
			{{csrf_field()}}
		</form>
	</div>
	<div class=" col-md-6 mainContent">
		<h3>Danh sách hình ảnh</h3>
		<table class="table table-hover">
			<tr>
				<th>#</th>
				<th>Vị trí</th>
				<th>Sửa</th>
			</tr>
			@foreach($items as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td><b>{{$item->name}}</b></td>
				<td class="tableOption">
					<a class="btn btn-primary" href="{{asset('admin/image/edit/'.$item->id)}}">Sửa</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>

@stop