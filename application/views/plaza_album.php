<section class="container">
    <div class="membership row">
        <div class="col-md-3 hidden-xs">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">用户中心</a></li>
                <li class="text-center"><a href="#"><img src="<?php echo base_url('avatar/avatar.php?char='.$this->session->userdata('name')); ?>" alt=""></a></li>
                <li><a href="#">用户名：<?php echo $this->session->userdata('username'); ?></a></li>
                <li><a href="#">用户组：<?php echo $this->session->userdata('groups'); ?></a></li>
                <li><a href="#">注册时间：2015-6-10</a></li>
                <li><a href="#">当前IP：<?php echo $this->input->ip_address(); ?></a></li>
            </ul>
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
                            <option value="校园风光">校园风光</option>
                            <option value="领导视察">领导视察</option>
                            <option value="第二课堂">第二课堂</option>
                            <option value="大型活动">大型活动</option>
                            <option value="毕业留影">毕业留影</option>
                            <option value="教师风采">教师风采</option>
                        </select>
                    </div>
                    <label for="category" class="col-xs-3 col-sm-1 col-md-1 control-label">相册</label>
                    <div class="col-xs-9 col-sm-11 col-md-2">
                        <select class="selectpicker form-control" id="category" name="category">
                            <option value="世纪广场">世纪广场</option>
                            <option value="文明出行">文明出行</option>
                            <option value="体育科技艺术节">体育科技艺术节</option>
                            <option value="2015届毕业照">2015届毕业照</option>
                            <option value="语文组合影">语文组合影</option>
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
$(function() {
    var editor = KindEditor.create('textarea[name="content"]', {
        resizeType : 1,
        pasteType : 1,
        width : '100%',
        items : ['preview', '|', 'fullscreen']
    });
});
</script>