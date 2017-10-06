<section class="container">
    <div class="membership row">
        <div class="col-md-3 hidden-xs hidden-sm">
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
                    <img src="<?php echo base_url('avatar/avatar.php?char='.md5($this->session->userdata('name')).'&user='.$this->session->userdata('username')); ?>" alt="">
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
           <?php if (count($articles) > 0): ?>
           <div class="col-md-12">
                <!--投稿 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>待审投稿<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($articles as $article): ?>
                        <li class="col-sm-7 col-md-8 widget-links_item ellipsis">
                            <span class="badge badge-danger">待审</span><a href="<?php echo site_url('news/preview/'.$article['id']); ?>"><?php echo $article['title']; ?></a>
                        </li>
                        <li class="col-sm-5 col-md-4 text-right">
                            <a href="<?php echo site_url('news/preview/'.$article['id']); ?>"><span class="badge badge-info">预览</span></a>
                            <a href="#" data-action="news" data-id="<?php echo $article['id']; ?>" data-status="passed" class="link"><span class="badge badge-success" style="margin-left:10px;">通过</span></a>
                            <a href="#" data-action="news" data-id="<?php echo $article['id']; ?>" data-status="failed" class="link"><span class="badge badge-danger" style="margin-left:10px;">删除</span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--投稿 end-->
            </div>
            <?php endif; ?>

            <?php if (count($albums) > 0): ?>
            <div class="col-md-12">
                <!--相册 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>待审相册<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($albums as $album): ?>
                        <li class="col-sm-7 col-md-8 widget-links_item ellipsis">
                            <span class="badge badge-danger">待审</span> <a href="<?php echo site_url('photo/preview/'.$album['id']); ?>"><?php echo $album['title']; ?></a>
                        </li>
                        <li class="col-sm-5 col-md-4 text-right">
                            <a href="<?php echo site_url('photo/preview/'.$album['id']); ?>"><span class="badge badge-info">预览</span></a>
                            <a href="#" data-action="photo" data-id="<?php echo $album['id']; ?>" data-status="passed" class="link"><span class="badge badge-success" style="margin-left:10px;">通过</span></a>
                            <a href="#" data-action="photo" data-id="<?php echo $album['id']; ?>" data-status="failed" class="link"><span class="badge badge-danger" style="margin-left:10px;">删除</span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--相册 end-->
            </div>
            <?php endif; ?>

            <?php if (count($files) > 0): ?>
            <div class="col-md-12">
                <!--文件 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>待审文件<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($files as $file): ?>
                        <li class="col-sm-7 col-md-8 widget-links_item ellipsis">
                            <span class="badge badge-danger">待审</span> <a href="<?php echo site_url('download/preview/'.$file['id']); ?>"><?php echo $file['title']; ?></a>
                        </li>
                        <li class="col-sm-5 col-md-4 text-right">
                            <a href="<?php echo site_url('download/preview/'.$file['id']); ?>"><span class="badge badge-info">预览</span></a>
                            <a href="#" data-action="download" data-id="<?php echo $file['id']; ?>" data-status="passed" class="link"><span class="badge badge-success" style="margin-left:10px;">通过</span></a>
                            <a href="#" data-action="download" data-id="<?php echo $file['id']; ?>" data-status="failed" class="link"><span class="badge badge-danger" style="margin-left:10px;">删除</span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--文件 end-->
            </div>
            <?php endif; ?>

            <?php if (count($messages) > 0): ?>
            <div class="col-md-12">
                <!--留言 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>待审留言<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($messages as $message): ?>
                        <li class="col-sm-7 col-md-8 widget-links_item ellipsis">
                            <span class="badge badge-danger">待审</span> <a href="<?php echo site_url('guestbook/preview'); ?>"><?php echo $message['title']; ?></a>
                        </li>
                        <li class="col-sm-5 col-md-4 text-right">
                            <a href="#"><span class="badge badge-info">预览</span></a>
                            <a href="#" data-action="guestbook" data-id="<?php echo $message['id']; ?>" data-status="passed" class="link"><span class="badge badge-success" style="margin-left:10px;">通过</span></a>
                            <a href="#" data-action="guestbook" data-id="<?php echo $message['id']; ?>" data-status="failed" class="link"><span class="badge badge-danger" style="margin-left:10px;">删除</span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--留言 end-->
            </div>
            <?php endif; ?>

            <?php if (count($videos) > 0): ?>
            <div class="col-md-12">
                <!--视频 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>待审视频<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($videos as $video): ?>
                        <li class="col-sm-7 col-md-8 widget-links_item ellipsis">
                            <span class="badge badge-danger">待审</span> <a href="<?php echo site_url('video/preview/'.$video['id']); ?>"><?php echo $video['title']; ?></a>
                        </li>
                        <li class="col-sm-5 col-md-4 text-right">
                            <a href="<?php echo site_url('video/preview/'.$video['id']); ?>"><span class="badge badge-info">预览</span></a>
                            <a href="#" data-action="video" data-id="<?php echo $video['id']; ?>" data-status="passed" class="link"><span class="badge badge-success" style="margin-left:10px;">通过</span></a>
                            <a href="#" data-action="video" data-id="<?php echo $video['id']; ?>" data-status="failed" class="link"><span class="badge badge-danger" style="margin-left:10px;">删除</span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--视频 end-->
            </div>
            <?php endif; ?>

            <?php if (count($links) > 0): ?>
            <div class="col-md-12">
                <!--链接 begin-->
                <div class="widget-box no-border">
                    <div class="widget-box_title bs-callout bs-callout-info">
                        <h4>待审链接<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                    </div>
                    <ul class="widget-links list-unstyled" style="min-height:160px;">
                        <?php foreach ($links as $link): ?>
                        <li class="col-sm-7 col-md-8 widget-links_item ellipsis">
                            <span class="badge badge-danger">待审</span> <?php echo $link['title']; ?><a href="javascript:void(0);" title="<?php echo $link['description']; ?>" style="margin-left:15px;"><?php echo $link['url']; ?></a>
                        </li>
                        <li class="col-sm-5 col-md-4 text-right">
                            <a href="<?php echo $link['url']; ?>"><span class="badge badge-info">预览</span></a>
                            <a href="#" data-action="links" data-id="<?php echo $link['id']; ?>" data-status="passed" class="link"><span class="badge badge-success" style="margin-left:10px;">通过</span></a>
                            <a href="#" data-action="links" data-id="<?php echo $link['id']; ?>" data-status="failed" class="link"><span class="badge badge-danger" style="margin-left:10px;">删除</span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--链接 end-->
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
$(function(){
    //var get_csrf_token_name = '<?php echo $this->security->get_csrf_token_name() ?>';
    //var cct = '<?php echo $this->security->get_csrf_hash() ?>';
    $("a.link").on("click",function(){
        var action = $(this).attr('data-action');
        var id = $(this).attr('data-id');
        var state = $(this).attr('data-status');
        $.post("<?php echo site_url('membership/audit'); ?>", { "action": action, "id":id, "status": state }, function (data) {
            //alert(data);
        });
        window.location.reload();
        return false;
    });
});
</script>
