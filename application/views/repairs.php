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

    <div class="repairs row">
        <div class="col-md-3" style="margin-bottom:45px;">
            <!--左侧通知区 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger">
                    <h4>网站通知<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>
                <!--通知 begin-->
                <ul class="widget-links list-unstyled" style="margin-left:15px; margin-right:15px;">
                    <p>各处室、年级、各班：</p>
                    <p style="text-indent:2em; line-height:30px;">正值学校设施、设备维修高峰期，为了方便各处室、年级组、各班维修申报，也为了总务部门能快捷处理维修内容，适时监控跟踪维修情况，及时消除隐患，保障教育教学正常运转，特开通网上报修系统，请各处室、年级组、各班自即日起实行网上报修。</p>
                    <p style="text-align:right;">总务处</p>
                </ul>
                <!--通知 end-->
            </div>
            <!--左侧通知区 end-->
        </div>

        <div class="col-xs-12 col-md-9">
            <!--右侧报修区 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info">
                    <h4>物品报修<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4>
                </div>

                <?php
                    $attributes = array('class' => 'form-horizontal', 'autocomplete' => 'off');
                    $hidden = array('username' => $this->session->userdata('username'), 'ip' => $this->input->ip_address());
                    echo form_open('repairs/post', $attributes, $hidden);
                ?>
                    <div class="form-group">
                        <label for="category" class="col-xs-3 col-sm-3 col-md-3 control-label">报修种类</label>
                        <div class="col-xs-9 col-sm-9 col-md-4">
                            <select class="selectpicker form-control" id="category" name="category">
                                <option value="0">选择种类</option>
                                <option value="water">水</option>
                                <option value="electricity">电</option>
                                <option value="metal">五金</option>
                                <option value="wood">木工</option>
                                <option value="building">土建</option>
                                <option value="tv">教室背投类</option>
                                <option value="others">其它</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="department" class="col-xs-3 col-sm-3 col-md-3 control-label">所在部门</label>
                        <div class="col-xs-9 col-sm-9 col-md-4">
                            <select class="selectpicker form-control" id="department" name="department">
                                <option value="0">选择部门</option>
                                <option value="主教学楼五楼东一">主教学楼五楼东一</option>
                                <option value="主教学楼五楼东二">主教学楼五楼东二</option>
                                <option value="主教学楼五楼东三">主教学楼五楼东三</option>
                                <option value="主教学楼五楼东四">主教学楼五楼东四</option>
                                <option value="主教学楼五楼东五">主教学楼五楼东五</option>
                                <option value="主教学楼五楼东六">主教学楼五楼东六</option>
                                <option value="主教学楼五楼东七">主教学楼五楼东七</option>
                                <option value="主教学楼五楼东八">主教学楼五楼东八</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="item" class="col-xs-3 col-sm-3 col-md-3 control-label">物品名称</label>
                        <div class="col-xs-9 col-sm-9 col-md-7"><input type="text" class="form-control" id="item" name="item" required="required"></div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-xs-3 col-sm-3 col-md-3 control-label">维修地址</label>
                        <div class="col-xs-9 col-sm-9 col-md-7"><input type="text" class="form-control" id="address" name="address" required="required"></div>
                    </div>
                    <div class="form-group">
                        <label for="details" class="col-xs-3 col-sm-3 col-md-3 control-label">故障描述</label>
                        <div class="col-xs-9 col-sm-9 col-md-7"><textarea id="details" name="details" class="form-control col-md-12" rows="5" style="resize:none;" required="required"></textarea></div>
                    </div>
                    <div class="form-group">
                        <label for="customer" class="col-xs-3 col-sm-3 col-md-3 control-label">报修人员</label>
                        <div class="col-xs-9 col-sm-9 col-md-7"><input type="text" class="form-control" id="customer" name="customer" required="required"></div>
                    </div>
                    <div class="form-group">
                        <label for="telephone" class="col-xs-3 col-sm-3 col-md-3 control-label">联系电话</label>
                        <div class="col-xs-9 col-sm-9 col-md-7"><input type="text" class="form-control" id="telephone" name="telephone" maxlength="11" required="required"></div>
                    </div>
                    <div class="form-group">
                        <div class="text-center" style="margin-top:10px; margin-bottom:10px;">
                            <button type="submit" class="btn btn-success"><i class="fa fa-wrench"></i> 报修</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--右侧报修区 end-->
        </div>
    </div>
</section>

<script>
window.onload=function(){
    $('.selectpicker').selectpicker();
};
</script>
