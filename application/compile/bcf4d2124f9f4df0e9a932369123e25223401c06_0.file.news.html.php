<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 12:16:04
  from 'D:\Wampserver\www\八月\mvcone\application\template\index\news.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b9884d9ccb3_76558071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf4d2124f9f4df0e9a932369123e25223401c06' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\index\\news.html',
      1 => 1598789762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b9884d9ccb3_76558071 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/news.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/news.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/jquery3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/aniMath.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<!-- 论坛动态开始 -->
<div class="news-box">
    <div class="container">
        <div class="container-title" style="float: none;">
            <div class="container-cn">论坛动态</div>
            <div class="container-en">news</div>
        </div>
        <div class="news-tabs">
            <ul class="news-tabs-list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['soninfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <li class="news-tabs-item"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>

</div>
<!--省略了一些内容-->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['soninfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<div class="news-details">
    <div class="news-details-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsinfo']->value, 'v1');
$_smarty_tpl->tpl_vars['v1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->do_else = false;
?>
        <div class="news-details-item-box">
            <div class="news-details-item">
                <div class="news-details-left">
                    <a href="">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v1']->value['imgurl'];?>
" alt="">
                    </a>
                </div>

                <div class="news-details-right">
                    <div class="news-details-title">
                        <a href=""><?php echo $_smarty_tpl->tpl_vars['v1']->value['ctitle'];?>
</a>
                    </div>
                    <div class="news-details-line"></div>
                    <div class="news-details-date">发布日期：&ensp;<?php echo date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['v1']->value['date']));?>
</div>
                    <div class="news-details-bottom"><?php echo $_smarty_tpl->tpl_vars['v1']->value['info'];?>
</div>
                </div>

            </div>

        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="showMore-box">
            <div class="showMore">
                <span>查看更多</span>
                <span class="showMore-icon iconfont">&#xe664;</span>
            </div>
        </div>
    </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





<!-- 论坛动态结束 -->

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
