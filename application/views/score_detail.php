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

    <div class="score row">
        <div class="col-xs-12 col-md-9">
            <!--单次成绩 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4><?php echo $item['bz']; ?><span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">语文：<?php echo round($item['yw'],1); ?><br /><br />名次：<?php echo $item['ywmc']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">数学：<?php echo round($item['sx'],1); ?><br /><br />名次：<?php echo $item['sxmc']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-info circle">英语：<?php echo round($item['yy'],1); ?><br /><br />名次：<?php echo $item['yymc']; ?></button>
                </div>
                <?php if ($item['wlmc'] != 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-danger circle">物理：<?php echo round($item['wl'],1); ?><br /><br />名次：<?php echo $item['wlmc']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($item['hxmc'] != 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-success circle">化学：<?php echo round($item['hx'],1); ?><br /><br />名次：<?php echo $item['hxmc']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($item['swmc'] != 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">生物：<?php echo round($item['sw'],1); ?><br /><br />名次：<?php echo $item['swmc']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($item['lzmc'] != 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">理综：<?php echo round($item['lz'],1); ?><br /><br />名次：<?php echo $item['lzmc']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($item['zzmc'] != 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-info circle">政治：<?php echo round($item['zz'],1); ?><br /><br />名次：<?php echo $item['zzmc']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($item['lsmc'] != 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-danger circle">历史：<?php echo round($item['ls'],1); ?><br /><br />名次：<?php echo $item['lsmc']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($item['dlmc'] != 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-success circle">地理：<?php echo round($item['dl'],1); ?><br /><br />名次：<?php echo $item['dlmc']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($item['wzmc'] != 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">文综：<?php echo round($item['wz'],1); ?><br /><br />名次：<?php echo $item['wzmc']; ?></button>
                </div>
                <?php endif; ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">总分：<?php echo round($item['zf'],1); ?><br /><br />名次：<?php echo $item['jm']; ?></button>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <strong><span class="glyphicon glyphicon-thumbs-up"></span> 亲，本次考试中，你打败了<?php echo $total['jm']-$item['jm']; ?>位同学，继续加油哦！</strong>
                    </div>
                </div>
            </div>
            <!--单次成绩 end-->
        </div>

        <div class="col-md-3 hidden-xs hidden-sm">
            <!--二维码 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger">
                    <h4>二维码<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <div id="qrcode" class="text-center"></div>
                <div class="text-center">手机扫一扫，成绩早知道</div>
            </div>
            <!--二维码 end-->
        </div>
    </div>

    <?php if (strlen($number) == 18): ?>
    <div class="score row">
        <!--成绩曲线 begin-->
        <div id="charts" class="hidden-xs" style="margin-top:20px;"></div>
        <!--成绩曲线 end-->
    </div>

    <div class="score row">
        <div class="col-md-12 hidden-xs">
            <!--历次成绩 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>高中阶段历次考试成绩<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <div class="col-md-12 hidden-xs">
                <?php foreach ($scores as $score): ?>
                <table class="table table-bordered text-center">
                    <tr>
                        <td colspan="20"><?php echo $score['bz']; ?></td>
                    </tr>
                    <tr>
                        <td>语文</td><td>名次</td><td>数学</td><td>名次</td><td>英语</td><td>名次</td>
                        <td>物理</td><td>名次</td><td>化学</td><td>名次</td><td>生物</td><td>名次</td>
                        <td>政治</td><td>名次</td><td>历史</td><td>名次</td><td>地理</td><td>名次</td>
                        <td>总分</td><td>名次</td>
                    </tr>
                    <tr>
                        <td><?php echo round($score['yw'],1); ?></td><td><?php echo $score['ywmc']; ?></td>
                        <td><?php echo round($score['sx'],1); ?></td><td><?php echo $score['sxmc']; ?></td>
                        <td><?php echo round($score['yy'],1); ?></td><td><?php echo $score['yymc']; ?></td>
                        <td><?php echo round($score['wl'],1); ?></td><td><?php echo $score['wlmc']; ?></td>
                        <td><?php echo round($score['hx'],1); ?></td><td><?php echo $score['hxmc']; ?></td>
                        <td><?php echo round($score['sw'],1); ?></td><td><?php echo $score['swmc']; ?></td>
                        <td><?php echo round($score['zz'],1); ?></td><td><?php echo $score['zzmc']; ?></td>
                        <td><?php echo round($score['ls'],1); ?></td><td><?php echo $score['lsmc']; ?></td>
                        <td><?php echo round($score['dl'],1); ?></td><td><?php echo $score['dlmc']; ?></td>
                        <td><?php echo round($score['zf'],1); ?></td><td><?php echo $score['jm']; ?></td>
                    </tr>
                </table>
                <?php endforeach; ?>
                </div>
            </div>
            <!--历次成绩 end-->
        </div>
    </div>
    <?php endif; ?>
</section>

<script>
    jQuery('#qrcode').qrcode({width:200, height:200, text:"<?php echo site_url('score'); ?>"});
</script>

<?php if (strlen($number) == 18): ?>
<script>
$(function(){ 
    $('#charts').highcharts({
        chart: {
            type: 'line'
        },
        credits: {
            enabled: false
        },
        title: {
            text: '高中阶段个人成绩曲线图'
        },
        xAxis: {
            labels: {
                rotation: -45
            },
            categories: [
                <?php
                    for($i=0; $i<count($scores)-1; $i++):
                        echo "'".$scores[$i]['bz']."',";
                    endfor;
                    echo "'".$scores[$i]['bz']."'";
                ?>
            ]
        },
        yAxis: {
            reversed: true,
            title: {
                text: '年级占位情况'
            }
        },
        series: [{
            name: '年级名次',
            data: [
                <?php
                    for($i=0; $i<count($scores)-1; $i++):
                        echo $scores[$i]['jm'].',';
                    endfor;
                    echo $scores[$i]['jm'];
                ?>
            ]
        }]
    });
});
</script>
<?php endif; ?>
