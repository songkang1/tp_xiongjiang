<div class="col-md-2 col-xs-2 sider-bar" style=" width:240px;
     background-image: url(<?php echo v_theme_url() ?>/img/arcitle_category_bg_<?php echo LANG_SET;?>.png);
    background-repeat: no-repeat;
     filter:\"progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale')\";  
     -moz-background-size:100% 100%;  
     background-size:100% 100%;  " >
    <div class="siderbar" >
        <div class="col-md-12 text-center category-title">
            <?php // echo $data['title'];?>
        </div>
        <ul class="product-nav col-md-10">
            <?php
            foreach ($categorylist as $value) {
                $class = "";
                if ($currcategory["id"] == $value["id"]) {
                    $class = "class='product-nav_active' style='color:#fff'";
                }
                echo '<li><a ' . $class . ' href="' . U("Article/Index/Index/category/" . $value['id']) . '">' . $value['name'] . '</a></li>';
            }
            ?> 
        </ul>
    </div>
    <div class="siderbar col-md-12"> 
        <div class="col-md-12 text-center" style="padding:10px 0px;">
            <!--<img src="<?php echo v_theme_url() ?>/img/qrcode.jpg" width="130"/>-->
            <small class="text-center"></small>
            <a href="###" class="form-contact"  data-toggle="modal" data-target="#myModal" style=" padding-top:10px;" ><?php echo L("L_SIDER_SENDEMAIL"); ?></a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo L("L_SIDER_SENDEMAIL"); ?></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="###" method="POST">
                    <div class="form-group">

                        <div class="col-sm-12">
                            <input type="email" class="form-control" name="email" placeholder="<?php echo L("L_SIDER_ENTEREMAIL"); ?>">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-12">
                            <textarea class="form-control" rows="5" name="body" placeholder="<?php echo L("L_SIDER_FANKUIJIANYI"); ?>"></textarea>  
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <small class="message"></small>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo L("L_PUBLIC_CANCEL") ?></button>
                <button type="button" class="btn btn-primary form_submit" ><?php echo L("L_PUBLIC_SEND") ?></button>
            </div>
        </div>
    </div>
</div>
<style>

</style>

<script>
    $(".form_submit").click(function () {
        if ($("textarea[name*='body']").val() != "") {
            $.ajax({
                //提交数据的类型 POST GET
                type: "POST",
                //提交的网址
                url: '<?php echo U("SendEmail/Index/send") ?>',
                //提交的数据
                data: {email: $("input[name*='email']").val(), body: $("textarea[name*='body']").val()}, //{Name: "sanmao", Password: "sanmaoword"},
                //返回数据的格式
                datatype: "json", //"xml", "html", "script", "json", "jsonp", "text".
                //在请求之前调用的函数
                beforeSend: function () {
//                   alert("befor");
                    $(".message").html("<?php echo L("L_SIDER_NOWSEND"); ?>");

                },
                success: function (data) {


                    $('#showlodding').modal('hide');
                    if (data == "200") {
                        $(".message").html("<?php echo L("L_SIDER_SENDSUCCESS"); ?>");

                    } else {
                        $(".message").html("<?php echo L("L_SIDER_SENDERRORMESSAGE"); ?>");
                    }

                },
                //调用执行后调用的函数
                complete: function (XMLHttpRequest, textStatus) {

                },
                //调用出错执行的函数
                error: function () {
                    //请求出错处理
//                 alert("error");
                }
            });
        } else {
            $(".message").html("<?php echo L("L_SIDER_ENTERINFO"); ?>");
        }
    });
</script>
