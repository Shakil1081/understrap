<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<div class="container">
<?php get_sidebar(); ?>
    <div id="main-content" class="main-content col-md-10">
            <div id="content" class="site-content" role="main">
                <div class="clearfix">
                    <div class="row">
                        <div class="entry-content">
                        <?php while ( have_posts() ) : the_post(); ?>
							<h1>
								<?php the_title();?>
							</h1>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #content -->
        </div>

        <!-- #primary -->
    </div>

<?php get_footer(); ?>
