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
            <!--工资详情 begin-->
            <div class="widget-box no-border">
            <div class="widget-box_title bs-callout bs-callout-info"><h4><?php echo substr($salary['timestamp'], 0, 4).'年'.substr($salary['timestamp'], 4, 2).'月'; ?>工资详情<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">岗位工资<br><br><?php echo $salary['gwgz']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">特岗津贴<br><br><?php echo $salary['tgjt']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-info circle">薪级工资<br><br><?php echo $salary['xjgz']; ?></button>
                </div>
                <?php if ($salary['shbt'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-danger circle">生活补贴<br><br><?php echo $salary['shbt']; ?></button>
                </div>
                <?php endif; ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-success circle">百分之十工资<br><br><?php echo $salary['bfzsgz']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">结余津贴<br><br><?php echo $salary['jyjt']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">绩效工资<br>百分之70部分<br><?php echo $salary['jxgz70']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-info circle">绩效工资<br>百分之30部分<br><?php echo $salary['jxgz30']; ?></button>
                </div>
                <?php if ($salary['wsf'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-danger circle">卫生费<br><br><?php echo $salary['wsf']; ?></button>
                </div>
                <?php endif; ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-success circle">工资结算<br><br><?php echo $salary['gzjs']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">应发合计<br><br><?php echo $salary['yfhj']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">所得税<br><br><?php echo $salary['sds']; ?></button>
                </div>
                <?php if ($salary['fz'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-info circle">房租<br><br><?php echo $salary['fz']; ?></button>
                </div>
                <?php endif; ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-danger circle">会费<br><br><?php echo $salary['hf']; ?></button>
                </div>
                <?php if ($salary['sjgz'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-success circle">上交工资<br><br><?php echo $salary['sjgz']; ?></button>
                </div>
                <?php endif; ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">住房公积金<br><br><?php echo $salary['zfgjj']; ?></button>
                </div>
                <?php if ($salary['df'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">电费<br><br><?php echo $salary['df']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['sf'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-info circle">水费<br><br><?php echo $salary['sf']; ?></button>
                </div>
                <?php endif; ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-danger circle">养老保险<br><br><?php echo $salary['ylbx']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-success circle">医保<br><br><?php echo $salary['yb']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">大病医保<br><br><?php echo $salary['dbyb']; ?></button>
                </div>
                <?php if ($salary['kx'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">扣息<br><br><?php echo $salary['kx']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['kk'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-info circle">扣款<br><br><?php echo $salary['kk']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['kjk'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-danger circle">扣借款<br><br><?php echo $salary['kjk']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['kdf'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-success circle">扣党费<br><br><?php echo $salary['kdf']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['hyxf'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">华英学费<br><br><?php echo $salary['hyxf']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['kkhj'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">扣款合计<br><br><?php echo $salary['kkhj']; ?></button>
                </div>
                <?php endif; ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-info circle">直达工资<br><br><?php echo $salary['zdgz']; ?></button>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-danger circle">弹性扣款后<br>实发数<br><?php echo $salary['txkkhsfs']; ?></button>
                </div>
                <?php if ($salary['bfzz'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-success circle">补发增资<br><br><?php echo $salary['bfzz']; ?></button>
                </div>
                <?php endif; ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">上月奖励<br>绩效工资<br><?php echo $salary['syjljxgz']; ?></button>
                </div>
                <?php if ($salary['sypggz'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">上月评估工资<br><br><?php echo $salary['sypggz']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['qmpg'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-info circle">期末评估<br><br><?php echo $salary['qmpg']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['gkjx'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-danger circle">高考绩效<br><br><?php echo $salary['gkjx']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['bkf'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-success circle">补课费<br><br><?php echo $salary['bkf']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['gsdb'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">高三定补<br><br><?php echo $salary['gsdb']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['ykbz'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">月考补助<br><br><?php echo $salary['ykbz']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['jsj'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-info circle">竞赛奖<br><br><?php echo $salary['jsj']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['cjxqwmdwj'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-danger circle">春季学期<br>文明单位奖<br><?php echo $salary['cjxqwmdwj']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['qjxqwmdwj'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-success circle">秋季学期<br>文明单位奖<br><?php echo $salary['qjxqwmdwj']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['cjxqzzxjj'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">春季学期<br>综治先进奖<br><?php echo $salary['cjxqzzxjj']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['qjxqzzxjj'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-warning circle">秋季学期<br>综治先进奖<br><?php echo $salary['qjxqzzxjj']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['jsbz'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-info circle">教师补助<br><br><?php echo $salary['jsbz']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['gbjt'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-danger circle">干部津贴<br><br><?php echo $salary['gbjt']; ?></button>
                </div>
                <?php endif; ?>
                <?php if ($salary['jkgbjt'] > 0): ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-success circle">兼课干部津贴<br><br><?php echo $salary['jkgbjt']; ?></button>
                </div>
                <?php endif; ?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary circle">实发数合计<br><br><?php echo $salary['sfshj']; ?></button>
                </div>
            </div>
            <!--工资详情 end-->
        </div>

        <div class="col-md-3 hidden-xs hidden-sm">
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger"><h4>近12个月工资<span class="pull-right glyphicon glyphicon-menu-hamburger" style="padding-right:10px;"></span></h4></div>
                <div class="text-center">
                <?php foreach ($lists as $item): ?>
                <?php echo $item['timestamp']; ?>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
