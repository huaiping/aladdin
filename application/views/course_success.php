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

    <?php if (!empty($status)): ?>
    <div class="course row">
        <div class="col-xs-12 col-md-12">
            <div class="jumbotron">
                <h1 class="text-center">数据已成功提交！</h1>
                <p class="text-center" style="margin-top:50px;">
                    <a class="btn btn-success btn-lg" href="../membership/logout" role="button">点击这里退出登录</a>
                </p>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="course row">
        <div id="charts" class="hidden-xs" style="margin-top:20px; margin-bottom:20px;"></div>
    </div>

    <div class="course row">
        <div class="col-xs-12 col-md-6">
            <!--综合数据统计 begin-->
            <div class="panel panel-info">
                <div class="panel-heading">综合数据统计</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>序号</th><th>科目</th><th>人数</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for ($i=0; $i<count($statistics); $i++): ?>
                        <tr>
                            <th><?php echo $i+1; ?></th>
                            <td><?php echo $statistics[$i]['courses']; ?></td>
                            <td><?php echo $statistics[$i]['numbers']; ?></td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <!--综合数据统计 end-->
        </div>

        <div class="col-xs-12 col-md-6">
            <!--单科数据统计 begin-->
            <div class="panel panel-info">
                <div class="panel-heading">单科数据统计</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>序号</th><th>科目</th><th>人数</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th><td>物理</td><td><?php echo $subjects['wl']; ?></td>
                        </tr>
                        <tr>
                            <th>2</th><td>化学</td><td><?php echo $subjects['hx']; ?></td>
                        </tr>
                        <tr>
                            <th>3</th><td>生物</td><td><?php echo $subjects['sw']; ?></td>
                        </tr>
                        <tr>
                            <th>4</th><td>政治</td><td><?php echo $subjects['zz']; ?></td>
                        </tr>
                        <tr>
                            <th>5</th><td>历史</td><td><?php echo $subjects['ls']; ?></td>
                        </tr>
                        <tr>
                            <th>6</th><td>地理</td><td><?php echo $subjects['dl']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--单科数据统计 end-->
        </div>
    </div>
</section>

<script>
var chart = Highcharts.chart('charts', {
    chart: {
        type: 'column'
    },
    credits: {
            enabled: false
    },
    title: {
        text: '选课报名班级数据分布图'
    },
    xAxis: {
        categories: ['1班', '2班', '3班', '4班', '5班', '6班', '7班', '8班', '9班', '10班', '11班', '12班', '13班', '14班', '15班', '16班', '17班', '18班', '19班']
    },
    yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: '人数'
        }
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [
        <?php
            $numbers = $courses['numbers'];//选课组合数
            $classes = 19;                 //班级数
            for ($n=0; $n<$numbers-1; $n++) {
                echo "{\n";
                echo "name: '".$charts[$n]['courses']."',";
                echo "data: [";
                for($i=1; $i<$classes; $i++){
                    echo $charts[$n]['c'.$i].',';
                }
                echo $charts[$n]['c'.$classes];
                echo "]},";
            }
        ?>
        {
            name: '<?php echo $charts[$numbers-1]['courses']; ?>',
            data: [
            <?php
                for($i=1; $i<$classes; $i++):
                    echo $charts[$numbers-1]['c'.$i].',';
                endfor;
                echo $charts[$numbers-1]['c'.$classes];
            ?>
            ]
        }
    ]
});
</script>
