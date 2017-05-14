<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/static/styles/font-awesome.min.css">
	<link rel="stylesheet" href="/static/styles/jquery.fullpage.min.css">
	<link rel="stylesheet" href="/static/styles/bulma.css">
	<script src="/static/js/jquery.min.js"></script>
	<script src="/static/js/jquery.fullpage.min.js"></script>

	<link rel="stylesheet" href="/static/styles/index.css">

	<style>
		.section h1 {
			font-size: 5em;
			font-weight: bold;
			margin:0;
			padding:0;
		}

		.section{
			text-align:center;
		}


		#first-section,
		#second-section,
		#third-section {
			background-size: cover;
			background-attachment: fixed;
		}

		#first-section {
			background-image: 
			linear-gradient(
		      rgba(0, 0, 0, 0.5),
		      rgba(0, 0, 0, 0.5)
		    ),
			url('/static/img/tashkent-25dreamblur.jpg');
			background-position: center center;
			padding: 6% 0 0 0;
		}

		#first-section h1 {
			top: 50%;
			transform: translateY(-100%);
			position: relative;
		}

		#second-section {
			background-image:
			linear-gradient(
		      rgba(0, 0, 0, 0.5),
		      rgba(0, 0, 0, 0.5)
		    ),
		    url('/static/img/210213653dreamblur.jpg');
			background-position: center center;
			padding: 6% 0 0 0;
		}

		#second-section h1 {
			top: 50%;
			transform: translateY(-100%);
			position: relative;
		}

		#third-section h1 {
			top: 50%;
			transform: translateY(-100%);
			position: relative;
		}

		#third-section {
			background-image:
			linear-gradient(
		      rgba(0, 0, 0, 0.5),
		      rgba(0, 0, 0, 0.5)
		    ),
		    url('/static/img/555f095e9c230dreamblur.jpg');
			background-position: center center;
			padding: 6% 0 0 0;
		}

		h1 span {
			position: relative;
			display: block;
			font-size: 35px;
			font-weight: normal;
		}
		h1 a {
			color: #fff;
		}
	</style>
</head>
<body>
	<nav class="nav">
	  <div class="nav-left">
	    <a class="nav-item">
	      <img class="logo-img" src="/static/img/logo0.gif" alt="coat of arms of Tashkent 1860">
	      <h1 class="pobeda logo-text">ТАШКЕНТЪ</h1>
	    </a>
	  </div>

	  <div class="nav-center">
	    <a class="nav-item">
	      <span class="icon">
	        <i class="fa fa-github"></i>
	      </span>
	    </a>
	    <a class="nav-item">
	      <span class="icon">
	        <i class="fa fa-linkedin"></i>
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
	      Главная
	    </a>
	    <a class="nav-item">
	      О проекте
	    </a>
	    <a class="nav-item">
	      Статьи
	    </a>

	    <div class="nav-item">
	      <div class="field is-grouped">
	        <p class="control">
	          <a class="button" >
	            <span class="icon">
	              <i class="fa fa-telegram"></i>
	            </span>
	            <span>Канал</span>
	          </a>
	        </p>
	        <p class="control">
	          <a class="button is-primary">
	            <span class="icon">
	              <i class="fa fa-instagram"></i>
	            </span>
	            <span>Instagram</span>
	          </a>
	        </p>
	      </div>
	    </div>
	  </div>
	</nav>

	<div id="fullpage">
		<div id="first-section" class="section"><h1 class="pobeda"><a href="/russian">ТАШКЕНТЪ <span>1985-1917 гг.</span></a></h1></div>
		<div id="second-section" class="section"><h1 class="pobeda"><a href="/soviet">ТАШКЕНТ <span>1917-1991 гг.</span></h1></a></div>
		<div id="third-section" class="section"><h1 class="pobeda"><a href="/uzbek">TOSHKENT <span>1991-2017</span></h1></a></div>
	</div>

	<script>
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: false,
				anchors:['russian', 'soviet', 'uzbek'],
				css3: false

			});

			$('.nav-toggle').click(function() {
				if($('.nav-toggle').hasClass('is-active')) {
					$('.nav-menu').removeClass('is-active');
					$('.nav-toggle').removeClass('is-active');
				} else {
					$('.nav-menu').addClass('is-active');
					$('.nav-toggle').addClass('is-active');
				}
			});
		});
	</script>
</body>
</html>
