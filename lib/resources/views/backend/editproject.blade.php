@extends('backend.master')
@section('title','Dự án')
@section('main')



<div class="project">
	<div class=" col-md-7 col-sm-9 col-xs-12 mainContent">
		<h3>Sửa dự án</h3>
		<form method="post" enctype="multipart/form-data">
			<div class="" >
				<div class="form-group">
					<label>Loại dự án</label>
					<select name="type" class="form-control">
						<option @if($edit->type == 0) selected @endif value="0">Dự án đầu tư</option>
						<option @if($edit->type == 1) selected @endif value="1">Dự án phân phối</option>
					</select>
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Tên dự án</label>
					<input type="text" class="form-control" name="name" value="{{$edit->name}}" required>
				</div>
			</div>
			
			<div class="" >
				<div class="form-group">
					<label>Ảnh</label>
					<input id="img" type="file" name="img" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->img) }}">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Chủ đầu tư</label>
					<textarea class="form-control ckeditor" rows="10" name="investor">{!! $edit->investor!!}</textarea>
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
					<input id="img" type="file" name="overviewImg" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->overviewImg) }}">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Nội dung tổng quan</label>
					<textarea class="form-control ckeditor" rows="10" name="overviewContent">{!! $edit->overviewContent!!}</textarea>
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
					<input id="img" type="file" name="locationImg" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->locationImg) }}">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Nội dung vị trí</label>
					<textarea class="form-control ckeditor" rows="10" name="locationContent">{!! $edit->locationContent!!}</textarea>
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
					<input id="img" type="file" name="utilityImg" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->utilityImg) }}">
				</div>
			</div>
			<div class="" >
				<div class="form-group">
					<label>Nội dung tiện ích</label>
					<textarea class="form-control ckeditor" rows="10" name="utilityContent">{!! $edit->utilityContent!!}</textarea>
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
							<input id="img" type="file" name="albumImg1" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->albumImg1) }}">
						</div>
						
					</div>
					<div class="albumItem album2">
						<div class="albumItemImg">
							<input id="img" type="file" name="albumImg2" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->albumImg2) }}">
						</div>
						
					</div>
					<div class="albumItem album3">
						<div class="albumItemImg">
							<input id="img" type="file" name="albumImg3" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->albumImg3) }}">
						</div>
						
					</div>
					<div class="albumItem album4">
						<div class="albumItemImg">
							<input id="img" type="file" name="albumImg4" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->albumImg4) }}">
						</div>
						
					</div>
					<div class="albumItem album5">
						<div class="albumItemImg">
							<input id="img" type="file" name="albumImg5" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->albumImg5) }}">
						</div>
						
					</div>
					<div class="albumItem album6">
						<div class="albumItemImg">
							<input id="img" type="file" name="albumImg6" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->albumImg6) }}">
						</div>
						
					</div>
					<div class="albumItem album7">
						<div class="albumItemImg">
							<input id="img" type="file" name="albumImg7" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->albumImg7) }}">
						</div>
						
					</div>
					<div class="albumItem album8">
						<div class="albumItemImg">
							<input id="img" type="file" name="albumImg8" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    		<img style="cursor: pointer;" id="avatar" class="cssInput" width="100%" src="{{ asset('lib/storage/app/project/'.$edit->albumImg8) }}">
						</div>
						
					</div>
				</div>
			</div>
				

			<div class="form-group">
				<input type="submit" name="" class="btn btn-primary" value="Thêm mới">
			</div>
			{{csrf_field()}}
		</form>
	</div>
	
</div>

@stop