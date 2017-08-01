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
                        <?php foreach ($latests as $news): ?>
                            <li class="widget-links_item"><a href="<?php echo site_url('news/view/'.$news['id']); ?>"><?php echo $news['title']; ?></a><span class="pull-right text-danger hidden-xs"><?php echo substr($news['pubtime'],0,10); ?></span></li>
                        <?php endforeach ?>
                            <li class="widget-links_item"><a href="#">[校园快讯]麻城市档案局领导来我校调研“档案创优”工作</a><span class="pull-right hidden-xs">2015-06-02</span></li>
                            <li class="widget-links_item visible-lg"><a href="#">[校园快讯]麻城市档案局领导来我校调研“档案创优”工作</a><span class="pull-right hidden-xs">2015-06-01</span></li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="teacher">
                        <ul class="tab-links list-unstyled">
                            <li class="widget-links_item"><a href="#">专栏之二内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之二内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之二内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之二内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之二内容</a></li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="student">
                        <ul class="tab-links list-unstyled">
                            <li class="widget-links_item"><a href="#">专栏之三内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之三内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之三内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之三内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之三内容</a></li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="parent">
                        <ul class="tab-links list-unstyled">
                            <li class="widget-links_item"><a href="#">专栏之四内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之四内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之四内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之四内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之四内容</a></li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="notice">
                        <ul class="tab-links list-unstyled">
                            <li class="widget-links_item"><a href="#">专栏之五内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之五内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之五内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之五内容</a></li>
                            <li class="widget-links_item"><a href="#">专栏之五内容</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--新闻标签 end-->
        </div>
    </div>

    <div class="news row">
        <div class="col-md-2ths hidden-xs">
            <!--人生寄语 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger"><h4>人生寄语</h4></div>
                <blockquote>
                    <p class="text-primary">志向决定方向 态度决定高度</p>
                    <p class="text-primary">心灵的强大决定潜能的巨大</p>
                    <p class="text-primary">让优秀成为习惯</p>
                </blockquote>
                <div class="text-center animated slideInUp"><img src="<?php echo base_url('webroot/image/qrcode.png'); ?>" alt="" /></div>
                <div class="text-center text-danger">微信二维码</div>
            </div>
            <!--人生寄语 end-->
        </div>
        <div class="col-md-3ths">
            <!--校园新闻 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4>校园新闻<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                <ul class="widget-links list-unstyled">
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                    <li class="widget-links_item"><a href="#">我校荣获“湖北省特色学校创建课题研究优秀组织单位”称号</a></li>
                </ul>
            </div>
            <!--校园新闻 end-->
        </div>
        <div class="col-md-3ths">
            <!--视频点播 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4>视频点播<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                <ul class="widget-links list-unstyled">
                <?php foreach ($videos as $video): ?>
                    <li class="widget-links_item"><a href="<?php echo site_url('video/view/'.$video['id']); ?>"><?php echo $video['title']; ?></a></li>
                <?php endforeach ?>
                    <li class="widget-links_item"><a href="#">[视频一中][推荐]“畅想2013”麻城一中元旦联欢晚会（视频）</a></li>
                </ul>
            </div>
            <!--视频点播 end-->
        </div>
    </div>

    <div class="banner row">
        <div class="col-md-12 hidden-xs">
            <!--滚动图片展示 begin-->
            <div id="slide" class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger"><h4>精彩图片展</h4></div>
                <ul class="widget-links list-unstyled">
                    <li class="widget-links_item pull-left"><a href="#"><img src="<?php echo base_url('webroot/image/slide1.jpg'); ?>" alt="" width="150"></a></li>
                    <li class="widget-links_item pull-left"><a href="#"><img src="<?php echo base_url('webroot/image/slide2.jpg'); ?>" alt="" width="150"></a></li>
                    <li class="widget-links_item pull-left"><a href="#"><img src="<?php echo base_url('webroot/image/slide3.jpg'); ?>" alt="" width="150"></a></li>
                    <li class="widget-links_item pull-left"><a href="#"><img src="<?php echo base_url('webroot/image/slide1.jpg'); ?>" alt="" width="150"></a></li>
                    <li class="widget-links_item pull-left"><a href="#"><img src="<?php echo base_url('webroot/image/slide2.jpg'); ?>" alt="" width="150"></a></li>
                    <li class="widget-links_item pull-left"><a href="#"><img src="<?php echo base_url('webroot/image/slide3.jpg'); ?>" alt="" width="150"></a></li>
                    <li class="widget-links_item pull-left"><a href="#"><img src="<?php echo base_url('webroot/image/slide1.jpg'); ?>" alt="" width="150"></a></li>
                    <li class="widget-links_item pull-left"><a href="#"><img src="<?php echo base_url('webroot/image/slide2.jpg'); ?>" alt="" width="150"></a></li>
                    <li class="widget-links_item pull-left"><a href="#"><img src="<?php echo base_url('webroot/image/slide3.jpg'); ?>" alt="" width="150"></a></li>
                    <li class="widget-links_item pull-left"><a href="#"><img src="<?php echo base_url('webroot/image/slide1.jpg'); ?>" alt="" width="150"></a></li>
                </ul>
            </div>
            <!--滚动图片展示 end-->
        </div>
    </div>

    <div class="news row">
        <div class="col-md-2ths hidden-xs">
            <!--专题推荐 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger"><h4>专题推荐</h4></div>
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
                <div class="widget-box_title bs-callout bs-callout-info"><h4>最新资源<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                <ul class="widget-links list-unstyled">
                <?php foreach ($downloads as $download): ?>
                    <li class="widget-links_item">[<?php echo $download['category']; ?>]<a href="<?php echo site_url('download/view/'.$download['id'])?>"><?php echo $download['title']; ?></a></li>
                <?php endforeach ?>
                </ul>
            </div>
            <!--最新资源 end-->
        </div>
        <div class="col-md-3ths">
            <!--教学教研 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4>教学教研<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                <ul class="widget-links list-unstyled">
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
                    <li class="widget-links_item"><a href="#">高一语文数学等学科积极开展课堂教学教研活动</a></li>
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
        <div class="col-md-12 hidden-xs">
            <!--友情链接 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger"><h4>友情链接</h4></div>
                <ul class="widget-links list-unstyled" style="line-height:40px;">
                <?php foreach ($friendsites as $links): ?>
                    <li class="col-md-2 pull-left"><a href="<?php echo $links['url']; ?>" data-toggle="tooltip" title="<?php echo $links['description']; ?>"><?php echo $links['title']; ?></a></li>
                <?php endforeach ?>
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
