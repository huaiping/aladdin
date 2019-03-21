<!DOCTYPE html>
<html lang="cmn-hans">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>">
<title>阿拉丁CMS</title>
<link href="//cdn.bootcss.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//cdn.bootcss.com/bootstrap-select/1.13.8/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?php echo base_url('kindeditor/themes/default/default.css'); ?>" rel="stylesheet">
<style>
body {padding-top:70px;}
.navbar-default {background-color:#337ab7; border-color:#e7e7e7;}
.navbar-default .navbar-brand {color:#fff;}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {color:#fff;}
.navbar-default .navbar-nav > li > a {color:#fff;}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {color:#337ab7; background-color:#fff;}
.navbar-default .navbar-toggle {border-color:#fff;}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {background-color:transparent;}
.navbar-default .navbar-toggle .icon-bar {background-color:#fff;}
.footer {background:#337ab7; border-color:#e7e7e7; color:#fff;}
.membership {font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,STHeiti,"Microsoft Yahei",sans-serif;}
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
.widget-links a:hover, .widget-links a:focus {color:#16a085; text-decoration:none;}
.widget-links a:focus {outline:thin dotted; outline:5px auto -webkit-focus-ring-color; outline-offset:-2px;}
.widget-links_item {margin-bottom:8px;}
.widget-links_item a {margin-right:6px; word-break:break-word;}
.widget-links_item small {display:inline-block; font-size:13px;}
.ellipsis {white-space:nowrap; text-overflow:ellipsis; overflow:hidden;}
.badge-danger {background-color:#d9534f;}
.badge-success {background-color:#5cb85c;}
.badge-warning {background-color:#f0ad4e;}
.badge-info {background-color:#5bc0de;}
</style>
<script src="//cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap-select/1.13.8/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url('kindeditor/kindeditor-min.js'); ?>"></script>
<script src="<?php echo base_url('kindeditor/lang/zh_CN.js'); ?>"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <!--顶部导航栏 begin-->
    <div class="container bg-primary">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
            <span class="sr-only">导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">阿拉丁CMS</a>
        </div>

        <div class="collapse navbar-collapse bg-primary" id="bs-navbar-collapse">
            <ul class="nav navbar-nav navbar-right bg-primary">
            <?php
                /*用户权限：1管理员moderators 2师生staffs 3贵宾guests*/
                if ($this->session->userdata('groups') == 'moderators') {
            ?>
                <li><a href="<?php echo site_url('membership'); ?>"><span class="glyphicon glyphicon-list-alt"></span> 信息审批</a></li>
                <li><a href="<?php echo site_url('membership/survey'); ?>"><span class="fa fa-pie-chart"></span> 问卷调查</a></li>
                <li><a href="<?php echo site_url('membership'); ?>"><span class="fa fa-users"></span> 用户管理</a></li>
            <?php
                } elseif ($this->session->userdata('groups') == 'staffs') {
            ?>
                <li><a href="<?php echo site_url('membership/article'); ?>"><i class="fa fa-file-text"></i> 投稿</a></li>
                <li><a href="<?php echo site_url('membership/album'); ?>"><i class="fa fa-file-image-o"></i> 相册</a></li>
                <li><a href="<?php echo site_url('membership/files'); ?>"><i class="fa fa-share-alt"></i> 文件</a></li>
                <li><a href="<?php echo site_url('membership/message'); ?>"><i class="fa fa-commenting"></i> 留言</a></li>
                <li><a href="<?php echo site_url('membership/video'); ?>"><i class="fa fa-video-camera"></i> 视频</a></li>
                <li><a href="<?php echo site_url('membership/links'); ?>"><i class="fa fa-link"></i> 链接</a></li>
            <?php
                } elseif ($this->session->userdata('groups') == 'guests') {
            ?>
                <li><a href="<?php echo site_url('membership/message'); ?>"><i class="fa fa-commenting"></i> 留言</a></li>
            <?php
                }
            ?>
                <li><a href="<?php echo site_url('membership/logout'); ?>"><span class="fa fa-sign-out"></span> 退出</a></li>
            </ul>
        </div>
    </div>
    <!--顶部导航栏 end-->
</nav>

