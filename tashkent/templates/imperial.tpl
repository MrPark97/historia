<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="/static/css/font-awesome.min.css">
	<link rel="stylesheet" href="/static/css/bulma.css">
	<script src="/static/js/jquery.min.js"></script>

    <!-- Polyfill Web Components support for older browsers -->
    <script src="/bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

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
		<section id="imperial-epoch-hero" class="epoch-hero hero">
		  <div class="hero-body has-text-centered">
		    <div class="container">
		      <img src="/static/img/tashkentimperial.gif">

		      <div id="search" class="has-text-left is-overlay is-hidden-mobile">
			      <style is="custom-style">
			        paper-input {
			          max-width: 400px;
			          margin: auto;
			        }
			        iron-icon, div[suffix] {
			          color: white;
			          margin-right: 12px;
			        }

			        :root {
			        	--primary-color: var(--paper-grey-300);
			        	--light-theme-background-color: var(--paper-grey-900);
			        	--light-theme-base-color: #ffffff;
			        	--light-theme-text-color: #ffffff;
			        	--light-theme-secondary-color: #fff;  /* for secondary text and icons */
			        	--light-theme-disabled-color: #646464;  /* disabled/hint text */
			        	--light-theme-divider-color: #3c3c3c;
			        }
			      </style>
			      <paper-input label="поиск">
			        <iron-icon icon="search" prefix></iron-icon>
			      </paper-input>
		      </div>

		      <div id="search" class="has-text-left is-hidden-tablet">
			      <paper-input label="поиск">
			        <iron-icon icon="search" prefix></iron-icon>
			      </paper-input>
		      </div>
		    </div>
		  </div>
		</section>

		<div class="tabs is-centered is-medium is-hidden-mobile">
		  <ul>
		    <li>
		      <a>
		        <span class="icon"><i class="fa fa-university"></i></span>
		        <span>Архитектура</span>
		      </a>
		    </li>
		    <li>
		      <a>
		        <span class="icon"><i class="fa fa-address-card-o"></i></span>
		        <span>Выдающиеся деятели</span>
		      </a>
		    </li>
		    <li>
		      <a>
		        <span class="icon"><i class="fa fa-newspaper-o"></i></span>
		        <span>События</span>
		      </a>
		    </li>
		  </ul>
		</div>

		<div class="tabs is-centered is-small is-hidden-tablet">
		  <ul>
		    <li>
		      <a>
		        <span class="icon is-small"><i class="fa fa-university"></i></span>
		        <span>Архитектура</span>
		      </a>
		    </li>
		    <li>
		      <a>
		        <span class="icon is-small"><i class="fa fa-address-card-o"></i></span>
		        <span>Выдающиеся деятели</span>
		      </a>
		    </li>
		    <li>
		      <a>
		        <span class="icon is-small"><i class="fa fa-newspaper-o"></i></span>
		        <span>События</span>
		      </a>
		    </li>
		  </ul>
		</div>

		<section class="section">
			<div class="container">
				<article class="media">
				  <figure class="media-left">
				    <p class="image is-64x64">
				      <img src="http://bulma.io/images/placeholders/128x128.png">
				    </p>
				  </figure>
				  <div class="media-content">
				    <div class="content">
				      <p>
				        <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
				        <br>
				        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
				      </p>
				    </div>
				    <nav class="level is-mobile">
				      <div class="level-left">
				        <a class="level-item">
				          <span class="icon is-small"><i class="fa fa-reply"></i></span>
				        </a>
				        <a class="level-item">
				          <span class="icon is-small"><i class="fa fa-retweet"></i></span>
				        </a>
				        <a class="level-item">
				          <span class="icon is-small"><i class="fa fa-heart"></i></span>
				        </a>
				      </div>
				    </nav>
				  </div>
				</article>

				<article class="media">
				  <figure class="media-left">
				    <p class="image is-64x64">
				      <img src="http://bulma.io/images/placeholders/128x128.png">
				    </p>
				  </figure>
				  <div class="media-content">
				    <div class="content">
				      <p>
				        <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
				        <br>
				        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
				      </p>
				    </div>
				    <nav class="level is-mobile">
				      <div class="level-left">
				        <a class="level-item">
				          <span class="icon is-small"><i class="fa fa-reply"></i></span>
				        </a>
				        <a class="level-item">
				          <span class="icon is-small"><i class="fa fa-retweet"></i></span>
				        </a>
				        <a class="level-item">
				          <span class="icon is-small"><i class="fa fa-heart"></i></span>
				        </a>
				      </div>
				    </nav>
				  </div>
				</article>

				<article class="media">
				  <figure class="media-left">
				    <p class="image is-64x64">
				      <img src="http://bulma.io/images/placeholders/128x128.png">
				    </p>
				  </figure>
				  <div class="media-content">
				    <div class="content">
				      <p>
				        <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
				        <br>
				        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
				      </p>
				    </div>
				    <nav class="level is-mobile">
				      <div class="level-left">
				        <a class="level-item">
				          <span class="icon is-small"><i class="fa fa-reply"></i></span>
				        </a>
				        <a class="level-item">
				          <span class="icon is-small"><i class="fa fa-retweet"></i></span>
				        </a>
				        <a class="level-item">
				          <span class="icon is-small"><i class="fa fa-heart"></i></span>
				        </a>
				      </div>
				    </nav>
				  </div>
				</article>

				<section class="section">
					<nav class="pagination">
					  <a class="pagination-previous" title="This is the first page" disabled>Previous</a>
					  <a class="pagination-next">Next page</a>
					  <ul class="pagination-list">
					    <li>
					      <a class="pagination-link is-current">1</a>
					    </li>
					    <li>
					      <a class="pagination-link">2</a>
					    </li>
					    <li>
					      <a class="pagination-link">3</a>
					    </li>
					  </ul>
					</nav>
				</section>
			</div>
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
