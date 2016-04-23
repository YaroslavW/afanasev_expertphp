<?php
/* Smarty version 3.1.29, created on 2016-03-27 17:21:41
  from "C:\Program Files (x86)\Ampps\www\afanasev-expertphp.loc\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f7ec758e2e84_92732766',
  'file_dependency' => 
  array (
    '68f0893d63482ef72748950d877b0bc1c38e969f' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\afanasev-expertphp.loc\\views\\default\\header.tpl',
      1 => 1459088498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_56f7ec758e2e84_92732766 ($_smarty_tpl) {
?>
<html>
    <head>
       <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

       <link rel="stylesheet" href="<?php echo TemplateWebPath;?>
css/bootstrap.css" type="text/css"/>
       <link rel="stylesheet" href="<?php echo TemplateWebPath;?>
css/bootstrap-theme.css" type="text/css"/>
       <link rel="stylesheet" href="<?php echo TemplateWebPath;?>
css/main.css" type="text/css"/>
    </head>
    
    <body>
  
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                        <div id="header">
                            <h1>my shop - интрернет магазин</h1>
                        </div>
                    </div>
                </div>
            </div>
 
 
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
                <div class="col-md-8 col-sm-8 col-xs-12 col-lg-8">
                    <div id="centerColumn">
                            
<?php }
}
