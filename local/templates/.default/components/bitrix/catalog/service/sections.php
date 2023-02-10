<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>

<?
if (CModule::IncludeModule("iblock")):
    $iblock_id = 3; // ID инфоблока из которого выводим элементы
    $mySlider = CIBlockElement::GetList(
        // Сортировка элементов
        array(
            "ID" => "ASC"
        ),
        array(
            "IBLOCK_ID" =>
            $iblock_id
        ),
        false,
        false,
        // Перечисляесм все свойства элементов, которые планируем выводить
        array(
            'ID',
            'NAME',
            'PREVIEW_PICTURE',
            'PREVIEW_TEXT',
            'PROPERTY_LIN_PR'
        )
    );
    while ($arFields = $mySlider->GetNext()) {
        //Выводим элемент со всеми свойствами + верстка
        $img_path = CFile::GetPath($arFields["PREVIEW_PICTURE"]);

        echo '<div class="services__bottom__item" style="background-image: url(' . $img_path . '); background-repeat: no-repeat; ">';
        echo '<a href="/1/'.$arFields["ID"].'/#services">';
        echo '<div class="services__hover"></div>';
        echo '<h3>' . $arFields['NAME'] . '</h3>';
        echo '</a></div>';

    }
endif;
?>