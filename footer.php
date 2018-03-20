<footer>
	<div id="footerTop">
	    <div class="container">
		    <div class="row">
			    <div class="col col-12 col-md-4 footer-left">
				    <div>
					    <div>
						    <?php dynamic_sidebar('footer-left'); ?>
					    </div>
				    </div>
			    </div>
			    <div class="col col-12 col-md-4">
				    <div>
					    <div>
						    <?php dynamic_sidebar('footer-center'); ?>
					    </div>
				    </div>
			    </div>
			    <div class="col col-12 col-md-4 footer-right">
				    <div>
					    <div>
						    <?php dynamic_sidebar('footer-right'); ?>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
	</div>

    <div id="footerBottom" class="clearfix">
        <div id="footerCopyInfo" class="container">
					<div class="left footersocial">
						<a href="https://www.facebook.com/SoundTherapyHearing/" target="_blank"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/02/Facebookwhite_Icon.png" /><a href="#" target="_blank"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/02/Twitterwhite_Icon.png" /><a href="#" target="_blank"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/02/Linkedinwhite_Icon.png" />
					</div>
            <div class="right">
                <p id="footercopy">Copyright© <?php echo get_bloginfo('name'); ?> <?php echo date('Y'); ?></p>
            </div>
        </div>
    </div>
</footer>

<?php
/*--- if boxed open wrapper---*/
if(get_option('modular_wp_site_style') == "Boxed"){ echo '</div>'; }
?>

<?php if(get_option('modular_wp_footer_js') != ''){ echo '<script>'.get_option('modular_wp_footer_js').'</script>'; } ?>
<?php wp_footer(); ?>

<script type="text/javascript">
(function ($) {
    $.fn.fontResize = function (options) {
        var settings = {
            increaseBtn: $('#incfont'),
            decreaseBtn: $('#decfont')
        };

        options = $.extend(settings, options);

        return this.each(function () {
            var element = $(this), clicks = 0;

            options.increaseBtn.on('click', function (e) {
                e.preventDefault();
                if (clicks < 5) {
                    var baseFontSize = parseInt(element.css('font-size'));
                    var baseLineHeight = parseInt(element.css('line-height'));
                    element.css('font-size', (baseFontSize + 2) + 'px');
                    element.css('line-height', (baseLineHeight + 2) + 'px');
                    clicks += 1;
                }
            });

            options.decreaseBtn.on('click', function (e) {
                e.preventDefault();
                if (clicks > 0) {
                    var baseFontSize = parseInt(element.css('font-size'));
                    var baseLineHeight = parseInt(element.css('line-height'));
                    element.css('font-size', (baseFontSize - 2) + 'px');
                    element.css('line-height', (baseLineHeight - 2) + 'px');
                    clicks -= 1;
                }
            });
        });
    };
})(jQuery);

jQuery(function () {
    jQuery(' h1, h2, h3, h4, h5, h6, p, p span, input, textarea').fontResize();
});


<?php
echo 'var ajaxurl = "' . admin_url('admin-ajax.php') . '"';
?>


</script>
</body>
</html>
