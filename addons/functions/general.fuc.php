<?php
//GENERAL FUNCTIONS STARTS
//classes auto load starts
spl_autoload_register(function ($className){
 $className = str_replace('..','',$className); //to removes .. so as to ensure that it is not used by attacker to get to above folder
 require_once(file_location('inc_path','classes/'.$className.'.cla.php'));
});
//classes auto load ends

// decode output starts
function decode_data($data){$data = htmlspecialchars_decode($data);return $data;}
//decode output ends

//page not available starts
function page_not_available($type="full"){
 $location = file_location('home_url',''); $j_text_color = "j-text-color1";$j_color = "j-color1";$j_border_color = "j-border-color1";
	?>
 <br>
 <center>
  <div class="j-card-4 j-color6 j-round"style="width:96%;max-width:400px;height:auto;margin-top:50px">
   <div class="j-display-container">
    <div class="j-container">
     <br><br>
     <div style="width:150px;height: 150px;"class="j-border-2 <?=$j_bolder_color?> j-circle j-display-container">
      <span class="j-display-middle <?=$j_text_color?>"><i class="<?=icon('times')?> j-xxlarge"></i></span>
     </div>
     <div>
      <br>
      <div class=""style="font-family: Roboto,sans-serif;width: 100%;"">
       <p class="<?=$j_text_color?>">
        Sorry, the page you are looking for is not available, page may have been deleted, link may have been broken or you may not have access to the content<br><br>
        <a href="<?=$location?>"class="j-btn j-bolder <?=$j_color?> j-text-color4 j-round-large">
        Back to home
        </a>
       </p>
      </div>
      <br><br>
     </div>
    </div>
   </div>
  </div>
</center>   
	<?php
}
//page not available ends

// trigger error starts
function trigger_error_manual($error=404){http_response_code($error);require_once(file_location('home_path','error/index.php'));die();}
// trigger error starts

//icon starts
function icon($data,$type='fas'){return $type.' fa-'.$data;}
//icon ends

//s/n starts
function s_n(){static $x = 1;echo $x;$x++;}
//s/n ends

// regex starts
function regex($type,$data){
 if($type === 'email'){
  $reg = "/^[\w.-]*@[\w.-]+\.[A-Za-z]{2,6}$/";
 }elseif($type === 'word_comma'){ //for languages and co
  $reg = "/^[\w]*\,?\ ?[\w]*\,?\ ?[\w]*\,?\ ?[\w]*\,?\ ?$/";
 }elseif($type === 'word_space'){
  $reg = "/^[a-zA-Z ]*$/";
 }elseif($type === 'word_number_nospace'){
  $reg = "/^[a-zA-Z0-9]*$/";
 }elseif($type === 'phonenumber'){
  $reg = "/^\+?[\d]{11,17}$/";
 }elseif($type === 'skill'){ // for word . ' - @ 
  $reg = "/^[\w .'-@]+$/";
 }elseif($type === 'sql_date'){
  $reg = "/^[\d]{4}-[\d]{2}-[\d]{2} [\d]{2}:[\d]{2}:[\d]{2}$/";
 }elseif($type === 'account_number'){
  $reg = "/^[\d]{10}$/";
 }else{
  return false;
 }
 return preg_match($reg,$data);
}
// regex ends

//fucntion back button starts
function back_btn(){
 ?>
 <a href='<?=file_location('home_url','')?>'><span style='margin-left:5px;'class='j-right j-xlarge'>
  &#10094;<span class="j-large"style='margin:5px 10px;position:relative;top:-2px'>Home</span></span>
 </a>
 <span onclick='history.go(-1);'><span style='margin:5px 15px;'class='j-clickable j-xlarge'>&#10094;</span></span>
 <?php
}
//fucntion back button ends
//GENERAL FUNCTIONS ENDS
?>