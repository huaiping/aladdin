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

    <div class="exam row">
        <div class="col-md-9" style="margin-bottom:45px;">
            <!--左侧试题区 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-info"><h4>试题<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4></div>
                <!--题号 begin-->
                <nav aria-label="Page navigation" style="margin-top:-20px;">
                    <ul class="pagination pagination-lg exam-pagination">
                        <li class="disabled"><a href="#">题号</a></li>
                        <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                        <li class="active"><a href="#">21 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">22</a></li>
                        <li><a href="#">23</a></li>
                        <li><a href="#">24</a></li>
                        <li><a href="#">25</a></li>
                        <li><a href="#">26</a></li>
                        <li><a href="#">27</a></li>
                        <li><a href="#">28</a></li>
                        <li><a href="#">29</a></li>
                        <li><a href="#">30</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                    </ul>
                </nav>
                <!--题号 begin-->

                <!--试题 begin-->
                <ul class="widget-links list-unstyled" style="padding-left:20px;">
                    <?php
                    for ($i=0, $j=0; $i<count($choices); $i++, $j+=4) {
                        $options = explode("|", $choices[$i]['options']);
                    ?>
                    <li class="col-xs-12 col-md-12 widget-links_item radio" style="line-height:45px;">
                        <strong><?php echo '第'.($i+1).'题 '.$choices[$i]['question']; ?></strong>
                    </li>
                    <li class="col-xs-12 col-md-6 pull-left widget-links_item radio">
                        <label><input type="radio" name="options<?php echo $i+1; ?>" id="option<?php echo $j+1; ?>"><?php echo $options[0]; ?></label>
                    </li>
                    <li class="col-xs-12 col-md-6 pull-left widget-links_item radio">
                        <label><input type="radio" name="options<?php echo $i+1; ?>" id="option<?php echo $j+2; ?>"><?php echo $options[1]; ?></label>
                    </li>
                    <li class="col-xs-12 col-md-6 pull-left widget-links_item radio">
                        <label><input type="radio" name="options<?php echo $i+1; ?>" id="option<?php echo $j+3; ?>"><?php echo $options[2]; ?></label>
                    </li>
                    <li class="col-xs-12 col-md-6 pull-left widget-links_item radio">
                        <label><input type="radio" name="options<?php echo $i+1; ?>" id="option<?php echo $j+4; ?>"><?php echo $options[3]; ?></label>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
                <!--试题 end-->
            </div>
            <!--左侧试题区 end-->
        </div>

        <div class="col-xs-12 col-md-3">
            <!--右侧考试信息和倒计时 begin-->
            <div class="widget-box no-border">
                <div class="widget-box_title bs-callout bs-callout-danger"><h4>考试信息<span class="pull-right fa fa-bars" style="padding-right:10px;"></span></h4></div>
                <ul class="widget-links list-unstyled">
                    00:40:00
                </ul>
            </div>
            <!--右侧考试信息和倒计时 end-->
        </div>
    </div>
</section>
