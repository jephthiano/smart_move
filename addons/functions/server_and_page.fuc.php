<?php
//SERVER AND PAGE FUNCTION STARTS
// validate php self starts
function php_self($filename,$type='home',$return='checked'){
	global $link_type, $local_url;
	$home_root = $_SERVER['PHP_SELF'];
	if(strstr($local_url,'000webhostapp') || $link_type === 'internal_link'){
		if($type === 'admin'){$filename = '/admin'.$filename;}
	}
	if($return === 'checked'){
		if($home_root === $filename){
			return true;
		}else{
			return false;
		}
	}elseif($return === 'return'){
		return $filename;
	}
}
// validate php self ends

//server_type starts
function server_type($type='current'){
	if($type === 'current'){
		$full_url = $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
		if(strstr($full_url,'admin.') || strstr($full_url,'/admin')){
			$page = "admin";
		}else{
			$page = "home";
		}
	}elseif($type === 'previous'){
		$prev_url = $_SERVER['REQUEST_URI'];
		if(strstr($prev_url,'admin.') || strstr($prev_url,'/admin')){
			$page = "admin";
		}else{
			$page = "home";
		}
	}
	return $page;
}
//server_type ends
//SERVER AND PAGE FUNCTION ENDS
?>