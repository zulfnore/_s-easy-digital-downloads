<?php
/**
 * the closing of the main content elements and the footer element
 */
?>

			</div>
		</div>
	</div>

	<div class="footer-area full">
		<div class="main">
			<footer id="colophon" class="site-footer inner" role="contentinfo">
				<span class="site-info">
					<?php echo get_theme_mod( 'sdm_credits_copyright', '&copy; ' . date( 'Y' ) ); ?>
				</span>
			</footer>
		</div>
	</div>

<?php wp_footer(); ?>

</body>
</html>