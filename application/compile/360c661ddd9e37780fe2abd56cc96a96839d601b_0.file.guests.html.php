<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 12:34:18
  from 'D:\Wampserver\www\八月\mvcone\application\template\index\guests.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b9ccad48941_52182292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '360c661ddd9e37780fe2abd56cc96a96839d601b' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\index\\guests.html',
      1 => 1598790824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b9ccad48941_52182292 (Smarty_Internal_Template $_smarty_tpl) {
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
index/guests.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/guests.js"><?php echo '</script'; ?>
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
<!--内容开始-->
<div class="container" style="margin-bottom: 0;">
    <div class="line"></div>
    <div class="container-title">
        <div class="container-cn">论坛嘉宾</div>
        <div class="container-en">guests</div>
    </div>
    <div class="line-right" ></div>
</div>
<ul class="name-box">
    <li class="name-item" style="margin-left: 0;">C</li>
    <li class="name-item">D</li>
    <li class="name-item">F</li>
    <li class="name-item">G</li>
    <li class="name-item">H</li>
    <li class="name-item">J</li>
    <li class="name-item" style="margin-left: 0;">L</li>
    <li class="name-item">M</li>
    <li class="name-item">N</li>
    <li class="name-item">Q</li>
    <li class="name-item">R</li>
    <li class="name-item">S</li>
    <li class="name-item" style="margin-left: 0;">T</li>
    <li class="name-item">W</li>
    <li class="name-item">X</li>
    <li class="name-item">Y</li>
    <li class="name-item">Z</li>
    <li class="name-item" style="background: #f9f9f9;
        border: 1px solid rgba(170,170,170,1);">全部</li>
</ul>
<div class="Guests-box">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['guestsinfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="Guests-item-box">
        <a href="">
            <div class="Guests-item">
                <div class="Guests-item-img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                </div>
                <div class="Guests-item-line"></div>
                <div class="Guests-item-dec">
                    <div class="Guests-item-title">
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>

                    </div>
                    <div class="Guests-item-name-box">
                        <div class="Guests-item-name">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>


                        </div>
                        <div class="Guests-item-name-dec">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['cons'];?>

                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>

<!-- 内容结束 -->


<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
