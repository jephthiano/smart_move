<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/addons/function.inc.php'); // all functions
//for meta
$follow_type = 'follow';
$image_link = file_location('media_url','home/logo.png');
$image_type = substr($image_link,-3);
$page = "HOME | ".strtoupper(get_xml_data('company_name'));
$page_name = $page." | ".get_xml_data('seo_tag');
$page_url = file_location('home_url','');
$keywords = get_json_data('keywords','about_us')."|".$page_name;
$description = $page_name;
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once(file_location('inc_path','meta.inc.php'));?>
<?php if(!isset($_SESSION['patient_id'])){?>
<link rel="stylesheet"href="<?=file_location('home_url','plugins/landing.css');?>">
<link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<?php }?>
<title><?=$page_name?></title>
</head>
<body id="boy"class=''style="font-family:Roboto,sans-serif;width:100%;"onload="sD(1);">
<?php require_once(file_location('inc_path','page_load.inc.php')); //page load?>
<?php require_once(file_location('inc_path','navigation.inc.php'));//navigation?>
<!-- header starts -->
<section title="Header">
    <?php require_once(file_location('inc_path','header.inc.php'));//header?>
</section>
<!-- services starts -->
<section title="Services"class='j-color4 j-home-padding'style=";padding-top:40px;">
    <?php require_once(file_location('inc_path','services.inc.php'));//services?>
</section>
<!-- operation mode -->
<section title="Operation Mode"class='j-color6 j-home-padding'style="padding-top:40px;">
    <?php require_once(file_location('inc_path','operation_mode.inc.php'));//operation_mode?>
</section>
<!-- testimony -->
<section id='testimonial'title="Testimonial"class='j-color2 j-home-padding'style="padding-top:40px;">
    <?php require_once(file_location('inc_path','testimony.inc.php'));//testimony?>
</section>
<!-- map -->
<section title="Map"class='j-color6 j-home-padding'style="padding-top:40px;">
    <?php require_once(file_location('inc_path','location.inc.php'));//location?>
</section>
<?php require_once(file_location('inc_path','footer.inc.php'));?>
<?php require_once(file_location('inc_path','js.inc.php'));?>
</body>
</html>