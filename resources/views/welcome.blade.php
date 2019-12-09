<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Научное шоу Профессора Звездунова в Красноярске</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="css/fonts.css">

        <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
	<script src="https://kit.fontawesome.com/e2177a3301.js"></script>
	<link rel="stylesheet" href="css/style.css">
    </head>
    <header class="header">
		<div class="wrap">
				<div class="header__container">
					<img src="images/logo.svg" alt="Звездунов" class="header__logo">
					<nav class="navigation" id="menu" >
						<ul class="navigation__list" >
							<li class="navigation__item" >
								<a href="#about" class="navigation__link">О нас</a>
							</li>
							<li class="navigation__item" >
								<a href="#show" class="navigation__link">Все шоу</a>
							</li>
							<li class="navigation__item" >
								<a href="#team" class="navigation__link">Команда</a>
							</li>
							<li class="navigation__item" >
								<a href="#gallery" class="navigation__link">Галерея</a>
							</li>
							<li class="navigation__item" >
								<a href="#feedback" class="navigation__link">Отзывы</a>
							</li>
							<li class="navigation__item" >
								<a href="#confidence" class="navigation__link">Нам доверяют</a>
							</li>
						</ul>
					</nav>
					<div class="call-back">
						<a href="tel:+73912966171" class="call-back__phone">
							<img src="images/header__phone.svg" alt="phone" class="call-back__icon">
							<span class="call-back__number">+7 (391) 296-61-71</span>
						</a>
						<a href="#callback-form" class="call-back__btn">
							<span class="call-back__link">Заказать</span>
						</a>
					</div>
				</div>
		</div>
	</header>

	<section class="video-description" id="about">
		<div class="wrap">
			<h1 class="video-description__title">Наука — это здорово!</h1>
			<div class="video-description__frame"></div>
			<div class="block-video">
{{--				<iframe style="!important; border-radius: 25px" width="600" height="400"--}}
{{--                src="https://www.youtube.com/embed/fFis3ef4gsA" frameborder="0" allow="accelerometer;--}}
{{--                 encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                <iframe style="!important; border-radius: 25px" width="600" height="400" src="//vk.com/video_ext.php?oid=-79789144&id=456239022&hash=6a6ab8fee3e67ef8&hd=2"
                       frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="show"></div>
		</div>
	</section>

	<section class="stock">
			<div class="wrap">
				<div class="stock__container">
					<h2 class="stock__title">Шоу для детей</h2>
					<div class="block">
						<div class="box-show" data-id="1">
							<img src="images/show__img-01.png" alt="holloware" class="box-show__img">
							<span class="box-show__description">Обычное шоу</span>
						</div>
						<div class="box-show" data-id="2">
							<img src="images/show__img-02.png" alt="holloware" class="box-show__img">
							<span class="box-show__description">Welcome</span>
						</div>
						<div class="box-show" data-id="3">
							<img src="images/show__img-03.png" alt="holloware" class="box-show__img">
							<span class="box-show__description">Квест</span>
						</div>
						<div class="box-show" data-id="4">
							<img src="images/show__img-04.png" alt="holloware" class="box-show__img">
							<span class="box-show__description">Азотное шоу</span>
						</div>

						<div class="box-show" data-id="5">
								<img src="images/show__img-05.png" alt="holloware" class="box-show__img">
								<span class="box-show__description">Шоу с мастер классами</span>
							</div>
							<div class="box-show" data-id="6">
								<img src="images/show__img-06.png" alt="holloware" class="box-show__img">
								<span class="box-show__description">Череда мастер классов</span>
							</div>
							<div class="box-show" data-id="7">
								<img src="images/show__img-07.png" alt="holloware" class="box-show__img">
								<span class="box-show__description">Тематическое шоу</span>
							</div>
							<div class="box-show" data-id="8">
								<img src="images/show__img-09.png" alt="holloware" class="box-show__img">
								<span class="box-show__description">Шоу под ключ</span>
							</div>
					</div>
				</div>
			</div>

			<!-- СОДЕРЖИМОЕ МОДАЛЬНОГО ОКНА -->

			<div class="modal__content" id="cont1">
				<h3 class="modal__title">Обычное шоу</h3>
				<span class="modal__text">В программу включен ряд экспериментов, в которых дети принимают активное участие. Эксперименты подбираются в соответствии с интересами детей.
				</span>
				<div class="modal__info">
					<div class="info">
						<img src="images/time.svg" alt="time" class="time">
						<span class="time__text">45 минут</span>
					</div>
					<div class="info">
						<img src="images/money.svg" alt="money" class="price">
						<span class="price__text">5 000 руб</span>
					</div>
				</div>
			</div>

			<div class="modal__content" id="cont2">
					<h3 class="modal__title">Welcome</h3>
					<span class="modal__text">Профессор Звездунов с командой организуют Welcome-зону с радостью станут частью любого Вашего события. В программу могут быть включены шоколадный фонтан, фрукты, сырные шарики и попкорн в азоте, азотное мороженое и ещё много другие разных вкусностей.
					</span>
					<div class="modal__info">
						<div class="info">
							<img src="images/time.svg" alt="time" class="time">
							<span class="time__text">45 минут</span>
						</div>
						<div class="info">
							<img src="images/money.svg" alt="money" class="price">
							<span class="price__text">8 000 руб</span>
						</div>
					</div>
			</div>

			<div class="modal__content" id="cont3">
				<h3 class="modal__title">Квест</h3>
				<span class="modal__text">Команда Профессора Звездунова организует для группы детей квест со сценарием, в рамках которого в игровой форме
					дети, работая в команде, получат знания в области физики и химии.
				</span>
				<div class="modal__info">
					<div class="info">
						<img src="images/time.svg" alt="time" class="time">
						<span class="time__text">1,5 часа</span>
					</div>
					<div class="info">
						<img src="images/money.svg" alt="money" class="price">
						<span class="price__text">10 000 руб</span>
					</div>
				</div>
			</div>

			<div class="modal__content" id="cont4">
				<h3 class="modal__title">Азотное шоу</h3>
				<span class="modal__text">Выступление основано на экспериментах с жидким азотом и станет незабываемой частью любого Вашего события.
				</span>
				<div class="modal__info">
					<div class="info">
						<img src="images/time.svg" alt="time" class="time">
						<span class="time__text">15 минут</span>
					</div>
					<div class="info">
						<img src="images/money.svg" alt="money" class="price">
						<span class="price__text">4 000 руб</span>
					</div>
				</div>
			</div>

			<div class="modal__content" id="cont5">
					<h3 class="modal__title">Шоу с мастер-классом</h3>
					<span class="modal__text">В программу включено шоу с экспериментами, а также мастер-класс, по итогу
						 которого у каждого из детей будет изготовленная собственными руками игрушка.
					</span>
					<div class="modal__info">
						<div class="info">
							<img src="images/time.svg" alt="time" class="time">
							<span class="time__text">60 минут</span>
						</div>
						<div class="info">
							<img src="images/money.svg" alt="money" class="price">
							<span class="price__text">7 000 руб</span>
						</div>
					</div>
			</div>

			<div class="modal__content" id="cont6">
					<h3 class="modal__title">Череда мастер-классов</h3>
					<span class="modal__text">В программу включены три самых популярных мастер-класса. По окончанию программы все дети изготовят собственными
						 руками целых три игрушки.
					</span>
					<div class="modal__info">
						<div class="info">
							<img src="images/time.svg" alt="time" class="time">
							<span class="time__text">60 минут</span>
						</div>
						<div class="info">
							<img src="images/money.svg" alt="money" class="price">
							<span class="price__text">8 000 руб</span>
						</div>
					</div>
			</div>

			<div class="modal__content" id="cont7">
					<h3 class="modal__title">Тематическое шоу</h3>
					<span class="modal__text">Шоу со сценарием, которое организует команда Профессора Звездунова в стиле любимых
						фильма/мультфильма/игры Вашего ребёнка.
					</span>
					<div class="modal__info">
						<div class="info">
							<img src="images/time.svg" alt="time" class="time">
							<span class="time__text">60 минут</span>
						</div>
						<div class="info">
							<img src="images/money.svg" alt="money" class="price">
							<span class="price__text">8 000 руб</span>
						</div>
					</div>
			</div>

			<div class="modal__content" id="cont8">
					<h3 class="modal__title">Шоу под ключ</h3>
					<span class="modal__text">Команда Профессора Звездунова сделает любое Ваше мероприятие от А до Я (площадка для мероприятия, оформление,
						Welcome-зона, кейтеринг, ведущий и музыкальное сопровождение).
					</span>
					<div class="modal__info">
						<div class="info">
							<img src="images/time.svg" alt="time" class="time">
							<span class="time__text">договорное</span>
						</div>
						<div class="info">
							<img src="images/money.svg" alt="money" class="price">
							<span class="price__text">договорная</span>
						</div>
					</div>
			</div>
			<!-- СОДЕРЖИМОЕ МОДАЛЬНОГО ОКНА (Шоу) -->

			<!-- МОДАЛЬНОЕ ОКНО (Шоу) -->
			<div id="modal">
				<div class="modal__container">

						<i class="fas fa-times closeModal"></i>

					<div id="innerModal"></div>

					<div class="modal__btn">
							<a href="#" class="call-back__btn">
									<span class="call-back__link">Заказать</span>
							</a>
					</div>

				</div>
			</div>
			<!-- МОДАЛЬНОЕ ОКНО (Шоу) -->

	</section>

	<section class="command" id="team">
			<div class="wrap">
				<div class="command__container">
					<h2 class="command__title">Команда</h2>
					<div class="command__info">
						<div class="command__person">
							<div class="command__person-info person-info-1">
							<span class="command__name">Профессор ТУманкин</span>
							<span class="command__text">Профессор Туманкин крайне востребован и занят, а потому решил,
								что его доброе лицо и умный взгляд сами скажут за себя и объяснят, насколько он крут.
							</span>
							</div>
							<img src="images/person_1.png" alt="person" class="command__img person__img-1">
						</div>
						<div class="command__person">
							<img src="images/person_2.png" alt="person" class="command__img person__img-2">
							<div class="command__person-info person-info-2">
								<span class="command__name second-name">Профессор Чудаков</span>
								<span class="command__text">Взрывной, веселый учёный с серьёзным подходом к своему делу.
									Готов  вместе с  подрастающим поколением погружаться в мир знаний, науки и экспериментов!
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<section class="photo-galleries" id="gallery">
			<div class="wrap">
					<h2 class="photo-galleries__title">Фотогалерея</h2>
					<div class="photo-galleries__frame"></div>
					<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide"><img src="images/photo1.png" alt="show" class="slider__img"></div>
								<div class="swiper-slide"><img src="images/photo2.png" alt="show" class="slider__img"></div>
								<div class="swiper-slide"><img src="images/photo3.png" alt="show" class="slider__img"></div>
								<div class="swiper-slide"><img src="images/photo4.png" alt="show" class="slider__img"></div>
								<div class="swiper-slide"><img src="images/photo5.png" alt="show" class="slider__img"></div>
							</div>
							<!-- Add Arrows -->
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
					</div>
			</div>
	</section>

	<section class="feedback" id="feedback">
			<div class="wrap">
				<h2 class="feedback__title">Счастливые клиенты</h2>
				<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="feedback__post">
									<div class="feedback__peson">
										<img src="images/abakumova.png" alt="photo" class="feedback__avatar">
										<span class="feedback__name">Ольга А.</span>
									</div>
									<span class="feedback__text">В субботу к нам приходил ваш профессор,
                                        сегодня уже понедельник, а разговоры только о научном шоу, о волшебстве!
                                        Остались очень довольны.
                                        День рождения сына прошёл на "ура"! Огромное спасибо за праздник!
									</span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="feedback__post">
									<div class="feedback__peson">
										<img src="images/ivanova.png" alt="photo" class="feedback__avatar">
										<span class="feedback__name">Ольга И.</span>
									</div>
									<span class="feedback__text">Огромное спасибо! Было очень весело!
                                        Никогда бы не узнали, что ребёнок, оказывается, хочет стать воспитателем
                                        и не пойдёт в школу! Будем принимать "меры"!
                                        А после эксперимента с огнём прячем спички :D СПАСИБО! Так важно нести людям праздник! Это огромный труд – добавлять волшебство в суровые будни,
                                        в эти моменты каждая эмоция радости стоит гораздо больше любых благ!
									</span>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="feedback__post">
									<div class="feedback__peson">
										<img src="images/kazakova.png" alt="photo" class="feedback__avatar">
										<span class="feedback__name">Екатерина К.</span>
									</div>
									<span class="feedback__text">Вы большие молодцы!
                                        Ваше научное шоу поразило всех моих гостей! Эмоции прут, так клёво!
                                        Все меня спрашивают, где я вас взяла, а мне от этого очень приятно!
                                        Всё сработало, "зашло" на нашем дне рождения ваше представление!
                                        Желаю вам успехов и процветания!
									</span>
								</div>
							</div>
						</div>
						<!-- Add Arrows -->
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
				</div>
			</div>
	</section>

	<section class="confidence" id="confidence">
			<div class="wrap">
					<h2 class="confidence__title">Нам доверяют</h2>
					<div class="confidence__container">
						<img src="images/Планета.png" alt="Планета" class="confidence__img">
                        <img src="images/ЦБС.png" alt="ЦБС" class="confidence__img" style="!important; width: 260px; height: 240px;">
                        <img src="images/Дворец.png" alt="Дворец пионеров" class="confidence__img">
                        <img src="images/Afontovo.png" alt="Afontovo" class="confidence__img" style="!important; width: 260px; height: 240px;">
					</div>
			</div>
	</section>

	<!-- МОДАЛЬНОЕ ОКНО (ЗАКАЗАТЬ)  -->

	<div class="modal-call__content" id="cont">
			<h3 class="modal-call__title">Наш менеджер свяжется с вами в ближайшее время</h3>
			<span class="modal-call__text">Просто заполните форму обратной связи</span>
			<form class="modal-call__form" name="data" id="callback-form">
                {{ csrf_field() }}
				<div class="modal-call__data">
					<input type="text" class="modal-call__input" placeholder="Ваше имя" name="name">
					<input type="tel" class="modal-call__input" placeholder="Номер телефона" name="phone">
				</div>
				<input type="submit" class="modal-call__btn">
			</form>
		</div>


		<div id="modalCall">
				<div class="modal-call__container">

					<i class="fas fa-times closeModalCall"></i>

					<div id="innerModalCall"></div>

				</div>
		</div>


		<!-- МОДАЛЬНОЕ ОКНО (ЗАКАЗАТЬ)  -->

	<footer class="footer">
		<div class="wrap">
			<div class="footer__container">
				<div class="footer__info">
					<img src="images/logo.svg" alt="Zvezdunov" class="footer__logo">
					<span class="footer__copyright">© Звездунов, 2019</span>
				</div>

				<div class="call-back">
						<a href="tel:+73912966171" class="call-back__phone">
							<img src="images/footer__icon.svg" alt="phone" class="call-back__icon">
							<span class="call-back__number">+7 (391) 296-61-71</span>
						</a>
						<a href="#callback-form" class="call-back__btn">
							<span class="call-back__link">Заказать</span>
						</a>
				</div>

			</div>
		</div>
	</footer>

	<script src="js/jQuery.js"></script>
	<script src="https://unpkg.com/swiper/js/swiper.js"></script>
	<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
	<script src="js/scripts.js"></script>

</body>
</html>
