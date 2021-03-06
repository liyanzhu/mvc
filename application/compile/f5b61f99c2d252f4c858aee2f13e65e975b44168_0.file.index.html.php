<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 11:27:31
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48ea231be546_12998277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b61f99c2d252f4c858aee2f13e65e975b44168' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/index.html',
      1 => 1598614043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48ea231be546_12998277 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        html, body {
            width: 100%;
            height: 100%;
        }
        body, h1{
            padding: 0;
            margin: 0;
        }
        .header {
            width: 100%;
            height: 20%;
            background-color: #abcae4;
        }
        .header h1 {
            text-align: center;
            padding-top: 30px;
        }
        .header .logininfo {
            float: right;
        }
        .main {
            width: 100%;
            height: 75%;
            border: 1px solid #2b669a;
        }
        .left {
            float: left;
            width: 20%;
            height: 100%;
            border-right: 3px solid #2e6da4;
            box-sizing: border-box;
        }
        .right {
            float: left;
            width: 80%;
            height: 100%;
            box-sizing: border-box;
        }
        iframe {
            width: 100%;
            height: 100%;
        }
        .bottom {
            width: 100%;
            height: 5%;
            text-align: center;
            line-height: 30px;
            background-color: #2e6da4;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>欢迎来到LYZ管理系统</h1>
        <div class="logininfo">
            <span>用户:<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
            <span>
                <a href="/htdocs/mvc/index.php/admin/index/logout">退出登录</a>
            </span>
        </div>
    </div>
    <div class="main">
        <div class="left">
            <ul>
                <li>
                    用户管理
                    <ul class="son">
                        <li><a href="addUser.html" target="main">查看用户</a></li>
                        <li>修改用户</li>
                    </ul>
                </li>
                <li>
                    栏目管理
                    <ul class="son">
                        <li><a href="/htdocs/mvc/index.php/admin/category/addpage" target="main">添加栏目</a></li>
                        <li><a href="/htdocs/mvc/index.php/admin/category" target="main">查看栏目</a></li>
                    </ul>
                </li>
                <li>
                    内容管理
                    <ul class="son">
                        <li><a href="/htdocs/mvc/index.php/admin/content/add" target="main">添加内容</a></li>
                        <li><a href="/htdocs/mvc/index.php/admin/content/showList" target="main">查看内容</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right">
            <iframe src="" frameborder="0" name="main" ></iframe>
        </div>
    </div>
    <div class="bottom">
        LYZ版权所有 LYZ制作 联系方式：187****6184
    </div>
</body>
</html><?php }
}
