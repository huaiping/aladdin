<section class="container">
    <div class="membership row">
        <div class="col-md-3 hidden-xs">
            <!--左侧用户中心 begin-->
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="javascript:void(0);">用户中心</a></li>
                <li class="text-center"><a href="javascript:void(0);">
                <?php
                $php_path = dirname(__FILE__).'/';
                if (file_exists($php_path.'../../webroot/avatar/'.md5($this->session->userdata('username')).'_150.png')) {
                ?>
                    <img src="<?php echo base_url('webroot/avatar/'.md5($this->session->userdata('username')).'_150.png'); ?>" alt="">
                <?php
                } else {
                ?>
                    <img src="<?php echo base_url('avatar/avatar.php?char='.$this->session->userdata('name').'&user='.$this->session->userdata('username')); ?>" alt="">
                <?php
                }
                ?>
                </a></li>
                <li><a href="javascript:void(0);">用户名：<?php echo $this->session->userdata('username'); ?></a></li>
                <li><a href="javascript:void(0);">用户组：<?php echo $this->session->userdata('groups'); ?></a></li>
                <li><a href="javascript:void(0);">注册时间：<?php echo substr($this->session->userdata('pubtime'),0,10); ?></a></li>
                <li><a href="javascript:void(0);">当前IP：<?php echo $this->input->ip_address(); ?></a></li>
            </ul>
            <!--左侧用户中心 end-->
        </div>

        <div class="col-xs-12 col-md-9">
            <!--网站通知 begin-->
            <div>
                <div class="alert alert-warning" role="alert">
                    <strong><span class="glyphicon glyphicon-fire"></span> 文明上网自律公约：提倡自主创新，摒弃盗版剽窃，促进网络应用繁荣；提倡互相尊重，摒弃造谣诽谤，促进网络和谐共处。</strong>
                </div>
            </div>
            <!--网站通知 end-->

            <?php
                $attributes = array('class' => 'form-horizontal', 'autocomplete' => 'off');
                $hidden = array('username' => $this->session->userdata('username'), 'ip' => $this->input->ip_address());
                echo form_open_multipart('membership/albumPost', $attributes, $hidden);
            ?>
            <!--<form class="form-horizontal" name="example" method="post" action="#" autocomplete="off">-->
                <div class="form-group">
                    <label for="title" class="col-xs-3 col-sm-1 col-md-1 control-label">标题</label>
                    <div class="col-xs-9 col-sm-11 col-md-5"><input type="text" class="form-control" id="title" name="title" required="required"></div>
                    <label for="subject" class="col-xs-3 col-sm-1 col-md-1 control-label">类别</label>
                    <div class="col-xs-9 col-sm-11 col-md-2">
                        <select class="selectpicker form-control" id="subject" name="subject">
                        </select>
                    </div>
                    <label for="category" class="col-xs-3 col-sm-1 col-md-1 control-label">相册</label>
                    <div class="col-xs-9 col-sm-11 col-md-2">
                        <select class="selectpicker form-control" id="category" name="category">
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="userfile" class="col-xs-3 col-sm-1 col-md-1 control-label">照片</label>
                    <div class="col-xs-9 col-sm-11 col-md-11"><input type="file" class="file col-xs-12" id="userfile" name="userfile" required="required"></div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-xs-12 col-sm-1 col-md-1 control-label">描述</label>
                    <div class="col-xs-12 col-sm-11 col-md-11"><textarea id="content" name="content" class="form-control col-md-12" rows="15" style="visibility:hidden;"></textarea></div>
                </div>
                <div class="form-group">
                    <div class="text-center" style="margin-top:10px; margin-bottom:10px;">
                        <button type="submit" class="btn btn-success"><i class="fa fa-file-image-o"></i> 提交照片</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
window.onload=function(){
    $('.selectpicker').selectpicker();
};
</script>
<script>
$(function(){
    var editor = KindEditor.create('textarea[name="content"]', {
        resizeType : 1,
        pasteType : 1,
        width : '100%',
        items : ['source', '|', 'preview', '|', 'fullscreen']
    });
});
</script>
<script>
var subjectList = ['校园风光', '领导视察', '第二课堂', '大型活动', '毕业留影', '教师风采'];
var categoryList = new Array();
categoryList['校园风光'] = ['世纪广场'];
categoryList['领导视察'] = ['领导视察'];
categoryList['第二课堂'] = ['文明出行'];
categoryList['大型活动'] = ['体育科技艺术节'];
categoryList['毕业留影'] = ['2015届毕业照','2016届毕业照'];
categoryList['教师风采'] = ['语文组合影','数学组合影'];
var subject = document.getElementById('subject');
var category = document.getElementById('category');
for (var i = 0; i < subjectList.length; i++) {
    subject.add(new Option(subjectList[i], subjectList[i]));
}
subject.onchange = function() {
    category.options.length = 0;
    var index = subject.value;
    var categories = categoryList[index];
    for (var i = 0; i < categories.length; i++) {
        category.add(new Option(categories[i], categories[i]));
        $('#category').selectpicker('refresh');
    }
}
subject.onchange();
</script>
