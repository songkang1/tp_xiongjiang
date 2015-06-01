  
<?php v_template_part(array("name" => "header", "path" => "Public")); ?>

<?php
$orderby['hot'] = 'desc';
$product = M('product')->order($orderby)->where(array("lang" => LANG_SET))->limit("8")->select(); // 赋值数据集
$news = M('article')->where(array("lang" => LANG_SET))->limit("3")->select(); // 赋值数据集
?> 


<div class="container-fluid index-about">
    <div class="row">
        <div class="col-xs-12 index-about-title">
            <h3><span class="index-about-title-color"><c class="color-006ea3"><?php echo L("L_LANG_ABOUT")?></c><?php echo L("L_LANG_WE")?></span></h3>
            <div class="container  text-center ">
                <div class="col-xs-4 index-about-content">
                    <a href="<?php echo U("Page/Index/single/id/about/s/about") ?>" style="color:#777"><h4><?php echo L("L_LANG_QIYEJIESHAO")?></h4>
                        <img src="<?php echo v_theme_url() ?>/img/1.png" class="img-circle"/><br />
                        <div class="text-left ">
                            <?php echo mb_substr(M('option')->where(array("meta_key" => "ABOUT", "type" => "index", "lang" => LANG_SET))->getField('meta_value'), 0, 300, "UTF-8");?>
                          
                        </div>
                    </a>
                </div>
  		<div class="col-xs-4 index-about-content">
		<?php 
			$page = M("page")->where(array("callcode"=>"lilian","lang"=>LANG_SET))->find();
		?>
                    <a href="<?php echo U("Page/Index/single/id/".$page['id']."/s/about") ?>" style="color:#777"><h4><?php echo L("L_LANG_JINGYINGLINIAN")?></h4>
                        <img src="<?php echo v_theme_url() ?>/img/2.png" class="img-circle"/><br />
                        <div class="text-left">
                            <?php echo mb_substr(M('option')->where(array("meta_key" => "Philosophy", "type" => "index", "lang" => LANG_SET))->getField('meta_value'), 0, 300, "UTF-8");?>
                        </div>
                    </a>
               </div>
                <div class="col-xs-4 index-about-content">
			<?php
                        $page = M("page")->where(array("callcode"=>"zizhi","lang"=>LANG_SET))->find();
                ?>

                    <a href="<?php echo U("/Page/Index/single/id/".$page['id']."/s/about") ?>" style="color:#777"><h4><?php echo L("L_LANG_ZIZHIZHENGMING")?></h4>
                        <img src="<?php echo v_theme_url() ?>/img/3.png" class="img-circle"/><br />
                        <div class="text-left">
                            <?php echo mb_substr(M('option')->where(array("meta_key" => "Testimonials", "type" => "index", "lang" => LANG_SET))->getField('meta_value'), 0, 300, "UTF-8");?>
                        </div></a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid product-content">
    <a href="#product-list"><div class="index-down col-xs-12 text-center">
        <img src="<?php echo v_theme_url() ?>/img/down.png">
    </div></a>
    <div class="col-xs-12 index-product-title"  id="product-list">
        <h3><span class="index-product-title-color"><?php echo L("L_INDEX_WE_PRODUCT"); ?></span></h3>
        <div class="container  text-center ">
            <?php
            foreach ($product as $value) {
                ?>
                <div class="col-xs-3">
                    <a  class="index-product-list-title" href="<?php echo U("product/index/single/id/" . $value['id']) ?>"> <img src="<?php
                        $arr = explode("||", $value['img']);
                        echo $arr[0];
                        ?>" width="100%" height="200px" style="max-width:100%; max-height: 100%;"> 
                        <h4 ><?php echo mb_substr($value['title'], 0, 15, "UTF-8") ?></h4>

                    </a>
                </div>
            <?php } ?>
        </div>
    </div>

</div>

<div class="container-fluid index-news">
     <a href="#news-list"><div class="index-down col-xs-12 text-center">
        <img src="<?php echo v_theme_url() ?>/img/down.png">
    </div></a>
    <div class="col-xs-12" id="news-list" style="border-bottom: 1px #cdcdcd solid; margin-bottom: 30px; ">
        <div class="container">
            <div class="col-xs-6 index-news-title">
                <div class=col-xs-10""> <h3 style="text-align:left; padding-left:80px;"><span class="index-news-title-color"><c class="color-006ea3"><?php echo L("L_LANG_XINWEN")?></c><?php echo L("L_LANG_CENTER")?></span></h3></div>
            </div>
            <div class="col-xs-6 index-news-title">
                <h3><span class="index-news-title-color"><c class="color-006ea3"><?php echo L("L_LANG_MOVIE")?></c><?php echo L("L_LANG_CENTER")?></span></h3>
            </div> 
        </div>
    </div>
    <div class="container">
        <div class="col-xs-6 index-news-list">
            <div class="col-xs-10">
                <ul>
                    <?php foreach ($news as $value) { ?>
                        <li> <c class="color-91ef03">●</c>
                        <a href="<?php echo U("Article/Index/single/id/" . $value['id']) ?>"><?php echo mb_substr($value['title'], 0, 50, "UTF-8"); ?></a>
                        <div  style="float: right">[<?php echo date("Y-m-d", $value['created']) ?>]</div></li>
                    <?php } ?>    

                </ul>
            </div>            
        </div>
        <div class="col-xs-6">
            <video class="col-xs-12"   controls="controls" data-html5-video="" src="http://jq22.qiniudn.com/jq22com.mp4">
                <source src="http://jq22.qiniudn.com/jq22com.mp4" type="video/mp4">
            </video>
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
