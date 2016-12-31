<?php
  $closeButtonHtml = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve"> <g> <path class="close_path1" d="M22.5,6h-21C1.2,6,1,5.8,1,5.5C1,5.2,1.2,5,1.5,5h21C22.8,5,23,5.2,23,5.5C23,5.8,22.8,6,22.5,6z" data-svg-origin="12 5.5" transform="matrix(0.7071,0.7071,-0.7071,0.7071,7.4038059222874395,0.12563132923541787)" style="z-index: 0;"></path> <path class="close_path2" d="M22.5,13h-21C1.2,13,1,12.8,1,12.5C1,12.2,1.2,12,1.5,12h21c0.3,0,0.5,0.2,0.5,0.5C23,12.8,22.8,13,22.5,13z" data-svg-origin="1 12" transform="matrix(0,0,0,1,12,0)" style="z-index: 0;"></path> <path class="close_path3" d="M22.5,20h-21C1.2,20,1,19.8,1,19.5C1,19.2,1.2,19,1.5,19h21c0.3,0,0.5,0.2,0.5,0.5C23,19.8,22.8,20,22.5,20z" data-svg-origin="12 19.5" transform="matrix(0.7071,-0.7071,0.7071,0.7071,-10.27386360737625,7.196699141100892)" style="z-index: 0;"></path></g></svg>';
