<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Создание и продвижение сайтов. Реклама сайтов в Яндекс Директ и Google AdWords</title>
    <meta name="keywords" content="создание и продвижение сайтов. реклама сайтов в яндекс директ" />
    <meta name="description" content="Агентство  интернет-маркетинга SEOSINTEZ. Создание сайтов любой тематики и сложности. SEO продвижение сайтов. Настройка и сопровождение рекламных кампаний в Яндекс Директ и Google AdWords" />
    <meta name=viewport content="width=device-width, initial-scale=1">
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


</head>

<body>
    <!-- Begin site-wrapper -->
    <div class="site-wrapper">

        <header class="site-header" id="home">
          <div class="container">
              <div class="row">

                  <div class="col col--6-of-12 header-left">
                      <a class="logo logo--large" href="/">
                        <span class="logo__img"></span>
                      </a>
                  </div>

                  <div class="col col--6-of-12 header-right">
                      <ul class="header-data">
                          <li class="header-data__item"><a href="#" class="header-data__geo">Москва</a></li>
                          <li class="header-data__item"><a href="tel:88002508777" class="header-data__phone">8-800-250-87-77</a></li>
                      </ul>
                  </div>

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
                              VisaTourService
                            </span>
                          </a>
                        </div>
                        <!-- /Small screen logo in menu -->

                        <!-- Menu Items -->
                        <nav id="menu" role="navigation">
                    			<ul>
                    				<li class="menu__item"><a href="/about.php">О компании</a></li>
                    				<li class="menu__item"><a href="/visa-c.php">Виза С</a></li>
                    				<li class="menu__item"><a href="/visa-d.php">Виза D</a></li>
                    				<li class="menu__item"><a href="/services.php">Услуги</a></li>
                    				<li class="menu__item"><a href="/franchising.php">Франчайзинг</a></li>
                    				<li class="menu__item"><a href="/news.php">Новости</a></li>
                    				<li class="menu__item menu__item--last"><a href="/contacts.php">Контакты</a></li>
                    			</ul>
                    		</nav>
                      <!-- /Menu Items -->
                      </div>
                	</div>
                  <!-- /Menu -->
              </div>
          </div>
        </header>
