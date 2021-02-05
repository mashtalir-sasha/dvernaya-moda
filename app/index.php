<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Двери в Запорожье - Дверная Мода</title>
	<meta name="description" content="Купите с установкой раздвижные, входные или межкомнатные двери под заказ или выберите в наличии в наших салонах.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!--
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content=""/>
	-->

	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<meta name="theme-color" content="#DE7123">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>

<nav class="nav">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-2 col-5">
				<a href="/">
					<picture>
						<source srcset="img/logo.webp" type="image/webp">
						<img src="img/logo.png" alt="logo" class="nav__logo">
					</picture>
				</a>
			</div>
			<div class="col-md-7 d-none d-md-block">
				<ul class="nav-list">
					<li class="nav-list__item"><a href="/" class="active">Главная</a></li>
					<li class="nav-list__item"><a href="entrance-doors.php">Входные</a></li>
					<li class="nav-list__item"><a href="interior-doors.php">Межкомнатные</a></li>
					<li class="nav-list__item"><a href="interior-doors.php#furniture">Фурнитура</a></li>
					<li class="nav-list__item"><a href="#portfolio" class="anchor">Наши работы</a></li>
					<li class="nav-list__item"><a href="#sample" class="anchor">Замеры</a></li>
					<li class="nav-list__item"><a href="#about" class="anchor">О нас</a></li>
					<li class="nav-list__item"><a href="#contacts" class="anchor">Контакты</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-7">
				<div class="nav-left">
					<a href="tel:+380674100330" class="nav__phone">+38 067 410 03 30</a>
					<div class="nav-lang d-none d-md-flex">
						<a href="#" class="nav-lang__item active">RU</a>
						<div class="nav-lang__line"></div>
						<a href="#" class="nav-lang__item">UA</a>
					</div>
					<button class="nav-btn d-block d-md-none">
						<img src="img/menu_btn.svg" alt="menu">
					</button>
				</div>
			</div>
		</div>
	</div>
</nav>

<nav class="nav-mob d-block d-md-none">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="nav-list">
					<li class="nav-list__item"><a href="/" class="active">Главная</a></li>
					<li class="nav-list__item"><a href="entrance-doors.php">Входные</a></li>
					<li class="nav-list__item"><a href="interior-doors.php">Межкомнатные</a></li>
					<li class="nav-list__item"><a href="interior-doors.php#furniture">Фурнитура</a></li>
					<li class="nav-list__item"><a href="#portfolio" class="anchor">Наши работы</a></li>
					<li class="nav-list__item"><a href="#sample" class="anchor">Замеры</a></li>
					<li class="nav-list__item"><a href="#about" class="anchor">О нас</a></li>
					<li class="nav-list__item"><a href="#contacts" class="anchor">Контакты</a></li>
				</ul>
				<div class="nav-lang">
					<a href="#" class="nav-lang__item active">RU</a>
					<div class="nav-lang__line"></div>
					<a href="#" class="nav-lang__item">UA</a>
				</div>
			</div>
		</div>
	</div>
</nav>

<header class="head">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<div class="head-wrap">
					<h1 class="head__ttl"><span>Двери</span><br>для домов,<br>квартир<br>и офисов</h1>
					<div class="head-block">
						<a href="entrance-doors.php" class="head-block__item">
							<?php echo file_get_contents("img/head_ico1.svg"); ?>
							<p>Входные</p>
						</a>
						<a href="interior-doors.php" class="head-block__item">
							<?php echo file_get_contents("img/head_ico2.svg"); ?>
							<p>Межкомнатные</p>
						</a>
						<a href="#modal" class="head-block__btn fancybox">Выбрать дверь</a>
					</div>
				</div>
				<picture>
					<source srcset="img/head-img.webp" type="image/webp">
					<img src="img/head-img.png" alt="logo" class="head-img d-none d-md-block">
				</picture>
			</div>
		</div>
	</div>
</header>

