<?php /*Template Name: Products */
get_header();?>

<div class="inteco-page-title-wrap  inteco-style-custom inteco-center-align">
    <div class="inteco-header-transparent-substitute"></div>
    <div class="inteco-page-title-overlay"></div>
    <div class="inteco-page-title-container inteco-container">
        <div class="inteco-page-title-content inteco-item-pdlr">
            <h1 class="inteco-page-title">Gallery</h1></div>
    </div>
</div>
<div class="inteco-page-wrapper" id="inteco-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 100px 20px 30px 20px;">
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                            <div class="gdlr-core-title-item-title-wrap ">
<!--                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-transform: none ;">Grid Style</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;">With Space</span></div>
-->                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid">
                            <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                <?php
                                $args = array(
                                    'post_type'   => 'post',
                                    'posts_per_page' => -1
                                );
                                $products = new WP_Query( $args );

                                if ( $products->have_posts() ) :
                                while( $products->have_posts() ) : $products->the_post()
                                ?>
                                <div class="gdlr-core-item-list class1 gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 gdlr-core-column-20">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image h-100">
                                        <a class="gdlr-core-lightgallery gdlr-core-js h-100" href="<?php echo the_post_thumbnail_url()?>" data-sub-html="<?php echo the_title()?>" data-lightbox-group="gdlr-core-img-group-1"><img src="<?php echo the_post_thumbnail_url()?>" alt="" width="700" class="h-100"  title="Image Title" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                    </div>
                                    <div class="gdlr-core-gallery-caption gdlr-core-info-font"><?php echo the_title()?></div>
                                </div>
                                <?php endwhile ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer()?>
