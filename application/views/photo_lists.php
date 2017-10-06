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

    <?php
        //循环显示图片大类、小类 begin
        for($m=0; $m<count($category); $m++) {
    ?>
    <div class="photos row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <!-- 图片缩略图 begin -->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4><?php echo $category[$m]['category']; ?><a href="<?php echo site_url('photo/waterfall'); ?>"><span class="pull-right glyphicon glyphicon-camera" style="padding-right:10px;"></span></a></h4>
                </div>
                <?php
                    for($i=0; $i<count($subcategory); $i++) {
                        if ($category[$m]['category'] == $subcategory[$i]['category']) {
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="<?php echo site_url('photo/view/'.$subcategory[$i]['id']); ?>"><img src="<?php echo base_url($subcategory[$i]['thumbnail']); ?>" alt=""></a>
                        <div class="caption">
                            <h5 class="text-center"><?php echo $subcategory[$i]['subcategory']; ?></h5>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
            <!-- 图片缩略图 end -->
        </div>
    </div>
    <?php
        }
        //循环显示图片大类、小类 end
    ?>
</section>
