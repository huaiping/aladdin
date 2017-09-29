<section class="container">
    <div class="news row">
        <div class="col-xs-12 col-md-12">
            <!--新闻列表 begin-->
            <?php for($i=0; $i<count($news)-1; $i+=2): ?>
            <div class="col-md-11ths panel panel-default pull-left">
                <div class="media panel-body" style="margin-left:-15px; margin-right:-15px;">
                    <div class="media-left hidden-xs">
                        <img class="media-object img-circle" src="<?php echo base_url('webroot/image/image2.jpg'); ?>" alt="">
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading ellipsis"><a href="<?php echo site_url('news/view/'.$news[$i]['id']); ?>"><?php echo $news[$i]['title']; ?></a></h5>
                        <p><?php echo $news[$i]['pubtime']; ?></p>
                        <p style="height:50px;"><?php echo $news[$i]['summary']; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-11ths panel panel-default pull-right">
                <div class="media panel-body" style="margin-left:-15px; margin-right:-15px;">
                    <div class="media-left hidden-xs">
                        <img class="media-object img-circle" src="<?php echo base_url('webroot/image/image2.jpg'); ?>" alt="">
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading ellipsis"><a href="<?php echo site_url('news/view/'.$news[$i+1]['id']); ?>"><?php echo $news[$i+1]['title']; ?></a></h5>
                        <p><?php echo $news[$i+1]['pubtime']; ?></p>
                        <p style="height:50px;"><?php echo $news[$i+1]['summary']; ?></p>
                    </div>
                </div>
            </div>
            <?php endfor; ?>

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
                <a class="pagination__next" href="<?php echo site_url('news/page/2'); ?>">Next page</a>
            </p>
            <!--新闻列表 end-->
        </div>
    </div>
</section>

<script>
$(function(){
    $('.article-feed').infiniteScroll({
        path: '.pagination__next',
        append: '.news',
        status: '.scroller-status',
        hideNav: '.pagination',
        //history: false,
    });
});
</script>
