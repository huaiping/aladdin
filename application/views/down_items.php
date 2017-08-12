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

    <div class="download row">
        <div class="col-md-3 hidden-xs hidden-sm">
            <!--左侧热门资源 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger"><h4>热门资源<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                    <ul class="widget-links list-unstyled">
                        <?php foreach ($down_hot as $hot): ?>
                            <li class="widget-links_item ellipsis"><a href="<?php echo site_url('download/view/'.$hot['id']); ?>"><?php echo $hot['title']; ?></a></li>
                        <?php endforeach ?>
                    </ul>
            </div>
            <!--左侧热门资源 end-->
        </div>

        <div class="col-xs-12 col-md-9">
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4><?php echo $down_item['title']; ?><span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
            </div>
            <!--右侧资源详情 begin-->
            <table class="table table-bordered">
                <tr>
                    <td class="col-md-5">运行环境：Windows 7+ / Office 2007+</td>
                    <td class="col-md-3 hidden-xs text-center" rowspan="4" style="vertical-align:middle;"><img src="<?php echo base_url('webroot/image/image1.gif'); ?>" alt=""></td>
                    <td class="col-md-4">文件大小：<?php echo $down_item['sizes']; ?> KB</td>
                </tr>
                <tr>
                    <td>资源等级：<?php echo $down_item['stars']; ?></td><td>资源类别：<?php echo $down_item['category']; ?></td>
                </tr>
                <tr>
                    <td>作者：<?php echo $down_item['author']; ?></td><td>授权方式：<?php echo $down_item['license']; ?></td>
                </tr>
                <tr>
                    <td>下载次数：<?php echo $down_item['hits']; ?></td><td>添加时间：<?php echo $down_item['pubtime']; ?></td>
                </tr>
            </table>

            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4>资源简介<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                <ul class="widget-links list-unstyled">
                    <li class="widget-links_item"><?php echo $down_item['description']; ?></li>
                </ul>
            </div>

            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4>下载地址<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                <ul class="widget-links list-unstyled">
                    <li class="widget-links_item">链接：<a href="<?php echo base_url('webroot/download/'.$down_item['url']); ?>" class="btn btn-default" role="button"><span class="glyphicon glyphicon-save"></span>本站下载</a>
                    <?php
                        if ($this->session->has_userdata('username')) {
                    ?>
                        <a href="#" class="btn btn-default" role="button"><span class="glyphicon glyphicon-save"></span>镜像网站下载</a>
                    <?php
                        } else {
                    ?>
                        <a class="btn btn-success" style="color:#fff;" href="<?php echo site_url('download/mirrors'); ?>" role="button">登录后高速下载</a>
                    <?php
                        }
                    ?>
                    </li>
                </ul>
            </div>

            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4>下载说明<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                <ul class="widget-links list-unstyled">
                    <li class="widget-links_item">如果您发现该资源不能下载，请及时给我们留言，谢谢！</li>
                    <li class="widget-links_item">未经本站许可，不得非法盗链及抄袭本站资源；如引用页面，请注明出处，谢谢您的支持！</li>
                </ul>
            </div>
            <!--右侧资源详情 end-->
        </div>
    </div>
</section>
