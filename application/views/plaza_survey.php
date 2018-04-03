<section class="container">
    <div class="survey row">
        <div class="col-md-12 hidden-xs">
            <!--问卷调查结果 begin-->
            <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th class="col-md-1 text-center">班级</th>
                        <th class="col-md-1 text-center">语文</th>
                        <th class="col-md-1 text-center">数学</th>
                        <th class="col-md-1 text-center">英语</th>
                        <th class="col-md-1 text-center">物理</th>
                        <th class="col-md-1 text-center">化学</th>
                        <th class="col-md-1 text-center">生物</th>
                        <th class="col-md-1 text-center">政治</th>
                        <th class="col-md-1 text-center">历史</th>
                        <th class="col-md-1 text-center">地理</th>
                        <th class="col-md-1 text-center">总分</th>
                        <th class="col-md-1 text-center">备注</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $surveys[0]['yw']; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
            </table>
            <!--问卷调查结果 end-->
        </div>
    </div>
</section>

<script>
window.onload=function(){
    $('.selectpicker').selectpicker();
};
</script>
