<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<nav id="nav-above" class="navigation">
					<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'boilerplate' ) . ' %title' ); ?>
					<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'boilerplate' ) . '' ); ?>
				</nav><!-- #nav-above -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1><?php the_title(); ?></h1>
					<div class="entry-meta">
						<?php boilerplate_posted_on(); ?>
					</div><!-- .entry-meta -->
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'boilerplate' ), 'after' => '' ) ); ?>
					</div><!-- .entry-content -->
<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<br><hr><br>
					<div id="entry-author-info">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'boilerplate_author_bio_avatar_size', 120 ) ); ?>
						<h3><?php printf( esc_attr__( 'About %s', 'boilerplate' ), get_the_author() ); ?></h3>
						<div class="author-desc"><?php the_author_meta( 'description' ); ?></div>
						<a class="author-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
							<?php printf( __( 'View all posts by %s &rarr;', 'boilerplate' ), get_the_author() ); ?>
						</a>
					</div><!-- #entry-author-info -->
<?php endif; ?>	
				</article><!-- #post-## -->
				<nav id="nav-below" class="navigation">
					<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'boilerplate' ) . ' %title' ); ?>
					<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'boilerplate' ) . '' ); ?>
				</nav><!-- #nav-below -->
				<?php comments_template( '', true ); ?>
<?php endwhile; // end of the loop. ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