<section class="services">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-auto">
				<h3 class="services__ttl">Наши услуги</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-auto col-sm-6 col-auto">
				<div class="services-item">
					<div class="services-item__txt">
						<img src="img/services-ico1.svg" alt="ico">
						<p>Подбор дверей под Ваш интерьер</p>
					</div>
					<picture>
						<source srcset="img/services-img1.webp" type="image/webp">
						<img src="img/services-img1.jpg" alt="service" class="services-item__img">
					</picture>
				</div>
			</div>
			<div class="col-md-auto col-sm-6 col-auto">
				<div class="services-item">
					<div class="services-item__txt">
						<img src="img/services-ico2.svg" alt="ico">
						<p>Выезд на замеры в день заявки</p>
					</div>
					<picture>
						<source srcset="img/services-img2.webp" type="image/webp">
						<img src="img/services-img2.jpg" alt="service" class="services-item__img">
					</picture>
				</div>
			</div>
			<div class="col-md-auto col-sm-6 col-auto">
				<div class="services-item">
					<div class="services-item__txt">
						<img src="img/services-ico3.svg" alt="ico">
						<p>Доставка и установка</p>
					</div>
					<picture>
						<source srcset="img/services-img3.webp" type="image/webp">
						<img src="img/services-img3.jpg" alt="service" class="services-item__img">
					</picture>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="benefits">
	<div class="container posa">
		<div class="row">
			<div class="col-md-5 offset-md-1">
				<h3 class="benefits-ttl"><span>Наши<br>преимущества</span></h3>
				<picture>
					<source srcset="img/benefits-ttl_img_xs.webp" type="image/webp" media="(max-width: 991px)">
					<source srcset="img/benefits-ttl_img_xs.jpg" media="(max-width: 991px)">
					<source srcset="img/benefits-ttl_img.webp" type="image/webp">
					<img src="img/benefits-ttl_img.png" alt="background" class="benefits__img" loading="lazy">
				</picture>
			</div>
		</div>
	</div>
	<div class="container height">
		<div class="row">
			<div class="col-md-3 offset-md-2 col-sm-6 order-2 order-md-1">
				<div class="benefits-item benefits-item_2">
					<div class="benefits-item__wrap">
						<span class="benefits-item__numb">2</span>
						<img src="img/benefits-ico2.svg" alt="ico" class="benefits-item__ico">
					</div>
					<p class="benefits-item__txt"><b>Гарантия 10 лет</b> на всю фурнитуру. Меняем ручки и петли в случае поломки</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 order-1 order-md-2">
				<div class="benefits-item benefits-item_1">
					<div class="benefits-item__wrap">
						<span class="benefits-item__numb">1</span>
						<img src="img/benefits-ico1.svg" alt="ico" class="benefits-item__ico">
					</div>
					<p class="benefits-item__txt"><b>32 540 клиентов</b> остались довольны установкой наших мастеров</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 order-4 order-md-3">
				<div class="benefits-item benefits-item_4">
					<div class="benefits-item__wrap">
						<span class="benefits-item__numb">4</span>
						<img src="img/benefits-ico4.svg" alt="ico" class="benefits-item__ico">
					</div>
					<p class="benefits-item__txt">Профессионально <b>подбираем двери</b> с учётом всех нюансов Вашего ремонта </p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 offset-md-7 order-3 order-md-4">
				<div class="benefits-item benefits-item_3">
					<div class="benefits-item__wrap">
						<span class="benefits-item__numb">3</span>
						<img src="img/benefits-ico3.svg" alt="ico" class="benefits-item__ico">
					</div>
					<p class="benefits-item__txt">Перед доставкой Ваши двери проходят <b>полную проверку</b> на отсутствие брака</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="products">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3">
				<h3 class="products-ttl"><span>Наша продукция</span></h3>
			</div>
			<div class="col-lg-3 col-sm-4">
				<div class="products-item">
					<picture>
						<source srcset="img/product1.webp" type="image/webp">
						<img src="img/product1.jpg" alt="product" class="products-item__img" loading="lazy">
					</picture>
					<h4 class="products-item__name">Входные двери</h4>
					<a href="entrance-doors.php" class="products-item__btn">Посмотреть модели</a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-4">
				<div class="products-item products-item_black">
					<picture>
						<source srcset="img/product2.webp" type="image/webp">
						<img src="img/product2.jpg" alt="product" class="products-item__img" loading="lazy">
					</picture>
					<h4 class="products-item__name">Межкомнатные двери</h4>
					<a href="interior-doors.php" class="products-item__btn">Посмотреть модели</a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-4">
				<div class="products-item">
					<picture>
						<source srcset="img/product3.webp" type="image/webp">
						<img src="img/product3.jpg" alt="product" class="products-item__img" loading="lazy">
					</picture>
					<h4 class="products-item__name">Фурнитура</h4>
					<a href="interior-doors.php#furniture" class="products-item__btn">Посмотреть модели</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="calc" class="calc">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9">
				<h3 class="calc-ttl">Выберите свой стиль дверей, чтобы получить просчёт</h3>
			</div>
		</div>
		<form action="mail.php" method="POST" class="calc-form form_check" autocomplete="off">
			<div class="row justify-content-center">
				<div class="col-lg-auto">
					<div class="calc-form__item">
						<p class="form-name">Выбрать дверь</p>
						<select name="type" class="form-select">
							<option data-id="1">межкомнатные</option>
							<option data-id="2">входные</option>
						</select>
					</div>
					<div id="calc-block1" class="calc-block show">
						<div class="calc-form__item">
							<p class="form-name">По стилю:</p>
							<label class="form-checkbox">
								<picture>
									<source srcset="img/check1.webp" type="image/webp">
									<img src="img/check1.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="style">
								<p class="form-checkbox__fake">модерн</p>
							</label>
							<label class="form-checkbox">
								<picture>
									<source srcset="img/check2.webp" type="image/webp">
									<img src="img/check2.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="style">
								<p class="form-checkbox__fake">классика</p>
							</label>
							<label class="form-checkbox">
								<picture>
									<source srcset="img/check3.webp" type="image/webp">
									<img src="img/check3.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="style">
								<p class="form-checkbox__fake">хайтек</p>
							</label>
							<label class="form-checkbox">
								<picture>
									<source srcset="img/check4.webp" type="image/webp">
									<img src="img/check4.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="style">
								<p class="form-checkbox__fake">раздвижные системы лофт</p>
							</label>
							<label class="form-checkbox">
								<picture>
									<source srcset="img/check5.webp" type="image/webp">
									<img src="img/check5.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="style">
								<p class="form-checkbox__fake">двери скрытого монтажа</p>
							</label>
						</div>
						<div class="calc-form__item">
							<p class="form-name">Материал:</p>
							<label class="form-checkbox mw160">
								<picture>
									<source srcset="img/material1.webp" type="image/webp">
									<img src="img/material1.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="material">
								<p class="form-checkbox__fake">массив</p>
							</label>
							<label class="form-checkbox mw160">
								<picture>
									<source srcset="img/material2.webp" type="image/webp">
									<img src="img/material2.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="material">
								<p class="form-checkbox__fake">шпон</p>
							</label>
							<label class="form-checkbox mw160">
								<picture>
									<source srcset="img/material3.webp" type="image/webp">
									<img src="img/material3.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="material">
								<p class="form-checkbox__fake">крашенные</p>
							</label>
						</div>
						<div class="calc-form__item">
							<p class="form-name">Цена от</p>
							<input type="text" name="pice" class="form-input" placeholder="2000 – 30 000 грн">
						</div>
					</div>
					<div id="calc-block2" class="calc-block">
						<div class="calc-form__item">
							<p class="form-name">По стилю:</p>
							<label class="form-checkbox">
								<picture>
									<source srcset="img/entrance/calc/1.webp" type="image/webp">
									<img src="img/entrance/calc/1.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="style">
								<p class="form-checkbox__fake">Классика</p>
							</label>
							<label class="form-checkbox">
								<picture>
									<source srcset="img/entrance/calc/2.webp" type="image/webp">
									<img src="img/entrance/calc/2.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="style">
								<p class="form-checkbox__fake">Хай-тек</p>
							</label>
							<label class="form-checkbox">
								<picture>
									<source srcset="img/entrance/calc/3.webp" type="image/webp">
									<img src="img/entrance/calc/3.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="style">
								<p class="form-checkbox__fake">Минимализм</p>
							</label>
							<label class="form-checkbox">
								<picture>
									<source srcset="img/entrance/calc/4.webp" type="image/webp">
									<img src="img/entrance/calc/4.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="style">
								<p class="form-checkbox__fake">Лофт</p>
							</label>
							<label class="form-checkbox">
								<picture>
									<source srcset="img/entrance/calc/5.webp" type="image/webp">
									<img src="img/entrance/calc/5.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="style">
								<p class="form-checkbox__fake">В частный дом </p>
							</label>
						</div>
						<div class="calc-form__item">
							<p class="form-name">Материал:</p>
							<label class="form-checkbox mw160">
								<picture>
									<source srcset="img/material4.webp" type="image/webp">
									<img src="img/material4.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="material">
								<p class="form-checkbox__fake">мдф накладки</p>
							</label>
							<label class="form-checkbox mw160">
								<picture>
									<source srcset="img/material5.webp" type="image/webp">
									<img src="img/material5.jpg" alt="product" class="form-checkbox__img" loading="lazy">
								</picture>
								<input type="checkbox" name="material">
								<p class="form-checkbox__fake">двери из металла</p>
							</label>
						</div>
						<div class="calc-form__item">
							<p class="form-name">Цена от</p>
							<input type="text" name="pice" class="form-input" placeholder="2000 – 30 000 грн">
						</div>
					</div>
					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col col-xl-10">
					<div class="form-content">
						<div class="form-content__name">ПОЛУЧИТЬ ПРОСЧЕТ</div>
						<div class="rline">
							<input type="text" name="name" class="form-content__input rfield" placeholder="Имя">
						</div>
						<div class="rline">
							<input type="text" name="phone" class="form-content__input rfield phonefield" placeholder="Ваш телефон">
						</div>
						<button type="submit" class="form-content__btn btnsubmit">Отправить</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

