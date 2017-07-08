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
            <div class="container" style=" margin-bottom: 25px; ">
                <div class="row">

                    <div class="col col--4-of-12 col--m-1-of-2 header-left col--am">
                        <a class="logo logo--large" href="/">
                            <!-- <span class="logo__img"></span> -->
                            <span class="logo__icon"></span>
                            <span class="logo__title-wrapper">
                      <span class="logo__title-part logo__title-part--first">VisaTourService</span>
                            <span class="logo__title-part logo__title-part--sep"></span>
                            <span class="logo__title-part logo__title-part--last">Федеральная сеть <br>сервисно-визовых центров</span>
                            </span>
                        </a>
                    </div>
                    <div class="col col--4-of-12 col--m-1-of-2 header-center col--am">
                        <div class="header-locations">
                            <div class="header-locations__block header-locations__block--top">
                                <div class="header-locations__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 486.3 486.3" xml:space="preserve" width="65">
                        <g>
                        <path style="fill: #80bb34;" d="M243.15,0v104.4c44.11,0,80,35.88,80,80c0,44.11-35.89,80-80,80v221.9l146.43-184.1   c26.29-33.25,40.19-73.21,40.19-115.58C429.77,83.72,346.05,0,243.15,0z"></path>
                        <path style="fill: #ffffff;" d="M323.15,184.4c0-44.12-35.89-80-80-80v160C287.26,264.4,323.15,228.51,323.15,184.4z"></path>
                        <path style="fill: #00a01a;" d="M163.15,184.4c0-44.12,35.89-80,80-80V0C140.25,0,56.53,83.72,56.53,186.62   c0,42.37,13.9,82.33,40.23,115.62L243.15,486.3V264.4C199.04,264.4,163.15,228.51,163.15,184.4z"></path>
                        <path style="fill:#FFFFFF;" d="M163.15,184.4c0,44.11,35.89,80,80,80v-160C199.04,104.4,163.15,140.28,163.15,184.4z"></path>
                        </g>
                          </svg>
                                </div>
                                <div class="header-locations__content">
                                    <h3 class="header-locations__slogan">Более <strong>25 офисов</strong> <br>в городах РФ рядом с Вами</h3>
                                    <div class="header-locations__action"><a href="#!" class="header-locations__action-link">Показать все офисы</a></div>

                                </div>

                            </div>
                            <div class="header-locations__block header-locations__block--bottom">
                                <div class="header-locations__icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 440 440" style="" xml:space="preserve" width="70">
                                <g id="XMLID_1338_">
                                <g id="XMLID_1339_">
                                  <rect id="XMLID_1340_" x="40" y="405" style="fill:#91DC5A;" width="360" height="35"></rect>
                                </g>
                                <g id="XMLID_1341_">
                                  <rect id="XMLID_1342_" x="115" style="fill:#006C70;" width="210" height="440"></rect>
                                </g>
                                <g id="XMLID_1343_">
                                  <rect id="XMLID_1344_" x="160" style="fill:#00A1A7;" width="120" height="440"></rect>
                                </g>
                                <g id="XMLID_1345_">
                                  <rect id="XMLID_1346_" x="160" y="370" style="fill: #00D7DF;" width="120" height="70"></rect>
                                </g>
                                <g id="XMLID_1347_">
                                  <g id="XMLID_1348_">
                                    <rect id="XMLID_1349_" x="145" y="60" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                  <g id="XMLID_1350_">
                                    <rect id="XMLID_1351_" x="205" y="60" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                  <g id="XMLID_1352_">
                                    <rect id="XMLID_1353_" x="265" y="60" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                </g>
                                <g id="XMLID_1354_">
                                  <g id="XMLID_1355_">
                                    <rect id="XMLID_1356_" x="145" y="130" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                  <g id="XMLID_1357_">
                                    <rect id="XMLID_1358_" x="205" y="130" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                  <g id="XMLID_1359_">
                                    <rect id="XMLID_1360_" x="265" y="130" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                </g>
                                <g id="XMLID_1361_">
                                  <g id="XMLID_1362_">
                                    <rect id="XMLID_1363_" x="145" y="200" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                  <g id="XMLID_1364_">
                                    <rect id="XMLID_1365_" x="205" y="200" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                  <g id="XMLID_1366_">
                                    <rect id="XMLID_1367_" x="265" y="200" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                </g>
                                <g id="XMLID_1368_">
                                  <g id="XMLID_1369_">
                                    <rect id="XMLID_1370_" x="145" y="270" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                  <g id="XMLID_1371_">
                                    <rect id="XMLID_1372_" x="205" y="270" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                  <g id="XMLID_1373_">
                                    <rect id="XMLID_1374_" x="265" y="270" style="fill:#FFFFFF;" width="30" height="40"></rect>
                                  </g>
                                </g>
                                <g id="XMLID_1375_">
                                  <g id="XMLID_1376_">
                                    <rect id="XMLID_1377_" x="205" y="370" style="fill:#FFFFFF;" width="30" height="70"></rect>
                                  </g>
                                </g>
                                </g>
                                </svg>
                                </div>
                                <div class="header-locations__content">



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
                                                <div class="header-data__item-content-action header-data__item-content-action--city">
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
                    </div>

                    <div class="col col--4-of-12 col--m-1-of-2 header-right col--ab">
                        <div class="header-data-wrapper">
                            <!-- begin header-data  (main data )-->
                            <ul class="header-data header-data--phones">

                                <li class="header-data__item">
                                    <div class="header-data__item-phones">
                                        <div class="header-data__item-phone">
                                            <i class="icon icon--phone_number header__icon" style="color: #0558b2;"></i>
                                            <a href="tel:89237771166" class="header-data__link header-data__phone" style=" color:#0558b2; ">8-923-777-11-66</a> </div>
                                        <div class="header-data__item-phone"><i class="icon icon--phone_number header__icon"></i><a href="tel:88002508777" class="header-data__link header-data__phone">8-800-250-87-77</a></div>
                                    </div>
                                </li>
                            </ul>
                            <!-- end header-data (office data) -->
                            <div class="header-office">
                                <div class="header-office__days">
                                    <img src="/img/icons/calendar.svg">
                                    <div class="header-office__days-content">
                                        <div class="header-office__days-prefix">График работы: </div>
                                        <div class="header-office__days-outer">
                                            <div class="header-office__days-wrapper">
                                                <div class="header-office__adress-days">Пн-Пт,</div>
                                                <div class="header-office__adress-hours">09<sup>00</sup>-18<sup>00</sup></div>
                                            </div>
                                            <div class="header-office__days-wrapper">
                                                <div class="header-office__adress-days">Сб-Вс,</div>
                                                <div class="header-office__adress-hours">10<sup>00</sup>-16<sup>00</sup></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-office__adress-moscow" style=" display: none; ">
                                    <div style=" font-size: 14px; ">Наш главный офис в Москве: </div>
                                    <div style="font-size: 16px;margin-top: 5px;"><i class="icon icon--pinpoint header__icon" style=" color: #adadad;  margin-right: 5px;"></i><span style=" vertical-align: middle;">ул. Шухова 14, стр.9</span>
                                    </div>
                                    <div style=" margin-top: 5px; ">
                                        <a href="mailto:info@visatourservice.ru" style="font-size: 16px;color: #6b6b6b;"><i class="icon icon--message" style=" font-weight: bold; margin-right: 5px; opacity: 0.8; "></i><span style=" vertical-align: middle;">info@visatourservice.ru</span></a>
                                    </div>
                                </div>
                            </div>
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
