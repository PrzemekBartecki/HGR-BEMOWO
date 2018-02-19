<?php get_header("front"); ?>

<div class="homePicture bg" id="home">

	<?php echo '<img class="thePostThum" src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'images/logo.png' . '" alt="logo HGR-u" />';?>

	<p class="motto">
		Niesiemy chętną pomoc bliźnim od 2002 r.<br>

	</p>
	<a href="#dolacz"> <button class="join">dołącz do nas  </button> </a>
</div>

<a href="http://localhost/bemowo/#home">
	<i class="fas fa-angle-up"></i>
</a>

<!--
===========================
***** Aktualności *****
==========================
-->
<section class="bgNews" id="aktualnosci">

	<div class="container">
		<p class="aktualnosci">Aktualności</p>
		<article class="post">
			<?php
			$newsPost = new WP_Query ([
					'post_type' => 'post',
					'posts_per_page' => 2,
					'category_name' => 'aktualnosci',
			])
			?>
			<?php if ($newsPost-> have_posts() ) : while ($newsPost-> have_posts() ) :  $newsPost-> the_post(); ?>
				<!-- post -->
				<div class="postNews">
					<div class="postPicture">
						<?php
						if ( has_post_thumbnail() )
							the_post_thumbnail();
						else
							echo '<img class="thePostThum" src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'images/logo.png' . '" alt="logo HGR" />';
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

		<a href="http://localhost/bemowo/category/aktualnosci/" class="btn btn--news ">zobacz wszystkie</a>
	</div>
</section>
<!--
===========================
***** O nas *****
==========================
-->
<section>
	<div class="sectionPicture bg aboutBg margin2" id="onas">
		<p class="sectionPicture--size">
			o nas
		</p>
	</div>
	<section class="container normal">
		<article class="readSpace">
			<?php
			$aboutPage = new WP_Query ([
				'post_type' => 'page',
				'pagename'=>'o-nas'
			])
			?>
			<?php if ($aboutPage-> have_posts() ) : while ($aboutPage-> have_posts() ) :   $aboutPage-> the_post(); ?>
			  <!-- post -->
				<?php the_content() ?>
			<?php endwhile; ?>
			  <!-- post navigation -->
			<?php else: ?>
			  <!-- no posts found -->
			<?php endif; ?>



		</article>
	</section>
</section>
<!--
===========================
***** oferta *****
==========================
-->
<section>
	<div class="sectionPicture bg oferBg margin1" id="oferta">
		<p class="sectionPicture--size">
			oferta
		</p>
	</div>
	<section class="container normal">
		<article class="readSpace">
			<?php
			$aboutPage = new WP_Query ([
				'post_type' => 'page',
				'pagename'=>'oferta'
			])
			?>
			<?php if ($aboutPage-> have_posts() ) : while ($aboutPage-> have_posts() ) :   $aboutPage-> the_post(); ?>
				<!-- post -->
				<?php the_content() ?>
			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>

		</article>
	</section>
</section>
<!--
===========================
***** dolacz do nas *****
==========================
-->
<section>
	<div class="sectionPicture bg dolaczBg margin1" id="dolacz">
		<p class="sectionPicture--size">
			dołącz do nas
		</p>
	</div>
	<section class="container normal">
		<article class="readSpace">
			<?php
			$aboutPage = new WP_Query ([
				'post_type' => 'page',
				'pagename'=>'dolacz-do-nas'
			])
			?>
			<?php if ($aboutPage-> have_posts() ) : while ($aboutPage-> have_posts() ) :   $aboutPage-> the_post(); ?>
				<!-- post -->
				<?php the_content() ?>
			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>

		</article>
	</section>
</section>

<!--
===========================
***** galeria *****
==========================
-->
<section>
	<div class="sectionPicture bg galeryBg margin1" id="galeria">
		<p class="sectionPicture--size">
			galeria
		</p>
	</div>
	<section class="container normal">
		<article class="readSpace">
			<?php
			$aboutPage = new WP_Query ([
				'post_type' => 'page',
				'pagename'=>'galeria'
			])
			?>
			<?php if ($aboutPage-> have_posts() ) : while ($aboutPage-> have_posts() ) :   $aboutPage-> the_post(); ?>
				<!-- post -->
				<?php the_content() ?>
			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>

		</article>
	</section>
</section>
<!--
===========================
***** Kontakt *****
==========================
-->
<section>
	<div class="sectionPicture bg kontaktBg margin1" id="kontakt">
		<p class="sectionPicture--size">
			kontakt
		</p>
	</div>
	<section class="container normal">
		<article class="readSpace">
			<?php
			$aboutPage = new WP_Query ([
				'post_type' => 'page',
				'pagename'=>'kontakt'
			])
			?>
			<?php if ($aboutPage-> have_posts() ) : while ($aboutPage-> have_posts() ) :   $aboutPage-> the_post(); ?>
				<!-- post -->
				<?php the_content() ?>
			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>

		</article>
	</section>
</section>











<?php get_footer(); ?>



