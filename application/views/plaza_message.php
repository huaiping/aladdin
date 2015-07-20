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
                    //echo $this->session->userdata('username');
                    //echo $this->input->user_agent();
                    //echo $this->input->ip_address();
                ?>

                <?php
                    $attributes = array('class' => 'form-horizontal', 'autocomplete' => 'off');
                    $hidden = array('username' => $this->session->userdata('username'), 'ip' => $this->input->ip_address());
                    echo form_open('membership/messagePost', $attributes, $hidden);
                ?>
                <!--<form class="form-horizontal" name="example" method="post" action="#" autocomplete="off">-->
                    <div class="form-group">
                        <label for="title" class="col-xs-3 col-sm-1 col-md-1 control-label">标题</label>
                        <div class="col-xs-9 col-sm-11 col-md-11"><input type="text" class="form-control" id="title" name="title" required="required"></div>
                    </div>
                    <textarea id="content" name="content" class="form-control col-md-12" rows="15" style="visibility:hidden;"></textarea>
                    <div class="form-group">
                        <div class="text-center" style="margin-top:10px; margin-bottom:10px;">
                            <button type="submit" class="btn btn-success">发表留言</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

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
