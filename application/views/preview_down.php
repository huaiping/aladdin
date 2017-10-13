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
                <div class="widget-box_title bs-callout bs-callout-danger">
                    <h4>热门资源<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <?php foreach ($down_hot as $hot): ?>
                    <li class="widget-links_item ellipsis"><a href="<?php echo site_url('download/view/'.$hot['id']); ?>"><?php echo $hot['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!--左侧热门资源 end-->
        </div>

        <div class="col-xs-12 col-md-9">
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4><?php echo $down_item['title']; ?><span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4></div>
            </div>
            <!--右侧资源详情 begin-->
            <table class="table table-bordered">
                <tr>
                    <td class="col-md-5">运行环境：Windows 7+ / Office 2010+</td>
                    <td class="col-md-3 hidden-xs text-center" rowspan="4" style="vertical-align:middle;"><img src="<?php echo base_url('webroot/image/image1.gif'); ?>" alt=""></td>
                    <td class="col-md-4">文件大小：<?php echo $down_item['sizes']; ?></td>
                </tr>
                <tr>
                    <td>资源等级：<?php echo $down_item['stars']; ?></td>
                    <td>资源类别：<?php echo $down_item['category']; ?></td>
                </tr>
                <tr>
                    <td>作者：<?php echo $down_item['author']; ?></td>
                    <td>授权方式：<?php echo $down_item['license']; ?></td>
                </tr>
                <tr>
                    <td>下载次数：<?php echo $down_item['hits']; ?></td>
                    <td>发布时间：<?php echo $down_item['pubtime']; ?></td>
                </tr>
            </table>

            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>资源简介<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <li class="widget-links_item"><?php echo $down_item['description']; ?></li>
                </ul>
                <div class="alert alert-warning" role="alert">
                    <strong>本资源采用 <i class="fa fa-creative-commons"></i>知识共享 署名-非商业性使用3.0中国大陆(CC BY-NC 3.0 CN)许可协议授权。</strong>
                </div>
            </div>

            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>下载地址<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <li class="widget-links_item">链接：<a href="<?php echo base_url($down_item['url']); ?>" class="btn btn-default" role="button"><span class="fa fa-download"></span> 本站下载</a></li>
                </ul>
            </div>

            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>下载说明<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <ul class="widget-links list-unstyled">
                    <li class="widget-links_item">如果您发现该资源不能下载，请及时给我们留言，谢谢！</li>
                    <li class="widget-links_item">未经本站许可，不得非法盗链及抄袭本站资源；如引用页面，请注明出处，谢谢您的支持！</li>
                </ul>
            </div>
            <!--右侧资源详情 end-->
        </div>
    </div>
</section>
