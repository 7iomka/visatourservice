<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Создание и продвижение сайтов. Реклама сайтов в Яндекс Директ и Google AdWords</title>
    <meta name="keywords" content="создание и продвижение сайтов. реклама сайтов в яндекс директ" />
    <meta name="description" content="Агентство  интернет-маркетинга SEOSINTEZ. Создание сайтов любой тематики и сложности. SEO продвижение сайтов. Настройка и сопровождение рекламных кампаний в Яндекс Директ и Google AdWords" />
    <!-- <meta name=viewport content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Favicons -->
    <!-- <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="/favicon.ico"> -->
    <style>

    </style>
    <link rel="preload" href="css/main.css" as="style" onload="this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/main.css" media="all" title="no title" charset="utf-8"></noscript>
    <script>
        /*! loadCSS: load a CSS file asynchronously. [c]2016 @scottjehl, Filament Group, Inc. Licensed MIT */
        (function(w) {
            "use strict";
            /* exported loadCSS */
            var loadCSS = function(href, before, media) {
                // Arguments explained:
                // `href` [REQUIRED] is the URL for your CSS file.
                // `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
                // By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
                // `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
                var doc = w.document;
                var ss = doc.createElement("link");
                var ref;
                if (before) {
                    ref = before;
                } else {
                    var refs = (doc.body || doc.getElementsByTagName("head")[0]).childNodes;
                    ref = refs[refs.length - 1];
                }

                var sheets = doc.styleSheets;
                ss.rel = "stylesheet";
                ss.href = href;
                // temporarily set media to something inapplicable to ensure it'll fetch without blocking render
                ss.media = "only x";

                // wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
                function ready(cb) {
                    if (doc.body) {
                        return cb();
                    }
                    setTimeout(function() {
                        ready(cb);
                    });
                }
                // Inject link
                // Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
                // Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
                ready(function() {
                    ref.parentNode.insertBefore(ss, (before ? ref : ref.nextSibling));
                });
                // A method (exposed on return object for external use) that mimics onload by polling until document.styleSheets until it includes the new sheet.
                var onloadcssdefined = function(cb) {
                    var resolvedHref = ss.href;
                    var i = sheets.length;
                    while (i--) {
                        if (sheets[i].href === resolvedHref) {
                            return cb();
                        }
                    }
                    setTimeout(function() {
                        onloadcssdefined(cb);
                    });
                };

                function loadCB() {
                    if (ss.addEventListener) {
                        ss.removeEventListener("load", loadCB);
                    }
                    ss.media = media || "all";
                }

                // once loaded, set link's media back to `all` so that the stylesheet applies once it loads
                if (ss.addEventListener) {
                    ss.addEventListener("load", loadCB);
                }
                ss.onloadcssdefined = onloadcssdefined;
                onloadcssdefined(loadCB);
                return ss;
            };
            // commonjs
            if (typeof exports !== "undefined") {
                exports.loadCSS = loadCSS;
            } else {
                w.loadCSS = loadCSS;
            }
        }(typeof global !== "undefined" ? global : this));




        /* CSS rel=preload polyfill (from src/cssrelpreload.js) */
        /* CSS rel=preload polyfill. Depends on loadCSS function */
        (function(w) {
            // rel=preload support test
            if (!w.loadCSS) {
                return;
            }
            var rp = loadCSS.relpreload = {};
            rp.support = function() {
                try {
                    return w.document.createElement("link").relList.supports("preload");
                } catch (e) {}
            };

            // loop preload links and fetch using loadCSS
            rp.poly = function() {
                var links = w.document.getElementsByTagName("link");
                for (var i = 0; i < links.length; i++) {
                    var link = links[i];
                    if (link.rel === "preload" && link.getAttribute("as") === "style") {
                        w.loadCSS(link.href, link);
                        link.rel = null;
                    }
                }
            };

            // if link[rel=preload] is not supported, we must fetch the CSS manually using loadCSS
            if (!rp.support()) {
                rp.poly();
                var run = w.setInterval(rp.poly, 300);
                if (w.addEventListener) {
                    w.addEventListener("load", function() {
                        w.clearInterval(run);
                    })
                }
            }
        }(this));
    </script>

    <script></script>
    <!-- here to ensure a non-blocking load still occurs in IE and Edge, even if scripts follow loadCSS in head -->

    <script src="js/jquery-1.12.4.min.js" charset="utf-8"></script>
</head>