<a href="https://youtu.be/cwZ0QYWH5Os" data-fancybox class="about-video"></a>
<section id="about" class="about">
	<div class="about-note">Дверная <span>мода</span></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-5">
				<div class="about-ttl">
					<h3 class="about-ttl__item"><span>Про нас</span></h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-6 order-2 order-md-1">
				<p class="about-txt">17 лет наша компания <b>«Дверная мода»</b> помогает обустроить дома и квартиры Запорожцев и жителей Запорожской области делая их <b>комфортнее, теплее и безопаснее.</b></p>
				<p class="about-txt">В 3-ех наших салонах, общей площадью <b>940 м2</b>, Вы получите <b>профессиональный подбор</b>, точный просчёт подобранной для Вас комплектации, <b>доставку и установку в оговорённые сроки.</b> Стоить отметить, что нами остались довольны <b>32 540 клиентов.</b> Они <b>получили</b> ожидаемый <b>результат.</b></p>
				<a href="#consalt" class="about-btn fancybox"><span>Получить консультацию от наших менеджеров</span></a>
			</div>
			<div class="col-lg-7 col-md-6 order-1 order-md-2">
				<picture>
					<source srcset="img/about-img.webp" type="image/webp">
					<img src="img/about-img.png" alt="about" class="about-img" loading="lazy">
				</picture>
			</div>
		</div>
		<div class="row justify-content-center d-none d-sm-flex">
			<div class="col-md-2 col-sm-6">
				<picture>
					<source srcset="img/team1.webp" type="image/webp">
					<img src="img/team1.jpg" alt="team" class="team-item__img" loading="lazy">
				</picture>
				<p class="team-item__name">Менеджер Евгения</p>
			</div>
			<div class="col-md-2 col-sm-6">
				<picture>
					<source srcset="img/team2.webp" type="image/webp">
					<img src="img/team2.jpg" alt="team" class="team-item__img" loading="lazy">
				</picture>
				<p class="team-item__name">Менеджер Ирина</p>
			</div>
			<div class="col-md-2 col-sm-6">
				<picture>
					<source srcset="img/team3.webp" type="image/webp">
					<img src="img/team3.jpg" alt="team" class="team-item__img" loading="lazy">
				</picture>
				<p class="team-item__name">Менеджер Наталья</p>
			</div>
			<div class="col-md-2 col-sm-6">
				<picture>
					<source srcset="img/team4.webp" type="image/webp">
					<img src="img/team4.jpg" alt="team" class="team-item__img" loading="lazy">
				</picture>
				<p class="team-item__name">Менеджер Светлана</p>
			</div>
			<div class="col-md-2 col-sm-6">
				<picture>
					<source srcset="img/team5.webp" type="image/webp">
					<img src="img/team5.jpg" alt="team" class="team-item__img" loading="lazy">
				</picture>
				<p class="team-item__name">Установщик Денис</p>
			</div>
		</div>
		<div class="row d-flex d-sm-none">
			<div class="col">
				<div class="team-slider">
					<div class="team-slider__slide">
						<picture>
							<source srcset="img/team1.webp" type="image/webp">
							<img src="img/team1.jpg" alt="team" class="team-item__img" loading="lazy">
						</picture>
						<p class="team-item__name">Менеджер Евгения</p>
					</div>

					<div class="team-slider__slide">
						<picture>
							<source srcset="img/team2.webp" type="image/webp">
							<img src="img/team2.jpg" alt="team" class="team-item__img" loading="lazy">
						</picture>
						<p class="team-item__name">Менеджер Ирина</p>
					</div>
					<div class="team-slider__slide">
						<picture>
							<source srcset="img/team3.webp" type="image/webp">
							<img src="img/team3.jpg" alt="team" class="team-item__img" loading="lazy">
						</picture>
						<p class="team-item__name">Менеджер Наталья</p>
					</div>
					<div class="team-slider__slide">
						<picture>
							<source srcset="img/team4.webp" type="image/webp">
							<img src="img/team4.jpg" alt="team" class="team-item__img" loading="lazy">
						</picture>
						<p class="team-item__name">Менеджер Светлана</p>
					</div>
					<div class="team-slider__slide">
						<picture>
							<source srcset="img/team5.webp" type="image/webp">
							<img src="img/team5.jpg" alt="team" class="team-item__img" loading="lazy">
						</picture>
						<p class="team-item__name">Установщик Денис</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="portfolio" class="portfolio">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="portfolio-ttl"><span>Наши работы</span></h3>
			</div>
		</div>
		<div class="portfolio-slider">
			<div class="portfolio-slider__slide">
				<a href="https://youtu.be/2CpxqZo-_yU" data-fancybox class="portfolio-item">
					<img src="https://i.ytimg.com/vi/2CpxqZo-_yU/hqdefault.jpg" alt="video" loading="lazy">
					<button class="video-play btn-reset">
						<svg width="68" height="48" viewBox="0 0 68 48">
							<path class="video-play-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z">
							</path>
						<path class="video-play-icon" d="M 45,24 27,14 27,34"></path>
						</svg>
					</button>
				</a>
			</div>
			<div class="portfolio-slider__slide">
				<a href="https://youtu.be/JP0gWCwcnTM" data-fancybox class="portfolio-item">
					<img src="https://i.ytimg.com/vi/JP0gWCwcnTM/hqdefault.jpg" alt="video" loading="lazy">
					<button class="video-play btn-reset">
						<svg width="68" height="48" viewBox="0 0 68 48">
							<path class="video-play-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z">
							</path>
						<path class="video-play-icon" d="M 45,24 27,14 27,34"></path>
						</svg>
					</button>
				</a>
			</div>
			<div class="portfolio-slider__slide">
				<a href="https://youtu.be/s4Bk7jGwwPY" data-fancybox class="portfolio-item">
					<img src="https://i.ytimg.com/vi/s4Bk7jGwwPY/hqdefault.jpg" alt="video" loading="lazy">
					<button class="video-play btn-reset">
						<svg width="68" height="48" viewBox="0 0 68 48">
							<path class="video-play-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z">
							</path>
						<path class="video-play-icon" d="M 45,24 27,14 27,34"></path>
						</svg>
					</button>
				</a>
			</div>
			<div class="portfolio-slider__slide">
				<a href="https://youtu.be/RyJwnyM6CrY" data-fancybox class="portfolio-item">
					<img src="https://i.ytimg.com/vi/RyJwnyM6CrY/hqdefault.jpg" alt="video" loading="lazy">
					<button class="video-play btn-reset">
						<svg width="68" height="48" viewBox="0 0 68 48">
							<path class="video-play-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z">
							</path>
						<path class="video-play-icon" d="M 45,24 27,14 27,34"></path>
						</svg>
					</button>
				</a>
			</div>
			<div class="portfolio-slider__slide">
				<a href="https://youtu.be/TjaebEdXXV4" data-fancybox class="portfolio-item">
					<img src="https://i.ytimg.com/vi/TjaebEdXXV4/hqdefault.jpg" alt="video" loading="lazy">
					<button class="video-play btn-reset">
						<svg width="68" height="48" viewBox="0 0 68 48">
							<path class="video-play-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z">
							</path>
						<path class="video-play-icon" d="M 45,24 27,14 27,34"></path>
						</svg>
					</button>
				</a>
			</div>
			<!-- <div class="portfolio-slider__slide">
				<a href="https://i.ytimg.com/vi/2CpxqZo-_yU/maxresdefault.jpg" data-fancybox class="portfolio-item">
					<img src="https://i.ytimg.com/vi/2CpxqZo-_yU/maxresdefault.jpg" alt="">
				</a>
			</div> -->
		</div>
	</div>
