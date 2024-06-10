
<!DOCTYPE html>
<html lang="en" class="h-100">


<head>
    <!-- Title -->
	<title>W3CRM - Bootstrap Admin Dashboard Template</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta property="og:image" content="social-image.png">
	
	<!-- TWITTER META -->
	<meta name="twitter:title" content="W3CRM - Bootstrap Admin Dashboard Template">
	<meta name="twitter:description" content="Elevate your administrative efficiency and enhance productivity with the W3CRM Bootstrap Admin Dashboard Template. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.">
	<meta name="twitter:image" content="social-image.png">
	<meta name="twitter:card" content="summary_large_image">
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					@yield('content')
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							<a href="index.html"><img src="{{ asset('assets/images/logo-full.png') }}" class="mb-3 logo-dark" alt=""></a>
							<a href="index.html"><img src="{{ asset('assets/images/logi-white.png') }}" class="mb-3 logo-light" alt=""></a>
							
							<p>CRM dashboard uses line charts to visualize customer-related metrics and trends over time.</p>
						</div>
						<div class="login-media text-center">
							<img src="{{ asset('assets/images/login.png') }}" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
 <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/deznav-init.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>


</body>

</html>