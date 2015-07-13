<div style="padding-top:70px;">
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

<style type="text/css">
html, body {_height:100%; _overflow:hidden;}
body {_overflow:auto; font-family:Arial, sans-serif; font-size:14px; background:#f3f2f3;}
p {padding:5px 0px;}
.item {background:#fff; border-radius:3px; word-break:break-all; word-wrap:break-word; white-space:pre; white-space:pre-wrap;}
.item img {width:100%; height:auto;}
.item p {height:40px; padding-top:10px;  text-align:center;}
</style>

        <div class="content container">
            <div id="device" class="gridalicious row">
                <div class="galcolumn">
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo1.jpg'); ?>" /><p>瀑布流特效1</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo2.jpg'); ?>" /><p>瀑布流特效2</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo3.jpg'); ?>" /><p>瀑布流特效3</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo4.jpg'); ?>" /><p>瀑布流特效4</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo1.jpg'); ?>" /><p>瀑布流特效1</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo2.jpg'); ?>" /><p>瀑布流特效2</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo3.jpg'); ?>" /><p>瀑布流特效3</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo4.jpg'); ?>" /><p>瀑布流特效4</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo1.jpg'); ?>" /><p>瀑布流特效1</p></div>
                    <div class="item"><img src="<?php echo base_url('webroot/image/photo2.jpg'); ?>" /><p>瀑布流特效2</p></div>
                </div>
            </div>
        </div>

<script>
    //滚动条滚动时添加内容
    makeboxes = function() {
        var boxes = new Array;
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
                    //console.log(boxes);
                }
            }
        });
                    return boxes;
    }
    //滚动条事件
    $(document).ready(function () {
        $(window).scroll(function () {
            if(($(window).scrollTop() + $(window).height()) == $(document).height()) {
                $("#device").gridalicious('append', makeboxes());
            }
    });
    //主要部分
    $("#device").gridalicious({
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


    </div>
</div>
