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

    <div class="photos row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4><?php echo $photos[0]['category'].'_'.$photos[0]['subcategory']; ?><span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <div id="carousel-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php for($i=0; $i<count($photos); $i++): ?>
                        <div class="item<?php if ($i==0) {echo ' active';} ?>">
                            <img src="<?php echo base_url($photos[$i]['url']); ?>" alt="" style="width:100%;">
                            <div class="carousel-caption"><?php echo $photos[$i]['description']; ?></div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">上一张</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">下一张</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
