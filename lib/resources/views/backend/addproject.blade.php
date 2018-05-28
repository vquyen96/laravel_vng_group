@extends('backend.master')
@section('title','Dự án')
@section('main')



<div class="project">
	<div class=" col-md-7 col-sm-9 col-xs-12 mainContent">
		<h3>Thêm dự án</h3>
		<form method="post" enctype="multipart/form-data">
			<div class="" >
				<div class="form-group">
					<label>Loại dự án</label>
					<select name="type" class="form-control">
						<option value="0">Dự án đầu tư</option>
						<option value="1">Dự án phân phối</option>
					</select>
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Tên dự án</label>
					<input type="text" class="form-control" name="name" required>
				</div>
			</div>
			
			<div class="" >
				<div class="form-group">
					<label>Ảnh</label>
					<input required id="img" type="file" name="img" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="100%" src="img/new_seo-10-512.png">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Chủ đầu tư</label>
					<textarea class="form-control ckeditor" rows="10" name="investor"></textarea>
					<script type="text/javascript">
						var editor = CKEDITOR.replace('investor',{
							language:'vi',
							filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
							filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
							filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							filebrowserFlashUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
						});
					</script>
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Ảnh tổng quan</label>
					<input required id="img" type="file" name="overviewImg" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="100%" src="img/new_seo-10-512.png">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Nội dung tổng quan</label>
					<textarea class="form-control ckeditor" rows="10" name="overviewContent"></textarea>
					<script type="text/javascript">
						var editor = CKEDITOR.replace('overviewContent',{
							language:'vi',
							filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
							filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
							filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							filebrowserFlashUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
						});
					</script>
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Ảnh vị trí</label>
					<input required id="img" type="file" name="locationImg" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="100%" src="img/new_seo-10-512.png">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Nội dung vị trí</label>
					<textarea class="form-control ckeditor" rows="10" name="locationContent"></textarea>
					<script type="text/javascript">
						var editor = CKEDITOR.replace('locationContent',{
							language:'vi',
							filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
							filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
							filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							filebrowserFlashUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
						});
					</script>
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Ảnh tiện ích</label>
					<input required id="img" type="file" name="utilityImg" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="100%" src="img/new_seo-10-512.png">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Nội dung tiện ích</label>
					<textarea class="form-control ckeditor" rows="10" name="utilityContent"></textarea>
					<script type="text/javascript">
						var editor = CKEDITOR.replace('utilityContent',{
							language:'vi',
							filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
							filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
							filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							filebrowserFlashUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
						});
					</script>
				</div>
			</div>
			
			<div class="projectAlbum">
				<div class="album">
					<div class="albumItem album1">
						<div class="albumItemImg">
							<input required id="img" type="file" name="ablumImg1" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="img/Rectangle 11.png">
						</div>
						{{-- <div class="albumItemContent txt16">
							CoCo Wonderland Resort
						</div> --}}
					</div>
					<div class="albumItem album2">
						<div class="albumItemImg">
							<input required id="img" type="file" name="ablumImg2" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="img/brett-campbell-61762-unsplash - Copy copy 6.png">
						</div>
						{{-- <div class="albumItemImg">
							<img src="img/brett-campbell-61762-unsplash - Copy copy 6.png">
						</div>
						<div class="albumItemContent txt16">
							CoCo Wonderland Resort
						</div> --}}
					</div>
					<div class="albumItem album3">
						<div class="albumItemImg">
							<input required id="img" type="file" name="ablumImg3" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="img/Rectangle 11 copy 2.png">
						</div>
						{{-- <div class="albumItemImg">
							<img src="img/Rectangle 11 copy 2.png">
						</div>
						<div class="albumItemContent txt16">
							CoCo Wonderland Resort
						</div> --}}
					</div>
					<div class="albumItem album4">
						<div class="albumItemImg">
							<input required id="img" type="file" name="ablumImg4" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="img/brett-campbell-61762-unsplash - Copy copy 3.png">
						</div>
						{{-- <div class="albumItemImg">
							<img src="img/brett-campbell-61762-unsplash - Copy copy 3.png">
						</div>
						<div class="albumItemContent txt16">
							CoCo Wonderland Resort
						</div> --}}
					</div>
					<div class="albumItem album5">
						<div class="albumItemImg">
							<input required id="img" type="file" name="ablumImg5" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="img/brett-campbell-61762-unsplash - Copy copy 5.png">
						</div>
						{{-- <div class="albumItemImg">
							<img src="img/brett-campbell-61762-unsplash - Copy copy 5.png">
						</div>
						<div class="albumItemContent txt16">
							CoCo Wonderland Resort
						</div> --}}
					</div>
					<div class="albumItem album6">
						<div class="albumItemImg">
							<input required id="img" type="file" name="ablumImg6" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="img/brett-campbell-61762-unsplash - Copy copy.png">
						</div>
						{{-- <div class="albumItemImg">
							<img src="img/brett-campbell-61762-unsplash - Copy copy.png">
						</div>
						<div class="albumItemContent txt16">
							CoCo Wonderland Resort
						</div> --}}
					</div>
					<div class="albumItem album7">
						<div class="albumItemImg">
							<input required id="img" type="file" name="ablumImg7" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="img/brett-campbell-61762-unsplash - Copy copy 2.png">
						</div>
						{{-- <div class="albumItemImg">
							<img src="img/brett-campbell-61762-unsplash - Copy copy 2.png">
						</div>
						<div class="albumItemContent txt16">
							CoCo Wonderland Resort
						</div> --}}
					</div>
					<div class="albumItem album8">
						<div class="albumItemImg">
							<input required id="img" type="file" name="ablumImg8" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="img/brett-campbell-61762-unsplash - Copy copy 4.png">
						</div>
						{{-- <div class="albumItemImg">
							<img src="img/brett-campbell-61762-unsplash - Copy copy 4.png">
						</div>
						<div class="albumItemContent txt16">
							CoCo Wonderland Resort
						</div> --}}
					</div>
				</div>
			</div>
				

			<div class="form-group">
				<input type="submit" name="" class="btn btn-primary" value="Thêm mới">
			</div>
			{{csrf_field()}}
		</form>
	</div>
	{{-- <div class=" col-md-12 mainContent">
		<h3>Danh sách dự án</h3>
		<table class="table table-hover">
			<tr>
				<th>#</th>
				<th>Ảnh Dự Án</th>
				<th>Tên Dự Án</th>
				<th>Loại Dự Án</th>
				<th>Tùy chọn</th>
			</tr>
			@foreach($items as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>
					<img class="thumbnail" height="100px" src="{{asset('lib/storage/app/project/'.$item->img)}}">
				</td>
				<td><b>{{$item->name}}</b></td>
				<td>
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
	</div> --}}
</div>

@stop