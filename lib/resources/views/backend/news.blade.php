@extends('backend.master')
@section('title','Giới thiệu')
@section('main')



<div class="">
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
				<th class="resp400Hide">Hình Ảnh</th>
				<th>Tiêu đề</th>
				<th  class="resp500Hide">Thời gian</th>
				<th>Tùy chọn</th>
			</tr>
			@foreach($items as $item)
			<tr>
				<td class="listImg resp400Hide">
					<img class="thumbnail" height="100px;" src="{{asset('lib/storage/app/news/'.$item->img)}}">
				</td>
				<td>
					{{$item->title}}
				</td>
				<td  class="resp500Hide">
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