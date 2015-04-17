<footer class="main">
    <div class="topfooter">
        <div class="address">
          <ul>
            <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo of_get_option( 'zd_contact_email'); ?>"><?php echo of_get_option( 'zd_contact_email'); ?></a></li>
            <?php
                $phoneNumber = of_get_option( 'zd_contact_phone');
                $removeAlpha = preg_replace("/[^A-Za-z0-9 ]/", '', $phoneNumber);
                $trimmedPhone = preg_replace('/\s+/', '', $removeAlpha);
                $youtube = of_get_option( 'zd_youtube');
                $linkedin = of_get_option( 'zd_linkedin');
            ?>
            <li><i class="fa fa-phone"></i><a href="tel:<?php echo $trimmedPhone; ?>"><?php echo $phoneNumber; ?></a></li>
            <li><a href="<?php echo get_page_link(20); ?>">Job Opportunities</a></li>
          </ul>
        </div>
        <div class="social">
          <ul>
            <?php if (strlen($youtube) != 0) { ?>
              <li><a target="_blank" href="<?php echo $youtube; ?>"><i class="fa fa-youtube"></i></a></li>
            <?php } ?>
            <?php if (strlen($linkedin) != 0) { ?>
              <li><a target="_blank" href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
            <?php } ?>
          </ul>
        </div>
    </div>
    <div class="bottomfooter">
        <div class="copyright">
            <?php echo of_get_option( 'zd_copyright'); ?>
        </div>
    </div>
</footer>
</section>
<div id="mobmenu">
  <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
</div>
<?php include('lightbox.php'); ?>
<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>
</body>
</html>