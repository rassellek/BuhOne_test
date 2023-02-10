<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "BuhOne");
$APPLICATION->SetTitle("BuhOne"); ?><section class="services" id="services">
<div class="wrapper">
	<div class="services__top">
		<p>
			 Наши услуги
		</p>
	</div>
	<div class="services__middle">
		<h2>Мы специализируемся</h2>
	</div>
	<div class="services__bottom">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"service",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "service",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => array(0=>"POPUP",1=>"MAGNIFIER",),
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SHOW_POPULAR" => "N",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_SHOW_VIEWED" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "Y",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_HIDE_ON_MOBILE" => "N",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "services",
		"INCLUDE_SUBSECTIONS" => "Y",
		"INSTANT_RELOAD" => "N",
		"LABEL_PROP" => array(),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_ENLARGE_PRODUCT" => "STRICT",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"LIST_SHOW_SLIDER" => "Y",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "visual",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "30",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"SEARCH_CHECK_DATES" => "Y",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_PAGE_RESULT_COUNT" => "50",
		"SEARCH_RESTART" => "N",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SEARCH_USE_SEARCH_RESULT_ORDER" => "N",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "2",
		"SEF_FOLDER" => "/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("sections"=>"","section"=>"#SECTION_ID#/","element"=>"#SECTION_ID#/#ELEMENT_ID#/","compare"=>"compare.php?action=#ACTION_CODE#","smart_filter"=>"#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SKU_DESCRIPTION" => "N",
		"SHOW_TOP_ELEMENTS" => "Y",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"SIDEBAR_SECTION_SHOW" => "N",
		"TEMPLATE_THEME" => "",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_ENLARGE_PRODUCT" => "STRICT",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"TOP_SHOW_SLIDER" => "Y",
		"TOP_SLIDER_INTERVAL" => "3000",
		"TOP_SLIDER_PROGRESS" => "N",
		"TOP_VIEW_MODE" => "SECTION",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "N",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_FILTER" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_STORE" => "N",
		"VARIABLE_ALIASES" => array("compare"=>array("ACTION_CODE"=>"action",),)
	)
);?><br>
	</div>
</div>
 </section> <section id="company" class="company">
<div class="wrapper">
	<div class="company__container">
		<div class="company__container__left">
			<h2>О нас</h2>
			<h3>Компания <br>
			 ИвановПром</h3>
			<div class="company__description">
				 Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.
			</div>
		</div>
		<div class="company__container__right">
			<div class="company__box wow fadeInDown">
				<h2>90</h2>
				<h5>Завершено <br>
				 крупных сделок</h5>
 <a href="#" class="company__box__item">Все кейсы</a>
			</div>
			<div class="company__box wow fadeInDown ">
				<h2>90</h2>
				<h5>Завершено <br>
				 крупных сделок</h5>
 <a href="#" class="company__box__item">Все кейсы</a>
			</div>
			<div class="company__box wow fadeInDown ">
				<h2>90</h2>
				<h5>Завершено <br>
				 крупных сделок</h5>
 <a href="#" class="company__box__item">Все кейсы</a>
			</div>
			<div class="company__box wow fadeInDown ">
				<h2>90</h2>
				<h5>Завершено <br>
				 крупных сделок</h5>
 <a href="#" class="company__box__item">Все кейсы</a>
			</div>
		</div>
	</div>
</div>
 </section> <section id="clients" class="clients">
<div class="clients__slaider">
	<div class="wrapper">
		<div class="clients__slaider__slide">
			<div class="clients__slaider__content">
				<p>
					 Наши клиенты
				</p>
				<h2>С нами работают</h2>
				<div class="clients__slaider__images">
 <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg">
				</div>
			</div>
			<div class="clients__slaider__content">
				<p>
					 Наши клиенты
				</p>
				<h2>С нами работают</h2>
				<div class="clients__slaider__images">
 <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg">
				</div>
			</div>
			<div class="clients__slaider__content">
				<p>
					 Наши клиенты
				</p>
				<h2>С нами работают</h2>
				<div class="clients__slaider__images">
 <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg">
				</div>
			</div>
			<div class="clients__slaider__content">
				<p>
					 Наши клиенты
				</p>
				<h2>С нами работают</h2>
				<div class="clients__slaider__images">
 <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg"> <img alt="microsoft logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/microsoft__img.svg">
				</div>
			</div>
		</div>
	</div>
</div>
 </section> <section id="reviews" class="reviews">
<div class="wrapper">
	<div class="reviews__slide">
		<div class="reviews__slide__content">
			<h3>Отзывы</h3>
			<h2>Ваши благодарности</h2>
			<div class="reviews__slide__review">
				<p class="reviews__desc">
					 Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
				</p>
				<div class="reviews__human">
 <img alt="img_of_human" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/img__human.svg">
					<div class="reviews__human__middle">
						<h4>Екатерина Иванова</h4>
						<p>
							 Директор ООО “Раз-два”
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="reviews__slide__content">
			<h3>Отзывы</h3>
			<h2>Ваши благодарности</h2>
			<div class="reviews__slide__review">
				<p class="reviews__desc">
					 Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
				</p>
				<div class="reviews__human">
 <img alt="img_of_human" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/img__human.svg">
					<div class="reviews__human__middle">
						<h4>Екатерина Иванова</h4>
						<p>
							 Директор ООО “Раз-два”
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="reviews__slide__content">
			<h3>Отзывы</h3>
			<h2>Ваши благодарности</h2>
			<div class="reviews__slide__review">
				<p class="reviews__desc">
					 Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
				</p>
				<div class="reviews__human">
 <img alt="img_of_human" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/img__human.svg">
					<div class="reviews__human__middle">
						<h4>Екатерина Иванова</h4>
						<p>
							 Директор ООО “Раз-два”
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="reviews__slide__content">
			<h3>Отзывы</h3>
			<h2>Ваши благодарности</h2>
			<div class="reviews__slide__review">
				<p class="reviews__desc">
					 Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
				</p>
				<div class="reviews__human">
 <img alt="img_of_human" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/img__human.svg">
					<div class="reviews__human__middle">
						<h4>Екатерина Иванова</h4>
						<p>
							 Директор ООО “Раз-два”
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 </section><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>