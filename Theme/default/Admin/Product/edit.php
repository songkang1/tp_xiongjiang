  <?php v_template_part(array("name" => "AdminHeader", "path" => "Admin/Public")); ?><?php v_template_part(array("name" => "AdminCrumb", "path" => "Admin/Public", "title" => "产品管理", "data" => array(array("name" => "Product", "path" => U("Admin/Article/index")), array("name" => $article[0]['title'] == "" ? "添加新产品" : $article[0]['title'], "path" => U("Admin/Article/edit/id/" . $article[0]['id'] . ""))))); ?><link rel="stylesheet" type="text/css" href="<?php echo v_site_url() ?>/uploads/css/upload-frame.css" /><script src="<?php echo v_site_url() ?>/uploads/js/file_manager.min.js"></script><!-- 实例化编辑器 --><script type="text/javascript">    var ue = UE.getEditor('body');</script><link rel="stylesheet" type="text/css" href="<?php echo v_theme_url(); ?>/Admin/media/webupload/css/webuploader.css" /><link rel="stylesheet" type="text/css" href="<?php echo v_theme_url(); ?>/Admin/media/webupload/css/style.css" /><script type="text/javascript" src="<?php echo v_theme_url(); ?>/Admin/media/webupload/jquery.js"></script><script type="text/javascript" src="<?php echo v_theme_url(); ?>/Admin/media/webupload/dist/webuploader.js"></script>  <div id="dashboard">    <div class="tab-content">        <div class="tab-pane active" id="tab_1">            <div class="portlet box">                <!-- BEGIN FORM-->                <form action="<?php echo U("Admin/Product/save"); ?>" method="post" id="product_form" class="horizontal-form">                    <input type='hidden' name='productid' value='<?php echo $product[0]['id'] ?>'>                    <div class="row-fluid">                        <div class="span6 ">                            <div class="control-group">                                <label class="control-label" for="firstName">产品名：</label>                                <div class="controls">                                    <input type="text" id="title" name="title"  value='<?php echo $product[0]['title'] ?>'  class="m-wrap span12" placeholder="Chee Kin">                                    <span class="help-block"></span>                                </div>                            </div>                        </div>                        <!--                                                        <div class="span6 ">                                                                                                                                        <div class="control-group error">                                                                                                                                            <label class="control-label" for="lastName">文章名</label>                                                                                                                                            <div class="controls">                                                                                                                                                <input type="text" id="lastName" class="m-wrap span12" placeholder="Lim">                                                                                                                                                <span class="help-block">This field has error.</span>                                                                                                                                            </div>                                                                                                                                        </div>                                                                                                                                    </div>-->                    </div>                    <div class="row-fluid">                        <div class="span3 ">                            <div class="control-group">                                <label class="control-label" for="firstName"></label>                                <div class="controls">                                    <label>                                        <input type="checkbox" name="hot" <?php                                        if ($product[0]['hot']) {                                            echo "checked='checked'";                                        }                                        ?> value="1"> 是否显示首页</label>                                     <span class="help-block"></span>                                </div>                            </div>                        </div>                    </div>                    <div class="row-fluid">                        <div class="span6 ">                            <div class="control-group">                                <label class="control-label" for="firstName">产品图片</label>                                <div class="controls">                                    <input type="hidden" name="img" id='product_img'  value='<?php echo $product[0]['img'] ?>'>                                    <div id="thelist">                                                                                                                     </div>                                    <div id="selectfile"><img src="<?php echo v_theme_url() ?>/Admin/media/webupload/image.png" /></div>                                                                        <span class="help-block"></span>                                </div>                            </div>                        </div>                    </div>                    <div class="row-fluid">                        <div class="span6 ">                            <div class="control-group">                                <label class="control-label" for="firstName">产品分类</label>                                <div class="controls">                                    <select name="categoryid">                                        <?php foreach ($categorylist as $v) { ?>                                            <option value="<?php echo $v['id'] ?>" <?php                                            if ($product[0]['category_id'] == $v['id']) {                                                echo "selected='selected'";                                            }                                            ?>><?php echo $v['name'] ?></option>                                                <?php } ?>                                    </select>                                    <span class="help-block"></span>                                </div>                            </div>                        </div>                    </div>                    <!--/row-->                    <div class="row-fluid">                        <div class="span6 ">                            <div class="control-group">                                <label class="control-label" for="firstName">概要</label>                                <div class="controls">                                    <textarea class="form-control span12" name="summary" id="summary" cols="30" rows="10"><?php echo $product[0]['summary'] ?></textarea>                                    <span class="help-block"></span>                                </div>                            </div>                        </div>                    </div>                    <!--/row-->                            <!--/row-->                    <!--                        <div class="row-fluid">                                                                                                            <div class="span6 ">                                                                        <div class="control-group">                                                                            <label class="control-label" for="firstName">购买</label>                                                                            <div class="controls">                                                                                <input type="text" class="m-wrap span12" name="tag" id="tag" placeholder="Tag 多个使用','分割" value="<?php echo $product[0]['tag'] ?>">                                                                                <span class="help-block"></span>                                                                            </div>                                                                        </div>                                                                    </div>                                                                </div>-->                    <!--/row-->                         <!--/row-->                    <div class="row-fluid">                        <div class="span11 ">                            <div class="control-group">                                <label class="control-label" for="firstName">正文</label>                                <div class="controls">                                    <script id="body" name="body" type="text/plain"><?php echo html_entity_decode($product[0]["body"]) ?>                                    </script>                                    <span class="help-block"></span>                                </div>                            </div>                        </div>                    </div>                    <!--/row-->                      <div class="form-actions">                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>                        <button type="button" class="btn">Cancel</button>                    </div>                </form>                <!-- END FORM-->             </div>        </div>    </div></div><style>    .file-item .progress span {        background: #d14 url("<?php echo v_theme_url() ?>/Admin/media/webupload/progress.png") repeat-x;    }</style><script>    var imgpath = Array(<?php  $arr = explode("||", $product[0]['img']);     foreach ($arr as $img){        $imgpath .= "'".$img."',";    }    $imgpath = substr($imgpath,0,strlen($imgpath)-1);     echo $imgpath;    ?>);    addImgToHtml();    $(function () {        $("#selectfile").click(function () {            hidoger.fileManager.show({                type: 'Images', //可填值 'Files', 'Images', 'Flash'                //选中一个文件时调用                callback: function (fileUrl, name, allFiles) {                    if (checkexti(fileUrl, "chk")) {                        imgpath.push(fileUrl);                        addImgToHtml();//                            $("#thelist").append("<img onclick=\"checkexti('"+fileUrl+"' ,'del');\" id="+fileUrl+" src=" + fileUrl + " width='100' height='100'>");                    }                },                //上传时需要的额外额外数据                additionalData: {domain: 'hidoger'},                //上传完成                complete: function (file) {                }            });        });    });    $("#product_form").submit(function () {               var product_img = "";          $.each(imgpath, function (i, item) {           product_img += item+"||";        });         $("#product_img").val(product_img);//        console.log(imgpath);        return true;    });    function addImgToHtml() {        $("#thelist").html("");        $.each(imgpath, function (i, item) {            $("#thelist").append("<img onclick=\"checkexti('" + item + "' ,'del');\" style='' alt='刪除' src=" + item + " width='100' height='100'>");        });    }    function checkexti(fileurl, action) {        var img = $.inArray(fileurl, imgpath);  //返回 3,        if (action == "del" && img != "-1") {            console.log(imgpath);            imgpath.splice(img, 1);            addImgToHtml();        }        if (action == "chk") {            if (img == "-1") {                return true;            } else {                return false;            }        }    }</script>  <input type="hidden" id='nav-current-index' value='4|0'> <?php v_template_part(array("name" => "AdminFooter", "path" => "Admin/Public")); ?>