  
<?php v_template_part(array("name" => "header", "path" => "Public")); ?>

<?php
  $orderby['hot'] = 'desc';
$product = M('product')->order($orderby)->where(array("lang" => LANG_SET))->limit("8")->select(); // 赋值数据集
$news = M('article')->where(array("lang" => LANG_SET))->limit("3")->select(); // 赋值数据集
?> 

<style>
  
</style>
<!--<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 banner-content"> 
            <div class="swiper-container banner" >
                <div class="swiper-wrapper" >
                    <div class="swiper-slide">
                        <img src="<?php echo v_theme_url()?>/img/big_000.jpg" style="width:100%" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo v_theme_url()?>/img/big_000.jpg" style="width:100%" />
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo v_theme_url()?>/img/big_000.jpg" style="width:100%" />
                    </div> 
                </div>
                 Add Pagination 
                <div class="swiper-pagination banner-swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>-->

<div class="container">
    <div class="row">
        <div class="col-md-10 col-xs-10 col-xs-offset-1 about">
            <div class="col-md-12 col-xs-12 about-content ">
                    <?php echo M('option')->where(array("meta_key"=>"ABOUT","type"=>"index","lang"=>LANG_SET))->getField('meta_value');;?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid product-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12"  style="margin:10px 0px;">
                <div class="col-md-12 text-center">
                    <h2 style="padding:0px 0px 10px 0px;"><?php echo L("L_INDEX_WE_PRODUCT");?></h2>
                </div>
                <div class="swiper-container product-banner">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($product as $value) {
                            ?>
                            <div class="swiper-slide product-slide">
                                <a href="<?php echo U("product/index/single/id/" . $value['id']) ?>"> <img src="<?php
                                    $arr = explode("||", $value['img']);
                                    echo $arr[0];
                                            ?>" width="100%" height="200px" style="max-width:100%; max-height: 100%;"> 
                                    <div class="index-swiper-tou-zi"><?php echo mb_substr($value['title'], 0, 15, "UTF-8") ?></div>

                                </a>

                            </div>
                        <?php } ?>



                    </div> 

                    <div class="swiper-pagination product-swiper-pagination"></div>
                </div>
            </div>
 
        </div>
    </div>
</div>

<div class="container-fluid news-content">
    <div class="container">
        <div class="row">
            <!-- New NEWS -->
            <div class="col-md-12" style="margin:50px 0px;">
                <div class="col-md-7 col-xs-7 news-list">
                    <h4><?php echo L("L_INDEX_NEW_NEWS");?> <small><a href="<?php echo U("Article/Index/index")?>">more</a></small></h4>
                    <?php foreach ($news as $value) { ?>
                        <div class="news-item">    
                            <div class="news-title">
                                [<?php echo date("Y-m-d",$value['created'])?>]   <a href="<?php echo U("Article/Index/single/id/" . $value['id']) ?>"><?php echo $value['title'] ?></a>
                            </div>
                            <div class="news-summary">
                                <small><?php echo mb_substr($value['summary'], 0, 80, "UTF-8") ?></small>
                            </div>
                        </div>



                    <?php } ?>
                </div>
                                                                                    <!--:  水平阴影位置 垂直阴影位置 模糊度 阴影尺寸 阴影颜色 内部阴影;-->  
                <div style="width:1px; height:210px; position: absolute; top:10px; border:0px; border-right: 1px #5ba331 solid;;  /*box-shadow: 1px 1px 3px 1px #5ba331;*/ left:57.5%">
                    
                </div>
                <div class="col-md-5 col-xs-5 news-movie" >
                   
                       
                    <video style="width: 400px"  controls="controls" data-html5-video="" src="http://jq22.qiniudn.com/jq22com.mp4">
                                 <source src="http://jq22.qiniudn.com/jq22com.mp4" type="video/mp4">
                               </video>

              


 
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Initialize Swiper -->
<script>
//    var banner = new Swiper('.banner', {
//        pagination: '.banner-swiper-pagination',
//        paginationClickable: true,
//        loop: true,
//        autoplay: 10000,
//    });
    var product = new Swiper('.product-banner', {
//        paginationClickable: true,
//        direction: 'vertical',
//        loop: true,
//        pagination: '.product-swiper-pagination',
        
//        prevButton: '#product-btn1',
//        nextButton: '#product-btn2',
        slidesPerView: 4,
         slidesPerColumn: 2,
//        paginationClickable: true,
                spaceBetween: 10,
        freeMode: false
    });

//   var swiper = new Swiper('.swiper-container', {
//        pagination: '.swiper-pagination',
//        slidesPerView: 3,
//        paginationClickable: true,
//        spaceBetween: 30,
//        freeMode: true
//    });
</script>


<?php v_template_part(array("name" => "footer", "path" => "Public")); ?>