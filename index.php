<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
	</article>

<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
