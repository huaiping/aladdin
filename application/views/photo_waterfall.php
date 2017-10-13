<section class="container">
    <div class="banner row">
        <!--顶部通栏 begin-->
        <div class="col-md-12 col-lg-12">
            <div class="widget-box no-border">
                <a href="#"><img src="<?php echo base_url('webroot/image/banner1.jpg'); ?>" alt="" style="width:100%;"></a>
            </div>
        </div>
        <!--顶部通栏 end-->
    </div>

    <div class="photos row">
        <div class="content container">
            <div id="device" class="gridalicious row">
                <div class="galcolumn">
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo1.jpg'); ?>" alt=""><p>瀑布流特效1</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo2.jpg'); ?>" alt=""><p>瀑布流特效2</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo3.jpg'); ?>" alt=""><p>瀑布流特效3</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo4.jpg'); ?>" alt=""><p>瀑布流特效4</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo1.jpg'); ?>" alt=""><p>瀑布流特效1</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo2.jpg'); ?>" alt=""><p>瀑布流特效2</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo3.jpg'); ?>" alt=""><p>瀑布流特效3</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo4.jpg'); ?>" alt=""><p>瀑布流特效4</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo1.jpg'); ?>" alt=""><p>瀑布流特效1</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo2.jpg'); ?>" alt=""><p>瀑布流特效2</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    makeboxes = function() {//滚动条滚动时添加内容
        var boxes = [];
        var jsonLength = 0;
        $.ajax({
            type: 'POST',
            async : false,
            url : '<?php echo site_url('photo/loading'); ?>',
            //data: {'page':page},
            dataType : 'json',
            success : function(data) {
                if (typeof data === 'object') {
                    for (var items in data) {
                        jsonLength++;
                    }
                    for (var i=0, l=jsonLength; i<l; i++) {
                        div = $('<div></div>').addClass('item');
                        content = '<img src="<?php echo base_url(); ?>'+data[i].url+'" /><p>'+data[i].description+'</p>';
                        div.append(content);
                        boxes.push(div);
                    }
                }
            }
        });
        return boxes;
    }
    $(document).ready(function () {//滚动条事件
        $(window).scroll(function () {
            if(($(window).scrollTop() + $(window).height()) == $(document).height()) {
                $("#device").gridalicious('append', makeboxes());
            }
    });
    $("#device").gridalicious({//主要部分
        gutter: 15,
        width: 300,
        animate: true,
        animationOptions: {
            speed: 150,
            duration: 400,
            complete:function(data){
            }
        },
    });
});
</script>
