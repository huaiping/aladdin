<section class="container">
    <div class="membership row">
        <div class="col-md-3 hidden-xs">
            <!--左侧用户中心 begin-->
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">用户中心</a></li>
                <li class="text-center"><a href="#"><img src="<?php echo base_url('avatar/avatar.php?char='.$this->session->userdata('name')); ?>" alt=""></a></li>
                <li><a href="#">用户名：<?php echo $this->session->userdata('username'); ?></a></li>
                <li><a href="#">用户组：<?php echo $this->session->userdata('groups'); ?></a></li>
                <li><a href="#">注册时间：2015-6-10</a></li>
                <li><a href="#">当前IP：<?php echo $this->input->ip_address(); ?></a></li>
            </ul>
            <!--左侧用户中心 end-->
        </div>

        <div class="col-md-9">
            <!--网站通知 begin-->
            <div>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <strong><span class="glyphicon glyphicon-fire"></span> 文明上网公约：自觉遵纪守法，倡导社会公德，促进绿色网络建设；提倡先进文化，摒弃消极颓废，促进网络文明健康。</strong>
                </div>
            </div>
            <!--网站通知 end-->

            <!--右侧发表文章 begin-->
            <?php
                $attributes = array('class' => 'form-horizontal', 'autocomplete' => 'off');
                $hidden = array('username' => $this->session->userdata('username'), 'ip' => $this->input->ip_address());
                echo form_open('membership/articlePost', $attributes, $hidden);
            ?>
            <!--<form class="form-horizontal" name="example" method="post" action="#" autocomplete="off">-->
                <div class="form-group">
                    <label for="title" class="col-xs-3 col-sm-1 col-md-1 control-label">标题</label>
                    <div class="col-xs-9 col-sm-11 col-md-7"><input type="text" class="form-control" id="title" name="title" required="required"></div>
                    <label for="category" class="col-xs-3 col-sm-1 col-md-1 control-label">类别</label>
                    <div class="col-xs-9 col-sm-11 col-md-2">
                        <select class="selectpicker form-control" id="category" name="category">
                            <option value="1">校园新闻</option>
                            <option value="2">教学教研</option>
                            <option value="3">德育视窗</option>
                            <option value="4">教师专栏</option>
                            <option value="5">学生专栏</option>
                            <option value="6">家长专栏</option>
                            <option value="7">通知公告</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-xs-12 col-sm-1 col-md-1 control-label">正文</label>
                    <div class="col-xs-12 col-sm-11 col-md-11"><textarea id="content" name="content" class="form-control col-md-12" rows="20" style="visibility:hidden;"></textarea></div>
                </div>
                <div class="form-group">
                    <div class="text-center" style="margin-top:10px; margin-bottom:10px;">
                        <button type="submit" class="btn btn-success"><i class="fa fa-file-text"></i> 发表文章</button>
                    </div>
                </div>
            </form>
            <!--右侧发表文章 end-->
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
        allowPreviewEmoticons : false,
        items : ['source', '|', 'preview', 'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright', 'clearhtml', 'quickformat', 'selectall', '|', 'fontsize', 'forecolor', 'bold', 'lineheight', 'removeformat', '|', 'image', 'insertfile', 'table', 'link', 'unlink', '|', 'fullscreen'],
        uploadJson : '<?php echo base_url('kindeditor/php/upload_json.php'); ?>'
    });
});
</script>
