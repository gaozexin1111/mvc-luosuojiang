<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 13:08:43
  from 'D:\Wampserver\www\八月\mvcone\application\template\index\download.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ba4dba36131_08493103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f56bfcc29f5995f2a0169996b4cc2844d7a79b79' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\index\\download.html',
      1 => 1598792912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ba4dba36131_08493103 (Smarty_Internal_Template $_smarty_tpl) {
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
index/download.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/download.js"><?php echo '</script'; ?>
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
<div class="service-img-box">
    <img src="<?php echo IMAGE_ADD;?>
imgs/service/service-0.jpg" alt="" class="service-img">
</div>
<div class="download-index">
    <ul class="download-index-all">
        <li class="download-index-one">
            按类型
        </li>
        <li class="download-index-two">全部</li>
        <li class="download-index-three">课件</li>
        <li class="download-index-three">文集</li>
        <li class="download-index-three">指南</li>
        <li class="download-index-three">通知</li>

    </ul>
    <ul class="download-index-all">
        <li class="download-index-one">
            时间
        </li>
        <li class="download-index-two">全部</li>
        <li class="download-index-three">2018年</li>
        <li class="download-index-three">2019年</li>
        <li class="download-index-three">2017年</li>
        <li class="download-index-three">2016年</li>

    </ul>
    <ul class="download-index-all">
        <li class="download-index-one">
            按主题
        </li>
        <li class="download-index-two">全部</li>
        <li class="download-index-three">大会报告</li>
        <li class="download-index-three">正规教育和非正规教育的融合发展</li>
        <li class="download-index-three">艺术和换进教育融合</li>
        <li class="download-index-three">保护价于于公民发科学</li>
        <li class="download-index-three">新媒体潮流下的科学传播</li>


    </ul>
</div>

<div class="download-context-box">
    <div class="download-item-box">
        <div style="float: left;"><img src="<?php echo IMAGE_ADD;?>
imgs/download/download-0.png" alt="" class="download-item-img"></div>
        <div style="float: left;">
            <div class="download-item-title">科学与启蒙</div>
            <div class="download-item-style">发布日期：2018.07.29&ensp; 分类：2018年课件</div>
        </div>
    </div>
    <div class="download-item-box">
        <div style="float: left;"><img src="<?php echo IMAGE_ADD;?>
imgs/download/download-1.png" alt="" class="download-item-img"></div>
        <div style="float: left;">
            <div class="download-item-title">科学与启蒙</div>
            <div class="download-item-style">发布日期：2018.07.29&ensp; 分类：2018年课件</div>
        </div>
    </div>
    <div class="download-item-box">
        <div style="float: left;"><img src="<?php echo IMAGE_ADD;?>
imgs/download/download-2.png" alt="" class="download-item-img"></div>
        <div style="float: left;">
            <div class="download-item-title">科学与启蒙</div>
            <div class="download-item-style">发布日期：2018.07.29&ensp; 分类：2018年课件</div>
        </div>
    </div>
    <div class="download-item-box">
        <div style="float: left;"><img src="<?php echo IMAGE_ADD;?>
imgs/download/download-3.png" alt="" class="download-item-img"></div>
        <div style="float: left;">
            <div class="download-item-title">科学与启蒙</div>
            <div class="download-item-style">发布日期：2018.07.29&ensp; 分类：2018年课件</div>
        </div>
    </div>
    <div class="download-item-box">
        <div style="float: left;"><img src="<?php echo IMAGE_ADD;?>
imgs/download/download-4.png" alt="" class="download-item-img"></div>
        <div style="float: left;">
            <div class="download-item-title">科学与启蒙</div>
            <div class="download-item-style">发布日期：2018.07.29&ensp; 分类：2018年课件</div>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
