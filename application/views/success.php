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
        <div class="col-xs-12 col-md-12">
            <div class="jumbotron">
                <h1 class="text-center">数据已成功提交！</h1>
                <p class="text-center" style="margin-top:50px;"><a class="btn btn-primary btn-lg" href="../membership/logout" role="button">点击这里退出登录</a></p>
            </div>
        </div>
    </div>

    <div class="repairs row">
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">选课报名数据统计</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>序号</th><th>科目</th><th>人数</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for ($i=0; $i<count($statistics); $i++): ?>
                        <tr>
                            <th><?php echo $i+1; ?></th><td><?php echo $statistics[$i]['courses']; ?></td><td><?php echo $statistics[$i]['numbers']; ?></td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">单科报名数据统计</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>序号</th><th>科目</th><th>人数</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th><td>物理</td><td></td>
                        </tr>
                        <tr>
                            <th>2</th><td>化学</td><td></td>
                        </tr>
                        <tr>
                            <th>3</th><td>生物</td><td></td>
                        </tr>
                        <tr>
                            <th>4</th><td>政治</td><td></td>
                        </tr>
                        <tr>
                            <th>5</th><td>历史</td><td></td>
                        </tr>
                        <tr>
                            <th>6</th><td>地理</td><td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
