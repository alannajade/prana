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

		<footer>
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
		</footer>
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