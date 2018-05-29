@extends('backend.master')
@section('title','Dự án')
@section('main')



<div class="project">
	<a href="{{ asset('admin/project/add') }}" class="btn btn-success btnAddNew">
		Thêm mới
	</a>
	<div class=" col-md-12 mainContent">
		<h3>Danh sách dự án</h3>
		<table class="table table-hover">
			<tr>
				<th class="resp400Hide">Ảnh Dự Án</th>
				<th>Tên Dự Án</th>
				<th class="resp500Hide">Loại Dự Án</th>
				<th>Tùy chọn</th>
			</tr>
			@foreach($items as $item)
			<tr>
				<td class="resp400Hide">
					<img class="thumbnail" height="100px" src="{{asset('lib/storage/app/project/'.$item->img)}}">
				</td>
				<td><b>{{$item->name}}</b></td>
				<td class="resp500Hide">
					@if($item->type == 0)
						Dự án đầu tư
					@else
						Dự án phân phối
					@endif
				</td>
				<td class="tableOption">
					<a class="btn btn-primary" href="{{asset('admin/project/edit/'.$item->id)}}">Sửa</a>
					<a class="btn btn-danger" href="{{asset('admin/project/delete/'.$item->id)}}">Xóa</a>
				</td>
			</tr>
			@endforeach
		</table>
		{{$items->links()}}
	</div>
</div>

@stop