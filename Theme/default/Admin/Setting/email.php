  <?php v_template_part(array("name" => "AdminHeader", "path" => "Admin/Public")); ?><?php v_template_part(array("name" => "AdminCrumb", "path" => "Admin/Public","title"=>"网站设置")); ?><!-- 实例化编辑器 --><script type="text/javascript">    var ue = UE.getEditor('metavalue');</script><div id="dashboard">    <div class="tab-content">        <div class="tab-pane active" id="tab_1">            <div class="portlet box">                                                 <!-- BEGIN FORM-->                     <form action="<?php echo U("Admin/Setting/saveEmail"); ?>" method="post" class="horizontal-form">                                                                                                      <h3 class="form-section">SEO设置</h3>                            <div class="row-fluid">                    <?php                    foreach ($seo as $v) {                        ?>                                <div class="span4" style="margin-left:0px; ">                                    <div class="control-group">                                         <label class="control-label" for="firstName"><?php echo $v['desc']?></label>                                        <div class="controls">                                              <input type='hidden' name='id[<?php echo $v['id']?>]' value='<?php echo $v['id']?>'>                                            <input type='hidden' name='meta_key[<?php echo $v['id']?>]' value='<?php echo $v['meta_key']?>'>                                            <input type='hidden' name='type[<?php echo $v['id']?>]' value='<?php echo $v['type'] ?>'>                                             <textarea class="form-control span12" name="meta_value[<?php echo $v['id']?>]" id="meta_value" cols="5" rows="2"><?php echo $v['meta_value']?></textarea>                                             <span class="help-block"></span>                                        </div>                                    </div>                                </div>                                                                                                    <?php                    }                    ?>  </div>                                                                                                                                                                                   <h3 class="form-section">邮箱设置</h3>                            <div class="row-fluid">                    <?php                    foreach ($email as $v) {                        ?>                                <div class="span3" style="margin-left:0px; ">                                    <div class="control-group">                                         <label class="control-label" for="firstName"><?php echo $v['desc']?></label>                                        <div class="controls">                                              <input type='hidden' name='id[<?php echo $v['id']?>]' value='<?php echo $v['id']?>'>                                            <input type='hidden' name='meta_key[<?php echo $v['id']?>]' value='<?php echo $v['meta_key']?>'>                                            <input type='hidden' name='type[<?php echo $v['id']?>]' value='<?php echo $v['type'] ?>'>                                            <input type='text' name="meta_value[<?php echo $v['id']?>]" id="meta_value" value="<?php echo $v['meta_value']?>" >                                            <span class="help-block"></span>                                        </div>                                    </div>                                </div>                                                                                                    <?php                    }                    ?>  </div>                               <h3 class="form-section">联系设置</h3>                              <div class="row-fluid">                    <?php                    foreach ($other as $v) {                        ?>                                <div class="span3" style="margin-left:0px; ">                                    <div class="control-group">                                         <label class="control-label" for="firstName"><?php echo $v['desc']?></label>                                        <div class="controls">                                              <input type='hidden' name='id[<?php echo $v['id']?>]' value='<?php echo $v['id']?>'>                                            <input type='hidden' name='meta_key[<?php echo $v['id']?>]' value='<?php echo $v['meta_key']?>'>                                            <input type='hidden' name='type[<?php echo $v['id']?>]' value='<?php echo $v['type'] ?>'>                                            <input type='text' name="meta_value[<?php echo $v['id']?>]" id="meta_value" value="<?php echo $v['meta_value']?>" >                                            <span class="help-block"></span>                                        </div>                                    </div>                                </div>                        <?php                    }                    ?>  </div>                                                                 <h3 class="form-section">首页设置</h3>                              <div class="row-fluid">                    <?php                    foreach ($index as $v) {                        ?>                                <div class="span12" style="margin-left:0px; ">                                    <div class="control-group">                                         <label class="control-label" for="firstName"><?php echo $v['desc']?></label>                                        <div class="controls">                                             <input type='hidden' name='id[<?php echo $v['id']?>]' value='<?php echo $v['id']?>'>                                            <input type='hidden' name='meta_key[<?php echo $v['id']?>]' value='<?php echo $v['meta_key']?>'>                                            <input type='hidden' name='type[<?php echo $v['id']?>]' value='<?php echo $v['type'] ?>'>                                            <!--<input type='text' name="meta_value[<?php echo $v['id']?>]" id="meta_value" value="<?php echo $v['meta_value']?>" >-->                                                                                                                              <script id="metavalue" name="meta_value[<?php echo $v['id']?>]" type="text/plain"><?php echo html_entity_decode($v['meta_value']) ?>                                        </script>                                            <span class="help-block"></span>                                        </div>                                    </div>                                </div>                        <?php                    }                    ?>  </div>                                                          <!--/row-->                                    <div class="form-actions">                                <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>                             </div> </form>                     <!-- END FORM-->                                                                         </div>                          </div>    </div></div><input type="hidden" id='nav-current-index' value='7|0'> <?php v_template_part(array("name" => "AdminFooter", "path" => "Admin/Public")); ?>