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

    <div class="membership row">
        <div class="col-md-12" style="margin-bottom:25px;">
            <!--左侧图片 begin-->
            <div class="col-md-8 hidden-xs hidden-sm" style="background:url(<?php echo base_url('webroot/image/background.jpg'); ?>); background-size:cover; height:400px;"></div>
            <!--左侧图片 end-->

            <div class="col-xs-12 col-md-4">

                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">登录</a></li>
                        <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">注册</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <!--用户登录 begin-->
                            <div class="loginBox row">
                                <h2 class="text-center" style="margin-bottom:20px;">用户登录</h2>
                                <?php
                                    $attributes = array('class' => 'form-horizontal');
                                    echo form_open('membership/login', $attributes);
                                ?>
                                    <div class="form-group">
                                        <div class="input-group col-xs-10 col-sm-8 col-md-8 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
                                            <span class="input-group-addon" id="basic-addon1">账号</span>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="用户名/邮箱" aria-describedby="basic-addon1" value="" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group col-xs-10 col-sm-8 col-md-8 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
                                            <span class="input-group-addon" id="basic-addon2">密码</span>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="密码" aria-describedby="basic-addon2" value="" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group col-xs-10 col-sm-8 col-md-8 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
                                            <button class="btn btn-block btn-info" name="login" type="submit">登录</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                            <!--用户登录 end-->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="register">
                            <!--用户注册 begin-->
                            <div class="registerBox row">
                                <h2 class="text-center" style="margin-bottom:20px;">用户注册</h2>
                                <?php
                                    $attributes = array('class' => 'form-horizontal');
                                    echo form_open('membership/register', $attributes);
                                ?>
                                    <div class="form-group">
                                        <div class="input-group col-xs-10 col-sm-8 col-md-8 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
                                            <span class="input-group-addon" id="basic-addon1">账号</span>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="用户名" aria-describedby="basic-addon1" value="" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group col-xs-10 col-sm-8 col-md-8 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
                                            <span class="input-group-addon" id="basic-addon2">密码</span>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="密码" aria-describedby="basic-addon2" value="" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group col-xs-10 col-sm-8 col-md-8 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
                                            <span class="input-group-addon" id="basic-addon3">昵称</span>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="昵称" aria-describedby="basic-addon3" value="" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group col-xs-10 col-sm-8 col-md-8 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
                                            <span class="input-group-addon" id="basic-addon4">邮箱</span>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="邮箱" aria-describedby="basic-addon4" value="" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group col-xs-10 col-sm-8 col-md-8 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
                                            <button class="btn btn-block btn-info" name="register" type="submit">注册</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                            <!--用户注册 end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
