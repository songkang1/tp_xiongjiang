  
<?php v_template_part(array("name" => "header", "path" => "Public")); ?>
<?php v_template_part(array("name" => "Crumb", "path" => "Public",
    "data" => array(array("name"=>$article[0]['title']) ) ) ); ?>
<link rel="stylesheet" href="<?php echo v_theme_url() ?>/css/swiper.min.css">
<style> 
.article-title{ text-align: center; border-bottom: 3px #5ba331 solid;}
.article-option{ text-align: center; line-height: 35px;}
.article-body{}

</style> 
<script>$("title").html($("title").html()+"  -  <?php echo  $article[0]['title'];?>");</script>
<div class="container" style="">
    <div class="row">
<!--        <div class="col-md-12" style="margin-bottom:10px; padding: 0px;">
            <img src="http://www.huichuang.net/templates/default/images/new/banner3.png" width="100%">
        </div>-->
        <div class="col-md-12 text-right article-category" style=" margin-bottom: 10px;">
            <?php foreach ($categorylist as $va) { ?>
                <a href="<?php echo U("Article/Index/index/category/" . $va['id']) ?>" class=""><?php echo $va['name'] ?></a>
            <?php } ?>
        </div>
        <div class="col-md-10 col-md-offset-1"  style="padding-left:0px; ">
<!--            <div class="col-md-12 article-title">
                <h2><?php echo $article[0]['title']?></h2>
            </div>-->
            <div class="col-md-12 article-body">
                    <?php echo html_entity_decode($article[0]['body'])?>
            </div>


        </div>

    </div>


</div>
</div>


<!-- Swiper JS -->
<script>

    var news = new Swiper('.hot-news-banner', {
        paginationClickable: true,
//        direction: 'vertical',
        loop: true,
//        autoplay: 1000,
        prevButton: '#hot-news-btn1',
        nextButton: '#hot-news-btn2',
        spaceBetween: 10,
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    news.params.control = galleryThumbs;
    galleryThumbs.params.control = news;

</script>

<?php v_template_part(array("name" => "footer", "path" => "Public")); ?>