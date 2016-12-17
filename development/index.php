<?php require_once('inc/header.php'); ?>

        <section class="home-banner s1 parallax-section parallax-section--home">
            <div class="parallax-section__image"
              style="background-image: url('img/parallax/home/header_parallax.jpg'); top: -100%; height: 1350px;"></div>
            <div class="container">
                <div class="row">
                  <div class="home-banner__content">
                    <div class="site-title-wrapper">
                      <h1 class="site-title">
                        <span class="site-title__part yellow">Visa</span><!--
                        --><span class="site-title__part">tour</span><!--
                        --><span class="site-title__part">service</span>
                        <span class="site-title__subtitle yellow">Федеральная сеть</span>
                      </h1>
                    </div>
                    <div class="home-banner__btn-wrapper">
                      <button class="btn btn--x-large btn--yellow home-banner__btn" data-remodal-target="get_request_visa_online">Оставить заявку на оформление визы</button>
                    </div>
                    <!-- Advantages -->
                    <div class="home-banner__advantages">
                      <div class="col col--4-of-12 col--s-1-of-2 home-banner__advantage">
                          <div class="home-banner__advantage-header">
                          <i class="icon icon--passport home-banner__advantage-icon"></i>
                        </div>
                        <div class="home-banner__advantage-desc">
                          Оформление <br>краткосрочных и <br>долгосрочных виз <br>в 70 стран мира
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--s-1-of-2 home-banner__advantage">
                          <div class="home-banner__advantage-header">
                          <i class="icon icon--coliseum home-banner__advantage-icon"></i>
                        </div>
                        <div class="home-banner__advantage-desc">
                          Полноценное <br>туристическое <br>агентство
                        </div>
                      </div>
                      <div class="col col--4-of-12 home-banner__advantage">
                          <div class="home-banner__advantage-header">
                          <i class="icon icon--visa-extrance home-banner__advantage-icon"></i>
                        </div>
                        <div class="home-banner__advantage-desc">
                          Оформление визы <br>онлайн.
                          <a href="#" class="home-banner__advantage-link">Посмотреть, как это работает</a>
                        </div>
                      </div>
                    </div>
                    <!-- /Advantages -->
                  </div>
                </div>
            </div>
            <div class="home-banner__advantages-overlay"></div>
        </section>
        <!-- Visa-C -->
        <section class="visa-short-term s2">
            <div class="container">
                <div class="row">
                    <div class="col col--9-of-12 col--m-1-of-1 col--s-1-of-1 visa-short__search-column">
                      <h2 class="section-title section-title--with-link sublined"><a href="visa-c.php">Краткосрочные <strong>визы</strong></a></h2>
                      <p class="section-subtitle">Виза С. 72 страны</p>
                      <!-- Search form -->
                      <div class="search-form-wrapper visa-short__search-form-wrapper">
                        <!-- <form class="search-form visa-short__search-form">
                            <div class="search-form__input-group visa-short__input-group typeahead__container">
                              <div class="typehead__field">
                                <span class="typeahead__query">
                                  <input type="search" placeholder="Введите название страны или региона..." class="search-form__input visa-short__input" autocomplete="off">
                                </span>
                                  <div class="search-form__input-group-btn visa-short__input-group-btn typeahead__button">
                                    <button class="btn search-form__btn visa-short__btn waves-effect waves-circle waves-float" type="submit">
                                      <i class="icon search-form__btn-icon icon--search"></i>
                                    </button>
                                  </div>
                              </div>
                            </div>
                        </form> -->
                        <form class="visa-short__search-form" name="visa-short__search-form">
                         <div class="typeahead__container">
                             <div class="typeahead__field">
                                 <span class="typeahead__query">
                                     <input class="visa-short__input" name="visa-short__input" type="search" placeholder="Введите название страны или региона..." autocomplete="off">
                                 </span>
                                 <span class="typeahead__button">
                                     <button type="submit" class="btn visa-short__btn">
                                         <i class="icon icon--search visa-short__btn-icon"></i>
                                     </button>
                                 </span>

                             </div>
                         </div>
                        </form>
                        <!-- Search form tips -->
                        <div class="search-form__tips-toggler x-small-only">или выберите категорию</div>
                        <div class="search-form__tips visa-short__search-form-tips x-small-hidden">
                          <div class="col col--1-of-5 col--s-1-of-2 visa-short__search-form-tip-col">
                            <div class="search-form__tip visa-short__search-form-tip" data-category="Schengen">Шенген</div>
                            <div class="search-form__tip visa-short__search-form-tip" data-category="Europe">Европа</div>
                            <div class="search-form__tip visa-short__search-form-tip" data-category="Central and South America">Америка</div>
                          </div>
                          <div class="col col--1-of-5 col--s-1-of-2 visa-short__search-form-tip-col">
                            <div class="search-form__tip visa-short__search-form-tip" data-category="Asia">Азия</div>
                            <div class="search-form__tip visa-short__search-form-tip" data-category="Oceania">Океания</div>
                            <div class="search-form__tip visa-short__search-form-tip" data-category="North America">Северная Америка</div>
                          </div>
                          <div class="col col--1-of-5 col--s-1-of-2 visa-short__search-form-tip-col">
                            <div class="search-form__tip visa-short__search-form-tip" data-category="Middle East">Африка</div>
                            <div class="search-form__tip visa-short__search-form-tip" data-category="Africa">Ближний восток</div>
                          </div>
                          <div class="col col--2-of-5 col--s-1-of-2 visa-short__search-form-tip-col">
                            <div class="search-form__tip visa-short__search-form-tip" data-category="French Overseas Territories">Заморские территории Франции</div>
                            <div class="search-form__tip visa-short__search-form-tip" data-category="British Overseas Territories">Британские заморские территории</div>
                            <div class="search-form__tip visa-short__search-form-tip" data-category="Netherlands Antilles">Бывшие нидерландские антильские острова</div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col col--3-of-12 col--m-hidden">
                      <div class="info-block info-block--medium">
                        <div class="info-block__title">
                          <i class="icon icon--fingerprint_scan info-block__icon"></i><span class="info-block__title-span">Мобильная биометрия</span>
                        </div>
                        <div class="info-block__desc">Сдайте биометрию не выходя из дома</div>
                        <div class="btn btn--yellow btn--small info-block__btn">Записаться</div>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col col--1-of-1">
                      <div class="country-list">
                      <div class="country-list__wrapper">
                        <div class="country-list__slider visa-short__slider">
                          <!-- country list slider -->
                          <div class="swiper-container swiper-content">
                            <div class="swiper-wrapper">
                            </div>
                         </div>
                         <div class="country-list__nav country-list__nav--prev">
                           <i class="icon icon--arrow-left--flat country-list__nav-icon"></i>
                         </div>
                         <div class="country-list__nav country-list__nav--next">
                           <i class="icon icon--arrow-right--flat country-list__nav-icon"></i>
                         </div>
                      </div>
                    </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="country-preview" style="display:none">
                <div class="country-preview__img-wrapper">
                    <img class="country-preview__img" src="/img/home-coutries/gr.jpg">
                    <div class="country-preview__short-desc-wrapper"></div>
                </div>
                <div class="container container-static">
                    <div class="row">
                        <div class="country-preview__short-desc"> Австрия - это чистейшие озера, величественные горы, сказочные австрийские городки, историческике замки и памятники архитектуры, лечебные курорты с чудлдейственными термальными источниками... </div>
                    </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col col-m-1-of-1 country-preview__data-column">
                      <div class="country-preview__data-header">
					              	<div class="country-preview__name">Австрия</div>
                     	    <div class="country-preview__subtitle">
                           <span class="country-preview__subtitle-header">Оформление визы</span>
                           <span class="country-preview__subtitle-desc">от <span id="visa-c__start-price">350</span> рублей</span>
                       </div>
                      </div>
                      <div class="prices-table country-preview__prices-table">
                          <div class="prices-table__row">
                            <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--speech_bubble_filled prices-table__icon"></i></span></div>
                            <div class="prices-table__service">Консультация</div>
                            <div class="prices-table__price-wrapper">
                              <div class="prices-table__price">от <span id="visa-c__consult-price"><strong>500</strong></span> р. - </div>
                            </div>
                          </div>
                          <div class="prices-table__row">
                            <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--bullet_list_filled prices-table__icon"></i></span></div>
                            <div class="prices-table__service">Проверка документов</div>
                            <div class="prices-table__price-wrapper">
                              <div class="prices-table__price">от <span id="visa-c__doc-verif-price"><strong>450</strong></span> р. - </div>
                            </div>
                          </div>
                          <div class="prices-table__row">
                            <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--document_solid prices-table__icon"></i></span></div>
                            <div class="prices-table__service">Заполнение анкеты</div>
                            <div class="prices-table__price-wrapper">
                              <div class="prices-table__price">от <span id="visa-c__form-completing-price"><strong>300</strong></span> р. - </div>
                            </div>
                          </div>
                          <div class="prices-table__row">
                            <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--delivery_bus prices-table__icon"></i></span></div>
                            <div class="prices-table__service">Курьерская доставка</div>
                            <div class="prices-table__price-wrapper">
                              <div class="prices-table__price">от <span id="visa-c__express-delivery-price"><strong>500</strong></span> р. - </div>
                            </div>
                          </div>
                          <div class="prices-table__row">
                            <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--shield prices-table__icon"></i></span></div>
                            <div class="prices-table__service">Оформление страховки</div>
                            <div class="prices-table__price-wrapper">
                              <div class="prices-table__price">от <span id="visa-c__insurance-price"><strong>1000</strong></span> р. - </div>
                            </div>
                          </div>
                          <div class="prices-table__row">
                            <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--fingerprint prices-table__icon"></i></span></div>
                            <div class="prices-table__service">Мобильная биометрия</div>
                            <div class="prices-table__price-wrapper">
                            <div class="prices-table__price">от <span id="visa-c__moobile-biometrics-price"><strong>500</strong></span> р. - </div>
                            </div>
                          </div>
                          <div class="prices-table__row">
                            <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--docs-translate prices-table__icon"></i></span></div>
                            <div class="prices-table__service">Перевод сопроводительных документов</div>
                            <div class="prices-table__price-wrapper">
                            <div class="prices-table__price">от <span id="visa-c__docs-translate-price"><strong>1000</strong></span> р. - </div>
                            </div>
                          </div>

                      </div>

                      <div class="country-preview__btn-wrapper">
                        <a class="btn btn--yellow btn--large country-preview__btn waves-effect waves-circle waves-float">Начать оформление</a>
                      </div>
                      <div class="country-preview__total-ordered">Уже оформлено <span id="visa-c__total-ordered"><strong>356</strong></span> виз</div>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col col--l-hidden col--m-1-of-1 col--s-1-of-1 col--m-visible col--centered visa-short__biometry-column">
                    <div class="info-block info-block--small visa-short__info-block">
                      <div class="info-block__title">
                        <i class="icon icon--fingerprint_scan info-block__icon"></i><span class="info-block__title-span">Мобильная биометрия</span>
                      </div>
                      <div class="info-block__desc">Сдайте биометрию не выходя из дома</div>
                      <div class="btn btn--yellow btn--small info-block__btn">Записаться</div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <!-- /Visa-C -->

        <!-- Visa-D -->
        <section class="visa-long-term section-inverse s3">
            <div class="parallax-section__image" style="background-image: url('img/section-bg/section-inverse-bg2.jpg');top: 0;"></div>
            <div class="parallax-section__overlay"></div>
            <div class="container container-relative">
              <div class="row">
                <div class="col col--6-of-12 col--m-1-of-1 col--s-1-of-1">
                  <h2 class="section-title section-title--with-link sublined"><a href="visa-d.php">Долгосрочные <strong>визы</strong></a></h2>
                  <p class="section-subtitle">Виза D. 25 стран</p>
                  <div class="visa-long__excerpt">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis;
                  </div>
                </div>
                <div class="col col--6-of-12 col--m-1-of-1 col--s-1-of-1 col--ab visa-long__consult-column">
                  <div class="info-block info-block--medium visa-long__info-block">
                    <div class="info-block__title">
                      <i class="icon icon--customer_support info-block__icon"></i><span class="info-block__title-span">Консультация</span>
                    </div>
                    <div class="info-block__desc">Нужна консультация по оформлению долгосрочной визы? Запишитесь!</div>
                    <div class="btn btn--yellow btn--large info-block__btn">Записаться на консультацию</div>
                  </div>
                </div>
            </div>
          </div>
          <div class="visa-long__block">
              <div class="visa-long__white-panel"></div>
              <div class="container with-left-offset" >
                  <div class="row row--equal visa-long__row--equal">
                      <div class="col col--6-of-12 col--m-1-of-2 col--s-1-of-1 col-equal visa-long__col--equal visa-long__col--countries">
                          <div class="visa-long__countries-wrapper">
                                  <h4 class="visa-long__header-action">Выберите страну</h4>
                                  <div class="countries-table visa-long__countries-table">


                                  </div>
                          </div>

                      </div>

                      <div class="col col--6-of-12 col--m-1-of-2 col--s-1-of-1 country-preview__data-column country-preview__data-column--contrast col-equal visa-long__col--equal visa-long__data-col">
                      <div class="visa-long__country-preview_wrapper">
                          <div class="country-preview__data-header" >
                              <div class="country-preview__name">Австрия</div>
                              <div class="country-preview__subtitle">
                                  <span class="country-preview__subtitle-header">Оформление визы</span>
                                  <span class="country-preview__subtitle-desc">от <span id="visa-c__start-price">350</span> рублей</span>
                              </div>
                          </div>
                          <div class="prices-table prices-table--contrast country-preview__prices-table visa-long__country-preview_prices-table">
                              <div class="prices-table__row">
                                  <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg visa-long__country-prices-table_icon-bg"><i class="icon icon--speech_bubble_filled prices-table__icon"></i></span></div>
                                  <div class="prices-table__service visa-long__country-prices-table_service">Консультация</div>
                                  <div class="prices-table__price-wrapper visa-long__country-prices-table_price-wrapper">
                                      <div class="prices-table__price visa-long__country-prices-table_price">от <span id="visa-c__consult-price"><strong>500</strong></span> р. - </div>
                                  </div>
                              </div>
                              <div class="prices-table__row">
                                  <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--bullet_list_filled prices-table__icon"></i></span></div>
                                  <div class="prices-table__service">Проверка документов</div>
                                  <div class="prices-table__price-wrapper">
                                      <div class="prices-table__price">от <span id="visa-c__doc-verif-price"><strong>450</strong></span> р. - </div>
                                  </div>
                              </div>
                              <div class="prices-table__row">
                                  <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--document_solid prices-table__icon"></i></span></div>
                                  <div class="prices-table__service">Заполнение анкеты</div>
                                  <div class="prices-table__price-wrapper">
                                      <div class="prices-table__price">от <span id="visa-c__form-completing-price"><strong>300</strong></span> р. - </div>
                                  </div>
                              </div>
                              <div class="prices-table__row">
                                  <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--delivery_bus prices-table__icon"></i></span></div>
                                  <div class="prices-table__service">Курьерская доставка</div>
                                  <div class="prices-table__price-wrapper">
                                      <div class="prices-table__price">от <span id="visa-c__express-delivery-price"><strong>500</strong></span> р. - </div>
                                  </div>
                              </div>
                              <div class="prices-table__row">
                                  <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--shield prices-table__icon"></i></span></div>
                                  <div class="prices-table__service">Оформление страховки</div>
                                  <div class="prices-table__price-wrapper">
                                      <div class="prices-table__price">от <span id="visa-c__insurance-price"><strong>1000</strong></span> р. - </div>
                                  </div>
                              </div>
                              <div class="prices-table__row">
                                  <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--fingerprint prices-table__icon"></i></span></div>
                                  <div class="prices-table__service">Мобильная биометрия</div>
                                  <div class="prices-table__price-wrapper">
                                      <div class="prices-table__price">от <span id="visa-c__moobile-biometrics-price"><strong>500</strong></span> р. - </div>
                                  </div>
                              </div>
                              <div class="prices-table__row">
                                  <div class="prices-table__icon-wrapper"><span class="prices-table__icon-bg"><i class="icon icon--docs-translate prices-table__icon"></i></span></div>
                                  <div class="prices-table__service">Перевод сопроводительных документов</div>
                                  <div class="prices-table__price-wrapper">
                                      <div class="prices-table__price">от <span id="visa-c__docs-translate-price"><strong>1000</strong></span> р. - </div>
                                  </div>
                              </div>

                          </div>

                          <div class="country-preview__btn-wrapper">
                              <a class="btn btn--yellow btn--large btn--contour country-preview__btn visa-long__country-preview_btn">Начать оформление</a>
                          </div>
                          <div class="country-preview__total-ordered">Уже оформлено <span id="visa-c__total-ordered"><strong>356</strong></span> виз</div>
                      </div>
                  </div>


                  </div>
              </div>
          </div>

        </section>
        <!-- /Visa-D -->

        <!-- Other-services -->
        <section class="other-services s4">
          <div class="container">
            <div class="row">
                <div class="col col--1-of-1"><h2 class="section-title sublined">Дополнительные услуги</h2></div>
                <div class="vtsgrid">

                      <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2 vtsgrid-item__wrap">
                        <div class="vtsgrid__item">
                            <div class="vtsgrid__item__top">
                                <a href="#" class="vtsgrid__item__top__image"><img width="360" height="240" src="img/other-services/help_with_passport.jpg" class="attachment-thumb_tour_listing_small size-thumb_tour_listing_small wp-post-image" alt="Lake Tahoe"></a>
                            </div>
                            <div class="vtsgrid__item__content">
                                <h3 class="vtsgrid__item__title"><a href="#">Помощь в оформлении паспортов</a></h3>
                                <div class="vtsgrid__item__description">Magna. Lectus. Ligula habitasse ut morbi velit</div>
                            </div>
                            <div class="item-attributes">
                                <div class="item-attributes__item">
                                      <a href="#" class="item-attributes__link"><i class="icon icon--readmore"></i><span class="item-attributes__link-text">Подробнее</span></a>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2 vtsgrid-item__wrap">
                        <div class="vtsgrid__item">
                            <div class="vtsgrid__item__top">
                                <a href="#" class="vtsgrid__item__top__image"><img width="360" height="240" src="img/other-services/help_with_passport.jpg" class="attachment-thumb_tour_listing_small size-thumb_tour_listing_small wp-post-image" alt="Lake Tahoe"></a>
                            </div>
                            <div class="vtsgrid__item__content">
                                <h3 class="vtsgrid__item__title"><a href="#">Оформление страховки</a></h3>
                                <div class="vtsgrid__item__description">Magna. Lectus. Ligula habitasse ut morbi velit</div>
                            </div>
                            <div class="item-attributes">
                                <div class="item-attributes__item">
                                      <a href="#" class="item-attributes__link"><i class="icon icon--readmore"></i><span class="item-attributes__link-text">Подробнее</span></a>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2 vtsgrid-item__wrap">
                        <div class="vtsgrid__item">
                            <div class="vtsgrid__item__top">
                                <a href="#" class="vtsgrid__item__top__image"><img width="360" height="240" src="img/other-services/help_with_passport.jpg" class="attachment-thumb_tour_listing_small size-thumb_tour_listing_small wp-post-image" alt="Lake Tahoe"></a>
                            </div>
                            <div class="vtsgrid__item__content">
                                <h3 class="vtsgrid__item__title"><a href="#">Приглашение для иностранцев в Росию</a></h3>
                                <div class="vtsgrid__item__description">Magna. Lectus. Ligula habitasse ut morbi velit</div>
                            </div>
                            <div class="item-attributes">
                                <div class="item-attributes__item">
                                      <a href="#" class="item-attributes__link"><i class="icon icon--readmore"></i><span class="item-attributes__link-text">Подробнее</span></a>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2 vtsgrid-item__wrap">
                        <div class="vtsgrid__item">
                            <div class="vtsgrid__item__top">
                                <a href="#" class="vtsgrid__item__top__image"><img width="360" height="240" src="img/other-services/help_with_passport.jpg" class="attachment-thumb_tour_listing_small size-thumb_tour_listing_small wp-post-image" alt="Lake Tahoe"></a>
                            </div>
                            <div class="vtsgrid__item__content">
                                <h3 class="vtsgrid__item__title"><a href="#">Бюро переводов</a></h3>
                                <div class="vtsgrid__item__description">Magna. Lectus. Ligula habitasse ut morbi velit</div>
                            </div>
                            <div class="item-attributes">
                                <div class="item-attributes__item">
                                      <a href="#" class="item-attributes__link"><i class="icon icon--readmore"></i><span class="item-attributes__link-text">Подробнее</span></a>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
            </div>
          </div>
        </section>
        <!-- /Other-services -->

        <!-- Advantages -->
        <section class="advantages section-inverse s5">
          <div class="parallax-section__image" style="background-image: url(img/parallax/home/advantages_parallax.jpg); height: 100%;"></div>
          <div class="parallax-section__overlay parallax-section__overlay--dark-green"></div>
          <div class="container container-relative">
            <div class="row">
              <div class="col col--1-of-1"><h2 class="section-title sublined"><span class="section-title__span">Компания Visatourservice - лидер </span><span class="section-title__span">в сфере услуг по оформлению виз</span></h2></div>
            </div>
            <div class="icons-set icons-set--big icons-set--light icons-set--icon-bg_green-semitransparent">
                <div class="row icons-set__row">
                  <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 col--am">
                    <div class="icons-set__item">
                                        <div class="icons-set__item__field icons-set__item__field--fix-size">
                                  <div class="icons-set__item__icon-wrap"><i class="icon icon--fingerprint_big icons-set__item__icon"></i></div>        </div>
                                        <div class="icons-set__item__field">
                                  <h3 class="icons-set__item__title">Мобильная биометрия</h3>
                                  </div>
                                </div>
                  </div>
                  <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 col--am ">
                    <div class="icons-set__item">
                                        <div class="icons-set__item__field icons-set__item__field--fix-size">
                                  <div class="icons-set__item__icon-wrap"><i class="icon icon--car icons-set__item__icon"></i></div>        </div>
                                        <div class="icons-set__item__field">
                                  <h3 class="icons-set__item__title">Встреча и сопровождение клиентов (трансфер)</h3>
                                  </div>
                                </div>
                  </div>
                  <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 col--am ">
                    <div class="icons-set__item">
                                        <div class="icons-set__item__field icons-set__item__field--fix-size">
                                  <div class="icons-set__item__icon-wrap"><i class="icon icon--mark_as_favorite icons-set__item__icon"></i></div>        </div>
                                        <div class="icons-set__item__field">
                                  <h3 class="icons-set__item__title">Уникальная услуга - виза D в 25 стран</h3>
                                  </div>
                                </div>
                  </div>
                  <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 col--am ">
                    <div class="icons-set__item">
                                        <div class="icons-set__item__field icons-set__item__field--fix-size">
                                  <div class="icons-set__item__icon-wrap"><i class="icon icon--versions icons-set__item__icon"></i></div>        </div>
                                        <div class="icons-set__item__field">
                                  <h3 class="icons-set__item__title">Получение визы по трем документам</h3>
                                  </div>
                                </div>
                  </div>
                  <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 col--am ">
                    <div class="icons-set__item">
                                        <div class="icons-set__item__field icons-set__item__field--fix-size">
                                  <div class="icons-set__item__icon-wrap"><i class="icon icon--calendar3 icons-set__item__icon"></i></div>        </div>
                                        <div class="icons-set__item__field">
                                  <h3 class="icons-set__item__title">Срочность - от трех дней</h3>
                                  </div>
                                </div>
                  </div>
                  <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 col--am ">
                    <div class="icons-set__item">
                    <div class="icons-set__item__field icons-set__item__field--fix-size">
                        <div class="icons-set__item__icon-wrap"><i class="icon icon--knowledge_sharing icons-set__item__icon"></i></div>
                    </div>
                    <div class="icons-set__item__field">
                        <h3 class="icons-set__item__title"> Сопровождение клиентов до двери</h3>

                    </div>
                </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
        <!--/Advantages -->

        <!-- Testimonials -->
        <section class="testimonials s6">
          <div class="container">
            <div class="row">
              <div class="col col--1-of-1"><h2 class="section-title sublined">Отзывы наших клиентов</h2></div>
              <div class="col col--1-of-1">
                <div class="testimonials__slider">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide testimonials__slide">
                        <div class="testimonial">
                          <div class="testimonial__figure">
                            <img src="img/testimonials/1.jpg" alt="" class="testimonial__avatar">
                          </div>
                          <div class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                          <button class="btn testimonial__readmore-btn">Далее</button>
                          <div class="clearfix"></div>
                          <div class="testimonial__client-details">
                            <div class="testimonial__client-name">Ивнов Иван</div>
                            <div class="testimonial__client-company">Seosintez Company</div>
                            <div class="testimonial__client-post">Директор компании</div>
                            <noindex><a href="" rel="nofollow" target="_blank" class="testimonial__client-site">seosintez.ru</a></noindex>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide testimonials__slide">
                        <div class="testimonial">
                          <div class="testimonial__figure">
                            <img src="img/testimonials/1.jpg" alt="" class="testimonial__avatar">
                          </div>
                          <div class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                          <button class="btn testimonial__readmore-btn">Далее</button>
                          <div class="clearfix"></div>
                          <div class="testimonial__client-details">
                            <div class="testimonial__client-name">Ивнов Иван</div>
                            <div class="testimonial__client-company">Seosintez Company</div>
                            <div class="testimonial__client-post">Директор компании</div>
                            <noindex><a href="" rel="nofollow" target="_blank" class="testimonial__client-site">seosintez.ru</a></noindex>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide testimonials__slide">
                        <div class="testimonial">
                          <div class="testimonial__figure">
                            <img src="img/testimonials/1.jpg" alt="" class="testimonial__avatar">
                          </div>
                          <div class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                          <button class="btn testimonial__readmore-btn">Далее</button>
                          <div class="clearfix"></div>
                          <div class="testimonial__client-details">
                            <div class="testimonial__client-name">Ивнов Иван</div>
                            <div class="testimonial__client-company">Seosintez Company</div>
                            <div class="testimonial__client-post">Директор компании</div>
                            <noindex><a href="" rel="nofollow" target="_blank" class="testimonial__client-site">seosintez.ru</a></noindex>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide testimonials__slide">
                        <div class="testimonial">
                          <div class="testimonial__figure">
                            <img src="img/testimonials/1.jpg" alt="" class="testimonial__avatar">
                          </div>
                          <div class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                          <button class="btn testimonial__readmore-btn">Далее</button>
                          <div class="clearfix"></div>
                          <div class="testimonial__client-details">
                            <div class="testimonial__client-name">Ивнов Иван</div>
                            <div class="testimonial__client-company">Seosintez Company</div>
                            <div class="testimonial__client-post">Директор компании</div>
                            <noindex><a href="" rel="nofollow" target="_blank" class="testimonial__client-site">seosintez.ru</a></noindex>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide testimonials__slide">
                        <div class="testimonial">
                          <div class="testimonial__figure">
                            <img src="img/testimonials/1.jpg" alt="" class="testimonial__avatar">
                          </div>
                          <div class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                          <button class="btn testimonial__readmore-btn">Далее</button>
                          <div class="clearfix"></div>
                          <div class="testimonial__client-details">
                            <div class="testimonial__client-name">Ивнов Иван</div>
                            <div class="testimonial__client-company">Seosintez Company</div>
                            <div class="testimonial__client-post">Директор компании</div>
                            <noindex><a href="" rel="nofollow" target="_blank" class="testimonial__client-site">seosintez.ru</a></noindex>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide testimonials__slide">
                        <div class="testimonial">
                          <div class="testimonial__figure">
                            <img src="img/testimonials/1.jpg" alt="" class="testimonial__avatar">
                          </div>
                          <div class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                          <button class="btn testimonial__readmore-btn">Далее</button>
                          <div class="clearfix"></div>
                          <div class="testimonial__client-details">
                            <div class="testimonial__client-name">Ивнов Иван</div>
                            <div class="testimonial__client-company">Seosintez Company</div>
                            <div class="testimonial__client-post">Директор компании</div>
                            <noindex><a href="" rel="nofollow" target="_blank" class="testimonial__client-site">seosintez.ru</a></noindex>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/Testimonials -->

        <!-- certificates -->
        <section class="certificates section-inverse s7">
          <div class="parallax-section__overlay certificates__static-pattern"></div>
          <div class="container container-relative">
            <div class="row">
              <div class="row">
                <div class="col col--1-of-1"><h2 class="section-title sublined">Отзывы наших клиентов</h2></div>
                <div class="col col--1-of-1">
                  <div class="certificates__slider">
                    <div class="swiper-container">
                      <div class="swiper-wrapper certificates__gallery">
                        <div class="swiper-slide certificates__slide">
                          <div class="certificate">
                            <a class="certificate__link" href="img/certificates/1.jpg">
                              <img class="certificate__thumb" src="img/certificates/thumbs/1.jpg">
                              <span class="certificate__overlay"><i class="icon icon--zoom_icon certificate__overlay-icon"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificate">
                            <a class="certificate__link" href="img/certificates/2.jpg">
                              <img class="certificate__thumb" src="img/certificates/thumbs/2.jpg">
                              <span class="certificate__overlay"><i class="icon icon--zoom_icon certificate__overlay-icon"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificate">
                            <a class="certificate__link" href="img/certificates/3.jpg">
                              <img class="certificate__thumb" src="img/certificates/thumbs/3.jpg">
                              <span class="certificate__overlay"><i class="icon icon--zoom_icon certificate__overlay-icon"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificate">
                            <a class="certificate__link" href="img/certificates/4.jpg">
                              <img class="certificate__thumb" src="img/certificates/thumbs/4.jpg">
                              <span class="certificate__overlay"><i class="icon icon--zoom_icon certificate__overlay-icon"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificate">
                            <a class="certificate__link" href="img/certificates/5.jpg">
                              <img class="certificate__thumb" src="img/certificates/thumbs/5.jpg">
                              <span class="certificate__overlay"><i class="icon icon--zoom_icon certificate__overlay-icon"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificate">
                            <a class="certificate__link" href="img/certificates/6.jpg">
                              <img class="certificate__thumb" src="img/certificates/thumbs/6.jpg">
                              <span class="certificate__overlay"><i class="icon icon--zoom_icon certificate__overlay-icon"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificate">
                            <a class="certificate__link" href="img/certificates/7.jpg">
                              <img class="certificate__thumb" src="img/certificates/thumbs/7.jpg">
                              <span class="certificate__overlay"><i class="icon icon--zoom_icon certificate__overlay-icon"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificate">
                            <a class="certificate__link" href="img/certificates/8.jpg">
                              <img class="certificate__thumb" src="img/certificates/thumbs/8.jpg">
                              <span class="certificate__overlay"><i class="icon icon--zoom_icon certificate__overlay-icon"></i></span>
                            </a>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificate">
                            <a class="certificate__link" href="img/certificates/9.jpg">
                              <img class="certificate__thumb" src="img/certificates/thumbs/9.jpg">
                              <span class="certificate__overlay"><i class="icon icon--zoom_icon certificate__overlay-icon"></i></span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-pagination"></div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /certificates -->

        <!-- Our-team -->

        <!-- /Our-team -->

        <section class="home-contacts">
          <div class="home-contacts__map-container">
              <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало) -->
        <div class="home-contacts__map" id="home-map"></div>
        <!-- <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBwx-zz1AiuDBd8BE8BS1LzaDfsqEJZ2qE&callback=GoogleReadyHandler6ihbus3n" async defer>
        </script> -->
        <script>
          /*function GoogleReadyHandler6ihbus3n() {
            var infowindow, map = new google.maps.Map(document.getElementById("map6ihbus3n"), { center: {lat: 55.717822634881905, lng: 37.61510516735075}, zoom: 18, disableDefaultUI: true, zoomControl: true, mapTypeControl: true, mapTypeId: "roadmap" }); infowindow = new google.maps.InfoWindow(); (new google.maps.Marker({ position: {lat: 55.71770189367838, lng: 37.61219322681427}, map: map, icon:'', title: 'Заголовок' })) .addListener('click', function (e) { infowindow.setContent('Ту будет контент'); infowindow.open(map, this); }); return map;
                    }*/
          </script>

          </div>
        </section>

  <?php require_once('inc/footer.php'); ?>
