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
      @for($i = 0; $i < count($images); $i++)
        @if($i%4==0)
          <div class="columns has-text-centered">
        @endif
            <div class="column is-3-tablet">
                <a href="/img/gallery/{{$images[$i]['file_name']}}" data-fancybox="gallery" data-caption="{{$images[$i]['description_'.app()->getLocale()]}}">
                	   <img src="/data0/images/{{$images[$i]['file_name']}}" alt="{{$images[$i]['description_'.app()->getLocale()]}}" />
                </a>
            </div>
        @if($i%4==3 or $i==(count($images)-1))
          </div>
        @endif
      @endfor
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
