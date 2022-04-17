<!doctype html>
<html lang="en">
  <head>
  	<title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/assets-admin/css/style.css">

	</head>
	<body style="background-color: #655CD5;">
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(https://i0.wp.com/www.digtara.com/wp-content/uploads/2021/10/eparking-44d1547d512f9b32a300be6570b5efe6.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h4 class="mb-4">Login Admin E-Parking</h4>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="/" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-home"></span></a>
									</p>
								</div>
			      	</div>
					  @if(session()->has('erorlogin'))
					  <i> <font style="color: red">{{session('erorlogin')}}</font>
					  @endif
							<form action="/admin/login" class="signin-form" method="post">
								@csrf
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" required name="name" autofocus>
			      			<label class="form-control-placeholder" for="username">Username</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" required name="password">
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            
		          </form>
				 
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	

	<script src="/assets-admin/js/jquery.min.js"></script>
  <script src="/assets-admin/js/popper.js"></script>
  <script src="/assets-admin/js/bootstrap.min.js"></script>
  <script src="/assets-admin/js/main.js"></script>

	</body>
</html>

