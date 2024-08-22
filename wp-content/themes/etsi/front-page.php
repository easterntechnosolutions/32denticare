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
                                            $image = get_sub_field('home_slider_image', 'option'); ?>
                                            <?php if (!empty($image)): ?>
                                                <li>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" loading="lazy"/>
                                                    <div style="color: #000"><?php get_field('slider_text','option') ?></div>
                                                    <div style="color: #000"><?php get_field('short_slider_text','option') ?></div>
                                                </li>
                                            <?php endif; ?>
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

<?php  get_footer(); ?>
