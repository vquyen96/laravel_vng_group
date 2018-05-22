<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>


	<base href="{{asset('public/layout/frontend')}}/">
	<link rel="shortcut icon" href="{{ asset('public/layout/frontend/img/iconHeader.png') }}">
	<meta charset="utf-8">

	<meta property="og:url" 		content="{{Request::url()}}" />

	
	<meta property="fb:app_id" 		content="1577563652342523" />
	 
	<meta property="og:title" 		content="@yield('fb_title')" />
	<meta property="og:description" content="@yield('fb_description')" />
    <meta property="og:image" 		content="@yield('fb_image')" />
    <meta property="og:image:type" 	content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">


	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif:500|Roboto:400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	
	<div class="backgroundBody">
		<div class="backgroundBodyImg">
			<img src="img/BG.png">
		</div>
	</div>
	<header>
		<div class="imgLogo">
			<img src="img/logo.png">
		</div>
		<div class="btnMenuVsLang">
			<div class="lang">
				<div class="lang_en">EN</div>
				<span>|</span>
				<div class="lang_vi">VI</div>
			</div>
			<div class="btnMenu">
				<div class="btnMenuCỉcle">
					<div class="btnMenuCỉcleHide"></div>
				</div>
				<div class="btnMenuItem"></div>
				<div class="btnMenuItem"></div>
				<div class="btnMenuItem"></div>
				
			</div>
		</div>
		
	</header>
	<div class="menuHide">
		<ul>
			<li class="active">
				<a href="">
					<div class="menuLeft">
						<div class="lang_en">EN</div>
						<span>|</span>
						<div class="lang_vi">VI</div>
					</div>
					<div class="menuRight">
						<img src="img/menu.png">
					</div>
				</a>
			</li>
			<li class="active">
				<a href="">
					Trang chủ
					<img src="img/home.png">
				</a>
			</li>
			<li>
				<a>
					Giới thiệu
					<img src="img/GT.png">
				</a>
				<ul>
					<li>
						<a href="">Thư ngỏ</a>
					</li>
					<li>
						<a href="">Lịch sử phát triển</a>
					</li>
					<li>
						<a href="">Tầm nhìn -  sứ mệnh</a>
					</li>
					<li>
						<a href="">Văn hóa VNG Group</a>
					</li>
					<li>
						<a href="">Ban lãnh đạo</a>
					</li>
				</ul>
			</li>
			<li>
				<a>
					Dự án
					<img src="img/project.png">
				</a>
				<ul>
					<li>
						<a href="">Dự án đầu tư</a>
					</li>
					<li>
						<a href="">Dự án phân phối</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="">
					Quan hệ đầu tư
					<img src="img/QH.png">
				</a>
			</li>
			<li>
				<a href="">
					Tin tức
					<img src="img/new.png">
				</a>
			</li>
			<li>
				<a href="">
					Tuyển dụng
					<img src="img/TD.png">
				</a>
			</li>
			<li>
				<a href="">
					Liên hệ
					<img src="img/Contact.png">
				</a>
			</li>
		</ul>
	</div>
	<div class=""></div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
	@yield('script')
</body>
</html>