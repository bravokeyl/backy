		</div><!-- #content -->
		<div class="action-bar">
			<div class="container">
				<div class="row">
					<?php
	          $cemail = get_theme_mod( 'contact_email' );
	          $phno = get_theme_mod( 'contact_number' );
						$aaddr = get_theme_mod( 'contact_address' );
	        ?>
					<div class="bk-address-con col-md-7">
						<p><i class="fa fa-map-marker"></i><?php echo $aaddr;?></p>
					</div>
					<div class="bk-tel-mail-con col-md-5">
						<div class="bk-tel-mail">
							<a class="bk-phone" href="tel:<?php echo $phno;?>"><i class="fa fa-phone"></i><span><?php echo $phno;?></span></a>
							<a class="bk-mail" href="mailto:<?php echo $cemail;?>"><i class="fa fa-paper-plane-o"></i><?php echo $cemail;?></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
		<?php get_template_part( 'template-parts/footer/site', 'info' );?>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
