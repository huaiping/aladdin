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
        <div class="col-xs-12 col-md-8">
            <!--网站通知 begin-->
            <div class="alert alert-warning" role="alert">
                <strong><span class="glyphicon glyphicon-fire"></span> 温馨提示：即将更新2018年春季学期各年级期中考试成绩，敬请关注！</strong>
            </div>
            <!--网站通知 end-->

            <div class="col-md-6 hidden-xs hidden-sm">
                <!--使用指南 begin-->
                <div class="media" style="margin-top:20px;">
                    <div class="media-left">
                        <i class="fa fa-cube fa-4x media-object"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="margin-bottom:10px;">使用指南</h4>
                        <p style="min-height:80px;">选择查询项目，例如：2016年秋高一期中考试；姓名栏输入姓名，需与学籍姓名一致；学号栏输入对应的学号、班级号或身份证号。</p>
                    </div>
                </div>
                <!--使用指南 end-->
            </div>

            <div class="col-md-6 hidden-xs hidden-sm">
                <!--温馨提示 begin-->
                <div class="media" style="margin-top:20px;">
                    <div class="media-left">
                        <i class="fa fa-bell fa-4x media-object"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="margin-bottom:10px;">温馨提示</h4>
                        <p style="min-height:80px;">建议使用360浏览器、谷歌浏览器、UC浏览器、Internet Explorer的最新版，以获得最佳体验。</p>
                    </div>
                </div>
                <!--温馨提示 end-->
            </div>

            <div class="col-md-6 hidden-xs hidden-sm">
                <!--历次成绩 begin-->
                <div class="media" style="margin-top:40px; margin-bottom:40px;">
                    <div class="media-left">
                        <i class="fa fa-empire fa-4x media-object"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">历次成绩</h4>
                        <p>用身份证号代替学号和班级号，可查询高中阶段历次考试分数和名次</p>
                        <p>高校自主招生和地方专项计划需要每学期期末考试成绩和年级排名</p>
                    </div>
                </div>
                <!--历次成绩 end-->
            </div>

            <div class="col-md-6 hidden-xs hidden-sm">
                <!--成绩曲线 begin-->
                <div class="media" style="margin-top:40px; margin-bottom:40px;">
                    <div class="media-left">
                        <i class="fa fa-rebel fa-4x media-object"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">成绩曲线</h4>
                        <p>用身份证号代替学号和班级号，可查询高中阶段历次考试的成绩曲线图</p>
                    </div>
                </div>
                <!--成绩曲线 end-->
            </div>
        </div>

        <div class="col-xs-11 col-md-4">
            <!--成绩查询 begin-->
            <div class="searchBox row">
                <h2 class="col-md-9 col-md-offset-1 text-center" style="margin-bottom:20px;">成绩查询</h2>
                <?php
                    $attributes = array('class' => 'form-horizontal');
                    echo form_open('score/view', $attributes);
                ?>
                    <div class="form-group">
                        <div class="col-xs-11 col-sm-10 col-md-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
                            <select class="selectpicker form-control" id="category" name="category">
                                <option value="15">2017年秋高一期中考试</option>
                                <option value="20">2017年秋高一12月月考</option>
                                <option value="25|26">2017年秋高一期末调考</option>
                                <option value="33|34">2018年春高一3月月考</option>
                                <option value="11|12">2017年秋高二10月联考</option>
                                <option value="16|17">2017年秋高二期中联考</option>
                                <option value="21|22">2017年秋高二12月月考</option>
                                <option value="27|28">2017年秋高二期末考试</option>
                                <option value="35|36" selected="selected">2018年春高二3月月考</option>
                                <option value="13|14">2017年秋高三10月百校联考</option>
                                <option value="18|19">2017年秋高三12月联考</option>
                                <option value="23|24">2017年秋高三黄冈期末调考</option>
                                <option value="29|30">2018年春高三武汉2月联考</option>
                                <option value="31|32">2018年春高三黄冈3月调考</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-11 col-sm-10 col-md-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
                            <input type="text" class="form-control" id="name" name="name" maxlength="4" placeholder="姓名" value="" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-11 col-sm-10 col-md-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
                            <input type="text" class="form-control" id="number" name="number" maxlength="18" placeholder="学号/班级号/身份证号" value="" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-11 col-sm-10 col-md-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
                            <button class="btn btn-block btn-success" name="search" type="submit">查询</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--成绩查询 end-->
        </div>
    </div>
</section>

<script>
window.onload=function(){
    $('.selectpicker').selectpicker();
};
</script>
