<?php
//PARTNER FUNCTION STARTS
//get partner starts
function get_partner($id,$type='footer'){
 $name = content_data('partner_table','p_name',$id,'p_id');
 if($type === 'footer'){
 ?>
  <div class='j-row'title="<?=$name?> Partner">
   <div class='j-col s12'style='padding: 0px 0px;'>
   <img src="<?=file_location('media_url',get_media('partner',$id))?>"alt="<?=ucfirst((content_data('partner_table','p_name',$id,'p_id')))?>Image"class=""style="width:17px;height:17px;margin-right:4px;">
   <span class=""><?=ucfirst($name)?></span>
   </div>
  </div>
 <?php
 }
}
//get partner ends
//PARTNER FUNCTION ENDS
?>