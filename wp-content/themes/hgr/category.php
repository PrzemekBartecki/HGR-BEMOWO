<?php get_header(); ?>

<div class="blockMenu"> </div>
<section class="bgNews bgNews2" >

	<div class="container">

		<article class="post margin1">

			<?php if (have_posts() ) : while (have_posts() ) :  the_post(); ?>
				<!-- post -->
				<div class="postNews margin5">
					<div class="postPicture">
						<?php
						if ( has_post_thumbnail() )
							the_post_thumbnail();
						else
							echo '<img class="thePostThum" src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'images/logo.png' . '" alt="" />';
						?>
					</div>

					<span class="btn place"><?php the_category() ?></span>
					<p class="titleSize"><?php the_title();?></p>
					<p><?php the_excerpt();?></p>
					<a href="<?php the_permalink(); ?>" class="btn margin4">dalej</a>

					<p class="infoPost">Napisane przez <?php the_author() ?></p>
					<hr>
					<p class="infoPost margin3 "><?php $data = get_the_date(); echo $data; ?></p>

					<?php wp_reset_postdata() ?>
				</div>

			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>

				<!-- no posts found -->
			<?php endif; ?>
		</article>

	</div>
</section>

<?php get_footer(); ?>


