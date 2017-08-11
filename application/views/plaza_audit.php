<section class="container">
    <div class="membership row">
        <div class="col-md-3 hidden-xs">
            <!--左侧用户中心 begin-->
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="javascript:void(0);">用户中心</a></li>
                <li class="text-center"><a href="javascript:void(0);"><img src="<?php echo base_url('avatar/avatar.php?char='.$this->session->userdata('name')); ?>" alt=""></a></li>
                <li><a href="javascript:void(0);">用户名：<?php echo $this->session->userdata('username'); ?></a></li>
                <li><a href="javascript:void(0);">用户组：<?php echo $this->session->userdata('groups'); ?></a></li>
                <li><a href="javascript:void(0);">注册时间：<?php echo substr($this->session->userdata('pubtime'),0,10); ?></a></li>
                <li><a href="javascript:void(0);">当前IP：<?php echo $this->input->ip_address(); ?></a></li>
            </ul>
            <!--左侧用户中心 end-->
        </div>

        <div class="col-md-9">
            <?php
                if (count($articles) > 1) {
            ?>
           <div class="col-md-12">
                <!--投稿 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>待审投稿<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                    <?php foreach ($articles as $article): ?>
                        <li class="widget-links_item">
                            <span class="badge badge-danger">待审</span> <a href="<?php echo site_url('news/preview/'.$article['id']); ?>"><?php echo $article['title']; ?></a>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--投稿 end-->
            </div>
            <?php
                }
            ?>

            <?php
                if (count($albums) > 1) {
            ?>
            <div class="col-md-12">
                <!--相册 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>待审相册<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                    <?php foreach ($albums as $album): ?>
                        <li class="widget-links_item">
                            <span class="badge badge-danger">待审</span> <a href="<?php echo site_url('photo/preview'); ?>"><?php echo $album['title']; ?></a>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--相册 end-->
            </div>
            <?php
                }
            ?>

            <?php
                if (count($files) > 1) {
            ?>
            <div class="col-md-12">
                <!--文件 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>待审文件<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                    <?php foreach ($files as $file): ?>
                        <li class="widget-links_item">
                            <span class="badge badge-danger">待审</span> <a href="<?php echo site_url('download/preview/'.$file['id']); ?>"><?php echo $file['title']; ?></a>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--文件 end-->
            </div>
            <?php
                }
            ?>

            <?php
                if (count($messages) > 1) {
            ?>
            <div class="col-md-12">
                <!--留言 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>待审留言<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                    <?php foreach ($messages as $message): ?>
                        <li class="widget-links_item">
                            <span class="badge badge-danger">待审</span> <a href="<?php echo site_url('guestbook/preview'); ?>"><?php echo $message['title']; ?></a>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--留言 end-->
            </div>
            <?php
                }
            ?>

            <?php
                if (count($videos) > 1) {
            ?>
            <div class="col-md-12">
                <!--视频 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>待审视频<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                    <?php foreach ($videos as $video): ?>
                        <li class="widget-links_item">
                            <span class="badge badge-danger">待审</span> <a href="<?php echo site_url('video/preview/'.$video['id']); ?>"><?php echo $video['title']; ?></a>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--视频 end-->
            </div>
            <?php
                }
            ?>

            <?php
                if (count($links) > 1) {
            ?>
            <div class="col-md-12">
                <!--链接 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>待审链接<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                    <?php foreach ($links as $link): ?>
                        <li class="widget-links_item">
                            <span class="badge badge-danger">待审</span> <a href="#"><?php echo $link['title']; ?></a>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--链接 end-->
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>
