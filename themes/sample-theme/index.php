<?php /* Template Name: Home*/get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="home-banner"><img src="<?php bloginfo('template_url')?>/assets/img/home-banner.png" alt=""></div>
            <div class="home-main">
                <div class="home-intro">

                    <h1>Max Fitness</h1>

                    <div class="intro-img"><img src="<?php bloginfo('template_url')?>/assets/img/intro-img.jpg" alt=""></div>
                    <p>We are MaxFitness. Your transformation is our passion. We are your personal trainer, nutritionst, your suppliment expert, your lifting partner. We provide the tools, and products you need to burn fat, build muscle, and become your best self</p>
                </div>
            </div>

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();?>