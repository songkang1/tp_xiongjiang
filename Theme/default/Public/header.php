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
/**swiper 自定义 pagination 样式*/
.swiper-container-horizontal>.swiper-pagination{ bottom: 30px;}
.swiper-container-horizontal>.swiper-pagination .swiper-pagination-bullet{width:50px;}
.swiper-pagination-bullet{border-radius: 0}
.swiper-pagination-bullet-active{ background-color: #91ef03}
        </style>
        <div class="container-fluid menu-bg">
            <div class="row">
                <div class="container container-width">
                    <div class="col-mxs-12 menu-item">
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
                            <li  class="sub-menu <?php if (stripos($_SERVER["REQUEST_URI"], "Article/", 0)) echo "menu-active1"; ?>"><a><?php echo L('L_NAV_ARTICLE') ?></a>
                                <ul  class="sub-menu-1" style="display:none;">
                                    <?php foreach ($articlecategotylist as $value) { ?>
                                        <li><a href="<?php echo U("Article/Index/index/category/" . $value['id']) ?>"><?php echo $value['name'] ?></a></li>     
                                    <?php } ?>

                                </ul>
                            </li>
                            <li <?php if (stripos($_SERVER["REQUEST_URI"], "support", 0)) echo "  class='menu-active1' style='color:#fff'"; ?>><a style="" href="<?php echo U("Page/Index/index/id/support") ?>"><?php echo L('L_NAV_SUPPORT') ?></a></li>
                            
                            <li <?php if (stripos($_SERVER["REQUEST_URI"], "channel", 0)) echo "  class='menu-active1' style='color:#fff'"; ?>>
                                <a href="<?php echo U("Page/Index/index/id/channel") ?>"><?php echo L('L_NAV_CHANNEL') ?></a></li>
                           <li <?php if (stripos($_SERVER["REQUEST_URI"], "about", 0)) echo "  class='menu-active1' style='color:#fff'"; ?>>
                                <a href="<?php echo U("Page/Index/index/id/about") ?>"><?php echo L('L_NAV_ABOUT') ?></a>
                           </li>
                            
                            <li <?php if (stripos($_SERVER["REQUEST_URI"], "contact", 0)) echo "  class='menu-active1' style='color:#fff'"; ?>>
                                <a href="<?php echo U("Page/Index/index/id/contact") ?>"><?php echo L('L_FOOTER_CONTACT') ?></a></li>
                            <li <?php if (stripos($_SERVER["REQUEST_URI"], "download", 0)) echo "  class='menu-active1' style='color:#fff'"; ?>>
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
                $(this).css({"background": "#006ea3"});
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
