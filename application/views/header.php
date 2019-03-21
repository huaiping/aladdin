<!DOCTYPE html>
<html lang="cmn-hans">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>">
<title>阿拉丁CMS</title>
<link rel="stylesheet" href="//cdn.bootcss.com/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/5.7.2/css/all.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap-select/1.13.8/css/bootstrap-select.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/fancybox/3.5.6/jquery.fancybox.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/video.js/7.5.0/video-js.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/iCheck/1.0.2/skins/minimal/blue.css">
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
/*.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {color:#00a2ca; background-color:#fff;}*/
/*.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {color:#00a2ca; background-color:#fff;}*/
/*.navbar-default .navbar-nav > .dropdown > a .caret {border-top-color:#777; border-bottom-color:#777; color:#fff;}*/
/*.navbar-default .navbar-nav > .dropdown > a:hover .caret, .navbar-default .navbar-nav > .dropdown > a:focus .caret {border-top-color:#333; border-bottom-color:#333;}*/
/*.navbar-default .navbar-nav > .open > a .caret, .navbar-default .navbar-nav > .open > a:hover .caret, .navbar-default .navbar-nav > .open > a:focus .caret {border-top-color:#555; border-bottom-color:#555;}*/
.footer {background:#337ab7; border-color:#e7e7e7; color:#fff;}
.banner, .news, .photos, .download, .guestbook, .video, .membership, .score, .survey, .exam, .salary, .repairs, .course {font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,STHeiti,"Microsoft Yahei",sans-serif;}
.bs-callout {padding:5px; margin:5px 0; border:1px solid #eee; border-left-width:5px; border-radius:3px;}
.bs-callout-danger {border-left-color:#ce4844;}
.bs-callout-danger h4 {color:#ce4844;}
.bs-callout-warning {border-left-color:#aa6708;}
.bs-callout-warning h4 {color:#aa6708;}
.bs-callout-info {border-left-color:#1b809e;}
.bs-callout-info h4 {color:#1b809e;}
.widget-box {margin:20px 0; padding-top:25px; border-top:1px solid #eee;}
.widget-box .widget-box_title {margin:0 0 20px; font-size:16px; font-weight:700; line-height:1.2;}
.widget-box:first-child, .widget-box.no-border {margin-top:0; padding-top:0; border:none;}
.tab-links {padding-top:15px;}
.tab-links a, .widget-links a {color:#000; text-decoration:none;}
.tab-links a:hover, .tab-links a:focus, .widget-links a:hover, .widget-links a:focus, .media-heading a:hover, .media-heading a:focus {color:#16a085; text-decoration:none;}
.widget-links a:focus {outline:thin dotted; outline:5px auto -webkit-focus-ring-color; outline-offset:-2px;}
.widget-links_item {margin-bottom:8px;}
.widget-links_item a {margin-right:6px; word-break:break-all;}
.widget-links_item small {display:inline-block; font-size:13px;}
.ellipsis {white-space:nowrap; text-overflow:ellipsis; overflow:hidden;}
.news .media-left img {border:5px solid #eee;}
.news .media-left img:hover {border:5px solid #dfe8f4;}
.guestbook .widget-links_item img {-webkit-transition:0.4s ease-in; -moz-transition:0.4s ease-in; -o-transition:0.4s ease-in; -ms-transition:0.4s ease-in; transition:0.4s ease-in;}
.guestbook .widget-links_item:hover img {-webkit-transform:rotate(360deg); -moz-transform:rotate(360deg); transform:rotate(360deg);}
blockquote p {font-size:16px;}
#slide {overflow:hidden;}
#slide ul {list-style:none; width:2999px;}
#article {word-wrap:break-word;}
#article img {max-width:100%;}
.circle {width:120px; height:120px; -moz-border-radius:50%; -webkit-border-radius:50%; border-radius:50%; margin-bottom:20px;}
.circle, .circle:hover, .circle:focus, .circle:active, .circle:visited {border:none; outline:none;}
/* custom grids */
.col-xs-2ths, .col-sm-2ths, .col-md-2ths, .col-lg-2ths {position:relative; min-height:1px; padding-right:15px; padding-left:15px;} @media (min-width:768px) {.col-sm-2ths {width:25%; float:left;}} @media (min-width:992px) {.col-md-2ths {width:25%; float:left;}} @media (min-width:1200px) {.col-lg-2ths {width:25%; float:left;}}
.col-xs-3ths, .col-sm-3ths, .col-md-3ths, .col-lg-3ths {position:relative; min-height:1px; padding-right:15px; padding-left:15px;} @media (min-width:768px) {.col-sm-3ths {width:37.5%; float:left;}} @media (min-width:992px) {.col-md-3ths {width:37.5%; float:left;}} @media (min-width:1200px) {.col-lg-3ths {width:37.5%; float:left;}}
.col-xs-9ths, .col-sm-9ths, .col-md-9ths, .col-lg-9ths {position:relative; min-height:1px; padding-right:15px; padding-left:15px;} @media (min-width:768px) {.col-sm-9ths {width:10%; float:left;}} @media (min-width:992px) {.col-md-9ths {width:10%; float:left;}} @media (min-width:1200px) {.col-lg-9ths {width:10%; float:left;}}
.col-xs-11ths, .col-sm-11ths, .col-md-11ths, .col-lg-11ths {position:relative; min-height:1px; padding-right:15px; padding-left:15px;} @media (min-width:768px) {.col-sm-11ths {width:49%; float:left;}} @media (min-width:992px) {.col-md-11ths {width:49%; float:left;}} @media (min-width:1200px) {.col-lg-11ths {width:49%; float:left;}}
@media (max-width:767px) {.form-horizontal .control-label {padding-top:7px;}}
/* waterfall */
.galcolumn p {padding:5px 0;}
.galcolumn .item {background:#fff; border-radius:3px; word-break:break-all; word-wrap:break-word; white-space:pre; white-space:pre-wrap;}
.galcolumn .item img {width:100%; height:auto; border-top-left-radius:0.2em; border-top-right-radius:0.2em;}
.galcolumn .item p {height:40px; padding-top:10px; text-align:center;}
/* video */
video::-internal-media-controls-download-button {display:none;}
video::-webkit-media-controls-enclosure {overflow:hidden;}
video::-webkit-media-controls-panel {width:calc(100% + 30px);}
/* exam */
.exam-pagination li.disabled a {pointer-events:none; cursor:default;}
/* survey */
#survey label.error {color:red;}
/*html {-webkit-filter:grayscale(100%); -moz-filter:grayscale(100%); -ms-filter:grayscale(100%); -o-filter:grayscale(100%); filter:grayscale(100%); filter:gray;}*/
</style>
<script src="//cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap-select/1.13.8/js/bootstrap-select.min.js"></script>
<script src="//cdn.bootcss.com/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="//cdn.bootcss.com/jquery.form/4.2.2/jquery.form.min.js"></script>
<script src="//cdn.bootcss.com/highcharts/7.0.3/highcharts.js"></script>
<script src="//cdn.bootcss.com/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="//cdn.bootcss.com/jquery-infinitescroll/3.0.5/infinite-scroll.pkgd.min.js"></script>
<script src="//cdn.bootcss.com/fancybox/3.5.6/jquery.fancybox.min.js"></script>
<script src="//cdn.bootcss.com/video.js/7.5.0/video.min.js"></script>
<script src="//cdn.bootcss.com/iCheck/1.0.2/icheck.min.js"></script>
<script src="<?php echo base_url('webroot/jquery.grid-a-licious.min.js'); ?>"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top compensate-for-scrollbar">
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
            <ul class="nav navbar-nav bg-primary">
                <li><a href="<?php echo site_url('news'); ?>">新闻中心<span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo site_url('membership'); ?>">用户中心</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('photo'); ?>">图片中心</a></li>
                        <li><a href="<?php echo site_url('download'); ?>">资源下载</a></li>
                        <li><a href="<?php echo site_url('guestbook'); ?>">公众互动</a></li>
                        <li><a href="<?php echo site_url('video'); ?>">视频</a></li>
                        <li><a href="<?php echo site_url('score'); ?>">成绩查询</a></li>
                        <li><a href="<?php echo site_url('survey'); ?>">问卷调查</a></li>
                        <li><a href="<?php echo site_url('exam'); ?>">在线考试</a></li>
                        <li><a href="<?php echo site_url('salary'); ?>">工资查询</a></li>
                        <li><a href="<?php echo site_url('repairs'); ?>">网上报修</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="http://www.jiaobaowang.com">校讯通平台</a></li>
                        <li><a href="http://www.51taoshi.com">淘师湾</a></li>
                        <!--
                        <li role="separator" class="divider"></li>
                        <li><a href="#">电子图书馆</a></li>
                        -->
                    </ul>
                </li>
                <li><a href="<?php echo site_url('course'); ?>">选课报名</a></li>
                <li><a href="<?php echo site_url('membership/logout'); ?>">退出登录</a></li>
            </ul>
        </div>
    </div>
    <!--顶部导航栏 end-->
</nav>

