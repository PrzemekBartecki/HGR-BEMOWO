<?php get_header(); ?>


<div class="blockMenu"> </div>
<section class="margin1a emptySite" >

	<div class="container normal">

		<article class="readSpace margin1">

			<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
				<!-- post -->
				<p class="titleSize"><?php the_title() ?></p>
				<?php the_post_thumbnail();?>
				<?php the_content();?>


			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>

				<!-- no posts found -->
			<?php endif; ?>
		</article>

	</div>
</section>

<?php get_footer(); ?>


