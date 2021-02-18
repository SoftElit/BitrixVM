<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("property_test", "Тестовое значение моего свойства");
$APPLICATION->SetPageProperty("title", "Отзывы (заголовок окна браузера)");
$APPLICATION->SetPageProperty("keywords", "Отзывы, компания, мебель");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
?>Здесь Вы можете ознакомиться с отзывами о нашей компании или разместить свой отзыв.
<p>Заголовок - <?$APPLICATION->ShowTitle()?></p>
<!-- false, чтобы отделить заголовок от заголовка окна браузера, который по умолчанию == true -->
<p>Заголовок 2 - <?$APPLICATION->ShowTitle(false)?></p>
<p>property_test - <?$APPLICATION->ShowProperty("property_test")?></p>
<p>title - <?$APPLICATION->ShowProperty("title")?></p>
<p>keywords - <?$APPLICATION->ShowProperty("keywords")?></p>
<p>description - <?$APPLICATION->ShowProperty("description")?></p>

<!-- Переопределять значение можно и после вывода (отложенные функции) - интерпретатор выводит значения после обхода всех переменных -->
<?$APPLICATION->SetPageProperty("property_test", "Тестовое значение моего свойства № 2");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
