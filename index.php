<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>#echo var="title"</title>
	<meta name="description" content="Startup HTML template OptimizedHTML 5">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="icon" href="images/favicon.png">
	<meta property="og:image" content="images/dist/preview.jpg">
	
	<link rel="stylesheet" href="css/app.min.css">
	<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>

</head>

<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php'; // Подключаем автозагрузчик Composer

try {
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();

    $token = $_ENV['TOKEN']; // Используем токен из переменной окружения

    // Ваш дополнительный PHP-код...

} catch (Exception $e) {
    echo 'Произошла ошибка: ',  $e->getMessage(), "\n";
}
?>


<header class="header">
	<div class="container">
		<div class="form-header"></div>

		<div class="header-nav">
			<div class="logo">
				<span class="logo__img-wrapper">
					<img
						class="logo__img"
						src="images/dist/logo-300x145.svg"
						alt="logo"
					/>
				</span>

				<span class="logo__separator"></span>

				<span class="logo__text"
					>Импортное промышленное <br />оборудование и комплектующие</span
				>
			</div>

			<nav class="nav">
				<ul class="nav-list">
					<li class="nav-item"><a href="#about" class="nav-link">О нас</a></li>

					<li class="nav-item">
						<a href="#benefits" class="nav-link">Преимущества</a>
					</li>

					<li class="nav-item">
						<a href="#reviews" class="nav-link">Отзывы</a>
					</li>

					<li class="nav-item">
						<a href="#contacts" class="nav-link">Контакты</a>
					</li>
				</ul>

				<button class="email">Написать письмо</button>
			</nav>
		</div>
	</div>
</header>
<div class="container_main">
	<div class="form-container">
		<h2 class="form__title">
			<span class="highlight-text">Заказать подбор</span>
		</h2>

		<form id="tg" action="#" method="post">
			<div class="form-left">
				<div class="form-row">
					<label for="product"
						>Производитель, модель, артикул, количество:</label
					>

					<input
						type="text"
						id="product"
						name="product"
						placeholder="Название детали"
					/>
				</div>

				<div class="form-row">
					<label for="name">Имя:</label>

					<input type="text" id="name" name="name" placeholder="Ваше имя" />
				</div>

				<div class="form-row">
					<label for="phone">Телефон:</label>

					<input
						type="tel"
						id="phone"
						data-phone-pattern
						placeholder="Необязательно"
						name="phone"
					/>
				</div>

				<div class="form-row">
					<label for="email">E-mail:</label>

					<input
						type="email"
						id="email"
						name="email"
						placeholder="e-mail для ответа"
					/>
				</div>
			</div>

			<div class="form-right">
				<div class="form-row">
					<label for="attachments"
						>Шильда, фото детали, другая информация:</label
					>

					<input type="file" id="attachments" name="attachments" />
				</div>

				<div class="form-row">
					<label for="invoice">Реквизиты для выставления счета:</label>

					<input type="file" id="invoice" name="invoice" />
				</div>
			</div>

			<div
				id="success"
				class="alert alert-success"
				role="alert"
				style="display: none"
			></div>

			<div class="form-row">
				<button type="submit" id="submit-btn">Отправить</button>
			</div>
		</form>
	</div>

	<!-- Скрипт для отправки формы -->

	<div class="ribbon">
		<h1 class="offer">
			Оригинальные запчасти и импортное оборудование <br />
			<span class="highlight-text">с оплатой после поставки</span>
		</h1>
	</div>

	<img class="main__photo" src="images/dist/Section34.jpeg" alt="Картинка" />
