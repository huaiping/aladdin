<section class="container">
    <h1>高一年级选课组班预报名</h1>
    <h3>6科选3科</h3>
    <?php
        $attributes = array('class' => 'form-horizontal', 'id' => 'course');
        $hidden = array('xh' => $this->session->userdata('username'), 'xm' => $this->session->userdata('name'));
        echo form_open('course/post', $attributes, $hidden);
    ?>
    <!--<form method="post" id="courses" name="courses" action="#" class="form-horizontal">-->
        <div class="checkbox icheck-primary">
            <label><input name="wl" type="checkbox" value="1">物理</label>
        </div>
        <div class="checkbox icheck-primary">
            <label><input name="hx" type="checkbox" value="1">化学</label>
        </div>
        <div class="checkbox icheck-primary">
            <label><input name="sw" type="checkbox" value="1">生物</label>
        </div>
        <div class="checkbox icheck-primary">
            <label><input name="zz" type="checkbox" value="1">政治</label>
        </div>
        <div class="checkbox icheck-primary">
            <label><input name="ls" type="checkbox" value="1">历史</label>
        </div>
        <div class="checkbox icheck-primary">
            <label><input name="dl" type="checkbox" value="1">地理</label>
        </div>
        <div class="form-group">
            <div class="text-center" style="margin-top:10px; margin-bottom:10px;">
                <button type="submit" class="btn btn-success">提交</button>
            </div>
        </div>
    </form>
</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/minimal/blue.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script>
$('input').iCheck({
 checkboxClass: 'icheckbox_minimal-blue',
 increaseArea: '20%', // optional
  labelHover: true,
});
</script>

<script>
$(".btn").click(function(){
    if ($('input:checkbox:checked').length < 3) {
        //$(this).attr("checked","");
        alert("选课科目少于3个");
        return false;
    } else if ($('input:checkbox:checked').length > 3) {
        //$(this).attr("checked","");
        alert("选课科目大于3个");
        return false;
    }
});
</script>
