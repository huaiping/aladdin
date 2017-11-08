<section class="container">
    <div class="membership row">
        <div class="col-md-3 hidden-xs">
            <!--左侧用户中心 begin-->
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="javascript:void(0);">用户中心</a></li>
                <li class="text-center"><a href="javascript:void(0);">
                <?php
                $php_path = dirname(__FILE__).'/';
                if (file_exists($php_path.'../../webroot/avatar/'.md5($this->session->userdata('username')).'_150.png')) {
                ?>
                    <img src="<?php echo base_url('webroot/avatar/'.md5($this->session->userdata('username')).'_150.png'); ?>" alt="">
                <?php
                } else {
                ?>
                    <img src="<?php echo base_url('avatar/avatar.php?char='.$this->session->userdata('name').'&user='.$this->session->userdata('username')); ?>" alt="">
                <?php
                }
                ?>
                </a></li>
                <li><a href="javascript:void(0);">用户名：<?php echo $this->session->userdata('username'); ?></a></li>
                <li><a href="javascript:void(0);">用户组：<?php echo $this->session->userdata('groups'); ?></a></li>
                <li><a href="javascript:void(0);">注册时间：<?php echo substr($this->session->userdata('pubtime'),0,10); ?></a></li>
                <li><a href="javascript:void(0);">当前IP：<?php echo $this->input->ip_address(); ?></a></li>
            </ul>
            <!--左侧用户中心 end-->
        </div>

        <div class="col-md-9">
           <div class="col-md-6">
                <!--投稿 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>我的投稿<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($articles as $article): ?>
                        <li class="widget-links_item ellipsis">
                            <?php if ($article['status'] == 'passed'): ?>
                            <a href="<?php echo site_url('news/view/'.$article['id']); ?>"><?php echo $article['title']; ?></a>
                            <?php elseif ($article['status'] == 'pending'): ?>
                            <span class="badge badge-danger">待审</span>
                            <a href="javascript:void(0);"><?php echo $article['title']; ?></a>
                            <?php else: ?>
                            <span style="text-decoration:line-through;"><?php echo $article['title']; ?></span>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--投稿 end-->
            </div>

            <div class="col-md-6">
                <!--相册 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>我的相册<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($albums as $album): ?>
                        <li class="widget-links_item ellipsis">
                            <?php if ($album['status'] == 'passed'): ?>
                            <a href="<?php echo site_url('/photo/view/'.$album['id']); ?>"><?php echo $album['title']; ?></a>
                            <?php elseif ($album['status'] == 'pending'): ?>
                            <span class="badge badge-danger">待审</span>
                            <a href="javascript:void(0);"><?php echo $album['title']; ?></a>
                            <?php else: ?>
                            <span style="text-decoration:line-through;"><?php echo $album['title']; ?></span>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--相册 end-->
            </div>

            <div class="col-md-6">
                <!--文件 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>我的文件<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($files as $file): ?>
                        <li class="widget-links_item ellipsis">
                            <?php if ($file['status'] == 'passed'): ?>
                            <a href="<?php echo site_url('/download/view/'.$file['id']); ?>"><?php echo $file['title']; ?></a>
                            <?php elseif ($file['status'] == 'pending'): ?>
                            <span class="badge badge-danger">待审</span>
                            <a href="javascript:void(0);"><?php echo $file['title']; ?></a>
                            <?php else: ?>
                            <span style="text-decoration:line-through;"><?php echo $file['title']; ?></span>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--文件 end-->
            </div>

            <div class="col-md-6">
                <!--留言 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>我的留言<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($messages as $message): ?>
                        <li class="widget-links_item ellipsis">
                            <?php if ($message['status'] == 'pending'): ?>
                            <span class="badge badge-danger">待审</span>
                            <?php endif; ?>
                            <a href="javascript:void(0);"><?php echo $message['title']; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--留言 end-->
            </div>

            <div class="col-md-6">
                <!--视频 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>我的视频<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($videos as $video): ?>
                        <li class="widget-links_item ellipsis">
                            <?php if ($video['status'] == 'passed'): ?>
                            <a href="<?php echo site_url('video/view/'.$video['id']); ?>"><?php echo $video['title']; ?></a>
                            <?php elseif ($video['status'] == 'pending'): ?>
                            <span class="badge badge-danger">待审</span>
                            <a href="javascript:void(0);"><?php echo $video['title']; ?></a>
                            <?php else: ?>
                            <span style="text-decoration:line-through;"><?php echo $video['title']; ?></span>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--视频 end-->
            </div>

            <div class="col-md-6">
                <!--链接 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>我的链接<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($links as $link): ?>
                        <li class="widget-links_item ellipsis">
                            <?php if ($link['status'] == 'pending'): ?>
                            <span class="badge badge-danger">待审</span>
                            <?php endif; ?>
                            <a href="javascript:void(0);"><?php echo $link['title']; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--链接 end-->
            </div>
        </div>
    </div>
</section>
