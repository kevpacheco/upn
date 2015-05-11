<?php 
	$cat1 = get_option( "dmg_first_cat", "default" );
	$cat2 = get_option( "dmg_second_cat", "default" );
	$cat3 = get_option( "dmg_third_cat", "default" );
?>
<div class="site-main row container">
	<!-- primera categoria -->
	<?php query_posts('category_name='.$cat1.'&showposts=3');?>
	<?php get_template_part( 'home', 'category' ); ?>
	<!-- segunda categoria -->
	<?php query_posts('category_name='.$cat2.'&showposts=3');?>
	<?php get_template_part( 'home', 'category' ); ?>
	<!-- tercera categoria -->
	<?php query_posts('category_name='.$cat3.'&showposts=3');?>
	<?php get_template_part( 'home', 'category' ); ?>
</div>