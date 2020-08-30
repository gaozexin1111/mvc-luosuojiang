<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 08:34:27
  from 'D:\Wampserver\www\八月\mvcone\application\template\index\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b64938f7158_42599935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39f8395583c97f67cd0afeb625e9b08f90976fc5' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\index\\header.html',
      1 => 1598776462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b64938f7158_42599935 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    body,ul,li,a{
        list-style: none;
        margin: 0;
        padding: 0;
        text-decoration: none;
    }
    a{
        color: inherit;
        background-color: inherit;
        font: inherit;
    }
    .header{
        width: 1519px;
        height: 67px;
        margin: 0 auto;
        font-family: 微软雅黑, Helvetica, Arial, Verdana, sans-serif;
    }
    .header-box{
        margin: 0 auto;
        width: 100%;
        height: 67px;
    }
    .header-left{
        width: 292px;
        height: 47px;
        margin-left: 30px;
        padding: 10px 0;
        float: left;
    }
    .header-left .font-cn{
        font-size: 20px;
        color: #11228A;
    }
    .header-left .font-en{
        font-size: 12px;
        color: #4ca6dd;
    }

    .header-middle{
        width: 908px;
        height: 67px;
        margin: 0 auto;
        padding-left: 30px;
        text-align: center;
        line-height: 67px;
        float: left;
    }
    .header-middle-item-box{
        width: 12.5%;
        height: 46px;
        font-size: 15px;
        color: #8e8e8e;
        text-align: center;
        line-height: 46px;
        float: left;
        cursor: pointer;
        margin-top: 10px;
    }
    .header-middle-item-box:nth-child(1){
        background: #11228a;
        color: #fff;
    }
    .header-middle-item-box:hover{
        background: #11228a;
        color: #fff;
    }
    /* 设置下拉菜单 */
    .header-nav{
        width: 100%;
        visibility: hidden;
        opacity: 0;
        z-index: 555;
        transform: translateY(30px);
        transition: all 1s ease;
    }

    .header-middle-item-box:hover .header-nav{
        visibility: visible;
        transform: translateY(0);
        opacity: 1;
    }

    .header-nav-item{
        width: 100%;
        height: 36px;
        box-shadow: 0px 0px 4px rgba(0,0,0,0.20);
        text-align: center;
        line-height: 36px;
        display: block;
        border-right: solid 1px transparent;
        border-left: solid 1px transparent;
        margin: 0;
        color: #8e8e8e;
        background: #fff;
    }

    .header-nav-item:hover{
        background: #11228a;
        color: #fff;
    }
    /* 下拉菜单结束 */


    .header-middle-img{
        width: 9px;
        height: 6px;
        background: url(../imgs/header_middle_1.svg);
        right: 0;
        float: right;
        margin: auto;
        position: relative;
        top: 23px;
    }

    .header-right{
        width: 253px;
        height: 67px;
        float: left;
    }

    .header-right-search{
        width: 203px;
        height: 38px;
        margin:15px 0;
    }
    .header-search-left{
        width: 143px;
        height: 22px;
        padding: 3px 10px;
        border: 1px solid #ccc;
        line-height: 17px;
        font-size: 15px;
        outline: medium;
        float: left;

    }
    .header-search-right{
        width: 30px;
        height: 30px;
        background: #11228a;
        cursor: pointer;
        float: left;
        text-align: center;
        line-height: 30px;
        color: #fff;
        font-family: 'iconfont';
    }

    /* 头部结束 */
</style>

<div class="header">
    <div class="header-box">
        <div class="header-left">
            <a href="" style="display: block;">
                <span class="font-cn">罗梭江科学教育论坛</span>
                <br>
                <span class="font-en">Luosuo River Forum of Science Education</span>
            </a>
        </div>
        <ul class="header-middle">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li class="header-middle-item-box">
                <a href="/八月/mvcone/index.php/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</a>

                <?php if ((isset($_smarty_tpl->tpl_vars['v']->value['child']))) {?>
                <ul class="header-nav">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['child'], 'v1');
$_smarty_tpl->tpl_vars['v1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->do_else = false;
?>
                   <li class="header-nav-item">
                        <?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>

                   </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php }?>
            </li>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <div class="header-right">
            <div class="header-right-search">
                <input type="text" value="" class="header-search-left">
                <div class="header-search-right iconfont">&#xe63c;</div>
            </div>
        </div>

    </div>
    <div style="clear: both"></div>
</div>
<?php }
}
