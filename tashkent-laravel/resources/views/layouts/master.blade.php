<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  href="/css/bulma.css" type="text/css" rel="stylesheet">
	<link  href="/css/index.css" type="text/css" rel="stylesheet">

	<title>{{config()->get('app.name')}}</title>

	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/node_modules/bulma/css/mybulma.css">
	<script src="/node_modules/jquery/dist/jquery.min.js"></script>

    <!-- Polyfill Web Components support for older browsers -->
    <script src="/bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

    <!-- Import element -->
    <link rel="import" href="/bower_components/paper-input/paper-input.html">
    <link rel="import" href="/bower_components/iron-icons/iron-icons.html">
		<link rel="import" href="/bower_components/google-map/google-map.html">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/bower_components/fancybox/dist/jquery.fancybox.min.css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="/css/index2.css">
</head>
<body>
	<nav class="nav">
	  <div class="container">
		  <div class="nav-left">
		    <a href="{{config()->get('app.proto')}}{{config()->get('app.hostname')}}/{{app()->getLocale()}}" class="nav-item">
		      <img class="logo-img" src="/img/logo0.gif" alt="coat of arms of Tashkent 1860">
		      &nbsp;
		      <h1 class="pobeda logo-text">ТАШКЕНТЪ</h1>
		    </a>
		  </div>

		  <div class="nav-center">
		    <a href="/en{{$path}}" class="nav-item">
		      <span class="icon">
		        <img src="/img/flags/en.svg" alt="en">
		      </span>
		    </a>
		    <a href="/ru{{$path}}" class="nav-item">
		      <span class="icon">
		        <img src="/img/flags/ru.svg" alt="ru">
		      </span>
		    </a>
		    <a href="/de{{$path}}" class="nav-item">
		      <span class="icon">
		        <img src="/img/flags/de.svg" alt="de">
		      </span>
		    </a>
		    <a href="/uz{{$path}}" class="nav-item">
		      <span class="icon">
		        <img src="/img/flags/uz.svg" alt="uz">
		      </span>
		    </a>
		  </div>

		  <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
		  <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
		  <span class="nav-toggle">
		    <span></span>
		    <span></span>
		    <span></span>
		  </span>

		  <!-- This "nav-menu" is hidden on mobile -->
		  <!-- Add the modifier "is-active" to display it on mobile -->
		  <div class="nav-right nav-menu">
		    <a href="{{config()->get('app.proto')}}{{config()->get('app.hostname')}}/{{app()->getLocale()}}/gallery" class="nav-item">
		      <span class="icon">
            <i class="fa fa-picture-o"></i>
          </span>
          &nbsp;
		      @lang('messages.gallery')
		    </a>
		    </div>
		  </div>
	  </nav>
	</nav>

	@yield('content')

	<footer class="footer">
	  <div class="container">
	    <div class="content columns ">
	      <div class="column is-6-tablet">
					<h4><a href="{{config()->get('app.proto')}}{{config()->get('app.hostname')}}/{{app()->getLocale()}}/about">@lang('messages.about')</a></h4><br />
	        <p><span class="big-font-size pobeda">ТАШКЕНТЪ</span> by <a href="http://github.com/MrPark97">MrPark97</a>.<br />The source code is licensed
	        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.</p>
					<p>
		        <a class="icon" href="http://github.com/MrPark97/historia">
		          <i class="fa fa-github"></i>
		        </a>
					</p>
	      </div>
	      <div class="column is-6-tablet">
					<h4 class="muller"><strong>@lang('messages.links')</strong></h4>
					<p>
						<a href="#">
							<span class="icon">
							  <i class="fa fa-instagram"></i>
							</span> Instagram
						</a>
					</p>
					<p>
						<a href="#">
							<span class="icon">
							  <i class="fa fa-telegram"></i>
							</span> Telegram
						</a>
					</p>
					<p>
						<a href="#">
							<span class="icon">
							  <i class="fa fa-facebook-official"></i>
							</span> Facebook
						</a>
					</p>
	      </div>
	    </div>
	  </div>
	</footer>

	<script>
		$(document).ready(function() {
			$('.nav-toggle').click(function() {
				if($(this).hasClass('is-active')) {
					$('.nav-menu').removeClass('is-active');
					$(this).removeClass('is-active');
				} else {
					$('.nav-menu').addClass('is-active');
					$(this).addClass('is-active');
				}
			});
			$('.tabs li').click(function() {
				$('.tabs .is-active').removeClass('is-active');
				$(this).addClass('is-active');
			});
		});
	</script>

	<!-- JS -->
  <script src="/bower_components/fancybox/dist/jquery.fancybox.min.js"></script>
</body>
</html>
