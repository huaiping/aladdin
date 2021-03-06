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

        <div class="col-md-9">
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
                echo form_open('membership/linkPost', $attributes, $hidden);
            ?>
            <!--<form class="form-horizontal" name="example" method="post" action="#" autocomplete="off">-->
                <div class="form-group">
                    <label for="title" class="col-xs-3 col-sm-1 col-md-1 control-label">网站</label>
                    <div class="col-xs-9 col-sm-11 col-md-11"><input type="text" class="form-control" id="title" name="title" required="required"></div>
                </div>
                <div class="form-group">
                    <label for="url" class="col-xs-3 col-sm-1 col-md-1 control-label">网址</label>
                    <div class="col-xs-9 col-sm-11 col-md-11"><input type="url" class="form-control" id="url" name="url" required="required"></div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-xs-12 col-sm-1 col-md-1 control-label">简介</label>
                    <div class="col-xs-12 col-sm-11 col-md-11"><textarea id="content" name="content" class="form-control col-md-12" rows="12" style="visibility:hidden;"></textarea></div>
                </div>
                <div class="form-group">
                    <div class="text-center" style="margin-top:10px; margin-bottom:10px;">
                        <button type="submit" class="btn btn-success"><i class="fa fa-link"></i> 提交网址</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

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
