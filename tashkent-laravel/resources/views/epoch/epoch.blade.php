@extends('epoch.master')


@section('content')
  <article>
	<style is="custom-style">
	  paper-input {
	    max-width: 400px;
	    margin: auto;
	  }
	  paper-input.search {
	  	--paper-input-container-color: var(--paper-grey-300);
	    --paper-input-container-focus-color: var(--paper-grey-200);
	    --paper-input-container-invalid-color: #ffffff;
	    --paper-input-container-input-color: #ffffff;
	    --primary-color: var(--paper-grey-900);
	  }
	  iron-icon, div[suffix] {
	    color: white;
	    margin-right: 12px;
	  }
	</style>

	<section id="{{$epoch}}-epoch-hero" class="epoch-hero hero">
	  <div class="hero-body">
	    <div class="container has-text-centered">
        <img src="/img/{{$epoch}}.png" />

	      {{-- <div id="search" class="has-text-left is-overlay is-hidden-mobile">
	      	<form method="POST">
		        <paper-input class="search" label="@lang('messages.search')" required>
		          <iron-icon icon="search" prefix></iron-icon>
		        </paper-input>
		      </form>
	      </div>

	      <div id="search" class="has-text-left is-hidden-tablet">
	      	<form method="POST">
		        <paper-input class="search" label="@lang('messages.search')" required>
		          <iron-icon icon="search" prefix></iron-icon>
		        </paper-input>
		      </form>
	      </div> --}}
	    </div>
	  </div>
	</section>

	<div class="tabs is-centered is-medium is-hidden-mobile">
	  <ul>
	    <li>
	      <a>
	        <span class="icon"><i class="fa fa-university"></i></span>
	        <span>@lang('messages.architecture')</span>
	      </a>
	    </li>
	    <li>
	      <a>
	        <span class="icon"><i class="fa fa-address-card-o"></i></span>
	        <span>@lang('messages.individuals')</span>
	      </a>
	    </li>
	    <li>
	      <a>
	        <span class="icon"><i class="fa fa-newspaper-o"></i></span>
	        <span>@lang('messages.events')</span>
	      </a>
	    </li>
	  </ul>
	</div>

	<div class="tabs is-centered is-small is-hidden-tablet">
	  <ul>
	    <li>
	      <a>
	        <span class="icon is-small"><i class="fa fa-university"></i></span>
	        <span>@lang('messages.architecture')</span>
	      </a>
	    </li>
	    <li>
	      <a>
	        <span class="icon is-small"><i class="fa fa-address-card-o"></i></span>
	        <span>@lang('messages.individuals')</span>
	      </a>
	    </li>
	    <li>
	      <a>
	        <span class="icon is-small"><i class="fa fa-newspaper-o"></i></span>
	        <span>@lang('messages.events')</span>
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
				  <a class="pagination-previous" title="This is the first page" disabled>@lang('messages.previous')</a>
				  <a class="pagination-next">@lang('messages.next_page')</a>
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
@endsection
