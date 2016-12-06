<!-- <footer class="site-footer" id="contacts">
  <div class="container">
    <div class="row">
      <div class="footer-contacts">
        <div class="footer__contact footer__adress">г.Москва, Гиляровского дом 68 корпус </div>
        <div class="footer__contact footer__email"><a href="mailto:info@seosintez.ru" class="footer__link">info@seosintez.ru</a></div>
        <div class="footer__contact footer__phone"><a href="tel:+74951252765" class="footer__link">+7 (495) 125-27-65</a></div>
      </div>
      <div class="footer-map-preview">
        <button class="btn btn--brown btn--large btn--bordered footer-map-preview__btn">
          <span class="footer-map-preview__btn__text footer-map-preview__btn__text-default">Развернуть карту</span>
          <span class="footer-map-preview__btn__text footer-map-preview__btn__text-expanded">Свернуть карту</span>
        </button>
      </div>
    </div>
  </div>
  <div class="footer-map-fullwidth-container">
    <div class="footer-map-fullwidth">
      <div class="footer-map-preloader-overlay hidden">
        <div class="footer-map-preloader">
          <div class="css_spinner wf">
            <span class="side s_left"> <span class="fill"></span> </span>
            <span class="side s_right"> <span class="fill"></span> </span>
          </div>
        </div>
      </div>
      <div class="footer-map-fullwidth__map">
          <div id="site-map"></div>
      </div>
    </div>
  </div>
</footer> -->


<div class="remodal-bg">
  <?php require_once("actions-modals.php"); ?>
</div>
<!-- this is end of overlay remodal container-->

<script type="text/javascript">
    /**
     * ISMOBILE
     */
    ; ! function(a) { var b = /iPhone/i, c = /iPod/i, d = /iPad/i, e = /(?=.*\bAndroid\b)(?=.*\bMobile\b)/i, f = /Android/i, g = /(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i, h = /(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i, i = /Windows Phone/i, j = /(?=.*\bWindows\b)(?=.*\bARM\b)/i, k = /BlackBerry/i, l = /BB10/i, m = /Opera Mini/i, n = /(CriOS|Chrome)(?=.*\bMobile\b)/i, o = /(?=.*\bFirefox\b)(?=.*\bMobile\b)/i, p = new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)", "i"), q = function(a, b) { return a.test(b) }, r = function(a) { var r = a || navigator.userAgent, s = r.split("[FBAN"); if ("undefined" != typeof s[1] && (r = s[0]), s = r.split("Twitter"), "undefined" != typeof s[1] && (r = s[0]), this.apple = { phone: q(b, r), ipod: q(c, r), tablet: !q(b, r) && q(d, r), device: q(b, r) || q(c, r) || q(d, r) }, this.amazon = { phone: q(g, r), tablet: !q(g, r) && q(h, r), device: q(g, r) || q(h, r) }, this.android = { phone: q(g, r) || q(e, r), tablet: !q(g, r) && !q(e, r) && (q(h, r) || q(f, r)), device: q(g, r) || q(h, r) || q(e, r) || q(f, r) }, this.windows = { phone: q(i, r), tablet: q(j, r), device: q(i, r) || q(j, r) }, this.other = { blackberry: q(k, r), blackberry10: q(l, r), opera: q(m, r), firefox: q(o, r), chrome: q(n, r), device: q(k, r) || q(l, r) || q(m, r) || q(o, r) || q(n, r) }, this.seven_inch = q(p, r), this.any = this.apple.device || this.android.device || this.windows.device || this.other.device || this.seven_inch, this.phone = this.apple.phone || this.android.phone || this.windows.phone, this.tablet = this.apple.tablet || this.android.tablet || this.windows.tablet, "undefined" == typeof window) return this }, s = function() { var a = new r; return a.Class = r, a }; "undefined" != typeof module && module.exports && "undefined" == typeof window ? module.exports = r : "undefined" != typeof module && module.exports && "undefined" != typeof window ? module.exports = s() : "function" == typeof define && define.amd ? define("isMobile", [], a.isMobile = s()) : a.isMobile = s() }(this);

    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }

    function addClass(elem, className) {
        if (!hasClass(elem, className)) {
            elem.className += ' ' + className;
        }
    }

    function removeClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        }
    }

    var nua = navigator.userAgent,
        coreElement = (document.querySelector("body") || document.body || document.getElementsByTagName('body')[0] || document.documentElement.outerHTML || document.getElementsByTagName("html")[0]);
    var is_android_default_bro = ((nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 &&
        nua.indexOf('AppleWebKit') > -1) && !(nua.indexOf('Chrome') > -1));

    function switchClassesDependences(){
          if(is_android_default_bro) {
            addClass(coreElement, 'is_android_default_bro');

          } else {
            removeClass(coreElement, 'is_android_default_bro');
          }
          if(isMobile.apple.device) {
              addClass(coreElement, 'isApple');
          } else {
              removeClass(coreElement, 'isApple');
          }

          if(!isMobile.any && !is_android_default_bro) {
              removeClass(coreElement, 'is_any_mobile')
              addClass(coreElement, 'is_not_any_mobile');
          }
          else {
              addClass(coreElement, 'is_any_mobile')
              removeClass(coreElement, 'is_not_any_mobile');
          }


        }

        // call once
        switchClassesDependences();



    /**
     * DEFER IMAGES PRELOAD with data-src
     */
    function importScr(src, callback) {
        var scriptElem = document.createElement('script');
        scriptElem.setAttribute('src', src);
        scriptElem.setAttribute('type', 'text/javascript');
        scriptElem.setAttribute('charset', 'utf-8');
        document.getElementsByTagName('head')[0].appendChild(scriptElem);
        var callback = callback || function() {};
        callback();
    }


    var loaded_scripts = {};
    /** loadScriptWithCallback **/
    function load_script(url, onload, onload_params) {
        if (typeof(loaded_scripts[url]) != 'undefined') return;

        if (typeof(onload_params) == 'undefined') var onload_params = {};
        if (typeof(onload) == 'undefined') var onload = function() {};


        var script = document.createElement("script");
        script.src = url;
        script.type = "text/javascript";

        var triggered = 0;
        script.onreadystatechange = function() {
            if (!triggered && (this.readyState == 'complete' || this.readyState == 'loaded')) {
                onload(onload_params);
                triggered = 1;
            }
        }
        script.onload = function() {
            onload(onload_params);
        };

        document.getElementsByTagName("head")[0].appendChild(script);

        loaded_scripts[url] = 1;
    }


    window.onload = function() {

        load_script('/js/modernizr.min.js');

        importScr('/js/all.package.min.js', function () {
          // after load document script - will load vk/fb & other need scripts or functions
          console.log('all.packege.min.js is loaded');
        });

    }

</script>




</div>
<!-- END OF SITE WRAPPER -->
</body>

</html>
