<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="{{ url('/public/admin-assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/admin-assets/login/login-style.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
				<div class="d-flex justify-content-end social_icon">
				</div>
			</div>
			<div class="card-body">
				<form class="database_operations" action="{{ url('admin/login') }}">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" required name="email" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" required class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<label for="remember-me"><input id="remember-me" type="checkbox">Remember Me</label>
					</div>
					<div class="form-group">
					{{ csrf_field() }}
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="{{ url('/public/admin-assets/plugins/toastr/jquery.toaster.js') }}"></script>
<script src="{{ url('/public/admin-assets/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ url('/public/admin-assets/login/custom.js') }}"></script>
</body>
</html>