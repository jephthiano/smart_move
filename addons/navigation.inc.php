<?php //code for large screen ?>
<nav id="nav"title='<?=ucwords(get_xml_data('company_name'))?> Navigation'class="j-bar j-animate-left j-home-padding j-hide-small j-color4"style="position:stcky;top:0;z-index:1;height:90px;">
	<div class='j-large j-text-color1'style="margin-top:20px;">
		<a href="<?= file_location('home_url','');?>"class="j-bar-item j-bolder"style='position:relative;top:-10px;'>S<span class='j-xxlarge j-itallic'>M</span>L</a>
		<div class="j-right">
			<a href="#testimonial" class="j-bar-item">Testimonial</a>
			<a href="<?= file_location('home_url','misc/about_us/');?>" class="j-bar-item">About Us</a>
			<a href="<?= file_location('home_url','misc/faq/');?>" class="j-bar-item">FAQ</a>
			<div style='display:inline;'class='j-padding-16'>
				<a href="<?= file_location('home_url','misc/contact_us/');?>" class="j-bar-item j-border-2 j-border-color1 j-round-large"style='margin-left:100px;'>Contact Us</a>
			</div>
		</div>
	</div>
</nav>
<?// code for small and medium screen ?>
<nav id="nav"title='<?=ucwords(get_xml_data('company_name'))?> Navigation'class="j-bar j-color4 j-hide-large j-hide-xlarge j-hide-medium"style="position:stiky;top:0;z-index:1;height:70px;">
	<div class='j-large j-text-color1'>
		<a href="<?= file_location('home_url','');?>"class="j-bar-item j-padding j-bolder"style=''>S<span class='j-xxlarge j-itallic'>M</span>L</a>
		<span style='margin-top:15px;'>
			<span  id="mo"class="j-bar-item j-right j-xlarge j-btn"style='background-color:'onclick="$('#menu_modal').fadeIn('fast')">&#9776;</span>
		</span>
		<div id="menu_modal"class="j-animate-right j-center j-sidebar j-bar-block j-color1 j-text-color4 j-xlarge"style="width:100%;top:0px;display:none;line-height:45px;">
			<div class='j-right j-margin j-xxxlarge'onclick="$('#menu_modal').fadeOut('fast')">&times</div>
			<br class='j-clearfix'>
			<a href="<?= file_location('home_url','');?>" class="j-bar-item">Home</a>		
			<a href="#testimonial"class="j-bar-item"onclick="$('#menu_modal').fadeOut('fast')">Testimonial</a>
			<a href="<?= file_location('home_url','misc/about_us/');?>" class="j-bar-item">About Us</a>
			<a href="<?= file_location('home_url','misc/faq/');?>" class="j-bar-item">Frequently Asked Questions</a>
			<a href="<?= file_location('home_url','misc/contact_us/');?>"style=""class="j-bar-item">Contact Us</a>
		</div>
	</div>
</nav>

