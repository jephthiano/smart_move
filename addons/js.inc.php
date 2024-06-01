<script>
<?php
$js = ['general','message'];
foreach($js AS $section){
 require_once(file_location('inc_path',"js/$section.js.php"));
}
?>
</script>