  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="/engine0/style.css" />
  <script type="text/javascript" src="/engine0/jquery.js"></script>
  <!-- End WOWSlider.com HEAD section -->
  <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
  <div id="wowslider-container0">
  <div class="ws_images"><ul>
    @foreach($article['images'] as $i=>$image)
      <li><img src="/data0/images/{{$image['file_name']}}" alt="{{$image['description_'.app()->getLocale()]}}" title="{{$image['description_'.app()->getLocale()]}}" id="wows0_{{$i}}"/></li>
    @endforeach
  </ul></div>
  <div class="ws_bullets"><div>
    @foreach($article['images'] as $i=>$image)
      <a href="#" title="tashkent-25dreamblur"><span><img src="/data0/tooltips/{{$image['file_name']}}" alt="{{$image['file_name']}}"/>{{($i+1)}}</span></a>
    @endforeach
  </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="#">slider</a> by WOWSlider.com v8.7</div>
  <div class="ws_shadow"></div>
  </div>
  <script type="text/javascript" src="/engine0/wowslider.js"></script>
  <script type="text/javascript" src="/engine0/script.js"></script>
  <!-- End WOWSlider.com BODY section -->

  </html>
