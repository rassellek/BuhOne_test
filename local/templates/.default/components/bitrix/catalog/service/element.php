<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);

$GLOBALS['ID'] = $arResult['VARIABLES']['ELEMENT_ID'];



if (CModule::IncludeModule("iblock")):
    $iblock_id = 3; // ID инфоблока из которого выводим элементы
    $mySlider = CIBlockElement::GetList(
        // Сортировка элементов
        array(
            "ID" =>  $GLOBALS['ID']
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
            'DETAIL_TEXT',
        )
    );
    while ($arFields = $mySlider->GetNext()) {
        if ($arFields['ID'] === $GLOBALS['ID']) 
        {
        echo '<div class="services__top navigation" id="navigation">';   
        echo '<a href="/"><p> Главная </p></a>';
        echo '<p>&nbsp>&nbsp</p>';
        echo '<a href="/#services"><p> Наши услуги </p></a>';
        echo '<p>&nbsp>&nbsp</p>';
        echo '<p>' . $arFields['NAME'] . '</p>';
        echo '</div>';   
            
        echo '<div class="services__middle">'; 
        echo '<h2>' . $arFields['NAME'] . '</h2>';
        echo '</div>'; 
        echo '<div class="company__description service">'. $arFields['DETAIL_TEXT'] .'</div>';
        }
    }
    endif;
?>
		

