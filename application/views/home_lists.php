<section class="container">
    <div class="banner row">
        <!--顶部通栏 begin-->
        <div class="col-md-12">
            <div class="widget-box no-border">
                <a href="#"><img src="<?php echo base_url('webroot/image/banner1.jpg'); ?>" alt="" style="width:100%;"></a>
            </div>
        </div>
        <!--顶部通栏 end-->
    </div>

    <div class="notice row">
        <!--网站通知 begin-->
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><span class="glyphicon glyphicon-fire"></span> 网站通知：本站正在开发和测试中，如果无法正常访问，请稍后再试。给您带来的不便，敬请谅解！</strong>
            </div>
        </div>
        <!--网站通知 end-->
    </div>

    <div class="news row">
        <div class="col-md-6">
            <!--图片轮播 begin-->
            <div class="widget-box no-border">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo base_url('webroot/image/slide1.jpg'); ?>" alt="First slide">
                            <div class="carousel-caption">测试说明文字</div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url('webroot/image/slide2.jpg'); ?>" alt="Second slide">
                            <div class="carousel-caption">测试说明文字</div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url('webroot/image/slide3.jpg'); ?>" alt="Third slide">
                            <div class="carousel-caption">测试说明文字</div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">上页</span>
                    </a>
                    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">下页</span>
                    </a>
                </div>
            </div>
            <!--图片轮播 end-->
        </div>

        <div class="col-md-6">
            <!--新闻标签 begin-->
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">最新信息</a></li>
                    <li role="presentation"><a href="#teacher" aria-controls="teacher" role="tab" data-toggle="tab">教师专栏</a></li>
                    <li role="presentation"><a href="#student" aria-controls="student" role="tab" data-toggle="tab">学生专栏</a></li>
                    <li role="presentation"><a href="#parent" aria-controls="parent" role="tab" data-toggle="tab">家长专栏</a></li>
                    <li role="presentation"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab">通知公告</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <ul class="tab-links list-unstyled">
                            <?php for ($i=0; $i<count($latest); $i++): ?>
                            <li class="widget-links_item ellipsis<?php if ($i>8) { echo ' hidden-sm'; } ?>">
                                <a href="<?php echo site_url('news/view/'.$latest[$i]['id']); ?>"><?php echo $latest[$i]['title']; ?></a><span class="pull-right text-danger hidden-xs"><?php echo substr($latest[$i]['pubtime'],0,10); ?></span>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="teacher">
                        <ul class="tab-links list-unstyled">
                            <?php for ($i=0; $i<count($teachers); $i++): ?>
                            <li class="widget-links_item ellipsis<?php if ($i>8) { echo ' hidden-sm'; } ?>">
                                <a href="<?php echo site_url('news/view/'.$teachers[$i]['id']); ?>"><?php echo $teachers[$i]['title']; ?></a><span class="pull-right text-danger hidden-xs"><?php echo substr($teachers[$i]['pubtime'],0,10); ?></span>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="student">
                        <ul class="tab-links list-unstyled">
                            <?php for ($i=0; $i<count($students); $i++): ?>
                            <li class="widget-links_item ellipsis<?php if ($i>8) { echo ' hidden-sm'; } ?>">
                                <a href="<?php echo site_url('news/view/'.$students[$i]['id']); ?>"><?php echo $students[$i]['title']; ?></a><span class="pull-right text-danger hidden-xs"><?php echo substr($students[$i]['pubtime'],0,10); ?></span>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="parent">
                        <ul class="tab-links list-unstyled">
                            <?php for ($i=0; $i<count($parents); $i++): ?>
                            <li class="widget-links_item ellipsis<?php if ($i>8) { echo ' hidden-sm'; } ?>">
                                <a href="<?php echo site_url('news/view/'.$parents[$i]['id']); ?>"><?php echo $parents[$i]['title']; ?></a><span class="pull-right text-danger hidden-xs"><?php echo substr($parents[$i]['pubtime'],0,10); ?></span>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="notice">
                        <ul class="tab-links list-unstyled">
                        <?php for ($i=0; $i<count($notices); $i++): ?>
                            <li class="widget-links_item ellipsis<?php if ($i>8) { echo ' hidden-sm'; } ?>">
                                <a href="<?php echo site_url('news/view/'.$notices[$i]['id']); ?>"><?php echo $notices[$i]['title']; ?></a><span class="pull-right text-danger hidden-xs"><?php echo substr($notices[$i]['pubtime'],0,10); ?></span>
                            </li>
                        <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--新闻标签 end-->
        </div>
    </div>

    <div class="news row">
        <div class="col-md-2ths hidden-xs hidden-sm">
            <!--人生寄语 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger">
                    <h4>人生寄语<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <blockquote>
                    <p class="text-primary">志向决定方向 态度决定高度</p>
                    <p class="text-primary">心灵的强大决定潜能的巨大</p>
                    <p class="text-primary">让优秀成为习惯</p>
                </blockquote>
                <div class="text-center"><img src="<?php echo base_url('webroot/image/qrcode.png'); ?>" alt="" /></div>
                <div class="text-center text-danger">微信二维码</div>
            </div>
            <!--人生寄语 end-->
        </div>
        <div class="col-md-3ths">
            <!--校园新闻 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>校园新闻<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <?php foreach ($reports as $report): ?>
                    <li class="widget-links_item ellipsis"><a href="<?php echo site_url('news/view/'.$report['id']); ?>"><?php echo $report['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!--校园新闻 end-->
        </div>
        <div class="col-md-3ths">
            <!--视频点播 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>视频点播<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <?php foreach ($videos as $video): ?>
                    <li class="widget-links_item ellipsis"><a href="<?php echo site_url('video/view/'.$video['id']); ?>"><?php echo $video['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!--视频点播 end-->
        </div>
    </div>

    <div class="banner row">
        <div class="col-md-12 hidden-xs">
            <!--滚动图片展示 begin-->
            <div id="slide" class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger">
                    <h4>精彩图片展<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <?php foreach ($slides as $slide): ?>
                    <li class="widget-links_item pull-left"><a class="fancybox" href="<?php echo base_url($slide['thumbnail']); ?>"><img src="<?php echo base_url($slide['thumbnail']); ?>" alt="" width="150"></a></li>
                    <?php endforeach; ?>
                    <li class="widget-links_item pull-left">
                        <a class="fancybox" href="<?php echo base_url('webroot/image/slide1.jpg'); ?>"><img src="<?php echo base_url('webroot/image/slide1.jpg'); ?>" alt="" width="150"></a>
                    </li>
                    <li class="widget-links_item pull-left">
                        <a class="fancybox" href="<?php echo base_url('webroot/image/slide2.jpg'); ?>"><img src="<?php echo base_url('webroot/image/slide2.jpg'); ?>" alt="" width="150"></a>
                    </li>
                    <li class="widget-links_item pull-left">
                        <a class="fancybox" href="<?php echo base_url('webroot/image/slide3.jpg'); ?>"><img src="<?php echo base_url('webroot/image/slide3.jpg'); ?>" alt="" width="150"></a>
                    </li>
                </ul>
            </div>
            <!--滚动图片展示 end-->
        </div>
    </div>

    <div class="news row">
        <div class="col-md-2ths hidden-xs">
            <!--专题推荐 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger">
                    <h4>专题推荐<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <li class="widget-links_item"><a href="#">2014年高考成绩</a></li>
                    <li class="widget-links_item"><a href="#">第四届体育科技艺术节</a><li>
                    <li class="widget-links_item"><a href="#">选修课展示</a></li>
                    <li class="widget-links_item"><a href="#">第一届网络作文大赛</a></li>
                    <li class="widget-links_item"><a href="#">2012年体育科技艺术节</a></li>
                    <li class="widget-links_item"><a href="#">2012年高考喜报、录取榜</a></li>
                    <li class="widget-links_item"><a href="#">2011年高考喜报、录取榜</a></li>
                    <li class="widget-links_item"><a href="#">2010年高考喜报、录取榜</a></li>
                    <li class="widget-links_item"><a href="#">2009年高考喜报、录取榜</a></li>
                    <li class="widget-links_item"><a href="#">“课内比教学、课外访万家”</a></li>
                    <li class="widget-links_item"><a href="#">研究性学习</a></li>
                </ul>
            </div>
            <!--专题推荐 end-->
        </div>
        <div class="col-md-3ths">
            <!--最新资源 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>最新资源<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <?php foreach ($downloads as $download): ?>
                    <li class="widget-links_item ellipsis">[<?php echo $download['category']; ?>]<a href="<?php echo site_url('download/view/'.$download['id'])?>"><?php echo $download['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!--最新资源 end-->
        </div>
        <div class="col-md-3ths">
            <!--教学教研 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>教学教研<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <?php foreach ($teaching as $teach): ?>
                    <li class="widget-links_item ellipsis"><a href="<?php echo site_url('news/view/'.$teach['id']); ?>"><?php echo $teach['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!--教学教研 end-->
        </div>
    </div>

    <div class="banner row">
        <!--底部通栏 begin-->
        <div class="col-md-12">
            <div class="widget-box no-border">
                <a href="#"><img src="<?php echo base_url('webroot/image/banner2.jpg'); ?>" alt="" style="width:100%;"></a>
            </div>
        </div>
        <!--底部通栏 end-->
    </div>

    <div class="news row">
        <div class="col-md-12 hidden-xs" style="margin-bottom:20px;">
            <!--友情链接 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger">
                    <h4>友情链接<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <?php foreach ($friendsites as $links): ?>
                    <li class="col-md-2 pull-left" style="height:30px; line-height:30px;">
                        <a href="<?php echo $links['url']; ?>" data-toggle="tooltip" title="<?php echo $links['description']; ?>"><?php echo $links['title']; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!--友情链接 end-->
        </div>
    </div>
</section>

<script>
function AutoScroll(){
    var _scroll = $("#slide>ul");
    _scroll.animate({marginLeft:"-150px"},1000,function(){//ul往左边移动150px
        _scroll.css({marginLeft:0}).find("li:first").appendTo(_scroll);
    });
}
$(".fancybox").fancybox({
    protect: true,
    buttons : ['close']
});
$(function(){
    $("[data-toggle='tooltip']").tooltip();//友情链接鼠标悬停提示
    var _scrolling=setInterval("AutoScroll()",3000);//精彩图片展轮播
    $("#slide>ul").hover(function(){
        clearInterval(_scrolling);
    },function(){
        _scrolling=setInterval("AutoScroll()",3000);
    });
});
</script>