?>

    <!-- Video -->
    <div class="remodal remodal--browser remodal--video" data-remodal-id="getVideo" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
                <li class="c-control c-control--close"></li>
                <li class="c-control c-control--min"></li>
                <li class="c-control c-control--max"></li>
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                    <!-- video youtube -->
                    <div id="videoDialogPlayer" class="vidflex"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- visa request online popup -->
    <div class="remodal remodal--browser remodal--action remodal--action_large" data-remodal-id="get_request_visa_online" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
                <li class="c-control c-control--close"></li>
                <li class="c-control c-control--min"></li>
                <li class="c-control c-control--max"></li>
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                  <div class="site-form site-form--basic-outlined site-form--callback site-form--action">
                    <div class="site-form--basic-outlined__inner">
                          <h3 class="site-form__header"><span>Запись на оформление визы в офисе</span></h3>
                          <form method="POST" action="/ajax.php">
                              <input type="hidden" name="form_task" value="get_request_visa_online">
                              <input type="hidden" name="form_subject" class="form_subject">

                            <div class="site-form__column-wrapper">
                              <div class="col col--6-of-12 col--s-1-of-1">
                                <div class="site-form__field">
                                    <div class="site-form__field-control" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel required" type="text" id="user_name--visa-request" name="user_name--visa-request" required="">
                                          <label for="user_name--visa-request" class="site-form__input-label">
                                            <span class="site-form__input-label-content">Имя</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="site-form__field">
                                    <div class="site-form__field-control" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel required" type="text" id="user_phone--visa-request" name="user_phone--visa-request" required="">
                                          <label for="user_phone--visa-request" class="site-form__input-label">
                                            <span class="site-form__input-label-content">Телефон</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="site-form__field">
                                    <div class="site-form__field-control" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel required" type="text" id="user_email--visa-request" name="user_email--visa-request" required="">
                                          <label for="user_email--visa-request" class="site-form__input-label">
                                            <span class="site-form__input-label-content">Email</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="site-form__field">
                                    <div class="site-form__field-control site-form__field-control--with-sibling" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel flatpickr flatpickr--calendar-only" type="text" id="user_date--visa-request" name="user_date--visa-request">
                                          <label for="user_datetime--visa-request" class="site-form__input-label--small">
                                            <span class="site-form__input-label-content">Дата</span>
                                          </label>
                                        </div>
                                    </div>
                                    <div class="site-form__field-control site-form__field-control--with-sibling" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel flatpickr flatpickr--time-only" type="text" id="user_time--visa-request" name="user_time--visa-request">
                                          <label for="user_datetime--visa-request" class="site-form__input-label--small">
                                            <span class="site-form__input-label-content">Удобное для Вас время звонка</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                              </div>
                              <div class="col col--6-of-12 col--s-1-of-1">

                                <div class="site-form__field site-form__field--no-margin">
                                    <div class="site-form__field-control" >
                                        <div class="site-form__field-id">
                                            <select class="sumoselect sumoselect--search site-form__selectbox site-form__selectbox--geopoint" id="user_geo-point--visa-request" name="user_geo-point--visa-request">
                                              <option value="1">Москва</option>
                                              <option value="2">Новосибирск</option>
                                              <option value="3">Троицк</option>
                                              <option value="4">Кемерово</option>
                                              <option value="5">Якутск</option>
                                              <option value="6">Краснодар</option>
                                              <option value="7">Ростов-на-Дону</option>
                                              <option value="8">Прокопьевск</option>
                                              <option value="9">УфаКазань</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="site-form__field">
                                  <div class="icons-set icons-set--icon-color_blue-toxic contacts-details">
                                      <div class="icons-set__item">
                                          <div class="icons-set__item__field ">
                                              <div class="icons-set__item__icon-wrap"><i class="icon icon--location_marker icons-set__item__icon"></i>
                                              </div>
                                          </div>
                                          <div class="icons-set__item__field">
                                              <h3 class="icons-set__item__title">ул. Шухова 14, стр.9</h3>
                                          </div>
                                      </div>
                                      <div class="icons-set__item">
                                          <div class="icons-set__item__field ">
                                              <div class="icons-set__item__icon-wrap"><i class="icon icon--office-phone icons-set__item__icon"></i>
                                              </div>
                                          </div>
                                          <div class="icons-set__item__field">
                                              <h3 class="icons-set__item__title">8-800-505-31-04</h3>
                                          </div>
                                      </div>
                                      <div class="icons-set__item">
                                          <div class="icons-set__item__field ">
                                              <div class="icons-set__item__icon-wrap"><i class="icon icon--shake_phone icons-set__item__icon"></i>
                                              </div>
                                          </div>
                                          <div class="icons-set__item__field">
                                              <h3 class="icons-set__item__title">+7 965-321-88-11 </h3>
                                          </div>
                                      </div>
                                      <div class="icons-set__item">
                                          <div class="icons-set__item__field ">
                                              <div class="icons-set__item__icon-wrap"><i class="icon icon--message icons-set__item__icon"></i>
                                              </div>
                                          </div>
                                          <div class="icons-set__item__field">
                                              <h3 class="icons-set__item__title">office@visatourservice.ru</h3>
                                          </div>
                                      </div>
                                      <div class="icons-set__item">
                                          <div class="icons-set__item__field ">
                                              <div class="icons-set__item__icon-wrap"><i class="icon icon--skype_contact icons-set__item__icon"></i>
                                              </div>
                                          </div>
                                          <div class="icons-set__item__field">
                                              <h3 class="icons-set__item__title">vts-consalting</h3>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col col--1-of-1 col--centered-inline">
                                <button type="submit" name="submit-btn" class="btn btn--yellow btn--large btn--submit-action progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Отправить заявку</button>
                              </div>
                            </div>

                          </form>

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- biometry popup -->
    <div class="remodal remodal--browser remodal--action" data-remodal-id="get_request_biometry" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
                <li class="c-control c-control--close"></li>
                <li class="c-control c-control--min"></li>
                <li class="c-control c-control--max"></li>
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                  <div class="site-form site-form--basic-outlined site-form--callback site-form--action">
                    <div class="site-form--basic-outlined__inner">
                          <h3 class="site-form__header"><span>Записаться на биометрию</span></h3>
                          <form method="POST" action="/ajax.php">
                              <input type="hidden" name="form_task" value="get_request_biometry">
                              <input type="hidden" name="form_subject" value="Заявка: Запись на биометрию">

                            <div class="site-form__column-wrapper">
                              <div class="col col--centered">
                                <div class="site-form__field">
                                    <div class="site-form__field-control" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel required" type="text" id="user_name--biometry-request" name="user_name--biometry-request" required="">
                                          <label for="user_name--biometry-request" class="site-form__input-label">
                                            <span class="site-form__input-label-content">Имя</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="site-form__field">
                                    <div class="site-form__field-control" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel required" type="text" id="user_phone--biometry-request" name="user_phone--biometry-request" required="">
                                          <label for="user_phone--biometry-request" class="site-form__input-label">
                                            <span class="site-form__input-label-content">Телефон</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="site-form__field">
                                    <div class="site-form__field-control" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel required" type="text" id="user_city--biometry-request" name="user_city--biometry-request" required="">
                                          <label for="user_city--biometry-request" class="site-form__input-label">
                                            <span class="site-form__input-label-content">Город</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="site-form__field">
                                    <div class="site-form__field-control site-form__field-control--with-sibling" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel flatpickr flatpickr--calendar-only" type="text" id="user_date--biometry-request" name="user_date--biometry-request">
                                          <label for="user_datetime--biometry-request" class="site-form__input-label--small">
                                            <span class="site-form__input-label-content">Дата</span>
                                          </label>
                                        </div>
                                    </div>
                                    <div class="site-form__field-control site-form__field-control--with-sibling" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel flatpickr flatpickr--time-only" type="text" id="user_time--biometry-request" name="user_time--biometry-request">
                                          <label for="user_datetime--courier-request" class="site-form__input-label--small">
                                            <span class="site-form__input-label-content">время</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                              </div>

                              <div class="col col--1-of-1 col--centered-inline">
                                <button type="submit" name="submit-btn" class="btn btn--yellow btn--large btn--submit-action progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Отправить заявку</button>
                              </div>
                            </div>

                          </form>

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courier popup -->
    <div class="remodal remodal--browser remodal--action" data-remodal-id="get_request_courier" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
                <li class="c-control c-control--close"></li>
                <li class="c-control c-control--min"></li>
                <li class="c-control c-control--max"></li>
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                  <div class="site-form site-form--basic-outlined site-form--callback site-form--action">
                    <div class="site-form--basic-outlined__inner">
                          <h3 class="site-form__header"><span>Вызвать курьера</span></h3>
                          <form method="POST" action="/ajax.php">
                              <input type="hidden" name="form_task" value="get_request_courier">
                              <input type="hidden" name="form_subject" value="Заявка: Вызов курьера">

                            <div class="site-form__column-wrapper">
                              <div class="col col--centered">
                                <div class="site-form__field">
                                    <div class="site-form__field-control" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel required" type="text" id="user_name--courier-request" name="user_name--courier-request" required="">
                                          <label for="user_name--courier-request" class="site-form__input-label">
                                            <span class="site-form__input-label-content">Имя</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="site-form__field">
                                    <div class="site-form__field-control" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel required" type="text" id="user_phone--courier-request" name="user_phone--courier-request" required="">
                                          <label for="user_phone--courier-request" class="site-form__input-label">
                                            <span class="site-form__input-label-content">Телефон</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="site-form__field">
                                    <div class="site-form__field-control" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel required" type="text" id="user_city--courier-request" name="user_city--courier-request" required="">
                                          <label for="user_city--courier-request" class="site-form__input-label">
                                            <span class="site-form__input-label-content">Город</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="site-form__field">
                                    <div class="site-form__field-control site-form__field-control--with-sibling" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel flatpickr flatpickr--calendar-only" type="text" id="user_date--courier-request" name="user_date--courier-request">
                                          <label for="user_datetime--courier-request" class="site-form__input-label--small">
                                            <span class="site-form__input-label-content">Дата</span>
                                          </label>
                                        </div>
                                    </div>
                                    <div class="site-form__field-control site-form__field-control--with-sibling" >
                                        <div class="site-form__field-id">
                                          <input class="site-form__input floatLabel flatpickr flatpickr--time-only" type="text" id="user_time--courier-request" name="user_time--courier-request">
                                          <label for="user_datetime--courier-request" class="site-form__input-label--small">
                                            <span class="site-form__input-label-content">время</span>
                                          </label>
                                        </div>
                                    </div>

                                </div>
                              </div>

                              <div class="col col--1-of-1 col--centered-inline">
                                <button type="submit" name="submit-btn" class="btn btn--yellow btn--large btn--submit-action progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Отправить заявку</button>
                              </div>
                            </div>

                          </form>

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- IMAGES WITH ZOOM -->
    <div class="remodal remodal--action remodal--browser remodal--zoom-images" data-remodal-id="get_zoomable_image" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
                <li class="c-control c-control--close"></li>
                <li class="c-control c-control--min"></li>
                <li class="c-control c-control--max"></li>
                <!-- <li class="c-nav">
                  <div class="remodal-zoom-toolbar" id="remodal-zoom-toolbar"><span id="zoom-in--remodal" class="lg-icon--remodal lg-zoom-in--remodal"></span><span id="zoom-out--remodal" class="lg-icon--remodal lg-zoom-out--remodal"></span><span id="actual-size--remodal" class="lg-icon--remodal lg-actual-size--remodal"></span>
                  </div>
                </li> -->
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content">
          <div class="zoom-scene-overlay">
            <!-- <div class="zoom-scene-preloader">
              <div class="css_spinner wf">
                <span class="side s_left"> <span class="fill"></span> </span>
                <span class="side s_right"> <span class="fill"></span> </span>
              </div>
            </div> -->
          </div>
          <div id="zoom-images" class="zoom-images">
          </div>
        </div>
    </div>



    <!-- CALL BACK -->
    <div class="remodal remodal--action remodal--browser remodal--callback" data-remodal-id="get_callback" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
                <li class="c-control c-control--close"></li>
                <li class="c-control c-control--min"></li>
                <li class="c-control c-control--max"></li>
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                  <div class="site-form site-form--basic-outlined site-form--callback site-form--action">
                    <div class="site-form--basic-outlined__inner">
                          <h3 class="site-form__header"><span>Связаться с менеджером</span></h3>
                          <p class="site-form__subheader">Оставьте заявку и мы перезвоним Вам <br />в течении 10 минут</p>
                          <form method="POST" action="/ajax.php">
                              <input type="hidden" name="form_task" value="get_callback">
                              <div class="form-group form-group--first">
                                  <label for="user_name--callback">Как Вас зовут:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_name--callback" name="user_name--callback" placeholder="Иван Петрович">
                                  </div>
                              </div>
                              <div class="form-group ">
                                  <label for="user_phone--callback">Номер телефона:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_phone--callback" name="user_phone--callback" placeholder="+7 (900) 123 45 67">
                                  </div>
                              </div>
                              <button type="submit" name="submit-btn" class="btn btn--brown btn--large btn--bordered btn--submit-action progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Отправить заявку</button>
                          </form>

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- get promotion-info -->
    <div class="remodal remodal--action remodal--browser remodal--promotion" data-remodal-id="get_promotion_info" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
                <li class="c-control c-control--close"></li>
                <li class="c-control c-control--min"></li>
                <li class="c-control c-control--max"></li>
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                  <div class="site-form site-form--basic-outlined site-form--promotion site-form--action">
                    <div class="site-form--basic-outlined__inner">
                          <h3 class="site-form__header"><span>Подробнее</span><span>об акции</span></h3>
                          <p class="site-form__subheader">Оставьте заявку и мы перезвоним Вам <br />в течении 10 минут</p>
                          <form method="POST" action="/ajax.php">
                              <input type="hidden" name="form_task" value="get_promotion_info">
                              <div class="form-group form-group--first">
                                  <label for="user_name--promotion">Как Вас зовут:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_name--promotion" name="user_name--promotion" placeholder="Иван Петрович">
                                  </div>
                              </div>
                              <div class="form-group ">
                                  <label for="user_phone--promotion">Номер телефона:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_phone--promotion" name="user_phone--promotion" placeholder="+7 (900) 123 45 67">
                                  </div>
                              </div>
                              <button type="submit" name="submit-btn" class="btn btn--brown btn--large btn--bordered btn--submit-action progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Отправить заявку</button>
                          </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- GRANT -->
    <div class="remodal remodal--action remodal--browser remodal--grant" data-remodal-id="get_grant" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
                <li class="c-control c-control--close"></li>
                <li class="c-control c-control--min"></li>
                <li class="c-control c-control--max"></li>
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                  <div class="site-form site-form--basic-outlined site-form--grant site-form--action">
                    <div class="site-form--basic-outlined__inner">
                          <h3 class="site-form__header"><span>Узнайте</span><span class="outlined">как получить грант</span></h3>
                          <p class="site-form__subheader">заполните простую анкету</p>
                          <form method="POST" action="/ajax.php">
                              <input type="hidden" name="form_task" value="get_grant">
                              <div class="form-group form-group--first">
                                  <label for="user_name--grant">Как Вас зовут:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_name--grant" name="user_name--grant" placeholder="Иван Петрович">
                                  </div>
                              </div>
                              <div class="form-group ">
                                  <label for="user_email--grant">Email:</label>
                                  <div class="form-input-wrapper">
                                    <input type="email" class="form-control required" id="user_email--grant" name="user_email--grant" placeholder="example@yandex.ru">
                                  </div>
                              </div>
                              <div class="form-group ">
                                  <label for="user_phone--grant">Номер телефона:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_phone--grant" name="user_phone--grant" placeholder="+7 (900) 123 45 67">
                                  </div>
                              </div>
                              <div class="form-group ">
                                  <label for="user_site--grant">Ваш сайт:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_site--grant" name="user_site--grant" placeholder="www.google.ru">
                                  </div>
                              </div>
                              <button type="submit" name="submit-btn" class="btn btn--brown btn--large btn--bordered btn--submit-action progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Получить грант</button>
                          </form>

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- seo-landing -->
    <div class="remodal remodal--action remodal--browser remodal--seo-landing" data-remodal-id="get_seo_landing" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
                <li class="c-control c-control--close"></li>
                <li class="c-control c-control--min"></li>
                <li class="c-control c-control--max"></li>
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                  <div class="site-form site-form--basic-outlined site-form--promotion site-form--action">
                    <div class="site-form--basic-outlined__inner">
                          <h3 class="site-form__header"><span class="outlined">Seo-лендинг</span><span>расчёт стоимости</span></h3>
                          <p class="site-form__subheader">Оставьте заявку и мы перезвоним Вам <br />в течении 10 минут</p>
                          <form method="POST" action="/ajax.php">
                              <input type="hidden" name="form_task" value="get_seo_landing">
                              <div class="form-group form-group--first">
                                  <label for="user_name--seo-landing">Как Вас зовут:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_name--seo-landing" name="user_name--seo-landing" placeholder="Иван Петрович">
                                  </div>
                              </div>
                              <div class="form-group ">
                                  <label for="user_phone--seo-landing">Номер телефона:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_phone--seo-landing" name="user_phone--seo-landing" placeholder="+7 (900) 123 45 67">
                                  </div>
                              </div>
                              <button type="submit" name="submit-btn" class="btn btn--brown btn--large btn--bordered btn--submit-action progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Отправить заявку</button>
                          </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- get_order (dynamic) -->
    <div class="remodal remodal--action remodal--browser remodal--get-order" data-remodal-id="get_order" data-remodal-options="hashTracking: false" id="get_order" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
                <li class="c-control c-control--close"></li>
                <li class="c-control c-control--min"></li>
                <li class="c-control c-control--max"></li>
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                  <div class="site-form site-form--basic-outlined site-form--promotion site-form--action">
                    <div class="site-form--basic-outlined__inner">
                          <h3 class="site-form__header"><span id="selected_tarif-title" class="outlined">Пакет «Начальный»</span></h3>
                          <p class="site-form__subheader">Введите свои данные. С вами свяжется специалист, который оветит на возникшие вопросы и поможет приобрести пакет услуг.</p>
                          <form method="POST" action="/ajax.php">
                              <input type="hidden" name="form_task" value="get_order">
                              <input type="hidden" name="tarif" id="tarif" value="1">
                              <div class="form-group form-group--first">
                                  <label for="user_name--order">Как Вас зовут:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_name--order" name="user_name--order" placeholder="Иван Петрович">
                                  </div>
                              </div>
                              <div class="form-group ">
                                  <label for="user_phone--order">Номер телефона:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_phone--order" name="user_phone--order" placeholder="+7 (900) 123 45 67">
                                  </div>
                              </div>
                              <button type="submit" name="submit-btn" class="btn btn--brown btn--large btn--bordered btn--submit-action progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Отправить заявку</button>
                          </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
