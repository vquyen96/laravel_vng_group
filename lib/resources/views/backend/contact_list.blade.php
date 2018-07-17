@extends('backend.master')
@section('title','Giới thiệu')
@section('main')



<div class="">
	<div class="mainHead col-md-12">
		<ul class="nav nav-tabs">
		  	<li role="presentation" @if(Request::segment(3) == 'top') class="active" @endif><a href="{{asset('admin/contact/top')}}">Miền Bắc</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'mid') class="active" @endif><a href="{{asset('admin/contact/mid')}}">Miền Trung</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'bot') class="active" @endif><a href="{{asset('admin/contact/bot')}}">Miền Nam</a></li>
		  	<li role="presentation" @if(Request::segment(3) == 'list') class="active" @endif><a href="{{asset('admin/contact/list')}}">Danh sách</a></li>
		</ul>
			
	</div>
	<div class="col-md-12">
		<table class="table table-hover">
			<tr>
				<th>Tên</th>
				<th class="resp400Hide">Email</th>
				<th class="tableOption">Xóa</th>
			</tr>
			@foreach($items as $item)
			<tr>
				
				<td><b>{{$item->list_con_name}}</b></td>
				<td class="resp400Hide">{{ $item->list_con_email }}</td>
				<td class="tableOption">
					{{-- <a class="btn btn-danger" href="{{asset('admin/account/delete/'.$item->id)}}">Chi tiết</a> --}}
					<div class="fieldHidden" style="display: none;">
						{{ $item->list_con_content }}
					</div>
					<a class="btn btn-primary btnShowDetail" data-toggle="modal" data-target="#myModal">
					  Chi tiết
					</a>
					<a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa!!')" href="{{asset('admin/contact/delete/'.$item->list_con_id)}}">Xóa</a>
				</td>
			</tr>
			@endforeach

		</table>
		{{$items->links()}}
	</div>
	<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nội dung của người dùng</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tắt</button>
      </div>
    </div>
  </div>
</div>
</div>
@stop