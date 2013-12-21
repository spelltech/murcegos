<?php
$top_scripts = nimbus_get_option('top_scripts_multi');
$bottom_scripts = nimbus_get_option('bottom_scripts_multi');
get_header();
?>

<div id="content_wrap">
    <div class="row">
        <div id="content" class="span12 center none">
            <div class="row">
                <div id="page_content_editable"  class="editable span8">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php if (get_post_meta($post->ID, 'include_image_on_page', true) == "true") { ?>
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('nimbus-post', array('class' => 'page_image'));
                                }
                                ?>
                            <?php } ?>                
                            <?php
                            if ($top_scripts['page'] = 1) {
                                nimbus_scripts_content_top();
                            }
                            ?>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            <?php
                            if ($bottom_scripts['page'] = 1) {
                                nimbus_scripts_content_bottom();
                            }
                            ?>

                            <?php comments_template(); ?>
                            
                        <?php endwhile;
                    else:
                       get_template_part('parts/error-no_results'); 
                endif; ?>
                </div>
<?php get_sidebar(); ?>
            </div>
            <div class="clear"></div>			
        </div>
    </div>
</div>

<?php get_footer(); ?>