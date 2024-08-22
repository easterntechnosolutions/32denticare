<?php
/**
 * The front-page.php corresponds to the "static front page"
 * when setting static front page in Settings > Reading 
 */
?>

<?php  get_header(); ?>

<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <!-- SLIDER -->
                    <div class="rev_slider_wrapper fullwidthbanner-container">
                        <div id="rev-slider2" class="rev_slider fullwidthabanner">
                            <ul>
                                <?php if (have_rows('slider_image', 'option')): ?>
                                    <?php while (have_rows('slider_image', 'option')): the_row(); 
                                        $desktop_image = get_sub_field('home_slider_image', 'option');
                                        $mobile_image = get_sub_field('mobile_image', 'option'); ?>
                                        <li>
                                            <?php
                                                $image_id = $desktop_image['id'];
                                                $mobile_image_id = $mobile_image['id'];
                                                
                                                $desktop_image_srcset = wp_get_attachment_image_srcset($image_id, 'full');
                                                $mobile_image_srcset = wp_get_attachment_image_srcset($mobile_image_id, 'full');

                                                $desktop_sizes = wp_get_attachment_image_sizes( $image_id, 'full' );
                                                $mobiles_sizes = wp_get_attachment_image_sizes( $image_id, 'full' );
                                            ?>
                                            <?php 
                                                if ( wp_is_mobile() ) {
                                                    echo '<img width="1200" height="800" decoding="async" loading="lazy" class="ko-mobile" src="' . esc_url(wp_get_attachment_image_url($mobile_image_id, 'medium_large')) . '" srcset="' . esc_attr($mobile_image_srcset) . '" sizes="' . esc_attr($mobiles_sizes) . '" alt="Kravico Banners">';
                                                } else {
                                                    echo '<img width="1920" height="850" decoding="async" loading="lazy" class="ko-desktop" src="' . esc_url(wp_get_attachment_image_url($image_id, 'full')) . '" srcset="' . esc_attr($desktop_image_srcset) . '" sizes="' . esc_attr($desktop_sizes) . '" alt="Kravico Banners">';
                                                }
                                            ?>
                                        </li>
                                        
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- END SLIDER -->
                    <?php
                    $count = 1;
                    if( have_rows('content_blocks') ) {
                        while( have_rows('content_blocks') ): the_row(); ?>
                            <section id="content_block_<?php echo $count; ?>" class="content_blocks_lists content_block_<?php echo $count; ?>">
                                <?php
                                    echo $sub_content_block = get_sub_field('content_block');
                                ?>
                            </section><?php
                            $count++;
                        endwhile;
                    } else { ?>
                        <div class="page_contents_section about-section">
                            <div class="auto-container"><?php
                                if( '' !== get_post()->post_content ) {
                                    the_content();
                                } else {
                                    echo "<h5 style='font-weight: bold'>No Contents Found.</h5>";
                                } ?>
                            </div>
                        </div><?php
                    } ?>
                </div>
                <!--.page-content-->
            </div>
            <!--#inner-content-->
        </div>
        <!--site-content-->
    </div>
</div>

<style>
    /* Hide desktop image on screens smaller than 991px */
    .desktop-image {
        display: block;
    }

    @media screen and (max-width: 991px) {
        .desktop-image {
            display: none;
        }

        .mobile-image {
            display: block;
        }
    }
</style>



<?php  get_footer(); ?>
