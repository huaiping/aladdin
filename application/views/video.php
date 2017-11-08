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

    <div class="video row">
        <div class="col-xs-12 col-sm-12 col-md-8">
            <!--视频播放 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>视频：<?php echo $item['title']; ?><span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <li class="widget-links_item"><!--仅支持ogg mp4 WebM格式-->
                        <video id="videoPlayer" controls="controls" class="video-js vjs-fluid vjs-big-play-centered col-xs-12 col-sm-12 col-md-12" data-setup="{}">
                            <source src="<?php echo base_url($item['url']); ?>" type="video/<?php echo substr($item['url'], strrpos($item['url'], '.')+1); ?>">
                        </video>
                    </li>
                </ul>
            </div>
            <!--视频播放 end-->
        </div>

        <div class="col-sm-12 col-md-4 hidden-xs">
            <!--右侧相关推荐 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger">
                    <h4>相关推荐<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <?php for($i=0; $i<count($hot); $i++): ?>
                    <li class="widget-links_item"><a href="<?php echo site_url('video/view/'.$hot[$i]['id']); ?>"><?php echo $hot[$i]['title']; ?></a><span class="badge"><?php echo $hot[$i]['hits']; ?></span></li>
                    <?php endfor; ?>
                </ul>
            </div>
            <!--右侧相关推荐 end-->
        </div>
    </div>

    <div class="video row" style="margin-top:20px;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <!-- 微课 begin -->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>优秀微课作品<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <?php for($i=0; $i<count($lectures); $i++): ?>
                <div class="col-sm-6 col-md-3">
                    <a href="<?php echo site_url('video/view/'.$lectures[$i]['id']); ?>"><img class="col-xs-12 col-sm-12 col-md-12" src="<?php echo base_url('webroot/image/weike.png'); ?>" alt=""></img></a>
                    <div class="caption">
                        <h5 class="text-center" style="line-height:35px;"><?php echo $lectures[$i]['title']; ?></h5>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
            <!-- 微课 end -->
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
</section>

<script>
$('#videoPlayer').bind('contextmenu',function() {
    return false;
});
</script>
