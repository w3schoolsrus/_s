<?php
/**
 * Шаблон для отображения всех страниц.
 * Это шаблон, который отображает все страницы по умолчанию.
 * Обратите внимание, что это конструкция страниц WordPress, и что другие «страницы» на вашем сайте WordPress могут использовать другой шаблон.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package _s
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
<?php
get_sidebar();
get_footer();
