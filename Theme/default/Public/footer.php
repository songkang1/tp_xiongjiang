 
<div class="container-fluid">

    <div class="row">       
        <div class="col-sm-12" style=" background-color: #222; padding:5px 0px;   text-align: center">

            <div class="col-md-10 col-md-offset-1" style="line-height: 25px;"> 
                <div class="col-md-4 col-xs-4 text-left" style="color:#fff">
                    <p><?php echo L("L_FOOTER_CONPANY")?></p>
                    <p><?php echo L("L_FOOTER_ADDRESS")?></p>
                    <p><?php echo L("L_FOOTER_EMAIL")?></p>
                    <p><?php echo L("L_FOOTER_MOBILE")?></p> 
                    <p><?php echo L("L_FOOTER_PHONE")?></p> 
                </div>

                <div class="col-md-4 col-xs-4 text-left links">
                    <h4 style="color:#5AB331"><?php echo L("L_FOOTER_CHANGYONGLINK")?></h4>
                    <?php
                     
                    $changyonglink =  M("link")->where(array("lang"=>LANG_SET,"category"=>"常用链接"))->select();
                    foreach ($changyonglink as $value){
                    ?>
                    <a href="<?php echo $value['weburl']?>" target="_blank" ><?php echo $value['name']?></a>
                    <?php }?>
                    <h4 style="color:#5AB331"><?php echo L("L_FOOTER_LINK")?></h4>
                      <?php
                     
                    $changyonglink =  M("link")->where(array("lang"=>LANG_SET,"category"=>"友情链接"))->select();
                    foreach ($changyonglink as $value){
                    ?>
                    <a href="<?php echo $value['weburl']?>" target="_blank"><?php echo $value['name']?></a>
                    <?php }?>
                </div>

                <div class="col-md-4 col-xs-4 text-center" style="padding:10px 0px 0px 0px;">
                    <div class="col-md-6 col-xs-6 text-right">
                        <img src="<?php echo v_theme_url() ?>/img/qrcode_<?php echo LANG_SET?>.png" width="110;">    
                        <!--<h5  style="color:#fff"><?php echo L("L_FOOTER_WECHA")?></h5>-->
                    </div>
                    <div class="col-md-6 col-xs-6 text-left">
                        <img src="<?php echo v_theme_url() ?>/img/qrcode1_<?php echo LANG_SET?>.png" width="110;">    
                        <!--<h5  style="color:#fff"><?php echo L("L_FOOTER_WEIBO")?></h5>-->
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-12 col-xs-12 footer-footer">
            <div class="col-md-12 col-xs-12">
                <div class="col-md-5 col-xs-5">
                    <small><a href="<?php echo U("Page/Index/index/id/partner") ?>"><?php echo L('L_NAV_HEZUOHUOBAN') ?></a></small> | 
                    <small><a href="<?php echo U("Page/Index/index/id/about")?>"><?php echo L("L_NAV_ABOUT")?></a></small> 
                     <?php if(LANG_SET != "en") {?>| <small><a href="<?php echo U("Page/Index/index/id/job") ?>"><?php echo L('L_NAV_JOB') ?></a></small> <?php }?>
                </div>
                <div class="col-md-6 col-xs-6"><small><?php echo L("L_FOOTER_COPYRIGHT")?><?php echo L("L_FOOTER_BEIAN")?></small> </div>
                <div class="col-md-1" style=" position: absolute;bottom: 2px; right: 0px; text-align: center;"><a href="javascript:goTop();"><i style="height:35px; width: 35px; background-color: red; line-height: 35px;" class="glyphicon glyphicon-chevron-up"></i></a></div>
            </div>
        </div>

    </div>

</div><!-- container  -->
<style>
    .footer-footer{background-color: #000; height:30px; line-height: 30px; color: #fff;}
    .footer-footer a{ color: #fff;}
    .links a{color:#fff;}
    .links a:hover{color:#5ba331;}
</style>




<script type="text/javascript"> (function(win, doc) {
        var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0];
        if (!win.alimamatk_show) {
            s.charset = "gbk";
            s.async = true;
            s.src = "http://a.alimama.cn/tkapi.js";
            h.insertBefore(s, h.firstChild);
        }
        ;
        var o = {pid: "mm_50848451_8694173_29282730", /*推广单元ID，用于区分不同的推广渠道*/ appkey: "", /*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/ unid: ""/*自定义统计字段*/};
        win.alimamatk_onload = win.alimamatk_onload || [];
        win.alimamatk_onload.push(o);
    })(window, document);</script>



</body>
<!-- Include all compiled plugins (below), or include individual files as needed -->





</html>
