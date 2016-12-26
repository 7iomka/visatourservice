<?php require_once('inc/header.php'); ?>
<main class="page page--visa-c-country">

	<div class="header-section header-section--with-banner parallax-section parallax-section--header">
		<div class="parallax-image" style="background-image: url('http://cdn-adventure-tours.themedelight.com/wp-content/uploads/2015/07/alaska.jpg'); background-repeat: no-repeat; background-position: 50% 0;"></div>
		<div class="container">
			<div class="breadcrumbs">
				<ul>
					<li><a href="/">Главная</a></li>
					<li><a href="/visa-c.php">Краткосрочные визы</a></li>
					<li>Австрия</li>
				</ul>
			</div>
		</div>
		<div class="header-section__content">
			<h1 class="header-section__title">
				<span class="header-section__title-text">Оформление визы онлайн</span>
			</h1>

		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="header-section padding-left padding-right header-section--order">
				<div class="header-section__content header-section__content--anonce">
					<div class="col col--1-of-1">
						<div class="header-section__anonce">

						<div class="row">
								<div class="step__controller">
								<div class="col col--8-of-12 col--s-1-of-1">
									<div class="step__identifier">
										Шаг <span id="step__id">1</span>
									</div>
									<div class="step__name">Заполните форму</div>
								</div>
								<div class="col col--4-of-12 col--s-1-of-1">
									<ul class="step__progressbar">
										<li class="step__progressbar-item active" data-slide-ref-num="1" data-slide-ref-name="Заполните форму"></li>
										<li class="step__progressbar-item" data-slide-ref-num="2" data-slide-ref-name="Ответьте на вопросы"></li>
										<li class="step__progressbar-item" data-slide-ref-num="3" data-slide-ref-name="Отправьте нам фотографии или отсканированные документы"></li>
										<li class="step__progressbar-item" data-slide-ref-num="4" data-slide-ref-name="Оплатите визу онлайн"></li>
									</ul>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container page-container order-container">
				<div class="row">
					<div class="section-white-box">
						<div class="section-row">

							<div class="site-form site-form--basic-outlined site-form--callback site-form--action">
								<div class="site-form--basic-outlined__inner">
									<form id="order-online-form" method="POST" action="/ajax.php">
										<input type="hidden" name="form_task" value="get_request_visa_online">
										<div class="step__slider">
											<!-- step slider -->
											<div class="swiper-container swiper-content">
												<div class="swiper-wrapper">
													<div class="swiper-slide step__slide step__slide--1">
														<fieldset data-check-id="1">
															<div class="site-form__column-wrapper">
																<div class="col col--6-of-12 col--s-1-of-1" >
																	<div class="site-form__field">
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<input tabindex="1" class="site-form__input floatLabel required" type="text" id="user_surname" name="user_surname">
																				<label for="user_surname" class="site-form__input-label">
																					<span class="site-form__input-label-content">Фамилия</span>
																				</label>
																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>
																	<div class="site-form__field">
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<input tabindex="2" class="site-form__input floatLabel required" type="text" id="user_name" name="user_name">
																				<label for="user_name" class="site-form__input-label">
																					<span class="site-form__input-label-content">Имя</span>
																				</label>
																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>
																	<div class="site-form__field">
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<input tabindex="3" class="site-form__input floatLabel required" type="text" id="user_patronymic" name="user_patronymic">
																				<label for="user_patronymic" class="site-form__input-label">
																					<span class="site-form__input-label-content">Отчество</span>
																				</label>
																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>
																</div>
																<div class="col col--6-of-12 col--s-1-of-1" >
																	<div class="site-form__field">
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<input tabindex="4" class="site-form__input floatLabel required" type="text" id="user_phone" name="user_phone">
																				<label for="user_phone" class="site-form__input-label">
																						<span class="site-form__input-label-content">Телефон</span>
																					</label>
																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>
																	<div class="site-form__field">
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<input tabindex="5" class="site-form__input floatLabel required" type="text" id="user_email" name="user_email">
																				<label for="user_email" class="site-form__input-label">
																						<span class="site-form__input-label-content">Email</span>
																					</label>
																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="step__slide-nav">
																<div class="step__slide-nav-control">
																	<a tabindex="6" class="btn btn--large btn--yellow step__slide-next" data-slide-ref-num="2" data-slide-ref-name="Ответьте на вопросы">Далее</a>
																</div>
															</div>
														</fieldset>
													</div>
													<div class="swiper-slide step__slide step__slide--2">
														<fieldset data-check-id="2" class="hidden">
															<div class="site-form__column-wrapper order__questions">
																<div class="col col--1-of-1 col--s-1-of-1">
																	<div class="site-form__field">
																		<div class="order__question-header">
																			<div class="order__question-title">
																				1. Куда вы едете?
																			</div>
																		</div>
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<span class="site-form__select-pre-text">Выберите страну</span>
																				<select class="sumoselect sumoselect--search site-form__selectbox--geocountry" id="geo-country" name="geo-country" >
				                                  <option value="at">Австрия</option>
				                                  <option value="dk">Дания</option>
				                                  <option value="hu">Венгрия</option>
				                                </select>

																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>
																	<div class="site-form__field" data-swiper-parallax="-100">
																		<div class="order__question-header">
																			<div class="order__question-title">
																				2. Какова цель поездки?
																			</div>
																		</div>
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="purpose" id="purpose1" value="Туристическая" checked>
																						 Туристическая
																					 </label>
																				 </div>
																				 <div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="purpose" id="purpose2" value="По приглашению">
																						По приглашению
																					 </label>
																				 </div>

																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>

																	<!-- Подтверждение проживания -->
																	<div class="site-form__field" data-swiper-parallax="-100">
																		<div class="order__question-header">
																			<div class="order__question-title">
																				3. Есть ли у вас подтверждение проживания?
																			</div>
																		</div>
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="accommodation" id="accommodation1" value="Да" checked>
																						 Да
																					 </label>
																				 </div>
																				 <div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="accommodation" id="accommodation2" value="Нет">
																						Нет
																					 </label>
																				 </div>
																				 <div class="site-form__check site-form__check--checkbox coloured">
																			      <label>
																			        <input type="checkbox" id="order-accomodation" name="order-accomodation"><span class="site-form__check-input checkbox-material"><span class="check"></span></span> Заказать у VisaTourService
																			      </label>
																			   </div>
																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>
																		<!-- /Подтверждение проживания -->

																	<!-- Статус -->
																	<div class="site-form__field" data-swiper-parallax="-200">
																		<div class="order__question-header">
																			<div class="order__question-title">
																				4. Укажите Ваш статус
																			</div>
																		</div>
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="employment" id="employment1" value="Школьник" checked>
																						 Школьник
																					 </label>
																				 </div>
																				 <div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="employment" id="employment2" value="Студент">
																						Студент
																					 </label>
																				 </div>
																				 <div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="employment" id="employment3" value="Работающий">
																						Работающий
																					 </label>
																				 </div>
																				 <div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="employment" id="employment4" value="ИП/ООО">
																						ИП/ООО
																					 </label>
																				 </div>
																				 <div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="employment" id="employment6" value="Пенсионер">
																						Пенсионер
																					 </label>
																				 </div>
																				 <div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="employment" id="employment7" value="Ребёнок">
																						Ребёнок
																					 </label>
																				 </div>
																				 <div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="employment" id="employment8" value="Владелец недвижимости">
																						Владелец недвижимости
																					 </label>
																				 </div>
																				 <div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="employment" id="employment9" value="Безработный">
																						Безработный
																					 </label>
																				 </div>

																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>
																		<!-- /Статус -->

																	<!-- Страховка -->
																	<div class="site-form__field" data-swiper-parallax="-300">
																		<div class="order__question-header">
																			<div class="order__question-title">
																				5. Есть ли у вас страховка?
																			</div>
																		</div>
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="insurance" id="insurance1" value="Да" checked>
																						 Да
																					 </label>
																				 </div>
																				 <div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="insurance" id="insurance2" value="Нет">
																						Нет
																					 </label>
																				 </div>
																				 <div class="site-form__check site-form__check--checkbox coloured">
																			      <label>
																			        <input type="checkbox" id="order-insurance" name="order-insurance"><span class="site-form__check-input checkbox-material"><span class="check"></span></span> Заказать у VisaTourService
																			      </label>
																			   </div>
																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>
																	<!-- /Страховка -->

																	<!-- Дополнительные люди -->
																	<div class="site-form__field" data-swiper-parallax="-400">
																		<div class="order__question-header">
																			<div class="order__question-title">
																				6. Сколько людей едут с Вами?
																			</div>
																		</div>
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<div class="site-form__check spinner" data-trigger="spinner">
																					<label><span class="site-form__check-text">Взрослые и дети старше 6 лет </span><span class="input-number-decrement" data-spin="down">–</span><input class="site-form__check-input input-number" name="adults" id="adults" type="text" data-min="0" value="0" min="0" data-max="50" data-rule="quantity"><span class="input-number-increment" data-spin="up">+</span></label>
																				</div>
																				<div class="site-form__check spinner" data-trigger="spinner">
																					<label><span class="site-form__check-text">Количество детей до 6 лет </span><span class="input-number-decrement" data-spin="down">–</span><input class="site-form__check-input input-number" name="children" id="children" type="text" data-min="0" value="0" min="0" data-max="50" data-rule="quantity"><span class="input-number-increment" data-spin="up">+</span></label>
																				</div>
																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>
																	<!-- /Дополнительные люди -->

																	<!-- Дата рождения -->
																	<div class="site-form__field" data-swiper-parallax="-500">
																		<div class="order__question-header">
																			<div class="order__question-title">
																				7. Дата Вашего рождения
																			</div>
																		</div>
			                              <div class="site-form__field-control">
			                                  <div class="site-form__field-id">
			                                    <input class="site-form__input floatLabel required flatpickr--calendar-only" type="text" id="birthday-date" name="birthday-date">

			                                  </div>
			                              </div>
			                              <div class="site-form__field-error">
			                                  <div class="site-form__error-text"></div>
			                              </div>
			                          	</div>
																	<!-- Дата рождения -->

																	<!-- Семейное положение -->
																	<div class="site-form__field" data-swiper-parallax="-600">
																		<div class="order__question-header">
																			<div class="order__question-title">
																				8. Укажите Ваше семейное положение
																			</div>
																		</div>
																		<div class="site-form__field-control">
																			<div class="site-form__field-id">
																				<div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="marital_status" id="status-single" value="Холост / не замужем" checked>
																						 Холост / не замужем
																					 </label>
																				 </div>
																				 <div class="site-form__check">
																					 <label class="site-form__check-label">
																						 <input class="site-form__check-input" type="radio" name="marital_status" id="status-married" value="Женат / замужем">
																						  Женат / замужем
																					 </label>
																				 </div>
																			</div>
																		</div>
																		<div class="site-form__field-error">
																			<div class="site-form__error-text"></div>
																		</div>
																	</div>
																	<!-- /Семейное положение -->


																</div>

															</div>
															<div class="site-form__column-wrapper order__subtotal">
																<div class="col col--8-of-12 col--s-1-of-1 col--am">
																	<div class="order__subtotal-title"><span class="order__subtotal-title-part">Стоимость оформления </span><span class="order__subtotal-title-part">вашей визы составляет</span></div>
																</div>
																<div class="col col--4-of-12 col--s-1-of-1 col--am">
																	<div class="order__subtotal-price-wrapper">
																		<div class="order__subtotal-price"><span id="subtotal-price">15000</span> руб.</div>
																	</div>
																</div>
															</div>
															<div class="step__slide-nav">
																<div class="step__slide-nav-control">
																	<a class="btn btn--large btn--yellow btn--contour step__slide-prev" data-slide-ref-num="1" data-slide-ref-name="Заполните форму">Назад</a>
																</div>
																<div class="step__slide-nav-control">
																	<a class="btn btn--large btn--yellow step__slide-next" data-slide-ref-num="3" data-slide-ref-name="Отправьте нам фотографии или отсканированные документы">Далее</a>
																</div>
															</div>
														</fieldset>
													</div>
													<div class="swiper-slide step__slide step__slide--3">
														<fieldset data-check-id="3" class="hidden" >
															<div class="site-form__column-wrapper">
																<svg style="display: none">
																	<symbol id="dragging-up" viewBox="0 0 99.004 99.004">
																				<path style="fill: #f4f4f4;" d="M24.123,15.116l-7.164-0.032L34.247,0l18.345,15.147h-8.041v-0.006    c0-2.955-2.396-5.351-5.351-5.351c-2.385,0-4.403,1.561-5.094,3.715c-0.903-1.68-2.675-2.823-4.716-2.823    C26.748,10.682,24.559,12.599,24.123,15.116z M81.467,88.626c-3.427,8.528-21.104,12.144-27.027,9.556    c-3.113-1.361-4.196-4.431-6.938-5.412c-1.08-0.388-4.38-1.429-7.666-3.369c-3.065-1.812-6.054-4.463-8.852-6.549    c-1.919-1.431-3.647-2.681-4.474-3.968c-1.235-1.922-0.908-4.159-1.574-6.207c-1.204-3.702-2.791-7.094-3.415-8.769    c-0.379-1.018,0.657-6.797,0.657-6.797s-2.406-6.221,1.129-6.664c2.355-0.297,5.359,2.242,6.991,5.326    c1.583,2.998,1.078,5.381,1.078,5.381s1.016,0.793,1.263,2.31c0.293,1.8,0.479,2.093,0.444,2.074l0.528,0.051    c0,0,0.737-7.664-1.022-16.98c-0.623-3.301-2.319-7.456-3.417-10.556c-1.073-3.03-1.74-8.814-2.301-11.996    c-0.63-3.581-1.078-7.15-0.919-9.537c0.215-3.238,3.053-4.193,3.824-4.055c1.579,0.284,2.375,0.831,2.67,2.832    c0.249,1.682,1.032,2.748,1.467,4.308c0.638,2.292,0.916,3.491,2.16,5.783c1.205,2.216,1.217,2.803,1.649,4.145    c0.638,1.984,1.672,6.818,2.471,8.119c1.664,2.703,2.3,4.249,2.835,4.85c-0.075-0.121-0.181-0.334-0.311-0.615    c-0.496-0.988-1.332-2.867-2.55-6.22c-0.698-1.924-1.292-3.648-1.794-5.205c-0.579-1.687-1.007-3.026-1.153-3.818    c-0.001-0.007-0.001-0.01-0.002-0.018c-2.075-7.524-1.395-9.884-0.814-12.528c0.426-1.938,1.749-2.542,3.203-2.642    c2.27-0.156,3.546,3.754,4.411,7.516c1.138,4.945,3.392,7.227,4.128,10.087c1.654,6.423,3.378,6.894,3.557,7.495    c0,0,3.295-4.119,6.62-3.03c3.691,1.21,4.765,5.917,4.881,6.781c0.037-0.031,0.454-0.369,0.984-0.625    c0.892-0.615,2.25-1.311,3.453-0.913c3.871,1.28,3.195,4.829,6.479,10.116c1.521,2.454,1.805,4.409,2.031,6.525    c0.636,5.902,2.594,10.683,3.508,18.168c0.471,3.857,0.148,7.33,1.309,9.199C81.854,84.204,82.607,85.781,81.467,88.626z     M63.213,40.453c0,0,0.01-0.009,0.016-0.014c-0.006-0.019-0.01-0.038-0.015-0.051C63.217,40.429,63.217,40.452,63.213,40.453z"></path>
																	</symbol>
																</svg>

																<div class="documents-list">
																			<div class="icons-set icons-set--vertical icons-set--icon-bg_gray-light icons-set--icon-color_green">
																				<div class="row icons-set__row documents-list__grid">
																					<div data-swiper-parallax="-100" class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item" data-col="zagran">
																						<!-- inconset-item -->
																						<div class="icons-set__item">
																								<!-- inconset-item-icon -->
																							<div class="icons-set__item__field icons-set__item__field--icon">
																								<div class="icons-set__item__icon-wrap">
																									<i class="icon icon--passport icons-set__item__icon"></i>

																								</div>
																							</div>
																							<!-- /inconset-item-icon -->
																							<!-- inconset-item-text -->
																							<div class="icons-set__item__field icons-set__item__field--text">
																								<div class="icons-set__item__title">Заграничный паспорт <br>(1 страница)</div>
																								<div class="icons-set__item__desc">
																									<!-- upload form -->
																									<div class="upload-form" id="upload-form--zagran" method="post" action="upload.php" enctype="multipart/form-data">
																										<div class="upload-form__drop">
																											<svg xmlns="http://www.w3.org/2000/svg" class="dragging-up"><use xlink:href="#dragging-up"/></svg>
																											<a class="btn btn--large btn--yellow upload-form__btn"><i class="icon icon--upload upload-form__icon">&nbsp;</i> Прикрепить</a>
																											<input class="upload-form__input" type="file" name="upl" multiple />

																										</div>
																										<ul>
																											<!-- The file uploads will be shown here -->
																										</ul>
																									</div>
																									<!-- /upload form -->
																								</div>
																							</div>
																							<!-- /inconset-item-text -->
																						</div>
																						<!-- /inconset-item -->
																					</div>
																					<div data-swiper-parallax="-200" class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item" data-col="passport-rf">
																						<!-- inconset-item -->
																						<div class="icons-set__item">
																								<!-- inconset-item-icon -->
																							<div class="icons-set__item__field icons-set__item__field--icon">
																								<div class="icons-set__item__icon-wrap">
																									<i class="icon icon--passport icons-set__item__icon"></i>

																								</div>
																							</div>
																							<!-- /inconset-item-icon -->
																							<!-- inconset-item-text -->
																							<div class="icons-set__item__field icons-set__item__field--text">
																								<div class="icons-set__item__title">Паспорт РФ <br>(заполненные страницы)</div>
																								<div class="icons-set__item__desc">
																									<!-- upload form -->
																									<div class="upload-form" id="upload-form--passport-rf" method="post" action="upload.php" enctype="multipart/form-data">
																										<div class="upload-form__drop">
																											<svg xmlns="http://www.w3.org/2000/svg" class="dragging-up"><use xlink:href="#dragging-up"/></svg>
																											<a class="btn btn--large btn--yellow upload-form__btn"><i class="icon icon--upload upload-form__icon">&nbsp;</i> Прикрепить</a>
																											<input class="upload-form__input" type="file" name="upl" multiple />

																										</div>
																										<ul>
																											<!-- The file uploads will be shown here -->
																										</ul>
																									</div>
																									<!-- /upload form -->
																								</div>
																							</div>
																							<!-- /inconset-item-text -->
																						</div>
																						<!-- /inconset-item -->
																					</div>
																					<div data-swiper-parallax="-300" class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item" data-col="birth-certificate">
																						<!-- inconset-item -->
																						<div class="icons-set__item">
																								<!-- inconset-item-icon -->
																							<div class="icons-set__item__field icons-set__item__field--icon">
																								<div class="icons-set__item__icon-wrap">
																									<i class="icon icon--bill icons-set__item__icon"></i>

																								</div>
																							</div>
																							<!-- /inconset-item-icon -->
																							<!-- inconset-item-text -->
																							<div class="icons-set__item__field icons-set__item__field--text">
																								<div class="icons-set__item__title">Свидетельство о рождении</div>
																								<div class="icons-set__item__desc">
																									<!-- upload form -->
																									<div class="upload-form" id="upload-form--birth-certificate" method="post" action="upload.php" enctype="multipart/form-data">
																										<div class="upload-form__drop">
																											<svg xmlns="http://www.w3.org/2000/svg" class="dragging-up"><use xlink:href="#dragging-up"/></svg>
																											<a class="btn btn--large btn--yellow upload-form__btn"><i class="icon icon--upload upload-form__icon">&nbsp;</i> Прикрепить</a>
																											<input class="upload-form__input" type="file" name="upl" multiple />

																										</div>
																										<ul>
																											<!-- The file uploads will be shown here -->
																										</ul>
																									</div>
																									<!-- /upload form -->
																								</div>
																							</div>
																							<!-- /inconset-item-text -->
																						</div>
																						<!-- /inconset-item -->
																					</div>
																					<div data-swiper-parallax="-400" class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item" data-col="residence-certificate">
																						<!-- inconset-item -->
																						<div class="icons-set__item">
																								<!-- inconset-item-icon -->
																							<div class="icons-set__item__field icons-set__item__field--icon">
																								<div class="icons-set__item__icon-wrap">
																									<i class="icon icon--bill icons-set__item__icon"></i>

																								</div>
																							</div>
																							<!-- /inconset-item-icon -->
																							<!-- inconset-item-text -->
																							<div class="icons-set__item__field icons-set__item__field--text">
																								<div class="icons-set__item__title">Подтверждение места проживания</div>
																								<div class="icons-set__item__desc">
																									<!-- upload form -->
																									<div class="upload-form" id="upload-form--residence-certificate" method="post" action="upload.php" enctype="multipart/form-data">
																										<div class="upload-form__drop">
																											<svg xmlns="http://www.w3.org/2000/svg" class="dragging-up"><use xlink:href="#dragging-up"/></svg>
																											<a class="btn btn--large btn--yellow upload-form__btn"><i class="icon icon--upload upload-form__icon">&nbsp;</i> Прикрепить</a>
																											<input class="upload-form__input" type="file" name="upl" multiple />

																										</div>
																										<ul>
																											<!-- The file uploads will be shown here -->
																										</ul>
																									</div>
																									<!-- /upload form -->
																								</div>
																							</div>
																							<!-- /inconset-item-text -->
																						</div>
																						<!-- /inconset-item -->
																					</div>
																					<div data-swiper-parallax="-500" class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item" data-col="work-certificate">
																						<!-- inconset-item -->
																						<div class="icons-set__item">
																								<!-- inconset-item-icon -->
																							<div class="icons-set__item__field icons-set__item__field--icon">
																								<div class="icons-set__item__icon-wrap">
																									<i class="icon icon--bill icons-set__item__icon"></i>

																								</div>
																							</div>
																							<!-- /inconset-item-icon -->
																							<!-- inconset-item-text -->
																							<div class="icons-set__item__field icons-set__item__field--text">
																								<div class="icons-set__item__title">Справка с места учебы</div>
																								<div class="icons-set__item__desc">
																									<!-- upload form -->
																									<div class="upload-form" id="upload-form--work-certificate" method="post" action="upload.php" enctype="multipart/form-data">
																										<div class="upload-form__drop">
																											<svg xmlns="http://www.w3.org/2000/svg" class="dragging-up"><use xlink:href="#dragging-up"/></svg>
																											<a class="btn btn--large btn--yellow upload-form__btn"><i class="icon icon--upload upload-form__icon">&nbsp;</i> Прикрепить</a>
																											<input class="upload-form__input" type="file" name="upl" multiple />

																										</div>
																										<ul>
																											<!-- The file uploads will be shown here -->
																										</ul>
																									</div>
																									<!-- /upload form -->
																								</div>
																							</div>
																							<!-- /inconset-item-text -->
																						</div>
																						<!-- /inconset-item -->
																					</div>
																					<div data-swiper-parallax="-600" class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item" data-col="study-certificate">
																						<!-- inconset-item -->
																						<div class="icons-set__item">
																								<!-- inconset-item-icon -->
																							<div class="icons-set__item__field icons-set__item__field--icon">
																								<div class="icons-set__item__icon-wrap">
																									<i class="icon icon--bill icons-set__item__icon"></i>

																								</div>
																							</div>
																							<!-- /inconset-item-icon -->
																							<!-- inconset-item-text -->
																							<div class="icons-set__item__field icons-set__item__field--text">
																								<div class="icons-set__item__title">Справка с места учёбы</div>
																								<div class="icons-set__item__desc">
																									<!-- upload form -->
																									<div class="upload-form" id="upload-form--study-certificate" method="post" action="upload.php" enctype="multipart/form-data">
																										<div class="upload-form__drop">
																											<svg xmlns="http://www.w3.org/2000/svg" class="dragging-up"><use xlink:href="#dragging-up"/></svg>
																											<a class="btn btn--large btn--yellow upload-form__btn"><i class="icon icon--upload upload-form__icon">&nbsp;</i> Прикрепить</a>
																											<input class="upload-form__input" type="file" name="upl" multiple />

																										</div>
																										<ul>
																											<!-- The file uploads will be shown here -->
																										</ul>
																									</div>
																									<!-- /upload form -->
																								</div>
																							</div>
																							<!-- /inconset-item-text -->
																						</div>
																						<!-- /inconset-item -->
																					</div>
																					<div data-swiper-parallax="-700" class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item" data-col="bank-certefincate">
																						<!-- inconset-item -->
																						<div class="icons-set__item">
																								<!-- inconset-item-icon -->
																							<div class="icons-set__item__field icons-set__item__field--icon">
																								<div class="icons-set__item__icon-wrap">
																									<i class="icon icon--bill icons-set__item__icon"></i>

																								</div>
																							</div>
																							<!-- /inconset-item-icon -->
																							<!-- inconset-item-text -->
																							<div class="icons-set__item__field icons-set__item__field--text">
																								<div class="icons-set__item__title">Справка из банка</div>
																								<div class="icons-set__item__desc">
																									<!-- upload form -->
																									<div class="upload-form" id="upload-form--bank-certefincate" method="post" action="upload.php" enctype="multipart/form-data">
																										<div class="upload-form__drop">
																											<svg xmlns="http://www.w3.org/2000/svg" class="dragging-up"><use xlink:href="#dragging-up"/></svg>
																											<a class="btn btn--large btn--yellow upload-form__btn"><i class="icon icon--upload upload-form__icon">&nbsp;</i> Прикрепить</a>
																											<input class="upload-form__input" type="file" name="upl" multiple />

																										</div>
																										<ul>
																											<!-- The file uploads will be shown here -->
																										</ul>
																									</div>
																									<!-- /upload form -->
																								</div>
																							</div>
																							<!-- /inconset-item-text -->
																						</div>
																						<!-- /inconset-item -->
																					</div>
																					<div data-swiper-parallax="-800" class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item" data-col="previous-visas">
																						<!-- inconset-item -->
																						<div class="icons-set__item">
																								<!-- inconset-item-icon -->
																							<div class="icons-set__item__field icons-set__item__field--icon">
																								<div class="icons-set__item__icon-wrap">
																									<i class="icon icon--visa-extrance icons-set__item__icon"></i>
																								</div>
																							</div>
																							<!-- /inconset-item-icon -->
																							<!-- inconset-item-text -->
																							<div class="icons-set__item__field icons-set__item__field--text">
																								<div class="icons-set__item__title">Предыдушие визы <br>(все, которые есть)</div>
																								<div class="icons-set__item__desc">
																									<!-- upload form -->
																									<div class="upload-form" id="upload-form--previous-visas" method="post" action="upload.php" enctype="multipart/form-data">
																										<div class="upload-form__drop">
																											<svg xmlns="http://www.w3.org/2000/svg" class="dragging-up"><use xlink:href="#dragging-up"/></svg>
																											<a class="btn btn--large btn--yellow upload-form__btn"><i class="icon icon--upload upload-form__icon">&nbsp;</i> Прикрепить</a>
																											<input class="upload-form__input" type="file" name="upl" multiple />

																										</div>
																										<ul>
																											<!-- The file uploads will be shown here -->
																										</ul>
																									</div>
																									<!-- /upload form -->
																								</div>
																							</div>
																							<!-- /inconset-item-text -->
																						</div>
																						<!-- /inconset-item -->
																					</div>



																				</div>
																			</div>
																</div>
															</div>
															<div class="step__slide-nav">
																<div class="step__slide-nav-control">
																	<a class="btn btn--large btn--yellow btn--contour step__slide-prev" data-slide-ref-num="2" data-slide-ref-name="Ответьте на вопросы">Назад</a>
																</div>
																<div class="step__slide-nav-control">
																	<a class="btn btn--large btn--yellow step__slide-next" data-slide-ref-num="4" data-slide-ref-name="Оплатите визу онлайн">Далее</a>
																</div>
															</div>
														</fieldset>
													</div>
													<div class="swiper-slide step__slide step__slide--4">
														<fieldset data-check-id="4" class="hidden">
															<div class="site-form__column-wrapper" style="position: relative; padding: 40px 20px;">
																<div class="col col--1-of-1">
																	<div class="country-destination-bg" style="background-image: url(img/section-bg/section-inverse-bg2.jpg);"></div>

																		<div class="checkout-preview">



																			<div class="col col--1-of-1 ">
																						<!-- checkout -->
																						<div class="checkout">

																								<div class="checkout__supheader-wrapper">Детали Вашего заказа:</div>
																								<div class="checkout__header">
																										<div class="checkout__logo-wrapper">
																												<img src="img/logo_icon.png" class="checkout__logo">
																										</div>

																										<div class="checkout__header-info">
																												<span class="checkout__date" id="checkout__date">25.04.2016</span>
																												<span class="checkout__ref">Номер заявки: <span id="checkout__order-number">10254</span></span>
																										</div>
																								</div>

																								<div class="checkout__subheader-wrapper">
																										<div class="checkout__subheader">
																												<h3 class="checkout__username">
																													<span id="checkout__surname"></span>
																													<span id="checkout__name"></span>
																													<span id="checkout__patronymic"></span>
																												</h3>
																												<span class="checkout__user-data checkout__user-data-birthday"><i class="icon icon--calendar15 checkout__user-data-icon"></i><span id="checkout__birthdate"></span></span>
																												<span class="checkout__user-data"><i class="icon icon--shake_phone checkout__user-data-icon"></i><span id="checkout__phone"></span></span>
																												<span class="checkout__user-data"><i class="icon icon--message checkout__user-data-icon"></i><span id="checkout__email"></span></span>
																										</div>
																								</div>

																								<div class="checkout__cart checkout__cart--questionnaire">
																										<h3 class="checkout__cart-title">Данные анкеты:</h3>
																										<ul class="checkout__cart-list">
																												<li class="checkout__cart-item">
																														<span class="checkout__item-name">Выбранная страна:</span>
																														<div class="checkout__item-value"><span title="Германия" alt="Германия" class="flag-icon flag-icon--de country-icon visa-long__country-icon" id="checkout__selected-country-icon"></span><span class="country-name visa-long__country-name" id="checkout__selected-country" title="Германия">Германия</span></div>
																												</li>
																												<li class="checkout__cart-item">
																														<span class="checkout__item-name">Цель:</span>
																														<div class="checkout__item-value" id="checkout__purpose">Туризм</div>
																												</li>
																												<li class="checkout__cart-item">
																														<span class="checkout__item-name">Подтверждение проживания:</span>
																														<div class="checkout__item-value"><span id="checkout__accommodation">Нет<span><span class="checkout__comma">, </span><span id="checkout__accommodation-vts">заказано оформление</span></div>
																												</li>
																												<li class="checkout__cart-item">
																														<span class="checkout__item-name">Статус:</span>
																														<div class="checkout__item-value" id="checkout__employment">Работающий</div>
																												</li>
																												<li class="checkout__cart-item">
																														<span class="checkout__item-name">Страховка:</span>
																														<div class="checkout__item-value"><span id="checkout__insurance">Нет<span><span class="checkout__comma">, </span><span id="checkout__insurance-vts">заказано оформление</span></div>
																												</li>
																												<li class="checkout__cart-item">
																														<span class="checkout__item-name">Семейное положение </span>
																														<div class="checkout__item-value" id="checkout__marital-status">Холост/не замужем</div>
																												</li>

																										</ul>
																								</div>
																								<div class="checkout__cart">
																										<h3 class="checkout__cart-title">Расчёт стоимости:</h3>
																										<ul class="checkout__cart-list">
																												<li class="checkout__cart-item">
																														<span class="checkout__index">1</span>
																														<span class="checkout__item-name">Взрослые <span class="checkout__q">&#215; <span class="checkout__q-num" id="checkout__adults">2</span></span>
																														<span class="checkout__per">(3500Р/чел.)</span></span>
																														<span class="checkout__item-price">7000<span class="price-symbol-rub">р.</span></span>
																												</li>
																												<li class="checkout__cart-item">
																														<span class="checkout__index">2</span>
																														<span class="checkout__item-name">Дети <span class="checkout__q">&#215; <span class="checkout__q-num" id="checkout__children">2</span></span>
																														<span class="checkout__per">(2500Р/чел.)</span></span>
																														<span class="checkout__item-price">5000<span class="price-symbol-rub">р.</span></span>
																												</li>
																												<li class="checkout__cart-item">
																														<span class="checkout__cart-total">Сумма к оплате</span>
																														<span class="checkout__item-price checkout__item-price--final">12000<span class="price-symbol-rub">р.</span></span>
																												</li>
																										</ul>
																										<div class="question question_form">
																											<div class="question-title">Что включено в стоимость<span class="question-icon">?</span></div>
																							      	<div class="question-answer">
																												<div class="qtip_content hidden">
																													<p class="title qtip_title">В стоимость включено:</p>
																													<div class="qtip_description">
																															<div class="tip_div">
																																<ul class="vts-list">
																																	<li>Консультация</li>
																																	<li>Проверка документов</li>
																																	<li>Подготовка документов (ваучера и авиабилета)</li>
																																	<li>Перевод 2-х сопроводительных документов</li>
																																</ul>
																																<p>Стоимость страховки не включена в стоимость и <strong>оценивается отдельно.</strong></p>
																															</div>
																													</div>
																												</div>
																							      	</div>
																								    </div>
																								</div>
																								<div class="checkout__footer">
																									<div class="pay__btn-wrapper">
																										<a class="btn btn--large btn--yellow pay__btn">Перейти к оплате</a>
																									</div>
																								</div>
																						</div>
																						<!-- /checkout -->




																					</div>


																		</div>

																</div>
															</div>
														</fieldset>
													</div>
												</div>
										 </div>

										</div>





									</form>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>


</main>

<?php require_once('inc/footer.php'); ?>
