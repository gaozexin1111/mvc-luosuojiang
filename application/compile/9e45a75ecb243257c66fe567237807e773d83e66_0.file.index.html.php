<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 11:08:10
  from 'D:\Wampserver\www\八月\mvcone\application\template\index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b889aa127f6_54020079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e45a75ecb243257c66fe567237807e773d83e66' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\index\\index.html',
      1 => 1598785685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b889aa127f6_54020079 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/index.js"><?php echo '</script'; ?>
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


<!-- 轮播图开始 -->
<div class="wheel-box">
    <div class="wheel-item">
        <img src="<?php echo IMAGE_ADD;?>
imgs/wheel-1.jpg" alt="" class="wheel-item-img">
        <div class="wheel-item-title">《第四届罗梭江科学教育论坛论文集》在线发布</div>

    </div>
    <div class="wheel-item" style="display: none;">
        <img src="<?php echo IMAGE_ADD;?>
imgs/wheel-2.jpg" alt="" class="wheel-item-img">
        <div class="wheel-item-title">第四届罗梭江科学教育论坛闭幕 发布五项倡议</div>
    </div>

    <div class="btns-left iconfont">&#xe659;</div>
    <div class="btns-right iconfont">&#xe65b;</div>
</div>
<!-- 轮播图结束 -->


<!-- 论坛动态开始 -->
<div class="container">
    <div class="line"></div>
    <div class="container-title">
        <div class="container-cn">论坛动态</div>
        <div class="container-en">news</div>
    </div>
    <div class="line-right" ></div>
</div>

<div class="dynamic">
    <div class="dynamic-left">
        <div class="dynamic-left-mask"></div>
        <div class="dynamic-left-box">
            <div>
                <a href="">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['newsOne']->value['imgurl'];?>
" alt="" class="dynamic-img">
                </a>
            </div>
            <div class="dynamic-content">
                <div class="dynamic-content-left">
                    <div class="top"><span><?php echo date('yy',strtotime($_smarty_tpl->tpl_vars['newsOne']->value['date']));?>
</span></div>
                    <div class="bottom"><span><?php echo date('m-d',strtotime($_smarty_tpl->tpl_vars['newsOne']->value['date']));?>
</span></div>
                </div>
                <div class="dynamic-content-right">
                    <a href="">
                        <div class="top"><?php echo $_smarty_tpl->tpl_vars['newsOne']->value['ctitle'];?>
</div>
                    </a>
                    <div class="bottom">
                        <span><?php echo $_smarty_tpl->tpl_vars['newsOne']->value['info'];?>
</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dynamic-right-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsArr']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <div class="dynamic-right-item">
            <div class="dynamic-content-left">
                <div class="top"><span><?php echo date('Y',strtotime($_smarty_tpl->tpl_vars['v']->value['date']));?>
</span></div>
                <div class="bottom"><span><?php echo date('m-d',strtotime($_smarty_tpl->tpl_vars['v']->value['date']));?>
</span></div>
            </div>
            <div class="dynamic-content-right">
                <a href="">
                    <div class="top"><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</div>
                </a>
                <div class="bottom">
                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
</span>
                </div>
            </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
</div>

<div class="showMore-box">
    <a href="news.html">
        <div class="showMore">
            <span>更多新闻</span>
            <span class="showMore-icon iconfont">&#xe664;</span>
        </div>
    </a>

</div>


<!-- 论坛动态结束 -->
<!-- 论谈嘉宾开始 -->
<div class="guests-box-one">
    <div class="guests-box-two">

        <!-- 标题 -->
        <div class="container" style="margin-bottom: 0;">
            <div class="line"></div>
            <div class="container-title">
                <div class="container-cn">论坛嘉宾</div>
                <div class="container-en">guests</div>
            </div>
            <div class="line-right" ></div>
        </div>

        <!-- 内容 -->
        <div class="guests-box-three">
            <ul class="gusets-list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['guestsArr']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <li class="guests-item-box">
                    <a href="" class="guests-item">
                        <div>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" class="guests-item-img">
                        </div>
                        <div class="guests-item-title">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>

                        </div>
                        <div class="guests-item-middle">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['cons'];?>

                        </div>
                        <div class="guests-item-bottom">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>

                        </div>

                    </a>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>


        <div class="showMore-box" style="margin-bottom: 0;">
            <a href="guests.html">
                <div class="showMore">
                    <span>更多嘉宾</span>
                    <span class="showMore-icon iconfont">&#xe664;</span>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- 论坛嘉宾结束 -->

<!-- 联系我们开始 -->
<div class="container">
    <div class="line"></div>
    <div class="container-title">
        <div class="container-cn">联系我们</div>
        <div class="container-en">Contact</div>
    </div>
    <div class="line-right" ></div>
</div>
<div class="contact">
    <div class="contact-box" style="background: #f4f4f4;">
        <div class="contact-content">
            <div class="contact-left-title">罗梭江科学教育论坛秘书处</div>
            <div class="contact-left-font">地址：云南省勐腊县勐仑镇中国科学院西双版纳热带植物园</div>
            <div class="contact-left-font">电话：0691-8715392</div>
            <div class="contact-left-font">传真：0691-8715070</div>
            <div class="contact-left-font">邮箱：kepu@xtbg.org.cn</div>
            <div class="contact-left-font">邮编：666303</div>
        </div>
    </div>
    <div class="contact-box" style="background: #e0e0e0;">
        <div class="contact-content">
            <div class="contact-right-title">
                <div class="contact-title-top">
                    留言板
                </div>
                <div class="contact-title-bottom">
                    Message Board
                </div>
            </div>
            <div class="contact-content-box">
                <div class="contact-content-boxleft">
                    姓名
                </div>
                <div class="contact-content-boxright">
                    <input type="text" name="" id="" class="contact-content-input">
                </div>
            </div>
            <div class="contact-content-box">
                <div class="contact-content-boxleft">
                    邮箱
                </div>
                <div class="contact-content-boxright">
                    <input type="text" name="" id="" class="contact-content-input">
                </div>
            </div>
            <div class="contact-content-box">
                <div class="contact-content-boxleft">
                    联系电话
                </div>
                <div class="contact-content-boxright">
                    <input type="text" name="" id="" class="contact-content-input">
                </div>
            </div>
            <div class="contact-content-box">
                <div class="contact-content-boxleft">
                    内容
                </div>
                <div class="contact-content-boxright">
                    <textarea name="" id="" cols="22" rows="5" class="contact-content-textarea"></textarea>
                </div>
            </div>


            <div class="contact-content-box">
                <button class="contact-content-button">发送</button>
            </div>
        </div>
    </div>
</div>


<!-- 联系我们结束 -->
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</body>
</html><?php }
}
