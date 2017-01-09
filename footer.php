		</div><!-- #content -->
		<div class="action-bar">
			<div class="container">
				<div class="row">
					<?php
	          $cemail = get_theme_mod( 'contact_email' );
	          $phno = get_theme_mod( 'contact_number' );
	        ?>
					<div class="col-md-6 col-sm-5">
						<p><i class="fa fa-map-marker"></i>Identity Experts, Media Centre, Huddersfield, HD1 1RL</p>
					</div>
					<div class="col-md-2 col-sm-3">
						<p><a href="tel:<?php echo $phno;?>"><i class="fa fa-phone"></i><span="number><?php echo $phno;?></span></a></p>
					</div>
					<div class="col-md-4 col-sm-4">
						<p><a href="mailto:<?php echo $cemail;?>"><i class="fa fa-paper-plane-o"></i><?php echo $cemail;?></a></p>
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
