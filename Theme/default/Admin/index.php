  <?php v_template_part(array("name"=>"AdminHeader","path"=>"Admin/Public")); ?><?php v_template_part(array("name" => "AdminCrumb", "path" => "Admin/Public","title"=>"仪表盘")); ?>  Content  <?php echo  L('lan_define')?>  <input type="hidden" id='nav-current-index' value='2|-1'> <?php v_template_part(array("name"=>"AdminFooter","path"=>"Admin/Public")); ?>