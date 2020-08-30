<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 15:02:36
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/index/news.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4bbf8c6bbd24_93785113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efd981c80ae27c7e3b0520c70d11938b7a5ac429' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/index/news.html',
      1 => 1598799751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4bbf8c6bbd24_93785113 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>news</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="news-box">
        <h3>新闻中心</h3>
        <div>新闻中心描述</div>
        <h3>
            <a href="">链接一</a>
            <a href="">链接二</a>
            <a href="">链接三</a>
        </h3>
        <div class="list-box">
            <div class="list">
                <img src="<?php echo IMG_ADD;?>
list.jpg" alt="">
                
            </div>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
