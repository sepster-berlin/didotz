<?php 
/*
	Template Name: No title WAZZZ

*/
get_header(); ?>

<?php 
	if(have_posts() ):

		while (have_posts() ): the_post(); ?>

			<h4>This TITLE NEva changes coz I say so!</h4>
			<small>Say when? <?php the_time( 'F j, Y' );  ?></small>
			<p><?php the_content(); ?> </p>

			<hr/>


		<?php endwhile; 
	endif; 
		?>






<?php get_footer(); ?>