<?php
$banner_option = trim(nimbus_get_option('banner_option'));
$reminder_images = trim(nimbus_get_option('reminder_images'));
$frontpage_option = trim(get_option('show_on_front'));
?>

<div class="row">
    <div id="frontpage_banner" class="span12 center none">
        <?php 
            if (is_home() || is_front_page()){
                echo do_shortcode("[metaslider id=36]");
            }
        ?>
    </div>
</div>