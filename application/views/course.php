<section class="container">
    <?php
        $attributes = array('class' => 'form-horizontal', 'id' => 'course');
        $hidden = array('xh' => $this->session->userdata('username'), 'name' => $this->session->userdata('name'));
        echo form_open('course/post', $attributes, $hidden);
    ?>
    <!--<form method="post" id="courses" name="courses" action="#" class="form-horizontal">-->
        <div class="checkbox">
            <label><input name="course" type="checkbox" value="">物理</label>
        </div>
        <div class="checkbox">
            <label><input name="course" type="checkbox" value="">化学</label>
        </div>
        <div class="checkbox">
            <label><input name="course" type="checkbox" value="">生物</label>
        </div>
        <div class="checkbox">
            <label><input name="course" type="checkbox" value="">政治</label>
        </div>
        <div class="checkbox">
            <label><input name="course" type="checkbox" value="">历史</label>
        </div>
        <div class="checkbox">
            <label><input name="course" type="checkbox" value="">地理</label>
        </div>
        <div class="form-group">
            <div class="text-center" style="margin-top:10px; margin-bottom:10px;">
                <button type="submit" class="btn btn-success">提交</button>
            </div>
        </div>
    </form>
</section>

<script>
$(".btn").click(function(){
    if ($('input[name="course"]:checked').length < 3) {
        //$(this).attr("checked","");
        alert("选课科目少于3个");
    } else if ($('input[name="course"]:checked').length > 3) {
        //$(this).attr("checked","");
        alert("选课科目大于3个");
    }
});
</script>
