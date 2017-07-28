@extends('layouts.master')


@section('content')
  <section class="hero is-bold is-primary title-hero">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">@lang('messages.gallery')</h1>
        <h2 class="subtitle"></h2>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="columns has-text-centered">
        @foreach($images as $image)
          <div class="column">
              <a href="/img/gallery/{{$image['file_name']}}" data-fancybox="gallery" data-caption="{{$image['description_'.app()->getLocale()]}}">
              	   <img src="/img/thumbnails/{{$image['file_name']}}" alt="{{$image['description_'.app()->getLocale()]}}" />
              </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <script>
    $(document).ready(function() {
      $("[data-fancybox]").fancybox({

        lang : '{{app()->getLocale()}}',
        i18n : {
          'ru' : {
              CLOSE       : 'Закрыть',
              NEXT        : 'Следующий',
              PREV        : 'Предыдущий',
              ERROR       : 'Запрошенный контент не может быть загружен. <br/> Пожалуйста, повторите попытку позже.',
              PLAY_START  : 'Начать слайд-шоу',
              PLAY_STOP   : 'Приостановить слайд-шоу',
              FULL_SCREEN : 'На весь экран',
              THUMBS      : 'Миниатюры'
          },
          'uz' : {
              CLOSE       : 'Yopish',
              NEXT        : 'Keyingisi',
              PREV        : 'Oldingisi',
              ERROR       : 'So\'ralgan tarkibni yuklab bo\'lmaydi. <br/> Iltimos, keyinroq urinib ko\'ring.',
              PLAY_START  : 'Slideshowni boshlash',
              PLAY_STOP   : 'Slideshowni toxtatish',
              FULL_SCREEN : 'To\'liq ekran',
              THUMBS      : 'Kichik rasmlar'
          }
        }

      });
    });
  </script>
@endsection
