<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>">
<title>阿拉丁CMS</title>
<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="//cdn.bootcss.com/bootstrap-select/1.7.3/css/bootstrap-select.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('kindeditor/themes/default/default.css'); ?>" />
<style type="text/css">
.membership {font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,STHeiti,"Microsoft Yahei",sans-serif;}
.navbar-default {background-color:#337ab7; border-color:#e7e7e7;}
.navbar-default .navbar-brand {color:#fff;}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {color:#fff;}
.navbar-default .navbar-nav > li > a {color:#fff;}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {color:#337ab7; background-color:#fff;}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {color:#00a2ca; background-color:#fff;}
.footer {background:#337ab7; border-color:#e7e7e7; color:#fff;}
.bs-callout {padding:5px; margin:5px 0; border:1px solid #eee; border-left-width:5px; border-radius:3px;}
.bs-callout-danger {border-left-color:#ce4844;}
.bs-callout-danger h4 {color:#ce4844;} 
.bs-callout-warning {border-left-color:#aa6708;}
.bs-callout-warning h4 {color:#aa6708;}
.bs-callout-info {border-left-color:#1b809e;}
.bs-callout-info h4 {color:#1b809e;}
.widget-box {margin:25px 0; padding-top:25px; border-top:1px solid #eee;}
.widget-box .widget-box_title {margin:0 0 20px; font-size:16px; font-weight:700; line-height:1.2;}
.widget-box:first-child, .widget-box.no-border {margin-top:0; padding-top:0; border:none;}
.widget-links a {color:#000; text-decoration:none;}
.widget-links a:hover, .widget-links a:focus {color:#004229; text-decoration:none;}
.widget-links a:focus {outline:thin dotted; outline:5px auto -webkit-focus-ring-color; outline-offset:-2px;}
.widget-links_item {margin-bottom:8px;}
.widget-links_item a {margin-right:6px; word-break:break-word;}
.widget-links_item small {display:inline-block; font-size:13px;}
</style>
<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap-select/1.7.3/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url('kindeditor/kindeditor-min.js'); ?>"></script>
<script src="<?php echo base_url('kindeditor/lang/zh_CN.js'); ?>"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container bg-primary">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://www.huaiping.net/v2/">阿拉丁CMS</a>
        </div>

        <div class="collapse navbar-collapse bg-primary" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right bg-primary">
                <li><a href="<?php echo site_url('membership/article'); ?>">投稿</a></li>
                <li><a href="<?php echo site_url('membership/album'); ?>">相册</a></li>
                <li><a href="<?php echo site_url('membership/files'); ?>">文件</a></li>
                <li><a href="<?php echo site_url('membership/message'); ?>">留言</a></li>
                <li><a href="<?php echo site_url('membership/video'); ?>">视频</a></li>
                <li><a href="<?php echo site_url('membership/profile'); ?>">个人资料</a></li>
                <li><a href="<?php echo site_url('membership/logout'); ?>">退出</a></li>
                </ul>
            </ul>
        </div>
    </div>
</nav>

<section class="container">
    <div style="padding-top:70px;">
        <div class="membership row">
            <div class="col-md-3 hidden-xs">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">用户中心</a></li>
                    <li class="text-center"><a href="#"><img src="<?php echo base_url('avatar/avatar.php?char='.$this->session->userdata('name')); ?>" alt=""></a></li>
                    <li><a href="#">用户名：<?php echo $this->session->userdata('username'); ?></a></li>
                    <li><a href="#">用户组：<?php echo $this->session->userdata('groups'); ?></a></li>
                    <li><a href="#">注册时间：2015-6-10</a></li>
                    <li><a href="#">当前IP：<?php echo $this->input->ip_address(); ?></a></li>
                </ul>
            </div>

            <div class="col-md-9">
            <?php
                echo $this->session->userdata('username');
                echo $this->input->user_agent();
            ?>
            </div>
        </div>
    </div>
</section>
