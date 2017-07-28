@extends('layouts.master')


@section('content')
  <article>
    <section class="hero is-primary is-bold">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            @lang('messages.about')
          </h1>
          <h2 class="subtitle">
            2017-...
          </h2>
        </div>
      </div>
    </section>
    <div class="container">
      <section class="section">
          <h3 class="title">@lang('messages.about_project')</h3>
          <div class="content">
            <blockquote>"@lang('messages.about_quote')"<br /><small><strong>- @lang('messages.Goethe')</strong></small></blockquote>

            <p>
              @lang('messages.about_text')
            </p>
            {{-- <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p> --}}
          </div>
      </section>
      <hr />
      <section class="section">
          <h3 class="title">@lang('messages.our_team')</h3>
        <div class="columns">
          {{-- <div class="column is-3-desktop is-6-tablet-only is-12-mobile">
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
          </div> --}}

          <div class="column is-3-desktop is-6-tablet-only is-12-mobile">
            <div class="card">
              <div class="card-image">
                <figure class="image is-square">
                  <img src="/img/MrPark.jpg" alt="Image">
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
                  @lang('messages.mrpark_description') <a>@msu</a> <a>@tpcit</a>.
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
            <p class="heading"><img src="/img/Lomonosov MSU logo.png"></p>
            <p class="title"><a href="http://msu.uz/">Lomonosov MSU Tashkent branch</a></p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading"><img src="/img/tpcit.png"></p>
            <p class="title"><a href="http://tpkit.uz/">TPCIT</a></p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading"><img src="/img/uzbekistan-brand-logo-tourism.jpg"></p>
            <p class="title"><a href="https://en.wikipedia.org/wiki/Uzbekistan">Uzbekistan</a></p>
          </div>
        </div>

      </nav>
    </section>
  </article>
@endsection
