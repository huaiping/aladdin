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
            <!--右侧资源下载列表 begin-->
            <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th class="col-xs-12 col-sm-7 col-md-6 widget-links_item text-center">资源名称</th>
                        <th class="col-sm-2 col-md-2 widget-links_item text-center hidden-xs">更新日期</th>
                        <th class="col-sm-2 col-md-2 widget-links_item text-center hidden-xs">资源大小</th>
                        <th class="col-md-1 widget-links_item text-center hidden-xs hidden-sm">授权形式</th>
                        <th class="col-sm-1 col-md-1 widget-links_item text-center hidden-xs">资源等级</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0; $i<count($down_list); $i++): ?>
                    <tr class="widget-links">
                        <td class="col-xs-12 col-sm-7 col-md-6 widget-links_item ellipsis"><a href="<?php echo site_url('download/view/'.$down_list[$i]['id']); ?>"><?php echo $down_list[$i]['title']; ?></a></td>
                        <td class="col-sm-2 col-md-2 widget-links_item hidden-xs"><?php echo substr($down_list[$i]['pubtime'],0,10); ?></td>
                        <td class="col-sm-2 col-md-2 widget-links_item hidden-xs"><?php echo $down_list[$i]['sizes']; ?>KB</td>
                        <td class="col-md-1 widget-links_item hidden-xs hidden-sm"><?php echo $down_list[$i]['license']; ?></td>
                        <td class="col-sm-1 col-md-1 widget-links_item hidden-xs"><?php echo $down_list[$i]['stars']; ?></td>
                    </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
            <!--右侧资源下载列表 end-->

            <!--分页导航 begin-->
            <nav>
                <ul class="pager">
                    <?php echo $down_page; ?>
                </ul>
            </nav>
            <!--分页导航 end-->
        </div>
    </div>
</section>
