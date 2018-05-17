<!DOCTYPE html>
<html>
<head>
	<title>VNG || Admin</title>
	<base href="{{asset('public/layout/backend')}}/">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
	<div class="loginBody">
		<div class="loginHeader">
			<img src="http://vnggroup.com.vn/wp-content/uploads/2015/02/VNG-GROUP-logo.png">
		</div>
		<div class="loginMain">
			@include('errors.note')
			<form method="post">
				<div class="" >
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" name="email" required>
					</div>
				</div>
				<div class="" >
					<div class="form-group">
						<label>Mật khẩu</label>
						<input type="text" class="form-control" name="password" required>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="" class="btn btn-primary" value="Đăng Nhập">
					
				</div>
				{{csrf_field()}}
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
</body>
</html>