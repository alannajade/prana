<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header();

if(is_front_page()){ ?>
	<div class= "Mission">
        <p>"Our mission is to help people better manage the stress in their lives" <br>	- Chantelle Diachina, <span>founder of prana</span></p>
    </div>
    <hr>  
    <div class= "front-widgets clearfix">
	    <article>
	        <h4>Workplace Wellness</h4>
	        <p>Eka pada koundiyanasana i natarajasana simhasana cobra pose standing split pose a philosophy according to which there is no duality, only a singular state of consciousness. a residential place of people living together, teaching or learning yogic tradition, a dwelling of intensive yoga practice. a state of complete silence and inner awareness, reflection, a process of introspect. bliss, ecstasy. mooladhara chakra mulabhanda shoulderstand, supported shoulderstand. the five elements: earth, water, fire, air and ether. vital energy force sustaining life and creation, breath, life, vitality..</p>
	        </article>
	    <article>
	        <h4>Yoga</h4>
	        <p>Bhujapidasana supta padangusthasana uttana shishosana utthita parsvakonasana handstand dolphin pose revolved side angle pose lion pose abhyantara anugraha avesah energy center located in the heart region, fourth of the seven chakras. inner or internal. mayashakti one who has gone beyond the three gunas. sat shabda brahman spiritually enlightened soul, who can dispel darkness, ignorance and illusion from the mind and enlighten the consciousness of a devotee/disciple, teacher, spiritual preceptor, spiritual teacher. the process of a worldly life, the cycle of life caused by birth, death and rebirth. tortoise pose. vayu tattwa.</p>
	    </article>
	    <article>
	        <h4>Speaking/Events</h4>
	        <p>Apanasana, supta balasana karnapidasana sukasana, sukhasana sunbird pose a site in kashmir where the shiva sutras are said to be carved in the face-down surface of a rock, called shankarpal, lying in a river. agnisar kriya breathing practice in which a soft "humming bee" sound is produced during exhalation to stimulate the ajna chakra dukha intellectual ignorance, can be removed by studying and understanding spiritual texts. loincloth pancha tattwa quality unwavering purity. shastra state of meditation in which one experiences perception of worldly activities and then god-consciousness in the background. the practice of kundalini yoga.</p>
	    </article>
	</div>
<?php } else if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( is_front_page() ) { ?>
					<h2 class="entry-title"><?php the_title(); ?></h2>
				<?php } else { ?>	
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php } ?>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'boilerplate' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'boilerplate' ), '', '' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
				<?php comments_template( '', true ); ?>
<?php endwhile; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>