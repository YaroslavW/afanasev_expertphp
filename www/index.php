<?php

session_start();

//если в сессии нет массива корзины то создаем его
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

include_once '../config/config.php';    //инициализация настроек
include_once '../config/db.php';    //подключение к базе данных
include_once '../library/mainFunctions.php';    //Основные функции

//Определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//Определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'index';

//если пользователь авторизован, то передаем данные о нем в шаблон
if(isset($_SESSION['user'])){
    $smarty->assign('arUser', $_SESSION['user']);
}

//инициализируем пременную шаблонизатора количества элементов в корзине
$smarty->assign('cartCntItems', count($_SESSION['cart']) );

loadPage($smarty, $controllerName, $actionName);