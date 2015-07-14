<div style="padding-top:70px;">
    <div class="banner row">
        <!--顶部通栏 begin-->
        <div class="col-md-12">
            <div class="widget-box no-border">
                <a href="#"><img src="<?php echo base_url('webroot/image/banner1.jpg'); ?>" alt="" style="width:100%;"></a>
            </div>
        </div>
        <!--顶部通栏 end-->
    </div>

    <div class="membership row">
        <div class="col-md-12" style="margin-bottom:25px;">
            <!--左侧图片 begin-->
            <div class="col-md-8 hidden-xs hidden-sm" style="background:url(<?php echo base_url('webroot/image/background.jpg'); ?>); background-size:cover; height:400px;"></div>
            <!--左侧图片 end-->

            <div class="col-xs-12 col-md-4" style="padding-top:40px; height:400px; border:2px solid #eee;">
                <!--用户登录 begin-->
                <div class="loginBox row">
                    <h2 class="text-center" style="margin-bottom:20px;">用户登录</h2>
                    <?php
                        $attributes = array('class' => 'form-horizontal');
                        echo form_open('membership/login', $attributes);
                    ?>
                        <div class="form-group">
                            <label for="username" class="col-xs-3 col-sm-3 col-md-3 control-label">用户名</label>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="text" class="form-control" id="username" name="username" placeholder="用户名" value="test01" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-xs-3 col-sm-3 col-md-3 control-label">密码</label>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="password" class="form-control" id="password" name="password" placeholder="密码" value="test01" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8 col-sm-8 col-xs-offset-4 col-sm-offset-4 col-md-8">
                                <button class="btn btn-info" name="login" type="submit">登录</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--用户登录 end-->
                <?php
                    if (!empty(validation_errors())) {
                ?>
                    <div class="alert alert-danger alert-dismissible text-center" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong><?php echo validation_errors(); ?></strong>
                    </div>
                <?php
                    }
                ?>
                <div class="alert alert-warning text-center" role="alert">
                    <strong>还没有账号？赶紧注册吧！</strong>
                </div>
            </div>
        </div>
    </div>
</div>
