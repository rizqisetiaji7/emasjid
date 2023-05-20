<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <link rel="shortcut icon" href="{{ asset('/dist/img/icons/icon-48x48.png') }}" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ asset('/dist/css/app.css') }}">
	
   <title>@yield('title') | {{ config('app.name', 'E-Masjid') }}</title>
	
   <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap">
</head>

<body>
	<div class="wrapper">
		{{-- Sidebar --}}
		@includeIf('components.sidebar')
		
		<div class="main">
			{{-- Navbar --}}
			@includeIf('components.navbar')
			<form id="logoutForm" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
			<script> 
				const _logout = () => document.querySelector('#logoutForm').submit()
			</script>
			
			<main class="content">
				<div class="container-fluid p-0">
					@include('flash::message')
					@yield('content')
				</div>
			</main>
			
			{{-- Footer --}}
			@includeIf('components.footer')
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<script src="{{ asset('/dist/js/app.js') }}"></script>
	@stack('script')
</body>
</html>