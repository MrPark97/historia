<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  href="css/bulma.css" type="text/css" rel="stylesheet">
        <link  href="css/index.css" type="text/css" rel="stylesheet">

        <title>{{config()->get('app.name')}}</title>
    </head>
    <body>
        <div id="index" class="tile is-ancestor is-hidden-mobile">
            <a href="{{config()->get('app.proto')}}imperial.{{config()->get('app.hostname')}}/{{app()->getLocale()}}" class="tile is-4 is-parent">
                <div id="imperial" class="tile is-child">
                    <div class="title">
                        <h1>ТАШКЕНТЪ</h1>
                        <h2>1865-1917</h2>
                    </div>
                    <div class="over"></div>
                </div>
            </a>

            <a href="{{config()->get('app.proto')}}soviet.{{config()->get('app.hostname')}}/{{app()->getLocale()}}" class="tile is-4 is-parent">
                <div id="soviet" class="tile is-child">
                    <div class="title">
                        <h1>ТАШКЕНТ</h1>
                        <h2>1917-1991</h2>
                    </div>
                    <div class="over"></div>
                </div>
            </a>

            <a href="{{config()->get('app.proto')}}uzbek.{{config()->get('app.hostname')}}/{{app()->getLocale()}}" class="tile is-4 is-parent">
                <div id="uzbek" class="tile is-child">
                    <div class="title">
                        <h1>TOSHKENT</h1>
                        <h2>1991-2017</h2>
                    </div>
                    <div class="over"></div>
                </div>
            </a>
        </div>

        <div id="index" class="tile is-ancestor is-vertical is-hidden-tablet">
            <a href="{{config()->get('app.proto')}}imperial.{{config()->get('app.hostname')}}/{{app()->getLocale()}}" class="tile is-4 is-parent">
                <div id="imperial" class="tile is-child">
                    <div class="title">
                        <h1>ТАШКЕНТЪ</h1>
                        <h2>1865-1917</h2>
                    </div>
                    <div class="over">
                    </div>
                </div>
            </a>

            <a href="{{config()->get('app.proto')}}soviet.{{config()->get('app.hostname')}}/{{app()->getLocale()}}" class="tile is-4 is-parent">
                <div id="soviet" class="tile is-child">
                    <div class="title">
                        <h1>ТАШКЕНТ</h1>
                        <h2>1917-1991</h2>
                    </div>
                    <div class="over">
                    </div>
                </div>
            </a>

            <a href="{{config()->get('app.proto')}}uzbek.{{config()->get('app.hostname')}}/{{app()->getLocale()}}" class="tile is-4 is-parent">
                <div id="uzbek" class="tile is-child">
                    <div class="title">
                        <h1>TOSHKENT</h1>
                        <h2>1991-2017</h2>
                    </div>
                    <div class="over">
                    </div>
                </div>
            </a>
        </div>
    </body>
</html>
