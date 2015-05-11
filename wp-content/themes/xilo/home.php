<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inkness
 */

get_header(); ?>
<div>
    <?php get_template_part( 'home', 'slider' ); ?>	
</div>
<div id="content" class="site-content row clearfix clear">
<div class="container col-md-12"> 
	<main id="primary-home" class="site-main  content-area col-md-12" role="main">
		<?php get_template_part( 'home-cat-list' ); ?>
	</main><!-- #main -->
</div>
</div><!-- #content -->
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>