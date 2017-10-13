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

    <div class="repairs row">
        <div class="col-md-3" style="margin-bottom:45px;">
            <!--左侧通知区 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger">
                    <h4>报修通道<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <p class="text-center"><a class="btn btn-success btn-lg" href="<?php echo site_url('repairs/report'); ?>" role="button"><i class="fa fa-wrench"></i> 我要报修</a></p>
            </div>

            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger">
                    <h4>网站通知<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <!--通知 begin-->
                <ul class="widget-links list-unstyled" style="margin-left:15px; margin-right:15px;">
                    <p>各处室、年级、各班：</p>
                    <p style="text-indent:2em; line-height:30px;">正值学校设施、设备维修高峰期，为了方便各处室、年级组、各班维修申报，也为了总务部门能快捷处理维修内容，适时监控跟踪维修情况，及时消除隐患，保障教育教学正常运转，特开通网上报修系统，请各处室、年级组、各班自即日起实行网上报修。</p>
                    <p style="text-align:right;">总务处</p>
                </ul>
                <!--通知 end-->
            </div>
            <!--左侧通知区 end-->
        </div>

        <div class="col-xs-12 col-md-9">
            <!--右侧工单列表 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>报修列表<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>

                <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th class="col-xs-2 col-sm-2 col-md-1 widget-links_item text-center">工单号</th>
                        <th class="col-xs-8 col-sm-3 col-md-2 widget-links_item text-center">报修物品</th>
                        <th class="col-sm-3 col-md-2 widget-links_item text-center hidden-xs">报修部门</th>
                        <th class="col-md-1 widget-links_item text-center hidden-xs hidden-sm">报修人员</th>
                        <th class="col-md-2 widget-links_item text-center hidden-xs hidden-sm hidden-md">联系电话</th>
                        <th class="col-sm-2 col-md-2 widget-links_item text-center hidden-xs">报修时间</th>
                        <th class="col-sm-2 col-md-1 widget-links_item text-center hidden-xs">维修状态</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0; $i<count($repairs_list); $i++): ?>
                    <tr class="widget-links">
                        <td class="col-xs-2 col-sm-2 col-md-1 widget-links_item"><a href="#"><?php echo $repairs_list[$i]['id']; ?></a></td>
                        <td class="col-xs-8 col-sm-3 col-md-2 widget-links_item"><?php echo $repairs_list[$i]['item']; ?></td>
                        <td class="col-sm-3 col-md-2 widget-links_item hidden-xs"><?php echo $repairs_list[$i]['department']; ?></td>
                        <td class="col-md-1 widget-links_item hidden-xs hidden-sm"><?php echo $repairs_list[$i]['customer']; ?></td>
                        <td class="col-md-2 widget-links_item hidden-xs hidden-sm hidden-md"><?php echo $repairs_list[$i]['telephone']; ?></td>
                        <td class="col-sm-2 col-md-2 widget-links_item hidden-xs"><?php echo substr($repairs_list[$i]['pubtime'],0,10); ?></td>
                        <?php if ($repairs_list[$i]['status'] == 'prepairing'): ?>
                        <td class="col-sm-2 col-md-1 widget-links_item text-info hidden-xs">维修中</td>
                        <?php elseif ($repairs_list[$i]['status'] == 'finished'): ?>
                        <td class="col-sm-2 col-md-1 widget-links_item text-success hidden-xs">已维修</td>
                        <?php else: ?>
                        <td class="col-sm-2 col-md-1 widget-links_item text-danger hidden-xs">未维修</td>
                        <?php endif; ?>
                    </tr>
                    <?php endfor; ?>
                </tbody>
                </table>

            </div>
            <!--右侧工单列表 end-->
        </div>
    </div>
</section>
