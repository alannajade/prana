<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>

<?php // get_sidebar(); ?>

<?php if(is_home()): ?>
        <div class= "Contact-Us">
        <div style="background-color:rgba(0,0,0,0.75); height:450px; width:100%; margin:auto;">
          <p style="color:white; filter:alpha(opacity=100); opacity:1;">
            <h5>CONNECT WITH US</h5>
            <h6>join our mailing list</h6>
            <p>Get the latest news, events &amp; wellness tips from Prana</p>
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
            <form action="http://pranayogawellness.us7.list-manage.com/subscribe/post?u=0bb80f83f32a3a2a9c66d6cef&amp;id=928f017071" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div class="mc-field-group">
                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"placeholder="Enter your Email">
            </div>
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                 <div class="response" id="mce-success-response" style="display:none"></div>
                </div>  <div class="clear"><input type="submit" value="SIGN UP" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </form>
            </div>

            <!--End mc_embed_signup-->
            <nav class= "footer">
                <ul>
                    <li><a class="Pinterest2" href = "//www.pinterest.com">Pinterest</a></li>
                    <li><a class="Facebook2" href = "//www.facebook.com">Facebook</a></li>
                    <li><a class="Twitter2" href = "//twitter.com/PranaLondon">Twitter</a></li>
                    <li><a class="LinkedIn2" href = "//www.linkedin.com">LinkedIn</a></li>
                </ul>
            </nav>
          </p>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
