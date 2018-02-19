<?php get_header(); ?>

<div class="blockMenu"> </div>
<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
	<!-- post -->
<section class="margin1a emptyPost" >
	<section class="container">

		<article class="readSpace">
			<h2 style="margin-top: -50px"><?php the_title() ?></h2>
			<?php the_content() ?>
			<div class="fb-like margin5" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>


			<section class="navPost">
				<div>
					<strong><?php previous_post_link( '<strong>%link</strong>');?></strong>
				</div>
				<div>
					<strong><?php next_post_link( '<strong>%link</strong>');?></strong>
				</div>

			</section>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>

			<!-- no posts found -->
			<?php endif; ?>
		</article>

	</section>
</section>
<?php get_footer(); ?>


