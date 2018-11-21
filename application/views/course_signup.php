<section class="container">
    <div class="notice row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <strong><span class="glyphicon glyphicon-fire"></span> 当前已有 <?php echo $numbers; ?> 人成功提交报名信息，截止日期2018年12月15日！</strong>
            </div>
        </div>
    </div>

    <div class="row">
        <h1 class="text-center" style="margin-top:0; margin-bottom:20px;">高一选课组班预报名</h1>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <div class="caption">
                    <h3>兴趣、爱好</h3>
                    <p style="text-indent:2em;">正所谓兴趣是最好的老师，考生从6门科目中选择3门作为选考科目，有了更多的自主性和选择性。作为一名高中生，要了解新高考的变化和要求，认真分析自己的实际情况，明确自己的兴趣爱好和特长，根据自己的兴趣爱好选择选考科目。</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <div class="caption">
                    <h3>高校专业要求</h3>
                    <p style="text-indent:2em;">学生选择选考科目，除了自己的兴趣爱好，也受到高校专业要求的影响，不同高校的不同专业对报考学生的考试科目要求也不一样，学生要根据报考的院系和专业要求选择自己的选考科目。在选择3门选考科目时，一定要通过各种渠道（各省教育考试院或省招办都会提前公布在本省招生高校的选考科目要求）了解所要报考的院校专业的要求，减少盲目性，做好比较分析，在保持自己兴趣的前提下，作出高校要求的选择。</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <div class="caption">
                    <h3>职业生涯规划</h3>
                    <p style="text-indent:2em;">面对新高考选课的新形势，学校一般会开设心理健康教育课程和生涯规划指导课程，帮助学生了解自己的兴趣爱好，明确自己的学术性向，对高校的相关专业和未来的职业进行介绍，提供指导和建议，帮助学生和家长作出选择。高中生一定要积极接受学校和教师的指导和建议，必要时请老师和专业人士帮助自己进行分析判断，做好自己的职业生涯规划，适当作出灵活的调整，最终选出既符合自己的兴趣特长又满足高校专业需求的选考科目。</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <h3>6科选3科</h3>
            <?php
                $attributes = array('class' => 'form-horizontal', 'id' => 'course');
                $hidden = array('xh' => $this->session->userdata('username'), 'xm' => $this->session->userdata('name'));
                echo form_open('course/post', $attributes, $hidden);
            ?>
            <!--<form method="post" id="courses" name="courses" action="#" class="form-horizontal">-->
                <div class="checkbox icheck-primary">
                    <label><input name="wl" type="checkbox" value="物理"> 物理</label>
                </div>
                <div class="checkbox icheck-primary">
                    <label><input name="hx" type="checkbox" value="化学"> 化学</label>
                </div>
                <div class="checkbox icheck-primary">
                    <label><input name="sw" type="checkbox" value="生物"> 生物</label>
                </div>
                <div class="checkbox icheck-primary">
                    <label><input name="zz" type="checkbox" value="政治"> 政治</label>
                </div>
                <div class="checkbox icheck-primary">
                    <label><input name="ls" type="checkbox" value="历史"> 历史</label>
                </div>
                <div class="checkbox icheck-primary">
                    <label><input name="dl" type="checkbox" value="地理"> 地理</label>
                </div>
                <div class="form-group">
                    <div class="text-center" style="margin-top:10px; margin-bottom:10px;">
                    <?php if ($status == 'enabled'): ?>
                        <button type="submit" class="btn btn-success">提交报名</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-success" disabled="disabled">提交报名</button>
                    <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

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
        alert("选课科目不能少于3个");
        return false;
    } else if ($('input:checkbox:checked').length > 3) {
        alert("选课科目不能大于3个");
        return false;
    }
});
</script>
