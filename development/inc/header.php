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
       (function(w){
         "use strict";
         /* exported loadCSS */
         var loadCSS = function( href, before, media ){
           // Arguments explained:
           // `href` [REQUIRED] is the URL for your CSS file.
           // `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
             // By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
           // `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
           var doc = w.document;
           var ss = doc.createElement( "link" );
           var ref;
           if( before ){
             ref = before;
           }
           else {
             var refs = ( doc.body || doc.getElementsByTagName( "head" )[ 0 ] ).childNodes;
             ref = refs[ refs.length - 1];
           }

           var sheets = doc.styleSheets;
           ss.rel = "stylesheet";
           ss.href = href;
           // temporarily set media to something inapplicable to ensure it'll fetch without blocking render
           ss.media = "only x";

           // wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
           function ready( cb ){
             if( doc.body ){
               return cb();
             }
             setTimeout(function(){
               ready( cb );
             });
           }
           // Inject link
             // Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
             // Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
           ready( function(){
             ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
           });
           // A method (exposed on return object for external use) that mimics onload by polling until document.styleSheets until it includes the new sheet.
           var onloadcssdefined = function( cb ){
             var resolvedHref = ss.href;
             var i = sheets.length;
             while( i-- ){
               if( sheets[ i ].href === resolvedHref ){
                 return cb();
               }
             }
             setTimeout(function() {
               onloadcssdefined( cb );
             });
           };

           function loadCB(){
             if( ss.addEventListener ){
               ss.removeEventListener( "load", loadCB );
             }
             ss.media = media || "all";
           }

           // once loaded, set link's media back to `all` so that the stylesheet applies once it loads
           if( ss.addEventListener ){
             ss.addEventListener( "load", loadCB);
           }
           ss.onloadcssdefined = onloadcssdefined;
           onloadcssdefined( loadCB );
           return ss;
         };
         // commonjs
         if( typeof exports !== "undefined" ){
           exports.loadCSS = loadCSS;
         }
         else {
           w.loadCSS = loadCSS;
         }
       }( typeof global !== "undefined" ? global : this ));




       /* CSS rel=preload polyfill (from src/cssrelpreload.js) */
       /* CSS rel=preload polyfill. Depends on loadCSS function */
       (function( w ){
         // rel=preload support test
         if( !w.loadCSS ){
           return;
         }
         var rp = loadCSS.relpreload = {};
         rp.support = function(){
           try {
             return w.document.createElement("link").relList.supports( "preload" );
           } catch (e) {}
         };

         // loop preload links and fetch using loadCSS
         rp.poly = function(){
           var links = w.document.getElementsByTagName( "link" );
           for( var i = 0; i < links.length; i++ ){
             var link = links[ i ];
             if( link.rel === "preload" && link.getAttribute( "as" ) === "style" ){
               w.loadCSS( link.href, link );
               link.rel = null;
             }
           }
         };

         // if link[rel=preload] is not supported, we must fetch the CSS manually using loadCSS
         if( !rp.support() ){
           rp.poly();
           var run = w.setInterval( rp.poly, 300 );
           if( w.addEventListener ){
             w.addEventListener( "load", function(){
               w.clearInterval( run );
             } )
           }
         }
       }( this ));

       </script>

       <script></script><!-- here to ensure a non-blocking load still occurs in IE and Edge, even if scripts follow loadCSS in head -->

<script src="js/jquery-1.12.4.min.js" charset="utf-8"></script>
</head>

<body>
    <!-- Begin site-wrapper -->
    <div class="site-wrapper">

        <header class="site-header" id="home">
          <div class="container">
              <div class="row">

                  <div class="col col--6-of-12 col--m-1-of-2 header-left">
                    <a class="logo logo--large" href="/">
                      <!-- <span class="logo__img"></span> -->
                      <span class="logo__icon"></span>
                      <span class="logo__title-wrapper">
                        <span class="logo__title-part logo__title-part--first">VisaTourService</span>
                        <span class="logo__title-part logo__title-part--sep"></span>
                        <span class="logo__title-part logo__title-part--last">Визовый консалтинг</span>
                      </span>
                    </a>
                  </div>

                  <div class="col col--6-of-12 col--m-1-of-2 header-right">
                    <div class="header-data-wrapper">
                      <!-- begin header-data  (main data )-->
                        <ul class="header-data">
                            <li class="header-data__item header-data__item--geo">
                                <div class="header-data__tooltip">
                                    <div class="drop-tooltip">
                                        <p>Мы угадали<br>ваш регион?</p>
                                        <div class="drop-tooltip__nav"><button class="btn btn--x-small btn--yellow header-data__geo-confirm">Да</button> <button data-remodal-target="change_city" class="btn btn--x-small btn--yellow header-data__geo-decline">Нет</button></div>
                                    </div>
                                </div>
                                <div class="header-data__item-content"><i class="icon icon--pinpoint header__icon"></i><a href="#" data-remodal-target="change_city" class="header-data__link header-data__geo">Новосибирск</a></div>
                            </li>
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
                            <div class="header-office__adress">ул. Ленина 12, офис 1101/2, </div>
                            <div class="header-office__days-wrapper"><div class="header-office__adress-days">Пн-Пт,</div><div class="header-office__adress-hourds">09<sup>00</sup>-18<sup>00</sup></div></div>

                        <div class="header-office__days-wrapper"><div class="header-office__adress-days">Пн-Пт,</div><div class="header-office__adress-hourds">09<sup>00</sup>-18<sup>00</sup></div></div>
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
                  <nav class="menu" id="menu" role="navigation" >
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
