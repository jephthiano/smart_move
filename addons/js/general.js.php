<?php //GENERAL JS STARTS ?>
<?php //hide modal when page is ready ?>
$(document).ready(function(){$('#load_modal').fadeOut(300);})
const dar="<?=file_location('ajax_url','')?>";
function loading(s='Loading',t='id',i='sbtn'){let vl= "<span class='j-spinner-border j-spinner-border-sm'style='margin-right:7px;'></span>"+s;if(t==='id'){$('#'+i).html(vl);$('#'+i).prop('disabled',true);}else if(t==='class'){$('.'+i).html(vl);}$('.'+i).prop('disabled',true);}
function r_b(s='Submit',t='id',i='sbtn'){if(t==='id'){$('#'+i).html(s);$('#'+i).prop('disabled',false);}else if(t==='class'){$('.'+i).html(s);$('.'+i).prop('disabled',false);}}
function r_m2(s){if(s.length>0){s=s;}else{s='Sorry!!!<br>Error occurred while running request, please try again later or reload page';}var err="<div id='return_message_modal'class='j-modal j-modal-click'><div class='j-card-4 j-modal-content j-color4 j-bolder'style='margin-top:200px;'><div class='j-padding'>"+s+"</div><center class='j-padding'><div class='j-clickable j-text-color1 j-round j-border j-border-color1 j-padding'style='width:100%'onclick=$('#return_message_modal').fadeOut('slow');>Close</div></center></div></div>";$('#st').html(err);$('#return_message_modal').fadeIn('slow');}
<?php //hide 000webhost advert ?>
<?php if(strstr(file_location('home_url',''),'000webhostapp')){ ?>
$(document).ready(function(){$('div').last().hide();})
<?php } ?>
<?php //slidehow//?>
var sI = 1;var s = document.getElementsByClassName("slides");var dot = document.getElementsByClassName("dot");var t = null;
function pD(n) {clearTimeout(t);sD(sI += n);}
function sD(n) {
  var i;
  if(n === undefined){n = ++sI}if (n > s.length) {sI = 1}if (n < 1) {sI = s.length}
  for (i = 0; i < s.length; i++) {s[i].style.display = "none";}
  for(i=0;i<dot.length;i++){dot[i].style.border = 'solid 1px gray';}
  s[sI-1].style.display = "block";
  dot[sI-1].style.border = 'solid 1px cyan';
  t = setTimeout(sD,5000); // Change image every 2 seconds
}