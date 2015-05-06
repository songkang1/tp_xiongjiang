  
<?php v_template_part(array("name" => "header", "path" => "Public")); ?>

<?php
$orderby['hot'] = 'desc';
$product = M('product')->order($orderby)->where(array("lang" => LANG_SET))->limit("8")->select(); // 赋值数据集
$news = M('article')->where(array("lang" => LANG_SET))->limit("3")->select(); // 赋值数据集
?> 


<div class="container-fluid index-about">
    <div class="row">
        <div class="col-xs-12 index-about-title">
            <h3><span class="index-about-title-color"><c class="color-006ea3">关于</c>我们</span></h3>
            <div class="container  text-center ">
                <div class="col-xs-4 index-about-content">
                    <h4>企业介绍</h4>
                    <img src="<?php echo v_theme_url() ?>/img/1.png" class="img-circle"/><br />
                    <div class="text-left ">
                        深圳市雄将科技有限公司自成立以来，一直致力于汽车电子产品的研发、生产和推广应用；公司以制造和销售为业务核心；主要产品有汽车智能钥匙、远程一键启动系统、中央控制门锁系统、专用型防盗系统等高科技产品；
                    </div>
                </div>
                <div class="col-xs-4 index-about-content">
                    <h4>经营理念</h4>
                    <img src="<?php echo v_theme_url() ?>/img/2.png" class="img-circle"/><br />
                    <div class="text-left">
                        公司的经营理念是：“务实、敏锐、发展、诚信、双赢”。以务实的态度，敏锐的眼光来求得发展壮大，以诚信的态度与合作伙伴进行长远的合作达到双赢，让消费者能使用到高性价比的产品。　我们真诚期望与全国各地的同行进行深入合作。 
                    </div>
                </div>
                <div class="col-xs-4 index-about-content">
                    <h4>资质证明</h4>
                    <img src="<?php echo v_theme_url() ?>/img/3.png" class="img-circle"/><br />
                    <div class="text-left">
                        公司价值观：为员工提供一个成长的平台、为客户提供一些可以增值的产品和服务、为消费者提供价廉物美的电脑产品、为汽车行业的民族工业作出自己的贡献。 
　　员工价值观：重视员工的职业经营历程、尊重员工的个性、强调员工的团队精神、帮助员工自我价值的实现。 
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid product-content">

    <div class="col-xs-12 index-product-title">
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
    <div class="col-xs-12" style="border-bottom: 1px #cdcdcd solid; margin-bottom: 30px; ">
        <div class="container">
            <div class="col-xs-6 index-news-title">
                <h3><span class="index-news-title-color"><c class="color-006ea3">新闻</c>中心</span></h3>
            </div>
            <div class="col-xs-6 index-news-title">
                <h3><span class="index-news-title-color"><c class="color-006ea3">视频</c>中心</span></h3>
            </div> 
        </div>
    </div>
    <div class="container">
        <div class="col-xs-6 index-news-list">
            <ul>
                <?php foreach ($news as $value) { ?>
                    <li> <c class="color-91ef03">●</c>
                    <a href="<?php echo U("Article/Index/single/id/" . $value['id']) ?>"><?php echo mb_substr($value['title'], 0, 50, "UTF-8"); ?></a>
                    <div  style="float: right">[<?php echo date("Y-m-d", $value['created']) ?>]</div></li>
                <?php } ?>    

            </ul>            
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