<!DOCTYPE html>
<html>
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

    <!-- Custom styles -->
    <link rel="stylesheet" href="/css/index2.css">
</head>
<body>
	<nav class="nav">
	  <div class="container">
		  <div class="nav-left">
		    <a class="nav-item">
		      <img class="logo-img" src="/img/logo0.gif" alt="coat of arms of Tashkent 1860">
		      &nbsp;
		      <h1 class="pobeda logo-text">ТАШКЕНТЪ</h1>
		    </a>
		  </div>

		  <div class="nav-center">
		    <a href="/en" class="nav-item">
		      <span class="icon">
		        <img src="/img/flags/en.svg" alt="en">
		      </span>
		    </a>
		    <a href="/ru" class="nav-item">
		      <span class="icon">
		        <img src="/img/flags/ru.svg" alt="ru">
		      </span>
		    </a>
		    <a href="/de" class="nav-item">
		      <span class="icon">
		        <img src="/img/flags/de.svg" alt="de">
		      </span>
		    </a>
		    <a href="/uz" class="nav-item">
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
		    <a class="nav-item">
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
	    <div class="content has-text-centered">
	      <p>
	        <span class="big-font-size pobeda">ТАШКЕНТЪ</span> by <a href="http://github.com/MrPark97">MrPark97</a>. The source code is licensed
	        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
	      </p>
	      <p>
	        <a class="icon" href="http://github.com/MrPark97/historia">
	          <i class="fa fa-github"></i>
	        </a>
	      </p>
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
</body>
</html>
