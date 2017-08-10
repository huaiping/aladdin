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

    <div class="guestbook row">
        <div class="col-md-12" style="margin-bottom:20px;">
            <a href="<?php echo site_url('guestbook/message'); ?>" class="btn btn-success" role="button"><i class="fa fa-commenting"></i> 签写新的留言</a>
        </div>
    </div>

    <div class="guestbook row">
        <?php for($i=0; $i<count($message); $i++): ?>
        <div class="col-md-12">
            <!--留言 begin-->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title"><span>主题：<?php echo $message[$i]['title']; ?></span><span class="pull-right hidden-xs"><?php echo $message[$i]['pubtime']; ?></span><span class="glyphicon glyphicon-time pull-right hidden-xs" aria-hidden="true"></span></h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-3 col-md-2">
                        <div class="widget-links_item" style="margin-top:15px;">
                            <div class="text-center"><img src="<?php echo base_url('webroot/image/avatar1.jpg'); ?>" alt="" class="img-circle"></div>
                            <div class="text-center" style="margin-top:10px;"><?php echo $message[$i]['author']; ?></div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-10" style="line-height:30px;">
                        <div class="widget-links_item"><?php echo $message[$i]['content']; ?></div>
                        <?php
                            if (!empty($message[$i]['reply'])) {
                                echo '<div class="panel-footer">'.$message[$i]['reply'].'</div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!--留言 end-->
        </div>
        <?php endfor ?>
    </div>

    <div class="guestbook row">
        <div class="col-md-12 text-center">
            <nav>
                <ul class="pagination" style="margin-top:0; margin-bottom:10px;">
                    <?php echo $guestbook_page; ?>
                </ul>
            </nav>
        </div>
    </div>
</section>
