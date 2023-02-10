<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $APPLICATION->ShowHead() ?>
    <title><?php $APPLICATION->ShowTitle() ?> </title>
    <?php
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/style.css');
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/normalize.css');
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/all.css');
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/slick.css');
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/slick-theme.css');
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/animate.css');
        
        Asset::getInstance()->addJs('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
        

        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;display=swap" rel="stylesheet">');
    ?>
</head>
<body>
    
    <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
    
	<header id="head" class="head">
		<div class="wrapper">
			<div class="head__container">
				<div class="head__container__left">
				    <a href="/">
					<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo-blue.svg" alt="" class="logo__blue">
					<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo-black.svg" alt="" class="logo__black">
					<h1 class="head__title">BuhOne</h1>
					</a>
				</div>
				<div class="head__container__right">
					<div class="head__top">
						<ul class="head__info">
							<li class="head__info__item"
								style="background-image: url(<?=DEFAULT_TEMPLATE_PATH?>/img/number.svg); background-repeat: no-repeat; "><a href="#">8
									(111) 222-33-44</a></li>
							<li class="head__info__item"
								style="background-image: url(<?=DEFAULT_TEMPLATE_PATH?>/img/clock.svg); background-repeat: no-repeat; "><a
									href="#">Пн-Пт 10:00-18:00</a></li>
							<li class="head__info__item"
								style="background-image: url(<?=DEFAULT_TEMPLATE_PATH?>/img/e-mail.svg); background-repeat: no-repeat; "><a
									href="https://www.google.com/intl/ru/gmail/about/">order@buhone.ru</a></li>
							<li class="head__info__item"
								style="background-image: url(<?=DEFAULT_TEMPLATE_PATH?>/img/placeholder.svg); background-repeat: no-repeat; "><a
									href="#">Невский пр. 130</a></li>
						</ul>
					</div>
					
					<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu",
		"MENU_THEME" => "site"
	),
	false
);?>
					
				</div>
			</div>
			<div class="navmob">
				<div class="navmob__container">
					<div class="navmob__container__right">
						<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo-blue.svg" alt="" class="logo__blue">
						<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo-black.svg" alt="" class="logo__black">
						<h1 class="head__title">BuhOne</h1>
					</div>
					<div class="navmob__container__left">
						<div class="hamb ">
							<span class="hamb-top"></span>
							<span class="hamb-bot"></span>
						</div>
						<div class="hamb-text">menu</div>
					</div>
				</div>
				<div class="navmob__menu__hide">
					<div class="navmob__top__menu">
						<ul class="navmob__menu__info">
							<li class="navmob__menu__item">
								<div style="background-image: url(<?=DEFAULT_TEMPLATE_PATH?>/img/number.svg); background-repeat: no-repeat; "></div><a>8
									(111) 222-33-44</a>
							</li>
							<li class="navmob__menu__item">
								<div style="background-image: url(<?=DEFAULT_TEMPLATE_PATH?>/img/clock.svg); background-repeat: no-repeat; "></div>
								<a>Пн-Пт 10:00-18:00</a>
							</li>
							<li class="navmob__menu__item">
								<div style="background-image: url(<?=DEFAULT_TEMPLATE_PATH?>/img/e-mail.svg); background-repeat: no-repeat; "></div>
								<a>order@buhone.ru</a>
							</li>
							<li class="navmob__menu__item">
								<div style="background-image: url(<?=DEFAULT_TEMPLATE_PATH?>/img/placeholder.svg); background-repeat: no-repeat; ">
								</div><a>Невский пр. 130</a>
							</li>
						</ul>
					</div>
					<div class="navmob__bottom__menu" id="head__top">
						<ul class="navmob__nav">
							<li class="navmob__nav__item"><a href="/" class="navmob__link">Главная</a></li>
							<li class="navmob__nav__item"><a href="/services/" class="navmob__link">Услуги</a></li>
							<li class="navmob__nav__item"><a href="/#company" class="navmob__link">Кейсы</a></li>
							<li class="navmob__nav__item"><a href="/about/" class="navmob__link">О компании</a></li>
							<li class="navmob__nav__item"><a href="/#contact" class="navmob__link">Контакты</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="head__slaider">
			<div class="wrapper">
				<div class="head__slaider__slide">
					<div class="head__slaider__content">
						<h2 class="head__services">Бухгалтерские услуги <br> в Санкт-Петербурге</h2>
						<a href="#" class="head__btn">Наша презентация</a>
					</div>
					<div class="head__slaider__content">
						<h2 class="head__services">Бухгалтерские услуги <br> в Санкт-Петербурге</h2>
						<a href="#" class="head__btn">Наша презентация</a>
					</div>
					<div class="head__slaider__content">
						<h2 class="head__services">Бухгалтерские услуги <br> в Санкт-Петербурге</h2>
						<a href="#" class="head__btn">Наша презентация</a>
					</div>
					<div class="head__slaider__content">
						<h2 class="head__services">Бухгалтерские услуги <br> в Санкт-Петербурге</h2>
						<a href="#" class="head__btn">Наша презентация</a>
					</div>
				</div>
			</div>
		</div>
	</header>