</div>
<div class="container_page_about">
	<div class="about">
		<div class="about__body">
			<div class="about__header">
				<div class="about__title title">О компании</div>
				<div class="about__title desc">
					<p class="text-about__top">
						ПромИндустрия – ваш надежный поставщик
						<span class="highlight-text">импортного</span> промышленного
					</p>
					<p>
						<span class="highlight-text">оборудования</span> и
						<span class="highlight-text">комплектующих</span> от лучших мировых
						производителей
					</p>
				</div>
				<div class="about__text">
					<p>Главным приоритетом для нашей компании является</p>
					<p>построение долгосрочных партнерских отношений</p>
					<p>с каждым из наших клиентов</p>
				</div>
			</div>
			<div class="about__row">
				<div class="about__column">
					<div class="item-about">
						<div class="item-about__img">
							<img src="images/dist/cube1.svg" alt="" />
						</div>
						<div class="item-about__title">Что поставляем?</div>
						<div class="item-about__text">
							Компоненты автоматизации, системы управления, клапаны, насосы,
							контроллеры, датчики, энкодеры, приводную технику, панели
							оператора, гидравлику и многое другое
						</div>
					</div>
				</div>
				<div class="about__column">
					<div class="item-about">
						<div class="item-about__img">
							<img src="images/dist/cube2.svg" alt="" />
						</div>
						<div class="item-about__title">С кем работаем?</div>
						<div class="item-about__text">
							Allen Bradley, Benlty Nevada, Fanuc, Sick, Rexroth, Schneider,
							Siemens, Hydac, Parker, Hawe, Omron, Vickers и многие другие
							производители импортного оборудования
						</div>
					</div>
				</div>
				<div class="about__column">
					<div class="item-about">
						<div class="item-about__img">
							<img src="images/dist/cube3.svg" alt="" />
						</div>
						<div class="item-about__title">Как быстро?</div>
						<div class="item-about__text">
							Развитая система логистики позволяют нам значительно сократить
							время обработки любого сложного запроса и доставить оборудование в
							кратчайшие сроки
							<span class="highlight-text"
								>(экспресс доставка в течение 10 дней)</span
							>/div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container_page_manufactures">
	<ul class="brands">
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/08.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/12.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/17.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/14.svg" alt="" />
			</a>
		</li>
	</ul>
	<ul class="brands">
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/20.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/05.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/01_abb-logo-33px.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/02.svg" alt="" />
			</a>
		</li>
	</ul>

	<ul class="brands">
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/03.png" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/04.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/06.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/07.svg" alt="" />
			</a>
		</li>
	</ul>

	<ul class="brands">
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/09.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/10.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/11.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/13.svg" alt="" />
			</a>
		</li>
	</ul>

	<ul class="brands">
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/15.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/16.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/18.svg" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/19.svg" alt="" />
			</a>
		</li>
	</ul>

	<ul class="brands">
		<li class="brands__item">
			<a href="#popup">
				<img src="images/dist/logo/21.png" alt="" />
			</a>
		</li>
		<li class="brands__item">
			<a href="#popup" data-word="Denison">
				<img src="images/dist/logo/22.svg" alt="Denison" />
			</a>
		</li>
	</ul>
</div>

<div id="popup" class="popup">
	<a href="#" class="popup__area"></a>
	<div class="popup__body">
		<div class="popup__content">
			<a href="#" class="popup__close">X</a>

			<div class="popup__title">
				<span class="highlight-text">Заказать подбор</span>
			</div>

			<div class="popup__text">
				<form id="tg2" action="#" method="post">
					<div class="form-left">
						<div class="form-row">
							<label for="product"
								>Производитель, модель, артикул, количество:</label
							>

							<input
								type="text"
								id="product"
								name="product"
								placeholder="Название детали"
								required
							/>
						</div>

						<div class="form-row">
							<label for="name">Имя:</label>

							<input type="text" id="name" name="name" placeholder="Ваше имя" />
						</div>

						<div class="form-row">
							<label for="phone">Телефон:</label>

							<input
								type="tel"
								id="phone"
								data-phone-pattern
								placeholder="Необязательно"
								name="phone"
							/>
						</div>

						<div class="form-row">
							<label for="email">E-mail:</label>

							<input
								type="email"
								id="email"
								name="email"
								placeholder="e-mail для ответа"
							/>
						</div>
					</div>

					<div class="form-right">
						<div class="form-row">
							<label for="attachments"
								>Шильда, фото детали, другая информация:</label
							>

							<input type="file" id="attachments" name="attachments" />
						</div>

						<div class="form-row">
							<label for="invoice">Реквизиты для выставления счета:</label>

							<input type="file" id="invoice" name="invoice" />
						</div>
					</div>

					<div
						id="success"
						class="alert alert-success"
						role="alert"
						style="display: none"
					></div>

					<div class="form-row">
						<button type="submit" id="submit-btn">Отправить</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="container_page_advantages">
	<div class="facture__advantages">
		<img class="factures" src="images/dist/advantages.jpg" alt="">
	</div>
	
