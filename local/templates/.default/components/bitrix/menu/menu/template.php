<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if(empty($arResult['ALL_ITEMS'])) return; ?>

<div class="head__bottom" id="head__top">
	<ul class="head__nav">
	    <?php foreach ($arResult['ALL_ITEMS'] as $arItem) : ?>
		<li class="head__nav__item"><a href="<?=$arItem['LINK'];?>" class="head__link"><?=$arItem['TEXT'];?></a></li>
		<?php endforeach; ?>
	</ul>
</div>