</section>

<section class="clients">
	<div class="container posa">
		<div class="row">
			<div class="col-md-3">
				<h3 class="clients-ttl"><span>Наши<br>клиенты</span></h3>
				<picture>
					<source srcset="img/clients-ttl_img.webp" type="image/webp">
					<img src="img/clients-ttl_img.png" alt="background" class="clients__img d-none d-md-block" loading="lazy">
				</picture>
			</div>
		</div>
	</div>
	<div class="container posr">
		<div class="clients-note d-none d-md-block">с кем  работаем</div>
		<div class="row d-none d-md-flex">
			<div class="col-md-2 offset-md-2">
				<div class="clients-item clients-item_brown clients-item_1">
					<div class="clients-item__img">
						<picture>
							<source srcset="img/clients/1.webp" type="image/webp">
							<img src="img/clients/1.png" alt="client" loading="lazy">
						</picture>
					</div>
					<p class="clients-item__ttl">Ювелирный завод Золотой Век</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="clients-item clients-item_dark clients-item_2">
					<div class="clients-item__img">
						<picture>
							<source srcset="img/clients/2.webp" type="image/webp">
							<img src="img/clients/2.png" alt="client" loading="lazy">
						</picture>
					</div>
					<p class="clients-item__ttl">Завод Запорожогнеупор</p>
				</div>
				<div class="clients-item clients-item_white clients-item_3">
					<div class="clients-item__img">
						<picture>
							<source srcset="img/clients/3.webp" type="image/webp">
							<img src="img/clients/3.png" alt="client" loading="lazy">
						</picture>
					</div>
					<p class="clients-item__ttl">Частная школа Эйдос</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="clients-item clients-item_white clients-item_4">
					<div class="clients-item__img">
						<picture>
							<source srcset="img/clients/4.webp" type="image/webp">
							<img src="img/clients/4.png" alt="client" loading="lazy">
						</picture>
					</div>
					<p class="clients-item__ttl">Ресторан Aristocrate</p>
				</div>
				<div class="clients-item clients-item_dark clients-item_5">
					<div class="clients-item__img">
						<picture>
							<source srcset="img/clients/5.webp" type="image/webp">
							<img src="img/clients/5.png" alt="client" loading="lazy">
						</picture>
					</div>
					<p class="clients-item__ttl">Кафе People</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="clients-item clients-item_dark clients-item_6">
					<div class="clients-item__img">
						<picture>
							<source srcset="img/clients/6.webp" type="image/webp">
							<img src="img/clients/6.png" alt="client" loading="lazy">
						</picture>
					</div>
					<p class="clients-item__ttl">Ресторан Mushroom</p>
				</div>
				<div class="clients-item clients-item_white clients-item_7">
					<div class="clients-item__img">
						<picture>
							<source srcset="img/clients/7.webp" type="image/webp">
							<img src="img/clients/7.png" alt="client" loading="lazy">
						</picture>
					</div>
					<p class="clients-item__ttl">Частная клиника Юнимед</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="clients-item clients-item_dark clients-item_8">
					<div class="clients-item__img">
						<picture>
							<source srcset="img/clients/8.webp" type="image/webp">
							<img src="img/clients/8.png" alt="client" loading="lazy">
						</picture>
					</div>
					<p class="clients-item__ttl">ЖК Набережный квартал</p>
				</div>
				<div class="clients-item clients-item_white clients-item_9">
					<div class="clients-item__img">
						<picture>
							<source srcset="img/clients/9.webp" type="image/webp">
							<img src="img/clients/9.png" alt="client" loading="lazy">
						</picture>
					</div>
					<p class="clients-item__ttl">ЖК Ренессанс</p>
				</div>
			</div>
		</div>
		<div class="row d-flex d-md-none">
			<div class="col">
				<div class="clients-slider">
					<div class="clients-slider__slide">
						<div class="clients-flex">
							<div class="clients-flex__wrap">
								<div class="clients-item clients-item_brown">
									<div class="clients-item__img">
										<picture>
											<source srcset="img/clients/1.webp" type="image/webp">
											<img src="img/clients/1.png" alt="client" loading="lazy">
										</picture>
									</div>
									<p class="clients-item__ttl">Ювелирный завод Золотой Век</p>
								</div>
							</div>
							<div class="clients-flex__wrap">
								<div class="clients-item clients-item_dark">
									<div class="clients-item__img">
										<picture>
											<source srcset="img/clients/2.webp" type="image/webp">
											<img src="img/clients/2.png" alt="client" loading="lazy">
										</picture>
									</div>
									<p class="clients-item__ttl">Завод Запорожогнеупор</p>
								</div>
								<div class="clients-item clients-item_white">
									<div class="clients-item__img">
										<picture>
											<source srcset="img/clients/3.webp" type="image/webp">
											<img src="img/clients/3.png" alt="client" loading="lazy">
										</picture>
									</div>
									<p class="clients-item__ttl">Частная школа Эйдос</p>
								</div>
							</div>
						</div>
					</div>
					<div class="clients-slider__slide">
						<div class="clients-flex">
							<div class="clients-flex__wrap">
								<div class="clients-item clients-item_white">
									<div class="clients-item__img">
										<picture>
											<source srcset="img/clients/4.webp" type="image/webp">
											<img src="img/clients/4.png" alt="client" loading="lazy">
										</picture>
									</div>
									<p class="clients-item__ttl">Ресторан Aristocrate</p>
								</div>
							</div>
							<div class="clients-flex__wrap">
								<div class="clients-item clients-item_dark">
									<div class="clients-item__img">
										<picture>
											<source srcset="img/clients/5.webp" type="image/webp">
											<img src="img/clients/5.png" alt="client" loading="lazy">
										</picture>
									</div>
									<p class="clients-item__ttl">Кафе People</p>
								</div>
								<div class="clients-item clients-item_dark">
									<div class="clients-item__img">
										<picture>
											<source srcset="img/clients/6.webp" type="image/webp">
											<img src="img/clients/6.png" alt="client" loading="lazy">
										</picture>
									</div>
									<p class="clients-item__ttl">Ресторан Mushroom</p>
								</div>
							</div>
						</div>
					</div>
					<div class="clients-slider__slide">
						<div class="clients-flex">
							<div class="clients-flex__wrap">
								<div class="clients-item clients-item_white">
									<div class="clients-item__img">
										<picture>
											<source srcset="img/clients/7.webp" type="image/webp">
											<img src="img/clients/7.png" alt="client" loading="lazy">
										</picture>
									</div>
									<p class="clients-item__ttl">Частная клиника Юнимед</p>
								</div>
							</div>
							<div class="clients-flex__wrap">
								<div class="clients-item clients-item_dark">
									<div class="clients-item__img">
										<picture>
											<source srcset="img/clients/8.webp" type="image/webp">
											<img src="img/clients/8.png" alt="client" loading="lazy">
										</picture>
									</div>
									<p class="clients-item__ttl">ЖК Набережный квартал</p>
								</div>
								<div class="clients-item clients-item_white">
									<div class="clients-item__img">
										<picture>
											<source srcset="img/clients/9.webp" type="image/webp">
											<img src="img/clients/9.png" alt="client" loading="lazy">
										</picture>
									</div>
									<p class="clients-item__ttl">ЖК Ренессанс</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="sample" class="sample">
	<div class="sample-content">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-7">
					<h3 class="sample-ttl"><span>Выезд на замер</span> нашего специалиста</h3>
					<p class="sample-txt">Оставьте заявку и к Вам приедет представитель компании с каталогами и произведёт замер в удобное для Вас время!</p>
					<form action="mail.php" method="POST" class="sample-form form_check" autocomplete="off">
						<div class="rline">
							<input type="text" name="name" class="sample-form__input rfield" placeholder="Имя">
						</div>
						<div class="rline">
							<input type="text" name="phone" class="sample-form__input rfield phonefield" placeholder="Ваш телефон">
						</div>
						<button type="submit" class="sample-form__btn btnsubmit">Отправить</button>
					</form>
				</div>
				<div class="col-md-5">
					<picture>
						<source srcset="img/sample-img.webp" type="image/webp">
						<img src="img/sample-img.png" alt="sample" class="sample-img" loading="lazy">
					</picture>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sertif">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-auto">
				<form action="mail.php" method="POST" class="sertif-form form_check" autocomplete="off">
					<h3 class="sertif-form__ttl">Получите в подарок сертификат<br>на <span>2 000 грн</span><br>на покупку нашей продукции</h3>
					<div class="rline">
						<input type="text" name="name" class="sertif-form__input rfield" placeholder="Имя">
					</div>
					<div class="rline">
						<input type="text" name="phone" class="sertif-form__input rfield phonefield" placeholder="Ваш телефон">
					</div>
					<button type="submit" class="sertif-form__btn btnsubmit">Получить предложение</button>
				</form>
			</div>
		</div>
	</div>
