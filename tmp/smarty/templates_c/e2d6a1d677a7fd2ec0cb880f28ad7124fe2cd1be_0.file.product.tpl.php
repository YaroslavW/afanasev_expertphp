<?php
/* Smarty version 3.1.29, created on 2016-03-30 15:18:04
  from "C:\Program Files (x86)\Ampps\www\afanasev-expertphp.loc\views\default\product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fbc3fc99c044_27636696',
  'file_dependency' => 
  array (
    'e2d6a1d677a7fd2ec0cb880f28ad7124fe2cd1be' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\afanasev-expertphp.loc\\views\\default\\product.tpl',
      1 => 1459340246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fbc3fc99c044_27636696 ($_smarty_tpl) {
?>

<div class="row">
    <h2><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h2>
    <div class="col-md-6 detail-image">
        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
    </div>
        
   
    <div class="col-md-6">
        <p>Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
</p>

        
            <p>
                <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" 
                   href="#" 
                   <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?>  
                   onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" 
                   alt="Добавить в корзину">
                   Добавить в корзину
                </a>
            </p>
            <p>
                <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" 
                   href="#" 
                   <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> 
                   onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" 
                   alt="Удалить из корзины">
                   Удалить из корзины
                </a>
            </p>

        
        <p>Описание <br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
    </div>
</div><?php }
}
