<div style="padding-top:70px;">
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
        $loops = floor(count($category)/2);
        //循环显示图片大类、小类 begin
        for($m=0; $m<$loops; $m++) {
    ?>

    <div class="photos row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <!-- 左侧图片缩略图 begin -->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4><?php echo $category[$m]['category']; ?><a href="<?php echo site_url('photo/waterfall'); ?>"><span class="pull-right glyphicon glyphicon-camera" style="padding-right:10px;"></span></a></h4></div>
                <ul class="widget-links list-unstyled">
                <?php
                    for($i=0; $i<count($subcategory); $i++) {
                        if ($category[$m]['category'] == $subcategory[$i]['category']) {
                ?>
                        <li class="col-xs-6 col-sm-3 col-md-4 widget-links_item"><div class="text-center"><?php echo $subcategory[$i]['subcategory']; ?></div><a class="thumbnail" href="<?php echo site_url('photo/view/'.$subcategory[$i]['id']); ?>"><img src="<?php echo base_url($subcategory[$i]['thumbnail']); ?>" alt=""></a></li>
                <?php
                        }
                    }
                ?>
                </ul>
            </div>
            <!-- 左侧图片缩略图 end -->
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6">
            <!-- 右侧图片缩略图 begin -->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4><?php echo $category[$m+1]['category']; ?><span class="pull-right glyphicon glyphicon-camera" style="padding-right:10px;"></span></h4></div>
                <ul class="widget-links list-unstyled">
                <?php
                    for($i=0; $i<count($subcategory); $i++) {
                        if ($category[$m+1]['category'] == $subcategory[$i]['category']) {
                ?>
                    <li class="col-xs-6 col-sm-3 col-md-4 widget-links_item"><div class="text-center"><?php echo $subcategory[$i]['subcategory']; ?></div><a class="thumbnail" href="<?php echo site_url('photo/view/'.$subcategory[$i]['id']); ?>"><img src="<?php echo base_url($subcategory[$i]['thumbnail']); ?>" alt=""></a></li>
                <?php
                        }
                    }
                ?>
                </ul>
            </div>
            <!-- 右侧图片缩略图 end -->
        </div>
    </div>

    <?php
        }
        //循环显示图片大类、小类 end
    ?>

    <?php
        if (count($category)%2 == 1) {//奇数图片类处理
            $remainder = count($category)-1;
    ?>
    <div class="photos row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4><?php echo $category[$remainder]['category']; ?><span class="pull-right glyphicon glyphicon-camera" style="padding-right:10px;"></span></h4></div>
                <ul class="widget-links list-unstyled">
                <?php
                    for($i=0; $i<count($subcategory); $i++) {
                        if ($category[$remainder]['category'] == $subcategory[$i]['category']) {
                ?>
                    <li class="col-xs-6 col-sm-3 col-md-4 widget-links_item"><div class="text-center"><?php echo $subcategory[$i]['subcategory']; ?></div><a class="thumbnail" href="<?php echo site_url('photo/view/'.$subcategory[$i]['id']); ?>"><img src="<?php echo base_url($subcategory[$i]['thumbnail']); ?>" alt=""></a></li>
                <?php
                        }
                    }
                ?>
                </ul>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</div>
