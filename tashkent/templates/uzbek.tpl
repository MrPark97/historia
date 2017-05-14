<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/static/styles/font-awesome.min.css">
	<link rel="stylesheet" href="/static/styles/bulma.css">
	<script src="/static/js/jquery.min.js"></script>

	<link rel="stylesheet" href="/static/styles/index.css">
    <!-- Polyfill Web Components support for older browsers -->
    <script src="/bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

    <link rel="import" href="/bower_components/paper-input/paper-input.html">
    <link rel="import" href="/bower_components/iron-icons/iron-icons.html">


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
	        <i class="fa fa-instagram"></i>
	      </span>
	    </a>
	    <a class="nav-item">
	      <span class="icon">
	        <i class="fa fa-telegram"></i>
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
	      Галерея
	    </a>
	    <a class="nav-item">
	      О проекте
	    </a>
	    <a class="nav-item">
	      Статьи
	    </a>

	    <div class="nav-item search-field">
	      <div class="field">
		      <style>
		        paper-input {
		          max-width: 400px;
		          margin: auto;
		          text-align: left;
		        }
		        iron-icon, div[suffix] {
		          color: hsl(0, 0%, 50%);
		          margin-right: 12px;
		        }
		      </style>
		      <paper-input label="поиск">
		        <iron-icon icon="search" prefix></iron-icon>
		      </paper-input>
	      </div>


	      <!-- <div class="field is-grouped">
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
	      </div> -->
	    </div>
	  </div>
	</nav>

	<article>
		<section class="hero is-success is-bold">
			<div class="hero-body">
				<div class="container">
						<h1 class="title section-title"><img src="/static/img/tashkentuzbek.svg" class="coat-of-arms"> <span class="pobeda">TOSHKENT</span> <span class="tag is-dark is-medium">1991-2017</span></h1>
				</div>
			</div>
		</section>

		<div class="tabs is-centered is-large is-hidden-touch">
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

		<div class="tabs is-centered is-hidden-desktop">
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
		        <span>Деятели</span>
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
	        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
	        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
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
