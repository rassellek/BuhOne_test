<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

	<section id="contact" class="contact">
		<div class="wrapper">
			<div class="contact__container">
				<div class="contact__container__left wow fadeInDown">
					<h2>Связь с нами</h2>
					<p class="contact__question">У вас остались вопросы? Напишите нам - мы ответим <br> в ближайшее время!
					</p>
					<div class="contact__contacts">
						<div class="contact__contacts__top">
							<div class="contact__first"></div>
							<a href="#" class="contact__contacts__link">+7 (111) 222-33-44</a>
						</div>
						<div class="contact__contacts__bottom">
							<div class="contact__second"></div>
							<a href="https://www.google.com/intl/ru/gmail/about/"
								class="contact__contacts__link">order@bu-one.ru</a>
						</div>
					</div>
				</div>
				<div class="contact__container__right wow fadeInDown">
					<div class="contact__top">
						<div class="contact__top-left">
							<h2>Имя</h2>
							<input class="name" type="text" placeholder="Иван">
						</div>
						<div class="contact__top-left">
							<h2>Фамилия</h2>
							<input class="sename" type="text" placeholder="Иванов">
						</div>
					</div>
					<div class="contact__top-bottom">
						<h2>Сообщение</h2>
						<textarea name="text" id="message" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
					</div>
					<a href="#" class="contact__btn">Отправить сообщение</a>
				</div>
			</div>
		</div>
	</section>
	<a class="up__btn" href="#" onclick="return up()">Наверх</a>
	
	<footer class="footer">
		<div class="wrapper">
			<div class="footer__container">
				<h2>2023 (с) Все права защищены.</h2>
				<h2>Разработано: WebStudion</h2>
			</div>
		</div>
	</footer>
	
<script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('.head__slaider__slide, .clients__slaider__slide, .reviews__slide').slick({
  	 dots: true,
	  arrows: true
  });	
    $('.navmob__menu__hide').hide();
    $('.navmob__container__left').click(function(){
    	$(this).children('.hamb__active');
    	$('.navmob__menu__hide').slideToggle();
    	$('.hamb').toggleClass("hamb__active");
    });
});
</script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/wow.min.js"></script>

<script>
    var t;
function up() {
  var top = Math.max(
    document.body.scrollTop,
    document.documentElement.scrollTop
  );
  if (top > 0) {
    window.scrollBy(0, -100);
    t = setTimeout("up()", 20);
  } else clearTimeout(t);
  return false;
}
</script>

<script>
    new WOW().init();
</script>

</body>