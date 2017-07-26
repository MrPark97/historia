<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="/static/css/font-awesome.min.css">
	<link rel="stylesheet" href="/node_modules/bulma/css/mybulma.css">
	<script src="/node_modules/jquery/dist/jquery.min.js"></script>

    <!-- Polyfill Web Components support for older browsers -->
    <script src="/bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

    <!-- Import element -->
    <link rel="import" href="/bower_components/paper-input/paper-input.html">
    <link rel="import" href="/bower_components/iron-icons/iron-icons.html">
    <link rel="stylesheet" href="/static/css/index2.css">

</head>
<body>
	<nav class="nav">
	  <div class="container">
		  <div class="nav-left">
		    <a class="nav-item">
		      <img class="logo-img" src="/static/img/logo0.gif" alt="coat of arms of Tashkent 1860">
		      &nbsp;
		      <h1 class="pobeda logo-text">ТАШКЕНТЪ</h1>
		    </a>
		  </div>

		  <div class="nav-center">
		    <a class="nav-item">
		      <span class="icon">
		        <img src="/static/img/flags/en.svg" alt="en">
		      </span>
		    </a>
		    <a class="nav-item">
		      <span class="icon">
		        <img src="/static/img/flags/ru.svg" alt="ru">
		      </span>
		    </a>
		    <a class="nav-item">
		      <span class="icon">
		        <img src="/static/img/flags/de.svg" alt="de">
		      </span>
		    </a>
		    <a class="nav-item">
		      <span class="icon">
		        <img src="/static/img/flags/uz.svg" alt="uz">
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
		      Галерея
		    </a>
		    </div>
		  </div>
	  </nav>
	</nav>

	<article>
		<section class="hero is-primary is-bold">
		  <div class="hero-body">
		    <div class="container">
		      <h1 class="title">
		        О нас
		      </h1>
		      <h2 class="subtitle">
		        2017-...
		      </h2>
		    </div>
		  </div>
		</section>
		<div class="container">
		  <section class="section">
		  	  <h3 class="title">О проекте</h3>
		  	  <div class="content">
		  	  	<blockquote>"The best benefit we derive from history is the enthusiasm it excites."<br /><small><strong>- Johann Wolfgang von Goethe</strong></small></blockquote>

		  	  	<p>
		  	  		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		  	  	</p>
		  	  	<p>
		  	  		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		  	  	</p>
		  	  	<p>
		  	  		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		  	  	</p>
		  	  </div>
		  </section>
		  <hr />
		  <section class="section">
		  	  <h3 class="title">Наша команда</h3>
			  <div class="columns">
			    <div class="column is-3-desktop is-6-tablet-only is-12-mobile">
			      <div class="card">
			        <div class="card-image">
			      	   <figure class="image is-square">
			      	     <img src="http://bulma.io/images/placeholders/256x256.png" alt="Image">
			      	   </figure>
			        </div>
			        <div class="card-content">
			      	   <div class="media">
			      	     <div class="media-content">
			      	       <p class="title is-4">John Smith</p>
			      	       <p class="subtitle is-6">@johnsmith</p>
			      	     </div>
			      	   </div>
			      	   <div class="content">
			      	     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			      	     Phasellus nec iaculis mauris. <a>@bulmaio</a>.
			      	     <a>#css</a> <a>#responsive</a>
			      	     <br>
			      	     <small>11:09 PM - 1 Jan 2016</small>
			      	   </div>
			        </div>
			      </div>
			    </div>

			    <div class="column is-3-desktop is-6-tablet-only is-12-mobile">
			      <div class="card">
			        <div class="card-image">
			          <figure class="image is-square">
			            <img src="/static/img/MrPark.jpg" alt="Image">
			          </figure>
			        </div>
			        <div class="card-content">
			          <div class="media">
			            <div class="media-content">
			              <p class="title is-4">Evgeniy Pak</p>
			              <p class="subtitle is-6">@MrPark</p>
			            </div>
			          </div>
			          <div class="content">
			            Programmer. Lomonosov MSU Tashkent branch student. <a>@msu</a> <a>@tpcit</a>.
			            <a>#pseudocoder</a> <a>#pianist</a> <a>#basketball</a>
			            <br>
			            <small>
			              <a href="https://github.com/MrPark97"><span class="icon"><i class="fa fa-github"></i></span> Github</a>
			              <a href="https://www.linkedin.com/in/evgeniy-park-a12a10100/"><span class="icon"><i class="fa fa-linkedin-square"></i></span> LinkedIn</a>
			            </small>
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>
		  </section>
		  <hr />
		</div>
		<section class="section sponsors-section">
		  <nav class="level">
		    <div class="level-item has-text-centered">
		      <div>
		        <p class="heading"><img src="/static/img/Lomonosov MSU logo.png"></p>
		        <p class="title"><a href="#">Lomonosov MSU Tashkent branch</a></p>
		      </div>
		    </div>
		    <div class="level-item has-text-centered">
		      <div>
		        <p class="heading"><img src="/static/img/tpcit.png"></p>
		        <p class="title"><a href="#">TPCIT</a></p>
		      </div>
		    </div>
		    <div class="level-item has-text-centered">
		      <div>
		      	<p class="heading"><img src="/static/img/uzbekistan-brand-logo-tourism.jpg"></p>
		      	<p class="title"><a href="#">Uzbekistan</a></p>
		      </div>
		    </div>
		    
		  </nav>
		</section>
	</article>

	<footer class="footer">
	  <div class="container">
	    <div class="content has-text-centered">
	      <p>
	        <span class="big-font-size pobeda">ТАШКЕНТЪ</span> by <a href="http://github.com/MrPark97">MrPark97</a>. The source code is licensed
	        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
	      </p>
	      <p>
	        <a class="icon" href="http://github.com">
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
