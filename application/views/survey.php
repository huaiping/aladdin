<section class="container">
    <?php
        $attributes = array('class' => 'form-horizontal', 'id' => 'survey');
        echo form_open('survey/post', $attributes);
    ?>
    <!--<form method="post" id="survey" name="survey" action="#" class="form-horizontal">-->
        <div class="panel panel-info">
            <div class="panel-heading">01. 你对科任老师的教学责任感的评价</div>
            <div class="panel-body">A. 很负责　　　　B. 负责　　　　　C. 不够负责</div>
            <div class="panel-body row">
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q101" id="Q101" class="selectpicker form-control">
                        <option value="0">语文</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q102" id="Q102" class="selectpicker form-control">
                        <option value="0">数学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q103" id="Q103" class="selectpicker form-control">
                        <option value="0">英语</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q104" id="Q104" class="selectpicker form-control">
                        <option value="0">物理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q105" id="Q105" class="selectpicker form-control">
                        <option value="0">化学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q106" id="Q106" class="selectpicker form-control">
                        <option value="0">生物</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q107" id="Q107" class="selectpicker form-control">
                        <option value="0">政治</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q108" id="Q108" class="selectpicker form-control">
                        <option value="0">历史</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q109" id="Q109" class="selectpicker form-control">
                        <option value="0">地理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">02. 你对科任老师的喜欢程度是</div>
            <div class="panel-body">A. 很喜欢　　　　B. 喜欢　　　　　C. 不喜欢</div>
            <div class="panel-body row">
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q201" id="Q201" class="selectpicker form-control">
                        <option value="0">语文</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q202" id="Q202" class="selectpicker form-control">
                        <option value="0">数学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q203" id="Q203" class="selectpicker form-control">
                        <option value="0">英语</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q204" id="Q204" class="selectpicker form-control">
                        <option value="0">物理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q205" id="Q205" class="selectpicker form-control">
                        <option value="0">化学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q206" id="Q206" class="selectpicker form-control">
                        <option value="0">生物</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q207" id="Q207" class="selectpicker form-control">
                        <option value="0">政治</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q208" id="Q208" class="selectpicker form-control">
                        <option value="0">历史</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q209" id="Q209" class="selectpicker form-control">
                        <option value="0">地理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">03. 你觉得你的科任老师上课的容量大多数时候是</div>
            <div class="panel-body">A. 适中　　　　　B. 太大　　　　　C. 太小</div>
            <div class="panel-body row">
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q301" id="Q301" class="selectpicker form-control">
                        <option value="0">语文</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q302" id="Q302" class="selectpicker form-control">
                        <option value="0">数学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q303" id="Q303" class="selectpicker form-control">
                        <option value="0">英语</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q304" id="Q304" class="selectpicker form-control">
                        <option value="0">物理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q305" id="Q305" class="selectpicker form-control">
                        <option value="0">化学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q306" id="Q306" class="selectpicker form-control">
                        <option value="0">生物</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q307" id="Q307" class="selectpicker form-control">
                        <option value="0">政治</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q308" id="Q308" class="selectpicker form-control">
                        <option value="0">历史</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q309" id="Q309" class="selectpicker form-control">
                        <option value="0">地理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">04. 你觉得科任老师布置的作业量大多数时候是</div>
            <div class="panel-body">A. 没有　　　　　B. 偶尔有　　　　C. 经常有</div>
            <div class="panel-body row">
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q401" id="Q401" class="selectpicker form-control">
                        <option value="0">语文</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q402" id="Q402" class="selectpicker form-control">
                        <option value="0">数学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q403" id="Q403" class="selectpicker form-control">
                        <option value="0">英语</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q404" id="Q404" class="selectpicker form-control">
                        <option value="0">物理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q405" id="Q405" class="selectpicker form-control">
                        <option value="0">化学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q406" id="Q406" class="selectpicker form-control">
                        <option value="0">生物</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q407" id="Q407" class="selectpicker form-control">
                        <option value="0">政治</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q408" id="Q408" class="selectpicker form-control">
                        <option value="0">历史</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q409" id="Q409" class="selectpicker form-control">
                        <option value="0">地理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">05. 你的老师有在教室抽烟或接听手机的行为吗？</div>
            <div class="panel-body">A. 没有　　　　　B. 偶尔有　　　　C. 经常有</div>
            <div class="panel-body row">
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q501" id="Q501" class="selectpicker form-control">
                        <option value="0">语文</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q502" id="Q502" class="selectpicker form-control">
                        <option value="0">数学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q503" id="Q503" class="selectpicker form-control">
                        <option value="0">英语</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q504" id="Q504" class="selectpicker form-control">
                        <option value="0">物理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q505" id="Q505" class="selectpicker form-control">
                        <option value="0">化学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q506" id="Q506" class="selectpicker form-control">
                        <option value="0">生物</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q507" id="Q507" class="selectpicker form-control">
                        <option value="0">政治</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q508" id="Q508" class="selectpicker form-control">
                        <option value="0">历史</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q509" id="Q509" class="selectpicker form-control">
                        <option value="0">地理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">06. 你的作业老师是怎样批改的？</div>
            <div class="panel-body">A. 全收全改　　　B. 部分收改　　　C. 很少批改</div>
            <div class="panel-body row">
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q601" id="Q601" class="selectpicker form-control">
                        <option value="0">语文</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q602" id="Q602" class="selectpicker form-control">
                        <option value="0">数学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q603" id="Q603" class="selectpicker form-control">
                        <option value="0">英语</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q604" id="Q604" class="selectpicker form-control">
                        <option value="0">物理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q605" id="Q605" class="selectpicker form-control">
                        <option value="0">化学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q606" id="Q606" class="selectpicker form-control">
                        <option value="0">生物</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q607" id="Q607" class="selectpicker form-control">
                        <option value="0">政治</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q608" id="Q608" class="selectpicker form-control">
                        <option value="0">历史</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q609" id="Q609" class="selectpicker form-control">
                        <option value="0">地理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">07. 你认为你的科任老师晚自习辅导到位吗？</div>
            <div class="panel-body">A. 很到位　　　　B. 一般　　　　　C. 不爱进教室</div>
            <div class="panel-body row">
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q701" id="Q701" class="selectpicker form-control">
                        <option value="0">语文</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q702" id="Q702" class="selectpicker form-control">
                        <option value="0">数学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q703" id="Q703" class="selectpicker form-control">
                        <option value="0">英语</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q704" id="Q704" class="selectpicker form-control">
                        <option value="0">物理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q705" id="Q705" class="selectpicker form-control">
                        <option value="0">化学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q706" id="Q706" class="selectpicker form-control">
                        <option value="0">生物</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q707" id="Q707" class="selectpicker form-control">
                        <option value="0">政治</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q708" id="Q708" class="selectpicker form-control">
                        <option value="0">历史</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q709" id="Q709" class="selectpicker form-control">
                        <option value="0">地理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">08. 你认为你的老师爱找学生谈话或辅导吗？</div>
            <div class="panel-body">A. 经常　　　　　B. 偶尔　　　　　C. 基本不谈</div>
            <div class="panel-body row">
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q801" id="Q801" class="selectpicker form-control">
                        <option value="0">语文</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q802" id="Q802" class="selectpicker form-control">
                        <option value="0">数学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q803" id="Q803" class="selectpicker form-control">
                        <option value="0">英语</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q804" id="Q804" class="selectpicker form-control">
                        <option value="0">物理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q805" id="Q805" class="selectpicker form-control">
                        <option value="0">化学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q806" id="Q806" class="selectpicker form-control">
                        <option value="0">生物</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q807" id="Q807" class="selectpicker form-control">
                        <option value="0">政治</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q808" id="Q808" class="selectpicker form-control">
                        <option value="0">历史</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q809" id="Q809" class="selectpicker form-control">
                        <option value="0">地理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">09. 你认为你的老师对导学稿的使用好吗？</div>
            <div class="panel-body">A. 好　　　　　　B. 一般　　　　　C. 不行</div>
            <div class="panel-body row">
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q901" id="Q901" class="selectpicker form-control">
                        <option value="0">语文</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q902" id="Q902" class="selectpicker form-control">
                        <option value="0">数学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q903" id="Q903" class="selectpicker form-control">
                        <option value="0">英语</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q904" id="Q904" class="selectpicker form-control">
                        <option value="0">物理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q905" id="Q905" class="selectpicker form-control">
                        <option value="0">化学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q906" id="Q906" class="selectpicker form-control">
                        <option value="0">生物</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q907" id="Q907" class="selectpicker form-control">
                        <option value="0">政治</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q908" id="Q908" class="selectpicker form-control">
                        <option value="0">历史</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q909" id="Q909" class="selectpicker form-control">
                        <option value="0">地理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">10. 你认为老师上课时课堂教学互动（师生、生生）的情况如何？</div>
            <div class="panel-body">A. 活跃　　　　　B. 一般　　　　　C. 没有</div>
            <div class="panel-body row">
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q1001" id="Q1001" class="selectpicker form-control">
                        <option value="0">语文</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q1002" id="Q1002" class="selectpicker form-control">
                        <option value="0">数学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q1003" id="Q1003" class="selectpicker form-control">
                        <option value="0">英语</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q1004" id="Q1004" class="selectpicker form-control">
                        <option value="0">物理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q1005" id="Q1005" class="selectpicker form-control">
                        <option value="0">化学</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q1006" id="Q1006" class="selectpicker form-control">
                        <option value="0">生物</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q1007" id="Q1007" class="selectpicker form-control">
                        <option value="0">政治</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q1008" id="Q1008" class="selectpicker form-control">
                        <option value="0">历史</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
                <div class="col-md-9ths form-group" style="margin:0 5px 0 0;">
                    <select name="Q1009" id="Q1009" class="selectpicker form-control">
                        <option value="0">地理</option><option value="3">A</option><option value="2">B</option><option value="1">C</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">你的建议</div>
            <div class="panel-body row" style="margin:0; padding:0;">
                <textarea id="content" name="content" class="form-control col-md-12" rows="5" style="resize:none;"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="text-center" style="margin-top:10px; margin-bottom:10px;">
                <button type="submit" class="btn btn-success">提交答卷</button>
            </div>
        </div>
    </form>
</section>

<script>
window.onload=function(){
    $('.selectpicker').selectpicker();
};
</script>
<script>
    $(function(){
        $('#survey').submit({
            //if ($("#content").val().length < 2) {
            //    alert("评论不能为空");
            //    return false;
            //}
            alert("问卷调查成功提交，谢谢参与！");
            //$('#comment').clearForm();
        });
    });
</script>
