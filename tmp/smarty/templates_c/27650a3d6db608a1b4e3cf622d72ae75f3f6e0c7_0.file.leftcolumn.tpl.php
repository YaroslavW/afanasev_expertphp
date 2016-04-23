<?php
/* Smarty version 3.1.29, created on 2016-04-06 16:41:10
  from "C:\Program Files (x86)\Ampps\www\afanasev-expertphp.loc\views\default\leftcolumn.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570511f64dec06_31195147',
  'file_dependency' => 
  array (
    '27650a3d6db608a1b4e3cf622d72ae75f3f6e0c7' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\afanasev-expertphp.loc\\views\\default\\leftcolumn.tpl',
      1 => 1459950066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570511f64dec06_31195147 ($_smarty_tpl) {
?>

        
            <div id="leftColumn">
                <div id="leftMenu">
                    <div class="menuCaption">
                        <h3>Меню:</h3>
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['rsCategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                <li class="parent">
                                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                                        <ul>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['children'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_children_1_saved_item = isset($_smarty_tpl->tpl_vars['children']) ? $_smarty_tpl->tpl_vars['children'] : false;
$_smarty_tpl->tpl_vars['children'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['children']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['children']->value) {
$_smarty_tpl->tpl_vars['children']->_loop = true;
$__foreach_children_1_saved_local_item = $_smarty_tpl->tpl_vars['children'];
?>
                                            <li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['children']->value['name'];?>
</a></li>
                                        <?php
$_smarty_tpl->tpl_vars['children'] = $__foreach_children_1_saved_local_item;
}
if ($__foreach_children_1_saved_item) {
$_smarty_tpl->tpl_vars['children'] = $__foreach_children_1_saved_item;
}
?>
                                        </ul>
                                    <?php }?>
                                </li>
                            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
                        </ul>
                    </div>
                </div>

                <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                <div id="userBox" >
                    <a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br/>
                    <a href="/user/logout/" onclick="logout();">Выход</a>
                </div>                
                <?php } else { ?>
                <div id="userBox" class="hideme">
                    <a href="#" id="userLink"></a><br/>
                    <a href="/user/logout/" onclick="logout();">Выход</a>
                </div>
                       
                <div id="loginBox" class="registerBox">
                     <div class="menuCaption">Авторизация</div>

                          <div class="form-group">
                            <label for="loginEmail">Email:</label>
                            <input type="email" class="form-control" name="loginEmail" id="loginEmail">
                          </div>
                          <div class="form-group">
                            <label for="loginPwd">Пароль:</label>
                            <input type="password" name="loginPwd" class="form-control" id="loginPwd">
                          </div>
                          <button type="button" onclick="login();return false;" class="btn btn-default">Войти</button>
                </div>
                        
                <div id="registerBox" class="registerBox">
                    <div class="menuCaption showHidden" onclick="showRegisterBox()">Регистрация</div>
                    
                    <div id="registerBoxHidden">
                        
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email">
                          </div>
                          <div class="form-group">
                            <label for="pwd1">Пароль:</label>
                            <input type="password" name="pwd1" class="form-control" id="pwd1">
                          </div>
                          <div class="form-group">
                            <label for="pwd2">Повторить пароль:</label>
                            <input type="password" name="pwd2" class="form-control" id="pwd2">
                          </div>
                          <button type="button" onclick="registerNewUser();return false;" class="btn btn-default">Регистрация</button>
                      
                    </div>
                </div>
                <?php }?>        
                        
                <div class="cartCaption">
                    <h3>Корзина</h3>
                    <a href="/cart/" title="перейти вкорзину">В корзине</a>
                    <span id="cartCntItems">
                        <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>пусто<?php }?>
                    </span>
                </div>
            </div>

<?php }
}
