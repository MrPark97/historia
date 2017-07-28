@extends('layouts.master')


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
  	    <li @if($category=="architecture")class="is-active"@endif>
  	      <a href="/{{app()->getLocale()}}/architecture">
  	        <span class="icon"><i class="fa fa-university"></i></span>
  	        <span class="muller">@lang('messages.architecture')</span>
  	      </a>
  	    </li>
  	    <li @if($category=="individuals")class="is-active"@endif>
  	      <a href="/{{app()->getLocale()}}/individuals">
  	        <span class="icon"><i class="fa fa-address-card-o"></i></span>
  	        <span class="muller">@lang('messages.individuals')</span>
  	      </a>
  	    </li>
  	    <li @if($category=="events")class="is-active"@endif>
  	      <a href="/{{app()->getLocale()}}/events">
  	        <span class="icon"><i class="fa fa-newspaper-o"></i></span>
  	        <span class="muller">@lang('messages.events')</span>
  	      </a>
  	    </li>
  	  </ul>
  	</div>

  	<div class="tabs is-centered is-small is-hidden-tablet">
  	  <ul>
  	    <li @if($category=="architecture")class="is-active"@endif>
  	      <a href="/{{app()->getLocale()}}/architecture">
  	        <span class="icon is-small"><i class="fa fa-university"></i></span>
  	        <span class="muller">@lang('messages.architecture')</span>
  	      </a>
  	    </li>
  	    <li @if($category=="individuals")class="is-active"@endif>
  	      <a href="/{{app()->getLocale()}}/individuals">
  	        <span class="icon is-small"><i class="fa fa-address-card-o"></i></span>
  	        <span class="muller">@lang('messages.individuals')</span>
  	      </a>
  	    </li>
  	    <li @if($category=="events")class="is-active"@endif>
  	      <a href="/{{app()->getLocale()}}/events">
  	        <span class="icon is-small"><i class="fa fa-newspaper-o"></i></span>
  	        <span class="muller">@lang('messages.events')</span>
  	      </a>
  	    </li>
  	  </ul>
  	</div>

  	<section class="section">
  		<div class="container">

      @foreach($articles as $article)
  			<article class="media box">
  			  <figure class="media-left">
  			    <p class="image is-64x64">
  			      <img src="/img/thumbnails/{{$article['image']['file_name']}}">
  			    </p>
  			  </figure>
  			  <div class="media-content">
  			    <div class="content">
  			      <p>
  			        <strong><a href="/{{app()->getLocale()}}/{{$category}}/{{$article['id']}}">{{$article['title_'.app()->getLocale()]}}</a></strong>
  			        <br />
  			        {{ $article['description_'.app()->getLocale()] }}
  			      </p>
  			    </div>
  			    <nav class="level is-mobile">
  			      <div class="level-left">
  			        <span class="level-item">
  			          {{-- <span class="icon is-small"><i class="fa fa-reply"></i></span> --}}<span class="tag">{{ $article['author']['name'] }}</span>
  			        </span>
  			        <span class="level-item">
  			          {{-- <span class="icon is-small"><i class="fa fa-retweet"></i></span> --}}<span class="icon is-small"><i class="fa fa-calendar"></i></span>&nbsp;<small>{{ $article['created_at']->diffForHumans() }}</small>
  			        </span>
  			        {{-- <a class="level-item">
  			          <span class="icon is-small"><i class="fa fa-heart"></i></span>
  			        </a> --}}
  			      </div>
  			    </nav>
  			  </div>
  			</article>
      @endforeach

  			<section class="section">
          {{ $articles->links('layouts.pagination') }}

  			</section>
  		</div>
  	</section>
  </article>
@endsection
