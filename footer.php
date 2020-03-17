<?php
/**
 * Default Footer Template
 *
 */
?>

<footer class="site-footer" role="contentinfo">


    <?php get_template_part( 'parts/icons', 'social' ); ?>



<main>
	<div class="column1"><h4>ABOUT US</h4><br>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>

	<div class="column2"><h4>MENU</h4><br>
	<a href="https://en.wikipedia.org/wiki/Brown_bear" target="_blank">Home</a><br>
		<a href="https://hopsie.liveolife.net/sample-page/" target="_blank">Sample page</a><br>
			<a href="https://hopsie.liveolife.net/sample-page/" target="_blank">Sample page1</a>
	</div>
   <div class="column3">
        <label><h4>NEWSLETTER</h4><br>
          <input type="text" placeholder="Your Email Address">
        </label>
    </div>
</main>



     <p class="copyright">&copy; <?php echo date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?></p>
</footer>

<?php wp_footer(); ?>

<?php
// don't track admins or editors and google analytics option is filled in
if ( ! current_user_can( 'edit_pages' ) && get_option( 'client_google_analytics' ) ) :
    $analytics_id = get_option( 'client_google_analytics' ); ?>

    <!-- Google Universal Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', '<?php echo $analytics_id; ?>', 'auto');ga('send', 'pageview');
    </script>
<?php endif; ?>

</body>
</html>
