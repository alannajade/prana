<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
		</section><!-- #main -->

		<footer class="clearfix">
			<div>
		<?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with four columns of widgets.
			 */
			//get_sidebar( 'footer' );
		?>
		    <div class="Facebook-Blurb">
		        <h4>Prana on Facebook</h4>
		            <p>Adho mukha vrksasana pose ardha chandrasana eka pada rajakapotasana ii marichyasana iii uddiyana bandha upavistha konasana utthita parsvakonasana virabhadrasana iii eagle pose ear pressure pose cat pose root bond king dancer pose, lord of the dance pose ii yoga boat pose marichi's pose iii, seated twist compass pose easy pose reclining hero pose extended triangle pose.</p>
		    </div>
		    <div class="Blog-Post">    
		        <h4>Latest Blog Post</h4>
		            <p>Adho mukha vrksasana pose ardha chandrasana eka pada rajakapotasana ii marichyasana iii uddiyana bandha upavistha konasana utthita parsvakonasana virabhadrasana iii eagle pose ear pressure pose cat pose root bond king dancer pose, lord of the dance pose ii yoga boat pose marichi's pose iii, seated twist compass pose easy pose reclining hero pose extended triangle pose.</p>
		    </div>    
		    <div class="Twitter-Blurb">
		        <h4>@pranalondon on Twitter</h4>
		            <p>Adho mukha vrksasana pose ardha chandrasana eka pada rajakapotasana ii marichyasana iii uddiyana bandha upavistha konasana utthita parsvakonasana virabhadrasana iii eagle pose ear pressure pose cat pose root bond king dancer pose, lord of the dance <a href = "">pose ii</a> yoga boat pose marichi's pose iii, seated twist compass pose easy pose reclining hero pose extended triangle pose.</p>
		    </div>
			</div>
		</footer>
	<?php if(is_front_page()): ?>
		<div class= "Contact-Us">
            <div class="clearfix">
              <p>
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
		   <div class="copyright">Copyright &copy; <?php date('Y'); ?> <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> Yoga Wellness <a href ="">Privacy Policy</a></div>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	</body>
</html>