</section>

<section id="contacts" class="contacts">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-6">
				<h3 class="contacts-ttl"><span>Наши салоны</span></h3>
				<a href="tel:+380674100330" class="contacts-phone">+38 067 410 03 30</a>
				<div class="contacts-addr">
					<p class="contacts-addr__addr">г. Запорожье ул. Победы 61 (ост. Лермонтова)</p>
					<p class="contacts-addr__time">График работы:<br>с 9:30 до 19:00 ежедневно, без выходных</p>
				</div>
				<div class="contacts-addr">
					<p class="contacts-addr__addr">г. Запорожье пр. Соборный 13 (ТЦ «Кристалл Класс»)</p>
					<p class="contacts-addr__time">График работы:<br>с 9:30 до 18:00 ежедневно, без выходных</p>
				</div>
				<div class="contacts-addr">
					<p class="contacts-addr__addr">г. Запорожье пр. Юбилейный 14 (Хортицкий р-н)</p>
					<p class="contacts-addr__time">График работы:<br>c понедельника по субботу с 9:00 до 19:00,<br>воскресенье с 9:00 до 15:00</p>
				</div>
				<a href="#consalt" class="contacts-btn fancybox">Давайте мы перезвоним</a>
			</div>
		</div>
	</div>
	<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1wRigTaXA-xILN1CYo-2f6tN9_cFJg7iB" class="map"></iframe>
