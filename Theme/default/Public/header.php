<!DOCTYPE html>
<html>
    <head>
        <title><?php echo v_title() ?></title> 
        <?php echo v_meta_seo(); ?>
        <link rel="stylesheet" href="<?php echo v_theme_url(); ?>/css/bootstrap/css/bootstrap.css"> 
        <link rel="stylesheet" href="<?php echo v_theme_url(); ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo v_theme_url(); ?>/css/hover.css">
        <script src="<?php echo v_theme_url(); ?>/js/jquery.min.js"></script>
        <script src="<?php echo v_theme_url(); ?>/js/jquery.animate-colors-min.js"></script>
        <script src="<?php echo v_theme_url(); ?>/css/bootstrap/js/bootstrap.min.js"></script>
        <!-- Swiper JS -->
        <script src="<?php echo v_theme_url() ?>/js/swiper.min.js"></script>
        <link rel="stylesheet" href="<?php echo v_theme_url() ?>/css/swiper.min.css"> 
    </head>

    <?php
    $categorylist = M('product_category')->where(array("lang" => LANG_SET))->select();

    $tree = build_tree(0, $categorylist);




    $categorylist = $tree; // 赋值数据集

    $articlecategotylist = M('article_category')->where(array("lang" => LANG_SET))->select(); // 赋值数据集