<body>
    <!-- Begin site-wrapper -->
    <div class="site-wrapper">

        <header class="site-header" id="home">
            <div class="container">
                <div class="row">

                    <div class="col col--4-of-12 col--m-1-of-2 header-left">
                        <a class="logo logo--large" href="/">
                            <!-- <span class="logo__img"></span> -->
                            <span class="logo__icon"></span>
                            <span class="logo__title-wrapper">
                        <span class="logo__title-part logo__title-part--first">VisaTourService</span>
                            <span class="logo__title-part logo__title-part--sep"></span>
                            <span class="logo__title-part logo__title-part--last">Федеральная сеть сервисно-визовых центров</span>
                            </span>
                        </a>
                    </div>
                    <div class="col col--4-of-12 col--m-1-of-2 header-center">
                        <div class="header-locations">
                            <div class="header-locations__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 472 472" xml:space="preserve" width="75">
                        <path style="fill: #ffba00;" d="M384,448.8c-24-24-72-78.4-72-108.8c0-40,32-72,72-72s72,32,72,72C456,370.4,408,424.8,384,448.8z   M384,292c-26.4,0-48,21.6-48,48s21.6,48,48,48s48-21.6,48-48S410.4,292,384,292z"></path>
                        <g>
                        	<path style="fill: #ffd461;" d="M336,340c0-26.4,21.6-48,48-48s48,21.6,48,48c0-40-21.6-72-48-72S336,300,336,340z"></path>
                        	<path style="fill: #ffd461;" d="M384,388c-24.8,0-44.8-18.4-48-42.4c3.2,31.2,32.8,80.8,48,103.2c15.2-23.2,44.8-72,48-103.2   C428.8,369.6,408.8,388,384,388z"></path>
                        </g>
                        <path style="fill: #ffba00;" d="M88,200.8c-24-24-72-78.4-72-108.8c0-40,32-72,72-72s72,32,72,72C160,123.2,112,176.8,88,200.8z   M40,92c0,26.4,21.6,48,48,48s48-21.6,48-48s-21.6-48-48-48S40,65.6,40,92z"></path>
                        <g>
                        	<path style="fill: #ffd461;" d="M40,92c0-26.4,21.6-48,48-48s48,21.6,48,48c0-40-21.6-72-48-72S40,52,40,92z"></path>
                        	<path style="fill: #ffd461;" d="M88,140c-24.8,0-44.8-18.4-48-42.4c3.2,31.2,32.8,80.8,48,103.2c15.2-23.2,44.8-72,48-103.2   C132.8,121.6,112.8,140,88,140z"></path>
                        </g>
                        <g>
                        	<path style="fill: #393939;" d="M384,388c-26.4,0-48-21.6-48-48s21.6-48,48-48s48,21.6,48,48S410.4,388,384,388z M384,308   c-17.6,0-32,14.4-32,32s14.4,32,32,32s32-14.4,32-32S401.6,308,384,308z"></path>
                        	<path style="fill: #2b2e38;" d="M378.4,465.6c-3.2-3.2-82.4-78.4-82.4-125.6c0-48.8,39.2-88,88-88s88,39.2,88,88   c0,47.2-79.2,122.4-82.4,125.6c-1.6,1.6-3.2,2.4-5.6,2.4S380,467.2,378.4,465.6z M312,340c0,31.2,48,84.8,72,108.8   c24-24,72-78.4,72-108.8c0-40-32-72-72-72S312,300,312,340z"></path>
                        	<path style="fill: #2b2e38;" d="M248,204c26.4,0,48,21.6,48,48s-21.6,48-48,48v-16c17.6,0,32-14.4,32-32s-14.4-32-32-32H136v-16H248   z"></path>
                        	<rect x="144" y="284" style="fill: #2b2e38;" width="80" height="16"></rect>
                        	<path style="fill: #2b2e38;" d="M88,124c17.6,0,32-14.4,32-32s-14.4-32-32-32S56,74.4,56,92S70.4,124,88,124z M40,92   c0-26.4,21.6-48,48-48s48,21.6,48,48s-21.6,48-48,48S40,118.4,40,92z"></path>
                        	<path style="fill: #2b2e38;" d="M24,332c0-26.4,21.6-48,48-48h56v16H72c-17.6,0-32,14.4-32,32s14.4,32,32,32h192v16H72   C45.6,380,24,358.4,24,332z"></path>
                        	<path style="fill: #2b2e38;" d="M82.4,217.6C79.2,214.4,0,139.2,0,92C0,43.2,39.2,4,88,4s88,39.2,88,88   c0,47.2-79.2,122.4-82.4,125.6c-1.6,1.6-3.2,2.4-5.6,2.4S84,219.2,82.4,217.6z M88,200.8c24-24,72-78.4,72-108.8c0-40-32-72-72-72   S16,52,16,92C16,123.2,64,176.8,88,200.8z"></path>
                        </g>

                        </svg>
                            </div>
                            <div class="header-locations__content">
                                <h3 class="header-locations__slogan">Более <strong>25 офисов</strong> <br>в городах РФ рядом с Вами</h3>
                                <div class="header-locations__action"><a href="#!" class="header-locations__action-link">Показать все офисы</a></div>
                                <div class="header-locations__data header-data">
                                    <li class="header-data__item header-data__item--geo">
                                        <div class="header-data__tooltip hidden">
                                            <div class="drop-tooltip">
                                                <p>Мы угадали<br>ваш регион?</p>
                                                <div class="drop-tooltip__nav"><button class="btn btn--x-small btn--yellow header-data__geo-confirm waves-effect waves-circle waves-float">Да</button> <button data-remodal-target="change_city" class="btn btn--x-small btn--yellow header-data__geo-decline waves-effect waves-circle waves-float">Нет</button></div>
                                            </div>
                                        </div>

                                        <div class="header-data__item-content">
                                            <div class="your-city">Ваш город: </div>
                                            <div class="header-data__item-content-action">
                                                <a href="#" data-remodal-target="change_city" class="header-data__link header-data__geo"><i class="icon icon--pinpoint header__icon"></i><span>Новосибирск</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header-data__item header-data__item--offices">
                                        <div class="header-data__item-content">
                                            <div class="cite-offices">Офисы в Вашем городе: </div>
                                            <div class="header-data__item-content-action">
                                                <a href="#" data-remodal-target="change_city" class="header-data__link header-data__geo header-data__link header-data__geo--office"><i class="icon icon--pinpoint header__icon"></i><span>ул. Горького д. 56а, оф.507</span></a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col--4-of-12 col--m-1-of-2 header-right">
                      <div class="header-data-wrapper">
                            <!-- begin header-data  (main data )-->
                            <ul class="header-data header-data--phones" >

                                <li class="header-data__item">
                                    <div class="header-data__item-phones">
                                        <div class="header-data__item-phone">
                                            <i class="icon icon--phone_number header__icon" style="color: #193dff;"></i>
                                            <a href="tel:89237771166" class="header-data__link header-data__phone" style=" color:#193dff; ">8-923-777-11-66</a> </div>
                                        <div class="header-data__item-phone"><i class="icon icon--phone_number header__icon"></i><a href="tel:88002508777" class="header-data__link header-data__phone">8-800-250-87-77</a></div>
                                    </div>
                                </li>
                            </ul>
                            <!-- end header-data (office data) -->
                            <div class="header-office">
                                <div class="header-office__days-prefix">График работы:</div>

                                <div class="header-office__days-outer"><div class="header-office__days-wrapper">
                                    <div class="header-office__adress-days">Пн-Пт,</div>
                                    <div class="header-office__adress-hourds">09<sup>00</sup>-18<sup>00</sup></div>
                                </div><div class="header-office__days-wrapper" style=" margin-right: 0; ">
                                    <div class="header-office__adress-days">Пн-Пт,</div>
                                    <div class="header-office__adress-hourds">09<sup>00</sup>-18<sup>00</sup></div>
                                </div></div>


                            <div class="header-office__adress-moscow"><div style=" font-size: 14px; ">Наш главный офис в Москве: </div><div style=" font-size: 16px; ">ул. Шухова 14, стр.9</div></div></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="color-bar"></div>

            <!-- Menu-->
            <div id="header-nav">
                <div class="container">
                    <!-- Small screen menu button -->
                    <div id="hamburger-icon" class="hamburger">
                        <div class="icon"></div>
                        <div class="hamburger-text">Меню</div>
                    </div>
                    <!-- /Small screen menu button -->

                    <!-- Small screen logo in menu -->
                    <div class="small-logo">
                        <a href="/" class="small-logo-link">
                            <span class="logo__title">
                        <!-- VisaTourService -->
                      </span>
                        </a>
                    </div>
                    <!-- /Small screen logo in menu -->

                    <!-- Menu Items -->
                    <nav class="menu" id="menu" role="navigation">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <div class="menu__item-inner"><a class="menu__link" href="#!">Главная</a><span class="menu__item-icon icon icon--arrow-right--flat icon--mobile-arrow"></span>
                                </div>
                                <ul class="submenu" style="display: none;">
                                    <li class="submenu__item">
                                        <a class="submenu__link" href="#!">О компании</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a class="submenu__link" href="#!">Прайс-лист</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a class="submenu__link" href="/franchising.php">Франчайзинг</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu__item"><a class="menu__link" href="#!">Краткосрочные визы</a></li>
                            <li class="menu__item"><a class="menu__link" href="#!">Долгосрочные визы</a></li>

                            <li class="menu__item">
                                <div class="menu__item-inner"><a class="menu__link" href="#!">Услуги</a><span class="menu__item-icon icon icon--arrow-right--flat icon--mobile-arrow"></span>
                                </div>
                                <ul class="submenu" style="display: none;">
                                    <li class="submenu__item">
                                        <a class="submenu__link" href="#!">Оформление загранпаспортов</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a class="submenu__link" href="#!">Приглашения для иностранцев в РФ</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a class="submenu__link" href="#!">Бюро переводов</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a class="submenu__link" href="#!">Страхование для визы онлайн</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu__item"><a class="menu__link" href="#!">Оформление визы онлайн</a></li>
                            <li class="menu__item"><a class="menu__link" href="#!">Горящие туры</a></li>
                            <li class="menu__item"><a class="menu__link" href="/news.php">Акции и новости</a></li>
                            <li class="menu__item menu__item--last"><a class="menu__link" href="/contacts.php">Контакты</a></li>
                        </ul>
                        <!-- <button class="menu__more btn btn--auto-width btn--yellow btn--no-ripples" count="1"><span></span><span class="menu__more-icon icon icon--arrow-right--flat"></span></button>
                    <ul class='hidden-links hidden'></ul> -->
                    </nav>
                    <!-- /Menu Items -->
                </div>
            </div>
            <!-- /Menu -->
        </header>
