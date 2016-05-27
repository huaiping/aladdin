<!DOCTYPE html>
<html lang="cmn-hans">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>">
<title>阿拉丁CMS</title>
<link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="//cdn.bootcss.com/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet">
<style type="text/css">
body {padding-top:70px;}
.navbar-default {background-color:#337ab7; border-color:#e7e7e7;}
.navbar-default .navbar-brand {color:#fff;}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {color:#fff;}
.navbar-default .navbar-nav > li > a {color:#fff;}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {color:#337ab7; background-color:#fff;}
/*.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {color:#00a2ca; background-color:#fff;}*/
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {color:#00a2ca; background-color:#fff;}
/*.navbar-default .navbar-nav > .dropdown > a .caret {border-top-color:#777; border-bottom-color:#777; color:#fff;}*/
/*.navbar-default .navbar-nav > .dropdown > a:hover .caret, .navbar-default .navbar-nav > .dropdown > a:focus .caret {border-top-color:#333; border-bottom-color:#333;}*/
/*.navbar-default .navbar-nav > .open > a .caret, .navbar-default .navbar-nav > .open > a:hover .caret, .navbar-default .navbar-nav > .open > a:focus .caret {border-top-color:#555; border-bottom-color:#555;}*/
.footer {background:#337ab7; border-color:#e7e7e7; color:#fff;}
.banner, .news, .photos, .download, .guestbook, .video, .membership, .score, .survey, .salary {font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,STHeiti,"Microsoft Yahei",sans-serif;}
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
.tab-links {padding-top:15px;}
.tab-links a, .widget-links a {color:#000; text-decoration:none;}
.widget-links a:hover, .widget-links a:focus {color:#004229; text-decoration:none;}
.widget-links a:focus {outline:thin dotted; outline:5px auto -webkit-focus-ring-color; outline-offset:-2px;}
.widget-links_item {margin-bottom:8px;}
.widget-links_item a {margin-right:6px; word-break:break-all;}
.widget-links_item small {display:inline-block; font-size:13px;}
.news .widget-links_item, .download .widget-links_item {white-space: nowrap;text-overflow:ellipsis; overflow:hidden;}
.guestbook .widget-links_item img {-webkit-transition:0.4s ease-in; -moz-transition:0.4s ease-in; -o-transition:0.4s ease-in; -ms-transition:0.4s ease-in; transition:0.4s ease-in;}
.guestbook .widget-links_item:hover img {-webkit-transform:rotate(360deg); -moz-transform:rotate(360deg); transform:rotate(360deg);}
blockquote p {font-size:16px;}
#slide {overflow:hidden;}
#slide ul {list-style:none; width:2999px;}
#article img {max-width:100%;}
.circle {width:120px; height:120px; -moz-border-radius:50%; -webkit-border-radius:50%; border-radius:50%; margin-bottom:20px;}
.circle, .circle:hover, .circle:focus, .circle:active, .circle:visited {border:none; outline:none;}
.col-xs-2ths, .col-sm-2ths, .col-md-2ths, .col-lg-2ths {position:relative; min-height:1px; padding-right:15px; padding-left:15px; } @media ( min-width : 768px) { .col-sm-2ths { width: 25%; float: left; } } @media ( min-width : 992px) { .col-md-2ths { width: 25%; float: left; } } @media ( min-width : 1200px) { .col-lg-2ths { width: 25%; float: left; } }
.col-xs-3ths, .col-sm-3ths, .col-md-3ths, .col-lg-3ths {position:relative; min-height:1px; padding-right:15px; padding-left:15px; } @media ( min-width : 768px) { .col-sm-3ths { width: 37.5%; float: left; } } @media ( min-width : 992px) { .col-md-3ths { width: 37.5%; float: left; } } @media ( min-width : 1200px) { .col-lg-3ths { width: 37.5%; float: left; } }
.col-xs-9ths, .col-sm-9ths, .col-md-9ths, .col-lg-9ths {position:relative; min-height:1px; padding-right:15px; padding-left:15px; } @media ( min-width : 768px) { .col-sm-9ths { width: 10%; float: left; } } @media ( min-width : 992px) { .col-md-9ths { width: 10%; float: left; } } @media ( min-width : 1200px) { .col-lg-9ths { width: 10%; float: left; } }
/* waterfall */
.galcolumn p {padding:5px 0px;}
.galcolumn .item {background:#fff; border-radius:3px; word-break:break-all; word-wrap:break-word; white-space:pre; white-space:pre-wrap;}
.galcolumn .item img {width:100%; height:auto; border-top-left-radius:0.2em; border-top-right-radius:0.2em;}
.galcolumn .item p {height:40px; padding-top:10px;  text-align:center;}
/*html {-webkit-filter:grayscale(100%); -moz-filter:grayscale(100%); -ms-filter:grayscale(100%); -o-filter:grayscale(100%); filter:grayscale(100%); filter:gray;}*/
</style>
<script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<script src="//cdn.bootcss.com/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="//cdn.bootcss.com/jquery.form/3.51/jquery.form.min.js"></script>
<script src="//cdn.bootcss.com/highcharts/4.2.5/highcharts.js"></script>
<script src="<?php echo base_url('webroot/jquery.grid-a-licious.min.js'); ?>"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <!--顶部导航栏 begin-->
    <div class="container bg-primary">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">阿拉丁CMS</a>
        </div>

        <div class="collapse navbar-collapse bg-primary" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav bg-primary">
                <li><a href="<?php echo site_url('news'); ?>">新闻中心<span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo site_url('photo'); ?>">图片中心</a></li>
                <li><a href="<?php echo site_url('download'); ?>">资源下载</a></li>
                <li><a href="<?php echo site_url('guestbook'); ?>">公众互动</a></li>
                <li><a href="<?php echo site_url('video'); ?>">视频</a></li>
                <li><a href="<?php echo site_url('membership'); ?>">用户中心</a></li>
                <li><a href="<?php echo site_url('score'); ?>">成绩查询</a></li>
                <li class="hidden-sm hidden-md"><a href="<?php echo site_url('survey'); ?>">问卷调查</a></li>
                <li class="hidden-sm hidden-md"><a href="<?php echo site_url('exam'); ?>">在线考试</a></li>
                <li class="hidden-sm"><a href="<?php echo site_url('salary'); ?>">工资查询</a></li>
                <li class="hidden-sm"><a href="<?php echo site_url('repairs'); ?>">网上报修</a></li>
            </ul>
        </div>
    </div>
    <!--顶部导航栏 end-->
</nav>

