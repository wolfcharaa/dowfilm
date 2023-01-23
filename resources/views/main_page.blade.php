<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="canonical" href="https://w139.zona.plus/movies">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <title>zona.plus (ex zona.mobi) - смотреть фильмы 2023 онлайн, смотреть новинки в хорошем качестве - Страница
        2</title>
    <meta name="description"
          content="Смотреть новинки 2023 года в хорошем качестве, лучшие фильмы 2023 онлайн - zona.plus (ex zona.mobi) - Страница 2"/>
    <link rel="stylesheet" type="text/css" href="dist/css/main_page.css">
    <!--link rel="stylesheet" type="text/css" href="/css/player.css?1672313222" -->


    <link rel="prev" href="/movies">
    <link rel="next" href="/movies?page=3">

    <script>
        window._app = {
            version: '1672313222',
            isMobile: false
        };
    </script>

    <script type="text/javascript">
        // IE9 fix
        if (!window.console) {
            var console = {
                log: function () {
                },
                warn: function () {
                },
                error: function () {
                },
                time: function () {
                },
                timeEnd: function () {
                }
            }
        }
    </script>

</head>
<body>

<div class="l-container">
    <header class="header">
        <div class="l-wrap">
            <nav class="header-nav">
                <a class="js-index header-nav-item is-index " title="На главную zona.plus (ex zona.mobi)"
                   href="/">Zona</a>
                <a class="js-movies header-nav-item is-selected" title="Все фильмы на zona.plus (ex zona.mobi)"
                   href="/movies">Фильмы</a>
                <a class="js-tvseries header-nav-item " title="Все сериалы на zona.plus (ex zona.mobi)"
                   href="/tvseries">Сериалы</a></nav>
            <div class="js-module-search">
                <label class="header-search-btn" for="search-input" tabindex="0" title="Поиск"></label>
                <div class="header-search-line">
                    <form class="header-search-form" action="/search-form">
                        <span class="header-back-btn" title="Назад"></span>
                        <input autocomplete="off" name="query" placeholder="Поиск фильмов и сериалов" value=""
                               class="header-search-line-input" id="search-input"
                               placeholder="Поиск фильмов и сериалов">
                        <span class="header-search-line-submit" title="Искать" type="submit"></span>
                        <ul class="suggest">
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <main class="l-content">
        <div class="l-wrap">
            <div class="js-filters">

                <form class="filters js-filters-form" action="/movies/filter/" method="get">
                    <div class="filter-items">
    <span class="filters-item">
        <select class="filters-item-select " id="filter-id-genreId" name="genre">
            <option value="0" selected="selected" label="Жанры">Жанры</option>
            <!--          Цикл для жанров-->
            @foreach($genres as $genre)
                <option value="genre-{{ $genre->id }}" label="{{$genre->name}}">{{ $genre->name }}</option>
            @endforeach
            <!--Конец цикла для жанров-->
        </select>
    </span>
                        <span class="filters-item">
                            <select class="filters-item-select " id="filter-id-year" name="year">
                                <option value="0" selected="selected" label="Год">Год</option>
                                <!--          Цикл для года-->
                                @foreach($years as $year)
                                    <option value="year-{{ $year }}" label="{{$year}}">{{ $year }}</option>
                                @endforeach
                                <!--          Конец цикла для года-->
      </select>
          </span>

                        <span class="filters-item">
      <select class="filters-item-select " id="filter-id-country_id" name="country">


        <option value="0" selected="selected" label="Страна">Страна</option>
          <!--          Цикл для стран-->
          @foreach($countries as $country)
              <option value="country-{{ $country->id }}" label="{{ $country->name }}">{{ $country->name }}</option>
          @endforeach
          <!--          Конец цикла для странн-->
                        </select>

          </span>

                        <span class="filters-item">
      <select class="filters-item-select " id="filter-id-rating" name="rating">
        <option value="0" selected="selected" label="Рейтинг">Рейтинг</option>
          <!--          цикл для рейтинга-->
          @foreach($rates as $value => $rate)
              <option value="rating-{{ $value }}" label="{{ $rate }}">{{ $rate }}</option>
          @endforeach
          <!--          конец цикла для рейтинга-->
                </select>
          </span>

                        <span class="filters-item">
      <select class="filters-item-select " id="filter-id-sort" name="sort">
        <option value="0" selected="selected" label="По популярности">По популярности</option>
        <option value="sort-rating" label="По рейтингу">По рейтингу</option>
        <option value="sort-date" label="По дате выхода">По дате выхода</option>
      </select>
          </span>
                    </div>
                </form>

            </div>
            <div class="results-wrap">
                <h1 class="results-top-title ">Популярные фильмы </h1>
                <div class="hide js-pageInfo" data-current="2" data-total="918"></div>
                <ul class="results">

                    <!--Начало ввода цикла одного фильма-->
                    @foreach($films as $film)
                    <li class="results-item-wrap" itemscope itemtype="http://schema.org/Movie">
                        <meta itemprop="image" content="{{ $film->picture->low }}">
                        <!--Ссылка на отдельную страницу фильма-->
                        <a class="results-item" itemprop="url" href="/movies/para-na-prazdniki"
                           title="{{ $film->name }}">
                            <div class="result-item-preview-wrap">
                                <div class="result-item-preview fadeIn animated "
                                     style="background-image: url({{ $film->picture->low }});"></div>
                            </div>
                            <div class="result-item-footer">
                                <div class="results-item-title" itemprop="name">{{ $film->name }}</div>
                                <span class="results-item-rating">
                        <span>{{ $film->star }}</span>
                    </span>
                                <span class="results-item-year">{{ $film->year }}</span>
                            </div>
                        </a>
                    </li>
                    @endforeach
                    <!--Конец ввода цикла одного фильма-->


                    <li class="spacer"></li>
                    <li class="spacer"></li>
                    <li class="spacer"></li>
                    <li class="spacer"></li>
                    <li class="spacer"></li>
                    <li class="spacer"></li>
                    <li class="spacer"></li>
                    <li class="spacer"></li>
                    <li class="spacer"></li>
                    <li class="spacer"></li>
                    <li class="spacer"></li>
                </ul>
                <div class="loading js-scroll-loading results-loading hide"></div>
            </div>
        </div>
    </main>
    <div class="l-overlay hide"></div>
    <footer class="footer">
        <div class="wrap">
            <p class="footer-thanks">Спасибо, что делитесь с друзьями</p>
            <div id="footer-share" data-services="vkontakte,odnoklassniki,gplus,twitter,moikrug" data-counter=""></div>
            <script src="//yastatic.net/share2/share.js"></script>
            <div class="support-mail">Почта для связи: <a target="_blank"
                                                          href="mailto:admin@zona.plus">admin@zona.plus</a></div>
        </div>
    </footer>
</div>

<script src="dist/js/main_page.js"></script>
<div class="counters">
    <!--LiveInternet counter-->
    <script type="text/javascript"
            async>document.write("<a href='//www.liveinternet.ru/click' target=_blank><img style='display: none' src='//counter.yadro.ru/hit?t44.6;r" + escape(document.referrer) + ((typeof (screen) == "undefined") ? "" : ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ? screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) + ";h" + escape(document.title.substring(0, 80)) + ";" + Math.random() + "' border=0 width=31 height=31 alt='' title='LiveInternet'><\/a>")</script>
    <!--/LiveInternet-->
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(33362628, "init", {
        id: 33362628,
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true,
        trackHash: true
    }); </script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/33362628" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
        a.onload = function () {
            i.loadGa = true;
        }
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-27424010-3', 'auto');
    ga('send', 'pageview');

</script>
<div id="movie_video"></div>
<script type="text/javascript" src="https://vak345.com/s.js?v=78023778e43f775b9eb36782cea3ea8c" async></script>
</body>
</html>
