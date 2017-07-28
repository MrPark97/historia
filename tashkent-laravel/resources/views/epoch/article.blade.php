@extends('layouts.master')


@section('content')
  <article>
    <section class="hero is-bold @if($epoch=="imperial"){{"is-light"}}@elseif($epoch=="soviet"){{"is-danger"}}@elseif($epoch=="uzbek"){{"is-success"}}@endif title-hero">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">{{$article['title_'.app()->getLocale()]}} <span class="tag is-primary">@lang('messages.'.$category)</span></h1>
          <h2 class="subtitle">{{$article['creation_date']->format('Y')}}—{{$article['destruction_date']->format('Y')}}</h2>
        </div>
      </div>
    </section>
    <div class="container is-clearfix">
      <div class="tile is-pulled-right is-4 is-vertical card-wrapper">
        <div class="card">
          <div class="card-image">
            <figure class="image">
              <img src="/img/{{$article['image']['file_name']}}">
          </figure>
          </div>
          <div class="card-content">
            <div class="content">
              {{$article['description_'.app()->getLocale()]}}
            </div>
          </div>
          @if($category != "individuals")
            <google-map fit-to-markers zoom="18" api-key="AIzaSyD3E1D9b-Z7ekrT3tbhl_dy8DCXuIuDDRc">
              <google-map-marker latitude="{{$article['latitude']}}" longitude="{{$article['longitude']}}" draggable="true"></google-map-marker>
            </google-map>
          @endif
        </div>
      </div>
      <section class="section">
        <div class="content main-content">
          {!!$article['text_'.app()->getLocale()]!!}
        </div>
        <div class="columns article-info">
            <div class="column is-half has-text-left">
              <small><strong class="author-name">{{$article['author']['name']}}</strong></small>
            </div>
            <div class="column is-half has-text-right">
              <small>
                <span class="icon is-small">
                  <i class="fa fa-calendar"></i>
                </span>
                {{$article['created_at']->toDateTimeString()}}
              </small>
            </div>
        </div>
      </section>
    </div>
  </article>
  <section class="section slider-section">
    @include('layouts.wowslider')
  </section>

@endsection
