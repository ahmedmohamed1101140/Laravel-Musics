<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Music App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background: https://s3.amazonaws.com/enterprise-multitenant.3scale.net.3scale.net/musixmatch/2016/12/05/bg-dev-eb768108c261b462.svg?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIRYLTWBQ37ZNGBZA%2F20180907%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20180907T185319Z&X-Amz-Expires=3600&X-Amz-SignedHeaders=host&X-Amz-Signature=5fe50980faad70e7a7e8a59723fd2c3defd2d74e49a7f98e0459b322d35e391a;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 54px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" style="margin-top: 100px;" src="https://dzapk.com/images/2017/12/04/3343/musixmatch-lyrics-premium-v7-0-0-1-apk_1.jpg?v=1512350552" alt="" width="72" height="72">
                    <h2>Laravel Music App</h2>
                    <p class="lead">Below is a Simple example for web Speech App, Type what you want and choose from different accents, also you can login and try more cool features about music lyrics Have Fun </p>
                </div>

                <div class="links">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                <form class="mb-5">
                                    <div class="form-group">
                                        <textarea name="" id="text-input" class="form-control form-control-lg" placeholder="Type anything..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="rate">Rate</label>
                                        <div id="rate-value" class="badge badge-primary float-right">1</div>
                                        <input type="range" id="rate" class="custom-range" min="0.5" max="2" value="1" step="0.1">
                                    </div>
                                    <div class="form-group">
                                        <label for="pitch">Pitch</label>
                                        <div id="pitch-value" class="badge badge-primary float-right">1</div>
                                        <input type="range" id="pitch" class="custom-range" min="0" max="2" value="1" step="0.1">
                                    </div>
                                    <div class="form-group">
                                        <select id="voice-select" class="form-control form-control-lg"><option data-lang="en-US" data-name="Microsoft David Desktop - English (United States)">Microsoft David Desktop - English (United States)(en-US)</option><option data-lang="en-US" data-name="Microsoft Zira Desktop - English (United States)">Microsoft Zira Desktop - English (United States)(en-US)</option><option data-lang="de-DE" data-name="Google Deutsch">Google Deutsch(de-DE)</option><option data-lang="en-US" data-name="Google US English">Google US English(en-US)</option><option data-lang="en-GB" data-name="Google UK English Female">Google UK English Female(en-GB)</option><option data-lang="en-GB" data-name="Google UK English Male">Google UK English Male(en-GB)</option><option data-lang="es-ES" data-name="Google español">Google español(es-ES)</option><option data-lang="es-US" data-name="Google español de Estados Unidos">Google español de Estados Unidos(es-US)</option><option data-lang="fr-FR" data-name="Google français">Google français(fr-FR)</option><option data-lang="hi-IN" data-name="Google हिन्दी">Google हिन्दी(hi-IN)</option><option data-lang="id-ID" data-name="Google Bahasa Indonesia">Google Bahasa Indonesia(id-ID)</option><option data-lang="it-IT" data-name="Google italiano">Google italiano(it-IT)</option><option data-lang="ja-JP" data-name="Google 日本語">Google 日本語(ja-JP)</option><option data-lang="ko-KR" data-name="Google 한국의">Google 한국의(ko-KR)</option><option data-lang="nl-NL" data-name="Google Nederlands">Google Nederlands(nl-NL)</option><option data-lang="pl-PL" data-name="Google polski">Google polski(pl-PL)</option><option data-lang="pt-BR" data-name="Google português do Brasil">Google português do Brasil(pt-BR)</option><option data-lang="ru-RU" data-name="Google русский">Google русский(ru-RU)</option><option data-lang="zh-CN" data-name="Google&nbsp;普通话（中国大陆）">Google&nbsp;普通话（中国大陆）(zh-CN)</option><option data-lang="zh-HK" data-name="Google&nbsp;粤語（香港）">Google&nbsp;粤語（香港）(zh-HK)</option><option data-lang="zh-TW" data-name="Google 國語（臺灣）">Google 國語（臺灣）(zh-TW)</option></select>
                                    </div>
                                    <button class="btn btn-primary btn-lg btn-block">Speak It</button>
                                </form>

                                <p class="text-secondary"> Note: This app uses the <a href="https://developer.mozilla.org/en-US/docs/Web/API/Web_Speech_API">Web Speech API</a> which is experimental and may not fully work in some versions of certain browsers
                                you can view the project code at My <a href="https://github.com/ahmedmohamed1101140/Laravel-Musics">Github</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</html>