//     print_r(strpos($_SERVER["REQUEST_URI"],"Article/",0));die;
    ?>
    <body>
        <style>

            .menu-bg{
                height:70px;  
                background-color: #eee;
                border-bottom: 2px #5AB331 solid; 
            }
            .logo{ height: 70px; width:100px;}
            .logo a img{ height: 60px; margin-top:3px;}
            .lang{ width:70px; height: 70px; line-height: 70px; padding: 0px; text-align: center;}
            .lang a{display: block; width:100%; height: 100%; color: #060202}
            .lang:hover{ background-color: #5ab331;}
            .lang a:hover{ color: #fff;}
            .menu{ width: 850px;}
            .container-width{ width:1024px !important;}
            .menu-item{ width:1124px !important;}
            .menu-item ul li{ float: left; list-style: none; cursor:  pointer;}
            .menu-item ul li a{ color: #060202;text-align: center;width:100px;height: 68px; line-height: 20px; padding-top: 25px; font-size: 16px;  display: block;  }
            .menu-item ul li:hover{background-color:#5AB331; color:#fff;}
            .menu-item ul li a:hover{color:#fff;} 
            .sub-menu{ display: block}
            .sub-menu ul{ border:0px #5AB331 solid; position: absolute; width: 200px; background-color: #fff; padding-left: 0px; margin-top:0px;  z-index: 999;}
            .sub-menu ul li{ width: 100%; padding-left:0px;text-align: left}
            .sub-menu ul li a{color: #060202; text-align: left; height: 40px; padding:0px 20px; line-height: 40px; font-size: 14px;  display: block;  width: 100%; height: 100%; }
            .sub-menu ul li:hover{background-color:#fff;}
            .sub-menu>ul>li>a:hover{background-color: #5AB331}
            .menu-active1{background-color:#5AB331;}
            .menu-item ul li.menu-active1>a{color:#fff}
            .sub-menu-2 ul{ min-height: 100%; border:0px;color:#fff}
            .sub-menu-2 ul li:hover{background-color: #5ab331;color:#fff}





            /* side */
            .side{position: fixed;width:54px;height:275px;right:30px;top:214px;z-index:100;}
            .side ul li{width:54px;height:54px;float:left;position:relative;border-bottom:1px solid #444;}
            .side ul li .sidebox{position:absolute;width:54px;height:54px;top:0;right:0;transition:all 0.3s;background:#000;opacity:0.8;filter:Alpha(opacity=80);color:#fff;font:14px/54px "微软雅黑";overflow:hidden;}
            .side ul li .sidetop{width:54px;height:54px;line-height:54px;display:inline-block;background:#000;opacity:0.8;filter:Alpha(opacity=80);transition:all 0.3s;}
            .side ul li .sidetop:hover{background:#5ba331;opacity:1;filter:Alpha(opacity=100);}
            .side ul li img{float:left;}
        </style>
        <div class="side">
            <ul>
                <!--<li><a href="#"><div class="sidebox"><img src="<?php echo v_theme_url() ?>/img/side_icon01.png">客服中心</div></a></li>-->
                    <!--<li><a href="#"><div class="sidebox"><img src="<?php echo v_theme_url() ?>/img/side_icon02.png">客户案例</div></a></li>-->
                <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo v_option("QQ", "other") ?>&site=qq&menu=yes" ><div class="sidebox"><img src="<?php echo v_theme_url() ?>/img/side_icon04.png">QQ客服</div></a></li>
                    <!--<li><a href="javascript:void(0);" ><div class="sidebox"><img src="<?php echo v_theme_url() ?>/img/side_icon03.png">新浪微博</div></a></li>-->
                <li style="border:none;"><a href="javascript:goTop();" class="sidetop"><img src="<?php echo v_theme_url() ?>/img/side_icon05.png"></a></li>
            </ul>
        </div>
        <div class="container-fluid menu-bg">
            <div class="row">
                <div class="container container-width">
                    <div class="col-md-12 menu-item">
                        <div class="col-xs-2 logo"><a href="#"><img src="<?php echo v_theme_url() ?>/img/logo.png" alt="<?php echo L("L_FOOTER_CONPANY") ?>" title="<?php echo L("L_FOOTER_CONPANY") ?>"/></a></div>
                        <ul class="col-xs-8 menu">
                            <li class="menu-active <?php if ($_SERVER["REQUEST_URI"] == U("/Home/index")) echo "menu-active1"; ?>"><a href="<?php echo U("/Home/index") ?>">  <?php echo L('L_NAV_HOME') ?></a></li>
                            <li class="sub-menu <?php if (stripos($_SERVER["REQUEST_URI"], "Product/", 0)) echo "menu-active1"; ?>"><a href="#"><?php echo L('L_NAV_PRODUCT') ?></a>
                                <ul class="sub-menu-1" style="display:none;">
                                    <?php foreach ($categorylist as $va) { ?>
                                    <li class="sub-menu-2"><a href="<?php echo U("Product/Index/Index/category/" . $va['id']); ?>"><?php echo $va['name'] ?></a>
                                        <?php foreach ($va['childs'] as $childs) { ?>
                                            <ul  style="display:none; margin-left: 199px; margin-top:-40px;">
                                                <?php foreach ($va['childs'] as $childs) { ?>
                                                    <li><a href="<?php echo U("Product/Index/Index/category/" . $childs['id']); ?>"><?php echo $childs['name'] ?></a></li>
                                                <?php } ?>
                                            </ul></li>
                                        <?php }
                                    } ?>
                                </ul>
                            </li>
                            <li <?php if ($_SERVER["REQUEST_URI"] == U("Page/Index/index/id/wenhua")) echo "  class='menu-active1' style='color:#fff'"; ?>><a style="" href="<?php echo U("Page/Index/index/id/wenhua") ?>"><?php echo L('L_NAV_FANGKEZIZHU') ?></a></li>
                            <li  class="sub-menu <?php if (stripos($_SERVER["REQUEST_URI"], "Article/", 0)) echo "menu-active1"; ?>"><a><?php echo L('L_NAV_ARTICLE') ?></a>
                                <ul  class="sub-menu-1" style="display:none;">
                                    <?php foreach ($articlecategotylist as $value) { ?>
                                        <li><a href="<?php echo U("Article/Index/index/category/" . $value['id']) ?>"><?php echo $value['name'] ?></a></li>     
                                    <?php } ?>

                                </ul>
                            </li>
                            <li <?php if ($_SERVER["REQUEST_URI"] == U("Page/Index/index/id/partner")) echo "  class='menu-active1' style='color:#fff'"; ?>>
                                <a href="<?php echo U("Page/Index/index/id/partner") ?>"><?php echo L('L_NAV_HEZUOHUOBAN') ?></a></li>
                            <?php // if(LANG_SET != "en") {?><li <?php if ($_SERVER["REQUEST_URI"] == U("Page/Index/index/id/job")) echo "  class='menu-active1' style='color:#fff'"; ?>>
                                <a href="<?php echo U("Page/Index/index/id/job") ?>"><?php echo L('L_NAV_JOB') ?></a></li>
                            <?php // }?>
                            <li <?php if ($_SERVER["REQUEST_URI"] == U("Page/Index/index/id/contact")) echo "  class='menu-active1' style='color:#fff'"; ?>>
                                <a href="<?php echo U("Page/Index/index/id/contact") ?>"><?php echo L('L_FOOTER_CONTACT') ?></a></li>
                            <li <?php if ($_SERVER["REQUEST_URI"] == U("Page/Index/index/id/download")) echo "  class='menu-active1' style='color:#fff'"; ?>>
                                <a href="<?php echo U("Page/Index/index/id/download") ?>"><?php echo L('L_NAV_DOWNLOAD') ?></a></li>
                        </ul>
                        <div class="col-xs-2 lang">  
                            <?php if (LANG_SET == "en") { ?>
                                <a href="<?php echo U("Home/index/index/l/zh"); ?>">中文</a>
                            <?php } else { ?>
                                <a href="<?php
                                echo U("Home/index/index/l/en");
                                ?>">English</a>
                               <?php } ?>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 banner-content"> 
                    <div class="swiper-container banner" >
                        <div class="swiper-wrapper" >
                            <div class="swiper-slide">
                                <img src="<?php echo v_theme_url() ?>/img/banner2.jpg" style="width:1366px ;height:365px;" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo v_theme_url() ?>/img/big_001.jpg" style="width:1366px ;height:365px;" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo v_theme_url() ?>/img/big_003.jpg" style="width:1366px ;height:365px;" />
                            </div> 

                            <div class="swiper-slide">
                                <img src="<?php echo v_theme_url() ?>/img/big_004.jpg" style="width:1366px ;height:365px;" />
                            </div> 
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination banner-swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>



        <script>
            var banner = new Swiper('.banner', {
                pagination: '.banner-swiper-pagination',
                paginationClickable: true,
                loop: true,
                autoplay: 10000,
            });

            $(".menu-item ul li").mouseover(function () {
//                $(this).children("a").css({"color": "#fff"});
                $(this).find("ul.sub-menu-1").show();
            });
            $(".menu-item ul li").mouseout(function () {
                $(this).find("ul.sub-menu-1").hide();
//                $(this).children("a").css({"color": "#060202"});
            });
             $("li.sub-menu-2").mouseover(function () {
                $(this).css({"background": "#5ab331"});
//            $(".menu-item ul li").children("ul.sub-menu-1 a").css({"color": "#060202"});
             $(this).children("a").css({"color": "#fff"});
                $(this).find("ul").show();
            });
             $("li.sub-menu-2").mouseout(function () { 
                  $(this).css({"background": "#fff"}); 
                  $(this).children("a").css({"color": "#060202"});
                $(this).find("ul").hide();
            });
            
        </script>

        <script type="text/javascript">
            $(document).ready(function () {

                $(".side ul li").hover(function () {
                    $(this).find(".sidebox").stop().animate({"width": "124px"}, 200).css({"opacity": "1", "filter": "Alpha(opacity=100)", "background": "#5ba331"})
                }, function () {
                    $(this).find(".sidebox").stop().animate({"width": "54px"}, 200).css({"opacity": "0.8", "filter": "Alpha(opacity=80)", "background": "#000"})
                });

            });

            //回到顶部
            function goTop() {
                $('html,body').animate({'scrollTop': 0}, 600);
            }
        </script>
