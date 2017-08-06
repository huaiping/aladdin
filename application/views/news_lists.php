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
        <div class="col-xs-12 col-md-12">
            <!--新闻列表 begin-->
            <div class="col-md-11ths panel panel-default">
                <div class="media panel-body">
                    <div class="media-left">
						<img class="media-object img-circle" src="<?php echo base_url('webroot/image/image2.jpg'); ?>" alt="">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">标题01</h4>
                        <p style="min-height:100px;">摘要01</p>
                    </div>
                </div>
            </div>

            <div class="col-md-11ths panel panel-default pull-right">
                <div class="media panel-body">
                    <div class="media-left">
						<img class="media-object img-circle" src="<?php echo base_url('webroot/image/image2.jpg'); ?>" alt="">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">标题02</h4>
                        <p style="min-height:100px;">摘要02</p>
                    </div>
                </div>
            </div>

            <div class="col-md-11ths panel panel-default">
                <div class="media panel-body">
                    <div class="media-left">
						<img class="media-object img-circle" src="<?php echo base_url('webroot/image/image2.jpg'); ?>" alt="">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">标题03</h4>
                        <p style="min-height:100px;">摘要03</p>
                    </div>
                </div>
            </div>

            <div class="col-md-11ths panel panel-default pull-right">
                <div class="media panel-body">
                    <div class="media-left">
						<img class="media-object img-circle" src="<?php echo base_url('webroot/image/image2.jpg'); ?>" alt="">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">标题04</h4>
                        <p style="min-height:100px;">摘要04</p>
                    </div>
                </div>
            </div>

			<div style="clear:both;"></div>

            <div class="article-feed">
                <!-- .news will be added to .article-feed -->
                <article class="news"></article>
                <article class="news"></article>
            </div>

            <!-- status elements -->
            <div class="scroller-status">
                <div class="infinite-scroll-request loader-ellips">
                  ...
                </div>
                <p class="infinite-scroll-last">End of content</p>
                <p class="infinite-scroll-error">No more pages to load</p>
            </div>

            <!-- pagination has path -->
            <p class="pagination">
                <a class="pagination__next" href="./news/view/3">Next page</a>
            </p>
            <!--新闻列表 end-->
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

<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script>
$(document).ready(function(){
    $('.article-feed').infiniteScroll({
        path: '.pagination__next',
        append: '.news',
        status: '.scroller-status',
        hideNav: '.pagination',
        //history: false,
    });
});
</script>
