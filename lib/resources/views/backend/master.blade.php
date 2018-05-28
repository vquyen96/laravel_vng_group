<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') || VNG Admin</title>
	<meta charset="utf-8">
	<base href="{{asset('public/layout/backend')}}/">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="../../editor/ckeditor/ckeditor.js"></script>
</head>
<body>
	<header>
		<div class="col-md-5 col-sm-3 col-xs-12 headerLogo">
			<img src="http://vnggroup.com.vn/wp-content/uploads/2015/02/VNG-GROUP-logo.png">
		</div>
		<div class="col-md-7 col-sm-9 col-xs-12 headerMenu resp800Hide">
			<ul class="">
				<li @if(Request::segment(2) == 'account') class="headerActive" @endif><a href="{{asset('admin/account')}}">Tài khoản</a></li>
				<li @if(Request::segment(2) == 'home') class="headerActive" @endif><a href="{{asset('admin/home')}}">Trang chủ</a></li>
			  	<li @if(Request::segment(2) == 'about') class="headerActive" @endif><a href="{{asset('admin/about/letter')}}">Giới thiệu</a></li>
			  	<li @if(Request::segment(2) == 'project') class="headerActive" @endif><a href="{{asset('admin/project')}}">Dự án</a></li>
			  	<li @if(Request::segment(2) == 'image') class="headerActive" @endif><a href="{{asset('admin/image')}}">Hình ảnh</a></li>
			  	<li @if(Request::segment(2) == 'news') class="headerActive" @endif><a href="{{asset('admin/news')}}">Tin tức</a></li>
			  	<li @if(Request::segment(2) == 'contact') class="headerActive" @endif><a href="{{asset('admin/contact')}}">Liên hệ</a></li>
			</ul>
		</div>
	</header>
	<div class="btnLogOut resp800Hide">
		<a href="{{asset('logout')}}">
			<span class="glyphicon glyphicon-log-out"></span>
			Đăng xuất
		</a>
	</div>
	@if(Auth::user()->level == 1)
	<div class="btnAccount resp800Hide">
		<a href="{{asset('admin/account')}}">
			<span class="glyphicon glyphicon-user"></span>
			Tài khoản
		</a>
	</div>
	@endif
	<div class="btnToggle resp800Show">
		<a  class="">
			<span class="glyphicon glyphicon-option-horizontal"></span>
		</a>
	</div>
	<div class="masterContentToggle">
		<ul>
			@if(Auth::user()->level == 1)
			<li><a href="{{asset('admin/account')}}">Tài khoản</a></li>
			@endif
			<li><a href="{{asset('admin/about/letter')}}">Giới thiệu</a></li>
			<li><a href="{{asset('admin/project')}}">Dự án</a></li>
			<li><a href="{{asset('admin/member')}}">Thành viên</a></li>
			<li><a href="{{asset('admin/image')}}">Hình ảnh</a></li>
			<li><a href="{{asset('admin/news')}}">Tin tức</a></li>
			<li><a href="{{asset('admin/contact')}}">Liên hệ</a></li>
			<li><a href="{{asset('logout')}}">Đăng xuất</a></li>
		</ul>
	</div>
	<main class="container">
		<div class="row">
			@yield('main')
		</div>
	</main>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		function changeImg(input){
			var inputFile = $(this);
			
			console.log($(input).next());
	        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
	        if(input.files && input.files[0]){
	            var reader = new FileReader();
	            //Sự kiện file đã được load vào website
	            reader.onload = function(e){
	                //Thay đổi đường dẫn ảnh
	                // $('#avatar').attr('src',e.target.result);
	                $(input).next().attr('src',e.target.result);
	                
	            }
	            reader.readAsDataURL(input.files[0]);
	        }
	    }
	    $(document).ready(function() {
	        // $('#avatar').click(function(){
	        //     $(this).prev().click();
	        // });
	        $('.cssInput').click(function(){
	        	$(this).prev().click();
	        })
	    });



	</script>
</body>
</html>