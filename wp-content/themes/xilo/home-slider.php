<header id="myCarousel" class="carousel slide" style="height:400px;">
    <!-- Indicators -->
    
    <ol class="carousel-indicators">
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    	<?php
    		$postCounter = 0; 
            //Mostrar solo los más recientes 4 posts
            query_posts( 'posts_per_page=4' ); 
    		while (have_posts()) : the_post(); ?>
    		<?php 
    			if (has_post_thumbnail()){
        			$post_thumbnail_id = get_post_thumbnail_id();
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
				}else{
					$post_thumbnail_url = get_template_directory_uri() . 
						'/images/placeholder-content-single.jpg';
				}
				$postCounter++;
    		?>
            <div class="item <?php if($postCounter == 1) { echo active; } ?>">
                <a href="<?php the_permalink(); ?>">
                    <div class="fill" style="background-image:url('<?php echo $post_thumbnail_url; ?>');"></div>
                </a>
                <div class="carousel-caption">
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>