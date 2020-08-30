<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 13:07:08
  from 'D:\Wampserver\www\八月\mvcone\application\template\index\topic.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ba47c280b44_29357192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dd280a489a91aaa38ec49db09f361dd34145c30' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\index\\topic.html',
      1 => 1598792803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ba47c280b44_29357192 (Smarty_Internal_Template $_smarty_tpl) {
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
index/topic.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/topic.js"><?php echo '</script'; ?>
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
<!-- 展示图片轮播开始 -->
<div class="topic-wheel-top">
    <ul class="topic-wheel-top-box">
        <li class="topic-wheel-top-item">
            <img src="<?php echo IMAGE_ADD;?>
imgs/topic/topic-top-1.jpg" alt="">
        </li>
        <li class="topic-wheel-top-item" style="display: none;">
            <img src="<?php echo IMAGE_ADD;?>
imgs/topic/topic-top-2.jpg" alt="">
        </li>
        <li class="topic-wheel-top-item" style="display: none;">
            <img src="<?php echo IMAGE_ADD;?>
imgs/topic/topic-top-3.jpg" alt="">
        </li>
        <li class="topic-wheel-top-item" style="display: none;">
            <img src="<?php echo IMAGE_ADD;?>
imgs/topic/topic-top-4.jpg" alt="">
        </li>
    </ul>
</div>
<!-- 展示图片轮播结束 -->
<!-- 论坛通知开始 -->
<div class="topic-title">
    <div class="topic-title-box">
        <div class="topic-title-font">
            <div class="topic-title-font-top">
                <span><strong>论坛通知</strong></span>
            </div>
            <div class="topic-title-font-bottom">
                <span>Notification</span>
            </div>
        </div>
    </div>
</div>
<div class="topic-noti">
    <div class="topic-noti-box">
        <div class="topic-noti-img">
            <img src="<?php echo IMAGE_ADD;?>
imgs/topic/noti-1.jpg" alt="">
        </div>
        <div class="topic-noti-middle">
            <div class="topic-noti-middle-top">
                <span>&ensp;&ensp; &ensp;为加强社会各界在科学教育、环境教育研究及实践领域的交流与合作，促进我国科学教育事业的发展，2016年至今，“罗梭江科学教育论坛”在中国科学院西双版纳热带植物园成功举办了三届。为进一步增进认知、扩大共识，中国科学院科学传播局、中国科学技术协会科普部、中国青年报社、中国植物园联盟定于2019年7月22-25日在中国科学院西双版纳热带植物园举办“第四届罗梭江科学教育论坛”。</span>
            </div>
            <div class="topic-noti-middle-bottom">
                <span>&ensp;报到时间：2019年7月22日（全天）      </span>
            </div>
            <div class="topic-noti-middle-bottom">
                <span>&ensp;论坛时间：2019年7月23－24日      </span>
            </div>
            <div class="topic-noti-middle-bottom">
                <span>&ensp;离会时间：2019年7月25日。</span>
            </div>

        </div>
        <div class="topic-noti-right">
            <div class="topic-noti-right-item">
                <span><strong>第一轮通知</strong></span>
            </div>
            <div class="topic-noti-right-item">
                <span><strong>第二轮通知</strong></span>
            </div>
            <div class="topic-noti-right-item">
                <span><strong>第三轮通知</strong></span>
            </div>
        </div>
    </div>

</div>
<!-- 论坛通知结束 -->
<!--论坛嘉宾开始  -->
<div class="guests-box-one">
    <div class="guests-box-two">
        <div class="topic-title" style="margin-top: 0; margin-bottom: 20px;">
            <div class="topic-title-box">
                <div class="topic-title-font" style="background: transparent;margin-top: 0;">
                    <div class="topic-title-font-top" style="color: #fff;">
                        <span><strong>论坛嘉宾</strong></span>
                    </div>
                    <div class="topic-title-font-bottom">
                        <span>guests</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 内容 -->
        <div class="guests-box-three">
            <ul class="gusets-list">
                <li class="guests-item-box">
                    <a href="" class="guests-item">
                        <div >
                            <img src="<?php echo IMAGE_ADD;?>
imgs/guests-0.jpg" alt=""class="guests-item-img">
                        </div>
                        <div class="guests-item-title">
                            郭传杰
                        </div>
                        <div class="guests-item-middle">

                            中科院原党组副书记、中国科大原党委书记；第三届和第四届罗梭江科学教育论坛嘉宾
                        </div>
                        <div class="guests-item-bottom">
                            在自然教育中深入渗透科学教育
                        </div>

                    </a>

                </li>
                <li class="guests-item-box">
                    <a href="" class="guests-item">
                        <div >
                            <img src="<?php echo IMAGE_ADD;?>
imgs/guests-1.jpg" alt=""class="guests-item-img">
                        </div>
                        <div class="guests-item-title">
                            郭传杰
                        </div>
                        <div class="guests-item-middle">

                            中科院原党组副书记、中国科大原党委书记；第三届和第四届罗梭江科学教育论坛嘉宾
                        </div>
                        <div class="guests-item-bottom">
                            在自然教育中深入渗透科学教育
                        </div>

                    </a>

                </li>
                <li class="guests-item-box">
                    <a href="" class="guests-item">
                        <div >
                            <img src="<?php echo IMAGE_ADD;?>
imgs/guests-2.jpg" alt=""class="guests-item-img">
                        </div>
                        <div class="guests-item-title">
                            郭传杰
                        </div>
                        <div class="guests-item-middle">

                            中科院原党组副书记、中国科大原党委书记；第三届和第四届罗梭江科学教育论坛嘉宾
                        </div>
                        <div class="guests-item-bottom">
                            在自然教育中深入渗透科学教育
                        </div>

                    </a>

                </li>
                <li class="guests-item-box">
                    <a href="" class="guests-item">
                        <div >
                            <img src="<?php echo IMAGE_ADD;?>
imgs/guests-3.jpg" alt=""class="guests-item-img">
                        </div>
                        <div class="guests-item-title">
                            郭传杰
                        </div>
                        <div class="guests-item-middle">

                            中科院原党组副书记、中国科大原党委书记；第三届和第四届罗梭江科学教育论坛嘉宾
                        </div>
                        <div class="guests-item-bottom">
                            在自然教育中深入渗透科学教育
                        </div>

                    </a>

                </li>
                <li class="guests-item-box">
                    <a href="" class="guests-item">
                        <div >
                            <img src="<?php echo IMAGE_ADD;?>
imgs/guests-4.jpg" alt=""class="guests-item-img">
                        </div>
                        <div class="guests-item-title">
                            郭传杰
                        </div>
                        <div class="guests-item-middle">

                            中科院原党组副书记、中国科大原党委书记；第三届和第四届罗梭江科学教育论坛嘉宾
                        </div>
                        <div class="guests-item-bottom">
                            在自然教育中深入渗透科学教育
                        </div>

                    </a>

                </li>
                <li class="guests-item-box" style="position: relative;top:-10px">
                    <a href="" class="guests-item">
                        <div >
                            <img src="<?php echo IMAGE_ADD;?>
imgs/guests-5.jpg" alt=""class="guests-item-img">
                        </div>
                        <div class="guests-item-title">
                            郭传杰
                        </div>
                        <div class="guests-item-middle">

                            中科院原党组副书记、中国科大原党委书记；第三届和第四届罗梭江科学教育论坛嘉宾
                        </div>
                        <div class="guests-item-bottom">
                            在自然教育中深入渗透科学教育
                        </div>

                    </a>

                </li>
                <li class="guests-item-box">
                    <a href="" class="guests-item">
                        <div >
                            <img src="<?php echo IMAGE_ADD;?>
imgs/guests-6.jpg" alt=""class="guests-item-img">
                        </div>
                        <div class="guests-item-title">
                            郭传杰
                        </div>
                        <div class="guests-item-middle">

                            中科院原党组副书记、中国科大原党委书记；第三届和第四届罗梭江科学教育论坛嘉宾
                        </div>
                        <div class="guests-item-bottom">
                            在自然教育中深入渗透科学教育
                        </div>

                    </a>

                </li>
                <li class="guests-item-box" style="position: relative;top:-10px">
                    <a href="" class="guests-item">
                        <div >
                            <img src="<?php echo IMAGE_ADD;?>
imgs/guests-7.jpg" alt=""class="guests-item-img">
                        </div>
                        <div class="guests-item-title">
                            郭传杰
                        </div>
                        <div class="guests-item-middle">

                            中科院原党组副书记、中国科大原党委书记；第三届和第四届罗梭江科学教育论坛嘉宾
                        </div>
                        <div class="guests-item-bottom">
                            在自然教育中深入渗透科学教育
                        </div>

                    </a>

                </li>

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

<!-- 图片报道开始 -->
<div class="topic-title">
    <div class="topic-title-box">
        <div class="topic-title-font">
            <div class="topic-title-font-top">
                <span><strong>图片报道</strong></span>
            </div>
            <div class="topic-title-font-bottom">
                <span>Pictures</span>
            </div>
        </div>
    </div>
</div>
<div class="picture-img">
    <img src="<?php echo IMAGE_ADD;?>
imgs/wheel-2.jpg" alt="">
    <div class="picture-title">
        <span>7月23日，与会代表在论坛现场合影。</span>
    </div>
</div>

<!-- 图片报道结束 -->

<!-- 论坛动态开始 -->
<div class="topic-title">
    <div class="topic-title-box">
        <div class="topic-title-font">
            <div class="topic-title-font-top">
                <span><strong>论坛新闻</strong></span>
            </div>
            <div class="topic-title-font-bottom">
                <span>News</span>
            </div>
        </div>
    </div>
</div>


<div class="dynamic">
    <div class="dynamic-left">

        <div class="dynamic-left-mask"></div>


        <div class="dynamic-left-box">
            <div>
                <a href="">
                    <img src="<?php echo IMAGE_ADD;?>
imgs/container-1.png" alt="" class="dynamic-img">
                </a>
            </div>
            <div class="dynamic-content">
                <div class="dynamic-content-left">
                    <div class="top"><span>2020</span></div>
                    <div class="bottom"><span>03-20</span></div>
                </div>
                <div class="dynamic-content-right">
                    <a href="">
                        <div class="top">《第四届罗梭江科学教育论坛论文集》在线发布</div>
                    </a>
                    <div class="bottom">
                        <span>论坛微信小程序同步更新发布。</span>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="dynamic-right-box">
        <div class="dynamic-right-item">
            <div class="dynamic-content-left">
                <div class="top"><span>2019</span></div>
                <div class="bottom"><span>07-26</span></div>
            </div>
            <div class="dynamic-content-right">
                <a href="">
                    <div class="top">中国科学报：保护研究 不止需要科学家</div>
                </a>
                <div class="bottom">
                    <span>“公众科学与生物多样性保护”议题中的案例</span>
                </div>
            </div>
        </div>

        <div class="dynamic-right-item">
            <div class="dynamic-content-left">
                <div class="top"><span>2019</span></div>
                <div class="bottom"><span>7-25</span></div>
            </div>
            <div class="dynamic-content-right">
                <a href="">
                    <div class="top">第四届罗梭江科学教育论坛闭幕  发布五项倡议</div>
                </a>
                <div class="bottom">
                    <span>明年再会</span>
                </div>
            </div>
        </div>

        <div class="dynamic-right-item">
            <div class="dynamic-content-left">
                <div class="top"><span>2019</span></div>
                <div class="bottom"><span>7-24</span></div>
            </div>
            <div class="dynamic-content-right">
                <a href="">
                    <div class="top">2019年第四届罗梭江科学教育论坛倡议书</div>
                </a>
                <div class="bottom">
                    <span>《倡议书》全文</span>
                </div>
            </div>
        </div>
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
<!-- 主办单位 -->
<div class="topic-title">
    <div class="topic-title-box">
        <div class="topic-title-font">
            <div class="topic-title-font-top">
                <span><strong>主办单位</strong></span>
            </div>
            <div class="topic-title-font-bottom">
                <span>Sponsors</span>
            </div>
        </div>
    </div>
</div>
<div class="spon">
    <div class="spon-item">
        <div class="spon-item-img">
            <img src="<?php echo IMAGE_ADD;?>
imgs/topic/spon-1.jpg" alt="">
        </div>
    </div>
    <div class="spon-item">
        <div class="spon-item-img">
            <img src="<?php echo IMAGE_ADD;?>
imgs/topic/spon-2.jpg" alt="">
        </div>
    </div>
    <div class="spon-item">
        <div class="spon-item-img">
            <img src="<?php echo IMAGE_ADD;?>
imgs/topic/spom-3.jpg" alt="">
        </div>
    </div>
    <div class="spon-item">
        <div class="spon-item-img">
            <img src="<?php echo IMAGE_ADD;?>
imgs/topic/spon-4.png" alt="">
        </div>
    </div>
</div>

<!-- 承办单位 -->
<div class="topic-title">
    <div class="topic-title-box">
        <div class="topic-title-font">
            <div class="topic-title-font-top">
                <span><strong>承办单位</strong></span>
            </div>
            <div class="topic-title-font-bottom">
                <span>Organizer</span>
            </div>
        </div>
    </div>
</div>
<div class="spon">
    <div class="spon-item-img">
        <img src="<?php echo IMAGE_ADD;?>
imgs/topic/spon-5.png" alt="">
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