</div>

<div class="container_page_advantages">
	<div class="advantages">
		<div class="advantages__body">
			<div class="advantages__header">
				<div class="advantages__title desc">
					<p class="text-advantages__top">
						Почему Вам стоит
						<span class="highlight-text">доверить</span> поставку именно нам?
					</p>
				</div>

				<div class="advantages__row">
					<div class="advantages__column">
						<div class="item-advantages">
							<div class="item-advantages__img">
								<img src="images/dist/cube1.svg" alt="" />
							</div>
							<div class="item-advantages__title">Без риска</div>
							<div class="item-advantages__text">
								Мы не берем предоплату. Совсем. Даже 20%. Вы оплачиваете договор
								только после приемки товара
							</div>
						</div>
					</div>
					<div class="advantages__column">
						<div class="item-advantages">
							<div class="item-advantages__img">
								<img src="images/dist/cube2.svg" alt="" />
							</div>
							<div class="item-advantages__title">Скорость доставки</div>
							<div class="item-advantages__text">
								Выбираем максимально быстрые каналы поставок, т.к. чем раньше вы
								получите товар, тем быстрее денежные средства окажутся на нашем
								р/с
							</div>
						</div>
					</div>
				</div>
				<div class="advantages__row">
					<div class="advantages__column">
						<div class="item-advantages">
							<div class="item-advantages__img">
								<img src="images/dist/cube1.svg" alt="" />
							</div>
							<div class="item-advantages__title">Баланс</div>
							<div class="item-advantages__text">
								Работаем с несколькими поставщиками, поэтому всегда находим
								компромисс между скоростью поставки и ценой
							</div>
						</div>
					</div>
					<div class="advantages__column">
						<div class="item-advantages">
							<div class="item-advantages__img">
								<img src="images/dist/cube2.svg" alt="" />
							</div>
							<div class="item-advantages__title">Дорожим репутацией</div>
							<div class="item-advantages__text">
								Откажемся от заключения договора если не сможем гарантировать
								приемлимый для вас срок поставки
							</div>
						</div>
					</div>
					<div class="advantages__column">
						<div class="item-advantages">
							<div class="item-advantages__img">
								<img src="images/dist/cube3.svg" alt="" />
							</div>
							<div class="item-advantages__title">Экспертность</div>
							<div class="item-advantages__text">
								Подберем замену если Ваша деталь или комплектующие уже сняты с
								производства
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="button__advantages"></div>
		<button class="advanteges__button">
			<a href="#popup" id="btn">Отправить</a>
		</button>
	</div>
</div>

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>




<div class="wrapper">
	<div class="swiper">
		
		<div class="swiper-wrapper">
			
			<div class="swiper-slide"><img src="images/dist/swiper/01.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/dist/swiper/02.png" alt=""></div>
			<div class="swiper-slide"><img src="images/dist/swiper/03.png" alt=""></div>
			<div class="swiper-slide"><img src="images/dist/swiper/04.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/dist/swiper/05.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/dist/swiper/06.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/dist/swiper/07.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/dist/swiper/08.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/dist/swiper/09.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/dist/swiper/10.jpg" alt=""></div>

			
			...
		</div>
		<!-- If we need pagination -->
		<!--<div class="swiper-pagination"></div>-->
	
		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
		
	</div>
		<!-- If we need scrollbar -->
		
	

</div>

<script src="/js/tg.js"></script>
<script src="js/app.min.js"></script>
<script src="/js/mask.js"></script>
<script src="/js/swiper.js"></script>






</body>
</html>
