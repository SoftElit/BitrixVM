<?php
/* Функция форматированного (красивого, стилизованного) распечатывания значения переменной (использует встроенную 
php-функцию var_dump) */
function dump($var, $die = false, $all = false) //обязательный параметр $var и два необязательных параметра, установленных в false
{
	global $USER;
	
	//if($USER->IsAdmin() || ($all == true)) {
	if($USER->IsAdmin()) {
	/* проверка прав пользователя на Администратор (или права всех пользователей, включая незарегистрированных, чтобы 
	можно было воспользоваться распечатыванием значения переменной даже обычному пользователю */
		?>
		<font style="text-align: left; color: red; font-size: 14px"><pre><?var_dump($var)?></pre></font><br>
		<?
	}
	
	/* по значению этой переменной (задаётся в параметре вызова функции fuction dump()) проверяем требуется ли завершить 
	все операции, которые идут после этого скрипта (условия) */
			//if($die) {
	if($die === true) {
		die; //завершение всех операций
	}
};

//Функция вывода в браузер ключевых слов текущей страницы (ключевые слова принимает в аргументе)
function printKeywords($printKeyword)
{
	global $USER;
	
	if($USER->IsAdmin() && ($printKeyword !== NULL)) {
		//echo '<p>keywords ' . $printKeyword . "</p>";
		?><p>keywords <?=$printKeyword?></p>
		<?
	}
};

//Функция вывода в браузер ключевых слов текущей страницы без аргументов (ключевые слова проверяет на наличие в свойстве keywords объекта APPLICATION)
function printKeyword()
{
	global $USER;
	
	if($USER->IsAdmin() && ($APPLICATION->keywords !== NULL)) {
		echo "<p>keywords: " . $APPLICATION->ShowProperty("keywords") . "</p>";
	}
};
