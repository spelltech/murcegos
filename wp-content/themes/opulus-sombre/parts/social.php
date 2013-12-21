<ul id="social">
    <?php if (nimbus_get_option('facebook_url') != "") { ?>
        <li id="facebook_footer_button"><a target="_blank" href="<?php echo nimbus_get_option('facebook_url') ?>"></a></li>
    <?php } ?>
    <?php if (nimbus_get_option('linkedin_url') != "") { ?>				
        <li id="linkedin_footer_button"><a target="_blank" href="<?php echo nimbus_get_option('linkedin_url') ?>"></a></li>
    <?php } ?>
    <?php if (nimbus_get_option('twitter_url') != "") { ?>						
        <li id="twitter_footer_button"><a target="_blank" href="<?php echo nimbus_get_option('twitter_url') ?>"></a></li>
    <?php } ?>
    <?php if (nimbus_get_option('youtube_url') != "") { ?>						
        <li id="youtube_footer_button"><a target="_blank" href="<?php echo nimbus_get_option('youtube_url') ?>"></a></li>
    <?php } ?>	
    <?php if (nimbus_get_option('google_plus_url') != "") { ?>						
        <li id="google_plus_footer_button"><a target="_blank" href="<?php echo nimbus_get_option('google_plus_url') ?>"></a></li>
    <?php } ?>	
    <li id="rss_footer_button"><a target="_blank" href="<?php bloginfo('rss2_url'); ?>"></a></li>
</ul>