<!DOCTYPE html>
<html lang="en">
	<head><base href="">
		@include('temp_source.head')
        @yield('custom_css')
	</head>
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">
		@include('temp_source.body')
        @yield('custom_js')
	</body>
</html>
