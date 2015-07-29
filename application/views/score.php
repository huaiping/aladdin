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
        <div class="col-md-9 hidden-xs">
            <div class="col-md-6">
                <!--左侧使用指南 begin-->
                <div class="media" style="margin-top:20px;">
                    <div class="media-left">
                        <i class="fa fa-cube fa-4x media-object"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="margin-bottom:10px;">使用指南</h4>
                        <p>选择查询项目，例如：2015年秋高一期中考试；</p>
                        <p>姓名栏输入姓名，该姓名需与学籍姓名一致；</p>
                        <p>学号栏输入对应的学号、班级号或身份证号。</p>
                    </div>
                </div>
                <!--左侧使用指南 end-->
            </div>

            <div class="col-md-6">
                <!--左侧更新公告 begin-->
                <div class="media" style="margin-top:20px;">
                    <div class="media-left">
                        <i class="fa fa-life-ring fa-4x media-object"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="margin-bottom:10px;">更新公告</h4>
                        <p>7月1日已更新：2015年春高一期末考试成绩！</p>
                        <p>7月1日已更新：2015年春高二期末考试成绩！</p>
                        <p>7月1日已更新：2015年春高一期末考试成绩！</p>
                    </div>
                </div>
                <!--左侧更新公告 end-->
            </div>

            <div class="col-md-6">
                <!--左侧历次成绩 begin-->
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
                <!--左侧历次成绩 end-->
            </div>

            <div class="col-md-6">
                <!--左侧成绩曲线 begin-->
                <div class="media" style="margin-top:40px; margin-bottom:40px;">
                    <div class="media-left">
                        <i class="fa fa-rebel fa-4x media-object"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">成绩曲线</h4>
                        <p>用身份证号代替学号和班级号，可查询高中阶段历次考试的成绩曲线图</p>
                    </div>
                </div>
                <!--左侧成绩曲线 end-->
            </div>


            <div class="col-md-12">
                <!--左侧温馨提示 begin-->
                <div class="media" style="margin-bottom:30px;">
                    <div class="media-left">
                        <i class="fa fa-bell fa-4x media-object"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="margin-bottom:10px;">温馨提示</h4>
                        <p>建议使用360浏览器、谷歌浏览器、猎豹浏览器、QQ浏览器、UC浏览器、搜狗浏览器、百度浏览器、Internet Explorer的最新版，以获得最佳体验。</p>
                    </div>
                </div>
                <!--左侧温馨提示 end-->
            </div>
        </div>

        <div class="col-xs-11 col-md-3">
            <!--成绩查询 begin-->
            <div class="searchBox row">
                <h2 class="text-center" style="margin-bottom:20px;">成绩查询</h2>
                <?php
                    $attributes = array('class' => 'form-horizontal');
                     echo form_open('score/view', $attributes);
                ?>
                    <div class="form-group">
                        <div class="col-xs-11 col-sm-10 col-md-10 col-xs-offset-1 col-md-offset-1">
                            <select class="selectpicker form-control" id="category" name="category">
                                <option value="1">2015年春高一期末考试</option>
                                <option value="1">2015年春高二期末考试</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-11 col-sm-10 col-md-10 col-xs-offset-1 col-md-offset-1">
                            <input type="text" class="form-control" id="name" name="name" placeholder="姓名" value="张三" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-11 col-sm-10 col-md-10 col-xs-offset-1 col-md-offset-1">
                            <input type="text" class="form-control" id="number" name="number" placeholder="身份证号 学号 班级号" value="150101" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-7 col-sm-7 col-md-8 col-xs-offset-5 col-sm-offset-5 col-md-offset-4">
                            <button class="btn btn-info" name="search" type="submit">查询</button>
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
