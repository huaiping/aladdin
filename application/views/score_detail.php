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
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-primary circle">语文：<?php echo round($item['yw'],1); ?><br /><br />名次：<?php echo $item['ywmc']; ?></button>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-warning circle">数学：<?php echo round($item['sx'],1); ?><br /><br />名次：<?php echo $item['sxmc']; ?></button>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-info circle">英语：<?php echo round($item['yy'],1); ?><br /><br />名次：<?php echo $item['yymc']; ?></button>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-danger circle">物理：<?php echo round($item['wl'],1); ?><br /><br />名次：<?php echo $item['wlmc']; ?></button>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-success circle">化学：<?php echo round($item['hx'],1); ?><br /><br />名次：<?php echo $item['hxmc']; ?></button>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-primary circle">生物：<?php echo round($item['sw'],1); ?><br /><br />名次：<?php echo $item['swmc']; ?></button>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-warning circle">理综：<?php echo round($item['lz'],1); ?><br /><br />名次：<?php echo $item['lzmc']; ?></button>
            </div>
			<?php
			if ($item['zzmc'] != 0) {
			?>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-info circle">政治：<?php echo round($item['zz'],1); ?><br /><br />名次：<?php echo $item['zzmc']; ?></button>
            </div>
			<?php
			}
			if ($item['lsmc'] != 0) {
			?>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-danger circle">历史：<?php echo round($item['ls'],1); ?><br /><br />名次：<?php echo $item['lsmc']; ?></button>
            </div>
			<?php
			}
			if ($item['dlmc'] != 0) {
			?>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-success circle">地理：<?php echo round($item['dl'],1); ?><br /><br />名次：<?php echo $item['dlmc']; ?></button>
            </div>
			<?php
			}
			if ($item['wzmc'] != 0) {
			?>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-primary circle">文综：<?php echo round($item['wz'],1); ?><br /><br />名次：<?php echo $item['wzmc']; ?></button>
            </div>
			<?php
			}
			?>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <button type="button" class="btn btn-warning circle">总分：<?php echo round($item['zf'],1); ?><br /><br />名次：<?php echo $item['jm']; ?></button>
            </div>
        </div>


        <div class="col-md-3 hidden-xs">
            <!--成绩查询 begin-->
            <div class="searchBox row">
                <?php echo $item['xm']; ?>
            </div>
            <!--成绩查询 end-->
        </div>
    </div>


    <div class="score row">
        <div id="charts" class="col-xs-12 col-md-12">
            <!--成绩曲线-->
        </div>

        <div class="col-md-12 hidden-xs">
            <!--历次成绩 begin-->
            <table class="table table-bordered text-center">
                <tr>
                    <td>语文</td><td>名次</td><td>数学</td><td>名次</td><td>英语</td><td>名次</td>
                    <td>物理</td><td>名次</td><td>化学</td><td>名次</td><td>生物</td><td>名次</td>
                    <td>政治</td><td>名次</td><td>历史</td><td>名次</td><td>地理</td><td>名次</td>
                    <td>总分</td><td>名次</td>
                </tr>
                <tr>
                    <td><?php echo round($scores['yw'],1); ?></td><td><?php echo $scores['ywmc']; ?></td>
                    <td><?php echo round($scores['sx'],1); ?></td><td><?php echo $scores['sxmc']; ?></td>
                    <td><?php echo round($scores['yy'],1); ?></td><td><?php echo $scores['yymc']; ?></td>
                    <td><?php echo round($scores['wl'],1); ?></td><td><?php echo $scores['wlmc']; ?></td>
                    <td><?php echo round($scores['hx'],1); ?></td><td><?php echo $scores['hxmc']; ?></td>
                    <td><?php echo round($scores['sw'],1); ?></td><td><?php echo $scores['swmc']; ?></td>
                    <td><?php echo round($scores['zz'],1); ?></td><td><?php echo $scores['zzmc']; ?></td>
                    <td><?php echo round($scores['ls'],1); ?></td><td><?php echo $scores['lsmc']; ?></td>
                    <td><?php echo round($scores['dl'],1); ?></td><td><?php echo $scores['dlmc']; ?></td>
                    <td><?php echo round($scores['zf'],1); ?></td><td><?php echo $scores['jm']; ?></td>
                </tr>
            </table>
            <!--历次成绩 end-->
        </div>
    </div>
</section>

<script>
$(function () { 
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
            categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30']
        },
        yAxis: {
            reversed: true,
            title: {
                text: '年级占位情况'
            }
        },
        series: [{
            name: '年级名次',
            data: [5, 7, 63, 11, 33, 27, 39, 28, 85, 73, 990, 65, 128, 639, 926, 10, 250, 39, 28, 85, 73, 990, 65, 128, 639, 926, 10, 250]
        }]
    });
});
</script>