</section>

<footer class="foot">
	<div class="container">
		<div class="row">
			<div class="col-md-3 align-self-center">
				<picture>
					<source srcset="img/logo.webp" type="image/webp">
					<img src="img/logo.png" alt="logo" class="foot__logo" loading="lazy">
				</picture>
			</div>
			<div class="col-md-2 col-6">
				<ul class="foot-list">
					<li class="foot-list__item"><a href="/" class="active">Главная</a></li>
					<li class="foot-list__item"><a href="#about" class="anchor">О нас</a></li>
					<li class="foot-list__item"><a href="#calc" class="anchor">Подбор дверей</a></li>
					<li class="foot-list__item"><a href="#sample" class="anchor">Замер</a></li>
				</ul>
			</div>
			<div class="col-md-2 col-6">
				<ul class="foot-list">
					<li class="foot-list__item"><a href="entrance-doors.php">Входные</a></li>
					<li class="foot-list__item"><a href="interior-doors.php">Межкомнатные</a></li>
					<li class="foot-list__item"><a href="interior-doors.php#furniture">Фурнитура</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-6">
				<h3 class="foot-subttl">СВЯЗЬ С НАМИ:</h3>
				<a href="https://www.facebook.com/dvernamoda.com.ua" target="_blank" class="foot-soc">
					<img src="img/facebook.svg" alt="facebook" class="foot-soc__ico">
					<p class="foot-soc__txt">Facebook</p>
				</a>
				<!-- <a href="#" class="foot-soc">
					<img src="img/instagram.svg" alt="instagram" class="foot-soc__ico">
					<p class="foot-soc__txt">Instagram</p>
				</a> -->
				<a href="https://www.youtube.com/watch?v=cwZ0QYWH5Os" target="_blank" class="foot-soc">
					<img src="img/youtube.svg" alt="youtube" class="foot-soc__ico">
					<p class="foot-soc__txt">Youtube</p>
				</a>
			</div>
			<div class="col-md-2 col-6 align-self-center">
				<a href="https://wamp.com.ua/" target="_blank" class="dev">
					<p class="dev-txt">Разработка и реклама:</p>
					<picture>
						<source srcset="img/dev_logo.webp" type="image/webp">
						<img src="img/dev_logo.png" alt="logo" class="dev-logo" loading="lazy">
					</picture>
				</a>
			</div>
		</div>
	</div>
