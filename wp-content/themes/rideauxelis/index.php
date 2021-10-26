<?php get_header()?>
            <div class="inteco-page-wrapper" id="inteco-page-wrapper" >
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper " style="padding: 320px 0px 160px 0px;"  id="gdlr-core-wrapper-1" >
                        <div class="gdlr-core-pbf-background-wrap"  >
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/images/homepage-image.png) ;background-size: cover ;background-position: center ;"  data-parallax-speed="0.1"  ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js "   >
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container" >
                                <div class="gdlr-core-pbf-element" >
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"  >
                                        <div class="gdlr-core-title-item-title-wrap "  >
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 48px ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Dévis gratuit sur place + montage gratuit</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" >
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "   >
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 710px ;"   >
                                            <div class="gdlr-core-pbf-element" >
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"  >
                                                    <a class="gdlr-core-button  gdlr-core-button-bottom-border-on-text gdlr-core-button-no-border" href="#" style="font-size: 20px ;letter-spacing: 0px ;color: #ffffff ;padding: 0px 0px 0px 0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"  >
                                                        <span class="gdlr-core-border-on-text" style="border-bottom-width: 12px ;border-color: #c4aa42 ;margin-top: -16px ;"  ></span>
                                                        <span class="gdlr-core-content" >Check our products</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 75px 0px 30px 0px;" data-skin="Dark Filter" >
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #000000 ;"  ></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js "   >
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container" >
                                <div class="gdlr-core-pbf-element" >
                                    <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-modern" style="padding-bottom: 25px ;"  >
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title text-center " style="font-size: 48px ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Our Products</h3>
                                        <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 filter-container clearfix" data-layout="fitrows" >


                                            <?php
                                            $args = array(
                                                'post_type'   => 'post',
                                                'posts_per_page' => 6
                                            );
                                            $products = new WP_Query( $args );

                                            if ( $products->have_posts() ) :
                                                ?>
                                                <?php while( $products->have_posts() ) : $products->the_post() ?>
                                            <div class="gdlr-core-item-list class1 gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 gdlr-core-column-20" >
                                                <div class="gdlr-core-portfolio-modern h-100"  >
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon h-100"  >
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover h-100" >
                                                            <img class="h-100 product-image" src="<?php echo the_post_thumbnail_url();?> "alt="" width="500" height="500" title="simone-hutsch-616158-unsplash" />
                                                            <span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"  >
                                                                <span class="gdlr-core-image-overlay-content" >
                                                                    <span class="gdlr-core-portfolio-title gdlr-core-title-font "  >
                                                                        <a href="../portfolio/zentek-center-building/index.html" ><?php echo the_title()?></a>
                                                                    </span>
                                                                    <span class="gdlr-core-portfolio-icon-wrap" >
                                                                        <a class="gdlr-core-lightgallery gdlr-core-js "  href="upload/simone-hutsch-616158-unsplash.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                                            <i class="gdlr-core-portfolio-icon arrow_expand" ></i>
                                                                        </a>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile ?>
                                            <?php endif ?>
                                        </div>
                                        <div class="gdlr-core-load-more-wrap gdlr-core-js gdlr-core-center-align gdlr-core-item-pdlr" data-ajax="gdlr_core_portfolio_ajax" data-target="gdlr-core-portfolio-item-holder" data-target-action="append" >
                                            <a href="#" class="gdlr-core-load-more gdlr-core-button-color" data-ajax-name="paged" data-ajax-value="2" style="margin-top: 35px ;"  >Load More Works</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="margin: 0px 0px 0px 0px;padding: 78px 0px 55px 0px;" >
                        <div class="gdlr-core-pbf-background-wrap"  >
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/images/showroom-image.jpg) ;background-size: cover ;background-position: center ;"  data-parallax-speed="0.2"  ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js "  data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8"  >
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" style="max-width: 1280px ;" >
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first"  id="gdlr-core-column-1" >
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 33px 0px 0px;padding: 65px 30px 22px 30px;"   data-sync-height="service-3-height"  >
                                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #000000 ;opacity: 0.65 ;"  ></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"   >
                                            <div class="gdlr-core-pbf-element" >
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" style="padding-bottom: 26px ;"  >
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"  >
                                                        <img src="upload/hp3-serviceicon-1.png" alt="" width="36" height="36" title="hp3-serviceicon-1" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element" >
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px ;"  >
                                                    <div class="gdlr-core-title-item-title-wrap "  >
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 19px ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;"  >Dévis gratuit sur place</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element" >
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;"  >
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px ;font-weight: 400 ;text-transform: none ;color: #c7c7c7 ;"  >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20"  id="gdlr-core-column-2" >
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 16px 0px 16px;padding: 65px 30px 22px 30px;"   data-sync-height="service-3-height"  >
                                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #000000 ;opacity: 0.65 ;"  ></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"   >
                                            <div class="gdlr-core-pbf-element" >
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" style="padding-bottom: 26px ;"  >
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"  >
                                                        <img src="upload/hp3-serviceicon-2.png" alt="" width="42" height="33" title="hp3-serviceicon-2" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element" >
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px ;"  >
                                                    <div class="gdlr-core-title-item-title-wrap "  >
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 19px ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;"  >Montage gratuit</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element" >
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;"  >
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px ;font-weight: 400 ;text-transform: none ;color: #c7c7c7 ;"  >
                                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20"  id="gdlr-core-column-3" >
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px 33px;padding: 65px 30px 22px 30px;"   data-sync-height="service-3-height"  >
                                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #000000 ;opacity: 0.65 ;"  ></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"   >
                                            <div class="gdlr-core-pbf-element" >
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" style="padding-bottom: 26px ;"  >
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"  >
                                                        <img src="upload/hp3-serviceicon-3.png" alt="" width="36" height="35" title="hp3-serviceicon-3" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element" >
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px ;"  >
                                                    <div class="gdlr-core-title-item-title-wrap "  >
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 19px ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;"  >Smartly Execute</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element" >
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;"  >
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px ;font-weight: 400 ;text-transform: none ;color: #c7c7c7 ;"  >
                                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo get_footer()?>