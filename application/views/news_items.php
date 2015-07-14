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

    <div class="news row">
        <div class="col-xs-12 col-md-9">
            <div class="col-xs-12 col-md-12">
                <!--新闻 begin-->
                <h3 class="text-center"><?php echo $news_item['title']; ?></h3>
                <div id="article" style="line-height:30px;"><?php echo $news_item['content']; ?></div>
                <!--新闻 end-->
            </div>

            <?php
                $username = $this->session->userdata('username');
                if (!empty($username)) {
            ?>
            <form method="post" id="comments" name="comments" action="#" class="form-horizontal">
                <!--评论 begin-->
                <div class="col-xs-12 col-md-12 panel panel-info" style="margin:0 0 20px 0; padding:0;">
                    <div class="panel-heading">评论</div>
                    <div class="panel-body" style="margin:0; padding:0;">
                        <textarea id="content" name="content" class="form-control" rows="5" style="resize:none;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">提交评论</button>
                    </div>
                </div>
                <!--评论 end-->
            </form>
            <?php
                } else {
            ?>
                <div class="col-xs-12 col-md-12 panel panel-info" style="margin:0 0 20px 0; padding:0;">
                    <div class="panel-heading">评论</div>
                    <div class="panel-body" style="margin:0; padding:0;">
                        <textarea id="content" name="content" class="form-control" rows="5" style="resize:none;" disabled="disabled"></textarea>
                    </div>
                </div>
                <div class="text-center" style="margin-bottom:20px;">
                    <a class="btn btn-success" href="<?php echo site_url('membership'); ?>" role="button">登录后发表评论</a>
                </div>
            <?php
                }
            ?>
        </div>

        <div class="col-md-3 hidden-xs">
            <!--推荐新闻 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger"><h4>推荐新闻</h4></div>
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
            <!--推荐新闻 end-->

            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger"><h4>二维码</h4></div>
                <div id="qrcode" class="text-center"></div>
            </div>
            <script>
                jQuery('#qrcode').qrcode({width:200, height:200, text:"<?php echo current_url(); ?>"});
            </script>
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
