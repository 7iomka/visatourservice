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
										<li class="step__progressbar-item active"></li>
										<li class="step__progressbar-item"></li>
										<li class="step__progressbar-item"></li>
										<li class="step__progressbar-item"></li>
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
					<div class="section-white-box padding-all">
						<div class="section-row">

							<div class="site-form site-form--basic-outlined site-form--callback site-form--action">
								<div class="site-form--basic-outlined__inner">
									<form method="POST" action="/ajax.php">
										<input type="hidden" name="form_task" value="get_request_visa_online">

										<fieldset data-check-id="1" class="hidden" data-complete="true">
											<div class="site-form__column-wrapper">
												<div class="col col--6-of-12 col--s-1-of-1">
													<div class="site-form__field">
														<div class="site-form__field-control">
															<div class="site-form__field-id">
																<input class="site-form__input required" type="text" id="user_surname" name="user_surname">
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
																<input class="site-form__input required" type="text" id="user_name" name="user_name">
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
																<input class="site-form__input required" type="text" id="user_patronymic" name="user_patronymic">
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
												<div class="col col--6-of-12 col--s-1-of-1">
													<div class="site-form__field">
														<div class="site-form__field-control">
															<div class="site-form__field-id">
																<input class="site-form__input required" type="text" id="user_phone" name="user_phone">
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
																<input class="site-form__input required" type="text" id="user_email" name="user_email">
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
										</fieldset>
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
														<div class="site-form__field-error">
															<div class="site-form__error-text"></div>
														</div>
													</div>
													<div class="site-form__field">
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
													<div class="site-form__field">
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
															        <input type="checkbox" name="order-accomodation"><span class="site-form__check-input checkbox-material"><span class="check"></span></span> Заказать у VisaTourService
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
													<div class="site-form__field">
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
														<div class="site-form__field">
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
																        <input type="checkbox" name="order-insurance"><span class="site-form__check-input checkbox-material"><span class="check"></span></span> Заказать у VisaTourService
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
														<div class="site-form__field">
															<div class="order__question-header">
																<div class="order__question-title">
																	6. Сколько людей едут с Вами?
																</div>
															</div>
															<div class="site-form__field-control">
																<div class="site-form__field-id">
																	<div class="site-form__check spinner" data-trigger="spinner">
																		<label><span class="site-form__check-text">Взрослые и дети старше 6 лет </span><span class="input-number-decrement" data-spin="down">–</span><input class="site-form__check-input input-number" name="adults" type="text" data-min="0" value="0" min="0" data-max="50" data-rule="quantity"><span class="input-number-increment" data-spin="up">+</span></label>
																	</div>
																	<div class="site-form__check spinner" data-trigger="spinner">
																		<label><span class="site-form__check-text">Количество детей до 6 лет </span><span class="input-number-decrement" data-spin="down">–</span><input class="site-form__check-input input-number" name="children" type="text" data-min="0" value="0" min="0" data-max="50" data-rule="quantity"><span class="input-number-increment" data-spin="up">+</span></label>
																	</div>
																</div>
															</div>
															<div class="site-form__field-error">
																<div class="site-form__error-text"></div>
															</div>
														</div>
														<!-- /Дополнительные люди -->
														<!-- Дата рождения -->
														<div class="site-form__field">
															<div class="order__question-header">
																<div class="order__question-title">
																	7. Дата Вашего рождения
																</div>
															</div>
                              <div class="site-form__field-control">
                                  <div class="site-form__field-id">
                                    <input class="site-form__input required flatpickr--calendar-only" type="text" id="birthday-date" name="birthday-date">

                                  </div>
                              </div>
                              <div class="site-form__field-error">
                                  <div class="site-form__error-text"></div>
                              </div>
                          	</div>
														<!-- Дата рождения -->
														<!-- Семейное положение -->
														<div class="site-form__field">
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
										</fieldset>
										<fieldset data-check-id="3" >
											<div class="site-form__column-wrapper">
												<div class="documents-list">
															<div class="icons-set icons-set--vertical icons-set--icon-bg_gray-light icons-set--icon-color_green">
																<div class="row icons-set__row documents-list__grid">
																	<div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item">
																		<div class="icons-set__item">
																			<div class="icons-set__item__field icons-set__item__field--icon">
																				<div class="icons-set__item__icon-wrap">
																					<i class="icon icon--passport icons-set__item__icon"></i>
																					<div class="documents-list__action"><a class="documents-list__action-link" href="#"><i class="icon icon--search"></i></a></div>
																				</div>
																			</div>
																			<div class="icons-set__item__field icons-set__item__field--text">
																				<div class="icons-set__item__title">Заграничный паспорт</div>
																				<div class="icons-set__item__desc">
																					<form class="upload-form" id="upload-form--zagran" method="post" action="upload.php" enctype="multipart/form-data">
																						<div class="upload-form__drop">
																							<a class="btn btn--large btn--yellow upload-form__btn"><i class="icon icon--upload upload-form__icon">&nbsp;</i> Прикрепить</a>
																							<input class="upload-form__input" type="file" name="upload-form--zagran" multiple />
																						</div>
																						<ul>
																							<!-- The file uploads will be shown here -->
																						</ul>
																					</form>

																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item">
																		<div class="icons-set__item">
																			<div class="icons-set__item__field icons-set__item__field--icon">
																				<div class="icons-set__item__icon-wrap">
																					<i class="icon icon--passport-copy icons-set__item__icon"></i>
																					<div class="documents-list__action"><a class="documents-list__action-link" href="#"><i class="icon icon--search"></i></a></div>
																				</div>
																			</div>
																			<div class="icons-set__item__field icons-set__item__field--text">
																				<div class="icons-set__item__title">Копия внутреннего паспорта</div>
																				<div class="icons-set__item__desc">(страницы с биографическими данными заявителя, отметками о выданном загранпаспорте, регистрации, браке и пр.)</div>
																			</div>
																		</div>
																	</div>
																	<div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item">
																		<div class="icons-set__item">
																			<div class="icons-set__item__field icons-set__item__field--icon">
																				<div class="icons-set__item__icon-wrap">
																					<i class="icon icon--two-pictures-bold icons-set__item__icon"></i>
																					<div class="documents-list__action"><a class="documents-list__action-link" href="#"><i class="icon icon--search"></i></a></div>
																				</div>
																			</div>
																			<div class="icons-set__item__field icons-set__item__field--text">
																				<div class="icons-set__item__title">2 цветные фотографии</div>
																				<div class="icons-set__item__desc">2 цветные фотографии размером 3, 5х4,5 на светлом фоне, лицо 70-80%, без овалов и углов</div>
																			</div>
																		</div>
																	</div>
																	<div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item">
																		<div class="icons-set__item">
																			<div class="icons-set__item__field icons-set__item__field--icon">
																				<div class="icons-set__item__icon-wrap">
																					<i class="icon icon--bill icons-set__item__icon"></i>
																					<div class="documents-list__action"><a class="documents-list__action-link" href="#"><i class="icon icon--search"></i></a></div>
																				</div>
																			</div>
																			<div class="icons-set__item__field icons-set__item__field--text">
																				<div class="icons-set__item__title">Справка от работодателя</div>
																				<div class="icons-set__item__desc">Справка от работодателя с указанием срока работы в должности, среднемесячной заработной платы и гарантии предоставления отпуска в сроки предполагаемой поездки (необходимо также указать, является ли отпуск оплачиваемым), а также гарантии приема на работу после возвращения из поездки с подписью генерального директора/ главного бухгалтера, синей печатью); для п��нсионеров - копия пенсионного удостоверения, для студентов-справка с места учебы, для безработных - спонсорское письмо. Для предпринимателей: копия свидетельства о регистрации, о постановке на налоговый учёт, о внесении в ЕГРИП/ЕГРЮЛ, выписка из банка о состоянии денежных средств предприятия. Внимание!!! Заявитель- индивидуальный предприниматель не имеет права подписи в справке с места работы!</div>
																			</div>
																		</div>
																	</div>
																	<div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item">
																		<div class="icons-set__item">
																			<div class="icons-set__item__field icons-set__item__field--icon">
																				<div class="icons-set__item__icon-wrap">
																					<i class="icon icon--solvency icons-set__item__icon"></i>
																					<div class="documents-list__action"><a class="documents-list__action-link" href="#"><i class="icon icon--search"></i></a></div>
																				</div>
																			</div>
																			<div class="icons-set__item__field icons-set__item__field--text">
																				<div class="icons-set__item__title">Финансовые гарантии</div>
																				<div class="icons-set__item__desc">Выписка из банка о движении денежных средств за последние 3 месяца/справка о покупке валюты или кредитная карта; из рассчета 60 Евро на день пребывания в стране (минимальная сумма 500Евро)</div>
																			</div>
																		</div>
																	</div>
																	<div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item">
																		<div class="icons-set__item">
																			<div class="icons-set__item__field icons-set__item__field--icon">
																				<div class="icons-set__item__icon-wrap">
																					<i class="icon icon--medical-insurance icons-set__item__icon"></i>
																					<div class="documents-list__action"><a class="documents-list__action-link" href="#"><i class="icon icon--search"></i></a></div>
																				</div>
																			</div>
																			<div class="icons-set__item__field icons-set__item__field--text">
																				<div class="icons-set__item__title">Медицинская страховка</div>
																				<div class="icons-set__item__desc">Медицин��кая страховка (индивидуальная или групповая) на период поездки, действительная в странах Шенгена, с минимальным покрытием в 30 000 евро. Выписывается в офисе, стоимость оформления 1 евро в сутки. В случае, если Вы планируете поездку в период с ноября по апрельне и не планируете заниматься зимними видами спортаспортом (в том числе и горными лыжами), то вам необходимо заполнить форму обязательства не заниматься зимними видами спорта.</div>
																			</div>
																		</div>
																	</div>
																	<div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item">
																		<div class="icons-set__item">
																			<div class="icons-set__item__field icons-set__item__field--icon">
																				<div class="icons-set__item__icon-wrap">
																					<i class="icon icon--bill icons-set__item__icon"></i>
																					<div class="documents-list__action"><a class="documents-list__action-link" href="#"><i class="icon icon--search"></i></a></div>
																				</div>
																			</div>
																			<div class="icons-set__item__field icons-set__item__field--text">
																				<div class="icons-set__item__title">Анкета в п.№ 37</div>
																				<div class="icons-set__item__desc">Незаполненная и подписанная заявителем анкета в п.№ 37</div>
																			</div>
																		</div>
																	</div>
																	<div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item">
																		<div class="icons-set__item">
																			<div class="icons-set__item__field icons-set__item__field--icon">
																				<div class="icons-set__item__icon-wrap">
																					<i class="icon icon--test-passed icons-set__item__icon"></i>
																					<div class="documents-list__action"><a class="documents-list__action-link" href="#"><i class="icon icon--search"></i></a></div>
																				</div>
																			</div>
																			<div class="icons-set__item__field icons-set__item__field--text">
																				<div class="icons-set__item__title">Опросный лист</div>
																				<div class="icons-set__item__desc"></div>
																			</div>
																		</div>
																	</div>
																	<div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 documents-list__grid-item">
																		<div class="icons-set__item">
																			<div class="icons-set__item__field icons-set__item__field--icon">
																				<div class="icons-set__item__icon-wrap">
																					<i class="icon icon--private-agreement icons-set__item__icon"></i>
																					<div class="documents-list__action"><a class="documents-list__action-link" href="#"><i class="icon icon--search"></i></a></div>
																				</div>
																			</div>
																			<div class="icons-set__item__field icons-set__item__field--text">
																				<div class="icons-set__item__title">Согласие на обработку персональных данных</div>
																				<div class="icons-set__item__desc"></div>
																			</div>
																		</div>
																	</div>


																</div>
															</div>
														</div>

											</div>
										</fieldset>

									</form>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>



</main>
<script src="js/jquery.file-upload-package.min.js" charset="utf-8"></script>
<?php require_once('inc/footer.php'); ?>
