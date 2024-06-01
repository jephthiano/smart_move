<?php
//SOCIAL HANDLE FUNCTION STARTS
function get_all_social_handle(){
  ?>
  <a href="http://www.twitter.com/leemanhot"style="margin:5px"class="j-tag j-xlarge j-round-large"title="twitter"target="_blank"><i class="<?=icon('twitter','fab')?>"></i></a></span>
  <a href="http://www.instgram.com/leemanhot"style="margin:5px"class="j-tag j-xlarge j-round-large"title="instagram"target="_blank"><i class="<?=icon('instagram','fab')?>"></i></a></span>
  <a href="http://wa.me/<?=get_json_data('phonenumber','about_us')?>"style="margin:5px"class="j-tag j-xlarge j-round-large"title="whatsapp"target="_blank"><i class="<?=icon('whatsapp','fab')?>"></i></a></span>
  <a href="http://telegram.me/<?=get_json_data('phonenumber','about_us')?>"style="margin:5px"class="j-tag j-xlarge j-round-large"title="telegram"target="_blank"><i class="<?=icon('telegram','fab')?>"></i></a></span>
  <?php
}
//SOCIAL HANDLE FUNCTION ENDS
?>