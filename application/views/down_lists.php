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
                <div class="widget-box_title bs-callout bs-callout-danger"><h4>热门资源</h4></div>
                    <ul class="widget-links list-unstyled">
                        <?php foreach ($down_hot as $hot):?>
                            <li class="widget-links_item"><a href="<?php echo site_url('download/view/'.$hot['id']); ?>"><?php echo $hot['title']; ?></a></li>
                        <?php endforeach;?>
                    </ul>
            </div>
            <!--左侧热门资源 end-->
        </div>

        <div class="col-xs-12 col-md-9">
            <!--右侧资源下载列表 begin-->
            <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th class="col-xs-12 col-sm-7 col-md-6 widget-links_item text-center">资源名称</th>
                        <th class="col-sm-2 col-md-2 widget-links_item text-center hidden-xs">更新日期</th>
                        <th class="col-sm-1 col-md-2 col-lg-1 widget-links_item text-center hidden-xs">资源大小</th>
                        <th class="col-md-1 widget-links_item text-center hidden-xs hidden-sm">授权形式</th>
                        <th class="col-sm-1 col-md-1 widget-links_item text-center hidden-xs">资源等级</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0; $i<count($down_list); $i++): ?>
                    <tr class="widget-links">
                        <td class="col-xs-12 col-sm-7 col-md-4 col-lg-6 widget-links_item"><a href="<?php echo site_url('download/view/'.$down_list[$i]['id']); ?>"><?php echo $down_list[$i]['title']; ?></a></td>
                        <td class="col-sm-2 col-md-2 widget-links_item hidden-xs">2012-12-14</td>
                        <td class="col-sm-2 col-md-2 col-lg-1 widget-links_item hidden-xs">404 K</td>
                        <td class="col-md-2 col-lg-1 widget-links_item hidden-xs hidden-sm"><?php echo $down_list[$i]['license']; ?></td>
                        <td class="col-sm-1 col-md-1 widget-links_item hidden-xs">★★★★★</td>
                    </tr>
                    <?php endfor;?>
                </tbody>
            </table>
            <!--右侧资源下载列表 end-->

            <!--分页导航 begin-->
            <nav>
            <ul class="pager">
                <?php echo $down_page; ?>
                <!--
                <li class="disabled"><a href="index.php/download/page/1">首页</a></li>
                <li class="disabled"><a href="index.php/download/page/2">上一页</a></li>
                <li class="disabled"><a href="index.php?mod=download&amp;act=lists&amp;page=">下一页</a></li>
                <li class="disabled"><a href="index.php?mod=download&amp;act=lists&amp;page=">尾页</a></li>
                -->
            </ul>
            </nav>
            <!--分页导航 end-->
        </div>
    </div>
</section>