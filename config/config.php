<?php
/*
 * Файл настроек
 */

//Константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');


//> Используемый шаблон
$template = 'default';

//пути к файлам шаблонов (*.tpl)
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

//пути к файлам в вебпространстве
define('TemplateWebPath', "/templates/{$template}/");
//<

//>Инициализация шаблона Smarty
require '../library/vendor/smarty/libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cashe');
$smarty->setConfigDir('../library/vendor/smarty/configs');

$smarty->assign('TemplateWebPath', TemplateWebPath);

//<