</footer>

<div class="d-none">
	<div id="modal" class="modal">
		<div class="flex">
			<div class="flex-wrap">
				<h3 class="modal-ttl">Только опытные менеджеры смогут подобрать двери, которые будут идеальны для Вас</h3>
				<form action="mail.php" method="POST" class="modal-form form_check" autocomplete="off">
					<div class="rline">
						<input type="text" name="name" class="modal-form__input rfield" placeholder="Имя">
					</div>
					<div class="rline">
						<input type="text" name="phone" class="modal-form__input rfield phonefield" placeholder="Ваш телефон">
					</div>
					<button type="submit" class="modal-form__btn btnsubmit">Получить предложение</button>
				</form>
			</div>
			<div class="flex-wrap d-none d-sm-block">
				<picture>
					<source srcset="img/modal_img.webp" type="image/webp">
					<img src="img/modal_img.png" alt="modal" class="modal-img">
				</picture>
			</div>
		</div>
	</div>
	<div id="consalt" class="modal">
		<div class="flex">
			<div class="flex-wrap">
				<h3 class="modal-ttl">Оставьте обращение и наш менеджер подробно проконсультирует Вас по телефону</h3>
				<form action="mail.php" method="POST" class="modal-form form_check" autocomplete="off">
					<div class="rline">
						<input type="text" name="name" class="modal-form__input rfield" placeholder="Имя">
					</div>
					<div class="rline">
						<input type="text" name="phone" class="modal-form__input rfield phonefield" placeholder="Ваш телефон">
					</div>
					<button type="submit" class="modal-form__btn btnsubmit">Получить консультацию</button>
				</form>
			</div>
			<div class="flex-wrap d-none d-sm-block">
				<picture>
					<source srcset="img/modal_img.webp" type="image/webp">
					<img src="img/modal_img.png" alt="modal" class="modal-img">
				</picture>
			</div>
		</div>
	</div>
	<div id="thn" class="thn">
		<h3>Заявка отправлена!</h3>
		<p>С Вами свяжутся в ближайшее время.</p>
	</div>
</div>

<script src="js/scripts.min.js"></script>

</body>
</html>