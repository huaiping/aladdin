<section class="container">
    <div class="membership row">
        <div class="col-md-3 hidden-xs">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">用户中心</a></li>
                <li class="text-center"><a href="#"><img src="<?php echo base_url('avatar/avatar.php?char='.$this->session->userdata('name')); ?>" alt=""></a></li>
                <li><a href="#">用户名：<?php echo $this->session->userdata('username'); ?></a></li>
                <li><a href="#">用户组：<?php echo $this->session->userdata('groups'); ?></a></li>
                <li><a href="#">注册时间：2015-6-10</a></li>
                <li><a href="#">当前IP：<?php echo $this->input->ip_address(); ?></a></li>
            </ul>
        </div>

        <div class="col-md-9">
        <?php
            echo $this->input->user_agent();
        ?>

           <div class="col-md-6">
                <!--投稿 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>我的投稿</h4></div>
                    <ul class="widget-links list-unstyled">
                    <?php foreach ($articles as $myarticle): ?>
                        <li class="widget-links_item"><a href="#"><?php echo $myarticle['title']; ?></a></li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--投稿 end-->
            </div>

            <div class="col-md-6">
                <!--相册 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>我的相册</h4></div>
                    <ul class="widget-links list-unstyled">
                    <?php foreach ($albums as $myalbum): ?>
                        <li class="widget-links_item"><a href="#"><?php echo $myalbum['id']; ?></a></li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--相册 end-->
            </div>

            <div class="col-md-6">
                <!--文件 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>我的文件</h4></div>
                    <ul class="widget-links list-unstyled">
                    <?php foreach ($files as $myfile): ?>
                        <li class="widget-links_item"><a href="#"><?php echo $myfile['title']; ?></a></li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--文件 end-->
            </div>

            <div class="col-md-6">
                <!--留言 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>我的留言</h4></div>
                    <ul class="widget-links list-unstyled">
                    <?php foreach ($messages as $mymessage): ?>
                        <li class="widget-links_item"><a href="#"><?php echo $mymessage['title']; ?></a></li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--留言 end-->
            </div>

            <div class="col-md-6">
                <!--视频 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>我的视频</h4></div>
                    <ul class="widget-links list-unstyled">
                    <?php foreach ($videos as $myvideo): ?>
                        <li class="widget-links_item"><a href="#"><?php echo $myvideo['title']; ?></a></li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--视频 end-->
            </div>

            <div class="col-md-6">
                <!--链接 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info"><h4>我的链接</h4></div>
                    <ul class="widget-links list-unstyled">
                    <?php foreach ($links as $mylink): ?>
                        <li class="widget-links_item"><a href="#"><?php echo $mylink['title']; ?></a></li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--链接 end-->
            </div>

        </div>
    </div>
</section>
