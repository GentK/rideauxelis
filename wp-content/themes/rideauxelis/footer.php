<footer>
    <div class="inteco-footer-wrapper footer-wrapper">
        <div class="inteco-footer-container inteco-container clearfix">
            <div class="inteco-footer-column text-center width-100 inteco-item-pdlr inteco-column-15">

                <div id="text-1" class="widget widget_text inteco-widget">
                    <div class="textwidget">
                        <p class="width-50 footer-info"><img class="alignnone size-full wp-image-5803" src="<?php echo get_stylesheet_directory_uri()?>/images/logo-image.png" alt="" width="120" height="24" />
                            <br />
                            <span class="gdlr-core-space-shortcode" style="margin-top: -27px ;"></span>
                        </p>
                        <h3 class="footer-info-title">RIDEAUX ELIS</h3>
                        <a href="tel:+352 661 197 221">+352 661 197 221 </a><br>
                        <a href="mailto:rideauxelis@gmail.com">rideauxelis@gmail.com  </a><br>
                        <a href="tel:+352 661 197 221">116, Rue de Solevre, Differdange - Luxembourg</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inteco-copyright-wrapper">
        <div class="inteco-copyright-container inteco-container clearfix">

            <div class="inteco-copyright-left inteco-item-pdlr">
                <a href="facebook.com" target="_blank">
                    <i class="fa fa-facebook" style="font-size: 17px ;color: #af938f ;margin-right: 12px ;"  ></i>
                </a>
                <a href="instagram.com" target="_blank">
                    <i class="fa fa-instagram" style="font-size: 17px ;color: #af938f ;margin-right: 12px ;"  ></i>
                </a>
            </div>
            <div class="inteco-copyright-right inteco-item-pdlr">Copyright <?php echo the_date("Y")?>, Rideaux Elis, All right reserved</div>
        </div>
    </div>
</footer>
</div>
</div>

<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/js/jquery/jquery.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src=<?php echo get_template_directory_uri() ?>/'plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js"></script>

<script type="text/javascript">
    function setREVStartSize(e) {
        try {
            e.c = jQuery(e.c);
            var i = jQuery(window).width(),
                t = 9999,
                r = 0,
                n = 0,
                l = 0,
                f = 0,
                s = 0,
                h = 0;
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c) jQuery.each(c, function(e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({
                height: f
            })
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d)
        }
    };
</script>
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/plugins/goodlayers-core/plugins/combine/script.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var gdlr_core_pbf = {
        "admin": "",
        "video": {
            "width": "640",
            "height": "360"
        },
        "ajax_url": "#"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/plugins/goodlayers-core/include/js/page-builder.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/js/jquery/ui/effect.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/js/plugins.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/js/isotope.js'></script>
</body>
</html>