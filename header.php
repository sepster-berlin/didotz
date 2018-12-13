<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title> Didotz GmbH</title>
	<?php wp_head(); ?>
</head>


<?php

	if (is_front_page() ): 
		$didotz_classes = array('didotz_class','my_class');
	else:
		$didotz_classes = array('some_other_classes');
	endif;

?>


<body <?php body_class($didotz_classes); ?>>

<?php wp_nav_menu(array('theme_location' =>'primary' )); ?>
