<?php
/* Smarty version 3.1.29, created on 2016-03-30 15:34:53
  from "C:\Program Files (x86)\Ampps\www\afanasev-expertphp.loc\views\default\cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fbc7ed9f1b05_28165728',
  'file_dependency' => 
  array (
    'ef6e79eb5b42059fd60765a1890e2d434902f71b' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\afanasev-expertphp.loc\\views\\default\\cart.tpl',
      1 => 1459341289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fbc7ed9f1b05_28165728 ($_smarty_tpl) {
?>


<h1>Корзина</h1>

<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?>
    В корзине пусто
<?php } else { ?>
    <table class="table">
    <thead>
      <tr>
        <th>Номер</th>
        <th>Наименование</th>
        <th>Количество</th>
        <th>Цена за единицу</th>
        <th>Цена</th>
        <th>Действие</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>  
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
        <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
        <td>
            <input type="text" 
                   value="1" 
                   name="itemCant_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" 
                   id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" 
                   onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)">
        </td>
        <td>
            <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

            </span>
        </td>
        <td>
            <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
                <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

            </span>
        </td>
        <td>
            <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" 
               href="#" 
               onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" 
               title='Удалить'>
               Удалить
            </a>
            <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" 
               href="#" 
               class="hideme"
               onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" 
               title='Восстановить'>
               Восстановить
            </a>
        </td>
      </tr>
      <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
if ($__foreach_item_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_0_saved_key;
}
?>
    </tbody>
  </table>  
  
<?php }
}
}
