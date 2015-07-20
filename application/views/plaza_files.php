<section class="container">
    <div style="padding-top:70px;">
        <div class="membership row">
            <div class="col-md-3 hidden-xs">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">控制面板</a></li>
                    <li><a href="index.php?mod=news">文章</a></li>
                    <li><a href="index.php?mod=comments">评论</a></li>
                    <li><a href="index.php?mod=message">留言</a></li>
                    <li><a href="index.php?mod=album">相册</a></li>
                    <li><a href="index.php?mod=profile">个人资料</a></li>
                    <li><a href="logout.php">退出</a></li>
                </ul>
            </div>

            <div class="col-md-9">
                <?php
                    $attributes = array('class' => 'form-horizontal', 'autocomplete' => 'off');
                    $hidden = array('username' => $this->session->userdata('username'), 'ip' => $this->input->ip_address());
                    echo form_open_multipart('membership/filesPost', $attributes, $hidden);
                ?>
                <!--<form class="form-horizontal" name="example" method="post" action="#" autocomplete="off">-->
                    <div class="form-group">
                        <label for="title" class="col-xs-3 col-sm-1 col-md-1 control-label">标题</label>
                        <div class="col-xs-9 col-sm-11 col-md-5"><input type="text" class="form-control" id="title" name="title" required="required"></div>
                        <label for="subject" class="col-xs-3 col-sm-1 col-md-1 control-label">学科</label>
                        <div class="col-xs-9 col-sm-11 col-md-2">
                            <select class="selectpicker form-control" id="subject" name="subject">
                                <option value="语文">语文</option>
                                <option value="数学">数学</option>
                                <option value="英语">英语</option>
                                <option value="理综">理综</option>
                                <option value="文综">文综</option>
                                <option value="技术">技术</option>
                            </select>
                        </div>
                        <label for="category" class="col-xs-3 col-sm-1 col-md-1 control-label">类别</label>
                        <div class="col-xs-9 col-sm-11 col-md-2">
                            <select class="selectpicker form-control" id="category" name="category">
                                <option value="教案">教案</option>
                                <option value="课件">课件</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="userfile" class="col-xs-3 col-sm-1 col-md-1 control-label">文件</label>
                        <div class="col-xs-9 col-sm-11 col-md-11"><input type="file" class="file" id="userfile" name="userfile" required="required"></div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-md-1 control-label">描述</label>
                        <div class="col-xs-9 col-sm-11 col-md-11"><textarea id="content" name="content" class="form-control col-md-12" rows="10" style="visibility:hidden;"></textarea></div>
                    </div>

                    <div class="form-group">
                        <div class="text-center" style="margin-top:10px; margin-bottom:10px;">
                            <button type="submit" class="btn btn-success">提交资源</button>
                        </div>
                    </div>
                </form>
            </div>
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
