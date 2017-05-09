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
    
    <!-- Import element -->
    <link rel="import" href="/bower_components/google-map/google-map.html"> 
    <link rel="import" href="/bower_components/google-streetview-pano/google-streetview-pano.html"> 
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
	        <i class="fa fa-github"></i>
	      </span>
	    </a>
	    <a class="nav-item">
	      <span class="icon">
	        <i class="fa fa-linkedin"></i>
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
	      Главная
	    </a>
	    <a class="nav-item">
	      О проекте
	    </a>
	    <a class="nav-item">
	      Статьи
	    </a>

	    <div class="nav-item">
	      <div class="field is-grouped">
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
	      </div>
	    </div>
	  </div>
	</nav>

	<article>
		<section class="hero is-primary">
			<div class="hero-body">
				<div class="container">
					<h1 class="title">Военный Спасо-Преображенский собор (Ташкент) <span class="tag is-danger">взорван</span></h1>
					<h2 class="subtitle">1888—1930</h2>
				</div>
			</div>
		</section>
		<google-streetview-pano
		  api-key="AIzaSyD3E1D9b-Z7ekrT3tbhl_dy8DCXuIuDDRc"
		  pano-id="F:-UyEV2Q49K9Q/VyB0-_ylNQI/AAAAAAAF9Aw/DsvZZH6-leA15nAILTxj7kUem02mrC_IQCLIB"
		  heading="282"
		  pitch="0"
		  zoom="0"
		  disable-auto-pan>
		</google-streetview-pano>
		<section class="section">
			<div class="container">
				<div class="tile is-pulled-right is-4 is-vertical card-margin">
					<div class="card">
					  <div class="card-image">
					    <figure class="image">
						    <img src="/static/img/188082dreamblur.jpg">
						</figure>
					  </div>
					  <div class="card-content">
					    <div class="content">
					      <b>Спасо-Преображенский собор</b> (Ташкент) — снесённый православный собор Ташкентской и Узбекистанской епархии Среднеазиатского митрополичьего округа Русской православной церкви.
					    </div>
					  </div>
					  
					</div>
				</div>

				<section class="section">
					<h3 class="title is-spaced pobeda-bold">Описание и история</h3>
				
					<p>Был расположен на центральной площади в Ташкенте, получившей вследствие этого наименование Соборная площадь. Престольный праздник — 11 июля 1988 года.</p>

					<p>Здание собора было сложено из серо-жёлтого жжённого кирпича и не было ни оштукатурено, ни покрашено (побелено), как и многие другие значимые, в первую очередь административные, здания города — так называемый туркестанский стиль. Здание собора, выполненное в византийском стиле, было трёхпрестольное: главный — в память Преображения Господня, северный — во имя Св. Благоверного князя Александра Невского и Св. Равноапостольной Мироносицы Марии Магдалины, южный — во имя Равноапостольного князя Владимира и Св. Николая Чудотворца. Иконостасы всех трёх алтарей с иконами исполнены академиком М. О. Микешиным. Внутренность собора поражала современников своими лепными работами — резьбой по ганчу (сырому алебастру), выполненной местными мастерами резчиками, сами же стены обращали на себя внимание многочисленными надписями из текста Священного Писания. Вмещал собор до 1500 человек. Трёхъярусная колокольня была устроена отдельно от собора.</p>

					<p>В соборе обращали на себя внимание три иконы с вызолоченными ризами — великомученика Пантелеимона, Иверской иконы Божией Матери и Нерукотворенного Спаса. Первая из них сооружена усердием прихожан в память бракосочетания Российского Императора Александра III, причём стоимость одной ризы достигла суммы в 2 500 рублей. Икона Нерукотворённого Спаса — дар бывшего Туркестанского Генерал-губернатора генерала Гродекова, стоимостью около 1000 рублей.</p>

					<p>В 1871 году был составлен первый эскиз большого Ташкентского собора архитектором Розановым, разработанный в подробностях военными инженерами. Выработанный проект был утверждён, но технические расчёты прочности и устойчивости здания, переданные для проверки профессору генералу Паукеру, показали, что по утверждённому проекту вполне прочное здание возвести нельзя. Постройка затянулась до 1882 г., когда приказом генерал-губернатора снова был учреждён хозяйственный комитет, тотчас же приступивший к постройке и израсходовавший на сооружение собора до 1886 г. — 160 198 руб. Вся же стоимость собора обошлась в 211 359 руб. Деньги на постройку собора собирались в том числе и по подписке среди жителей города.</p>

					<p>В правом приделе южной стены находилась могила первого Туркестанского Генерал-губернатора генерал-адъютанта Константина Петровича фон Кауфмана 1-го. Над могилой устроена железная решётка, внутри которой две мраморных плиты: одна на могиле с надписью рельефными буквами — «Константин Петрович фон-Кауфман, родился 19-го февраля 1818 г., скончался 3-го мая 1882 г. Мир праху твоему, славный деятель»; другая на стене с надписью — «Генерал-адъютант, инженер-генерал Константин Петрович фон-Кауфман 1-й, кавалер Св. Георгия 2 ст., Св. Владимира 1-й ст., Св. Александра Невского, Белого Орла, Св. Анны 1-й ст., Св. Станислава 1-й ст. и друг. Российских и иностранных орденов; первый Туркестанский генерал-губернатор и Командующий войсками Туркестанского военного округа 1867—1882; покоритель Самарканда 1868 г., Хивинского ханства 1873 г. и Кокандского ханства 1875 г. Устроитель Туркестанского края».</p>

					<p>В этом же приделе ещё находилась могила сподвижника фон Кауфмана — командующего войсками Туркестанского военного округа Николая Александровича Иванова (умер 18 мая 1904). У северной стены левого придела находилась могила первого настоятеля собора протоиерея Андрея Евграфовича Малова (умер 3 апреля 1899).</p>

					<p>В 1935 году храм по решению властей был взорван. По свидетельствам очевидцев, после неудачных попыток взорвать собор зарядами, подложенными под фундамент, храм угрожал обрушением, и его дальнейшее разрушение производилось путём расстрела здания собора из артиллерийского орудия. На месте собора вплоть до середины 1960-х годов была клумба с цветами.</p>

					<div class="columns">
						<div class="column is-half has-text-left">
							<small><b>ПАК ЕВГЕНИЙ</b></small>
						</div>
						<div class="column is-half has-text-right">
							<small>23:09 - 1 Янв 2017г.</small>
						</div>
					</div>
				</section>

			</div>
		</section>

		<google-map fit-to-markers zoom="18" api-key="AIzaSyD3E1D9b-Z7ekrT3tbhl_dy8DCXuIuDDRc">
			<google-map-marker latitude="41.315118" longitude="69.267266" draggable="true"></google-map-marker>
		</google-map>
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
				if($('.nav-toggle').hasClass('is-active')) {
					$('.nav-menu').removeClass('is-active');
					$('.nav-toggle').removeClass('is-active');
				} else {
					$('.nav-menu').addClass('is-active');
					$('.nav-toggle').addClass('is-active');
				}
			});
		});
	</script>
</body>
</html>
