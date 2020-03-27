 <?php  $footerlogo =  of_get_option("footer_logo"); ?>
<?php  $copyrighttext =  of_get_option("copyright-text"); ?>
<?php  $facebooklink =  of_get_option("facebook-link"); ?>
<?php  $instalink =  of_get_option("instagram-link"); ?>
 <?php  $pininterestlink =  of_get_option("pininterest-link"); ?>
 <?php  $twitterlink =  of_get_option("twitter-link"); ?>



</div>
<footer id="footer">
  <div class="footer-section">
    <div class="footer-sec-inner">
      <div class="widget">
            <h4>About</h4>
            <nav id="menu">
                   <?php wp_nav_menu(
                   array( 
                  'theme_location' => '',
                  'menu'            => 'footer menu'
                    ) ); ?>
                </nav> 
          </div>
        <div class="widget">
            <h4>Categories</h4>
           <!--  <ul>
              <li><a href="#">Vegan News</a></li>
              <li><a href="#">Vegan Products</a></li>
              <li><a href="#">Vegan Recipies</a></li>
              <li><a href="#">Vegan Travel</a></li>
              
            </ul> -->
         
          <?php
      if ( is_active_sidebar( 'sidebar-1' ) ) : //check the sidebar if used.
dynamic_sidebar( 'sidebar-1' );  // show the sidebar.
endif;
?>
          </div>
        <div class="widget">
            <h4>Recent Post</h4>
                  <?php
      if ( is_active_sidebar( 'sidebar-2' ) ) : //check the sidebar if used.
dynamic_sidebar( 'sidebar-2' );  // show the sidebar.
endif;
?> 

          </div>
        <div class="widget">
            <h4>Subscribe Newsletter</h4>
            <?php echo do_shortcode('[contact-form-7 id="130" title="Footer Form"]') ?>
            
          </div>
          </div>
      <div class="footer-logo-section">
        <img src="<?php echo $footerlogo; ?>" class="img-responsive" alt="footer-logo">
        <ul>
          <?php
                        $a = 0;
                        if (!empty($facebooklink)) { ?>
                         <li><a href="<?php echo $facebooklink; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> 
                     <?php }
                        ?>
              <?php
                        $a = 0;
                        if (!empty($instalink)) { ?>
                        <li><a href="<?php echo $instalink; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     <?php }
                        ?>
              <?php
                        $a = 0;
                        if (!empty($pininterestlink)) { ?>
                       <li><a href="<?php echo $pininterestlink; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                     <?php }
                        ?><?php
                        $a = 0;
                        if (!empty($twitterlink)) { ?>
                        <li><a href="<?php echo $twitterlink; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <?php }
                        ?>
              
        </ul>
      
    </div>
  </div>
  <div class="footer-inner">
     <div id="copyright">
<!-- &copy; <?php //echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php //echo esc_html( get_bloginfo( 'name' ) ); ?> -->
<p> <?php echo  $copyrighttext; ?> </p>
</div>
  </div>

</footer>
<script src="<?php echo get_template_directory_uri();?>/js/slim.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
  $('#nav-icon1').click(function(){
    $(this).toggleClass('open');
      $('.nav-menu').toggleClass('mobilemenu');
  });
    $('.sub-menu-icon').click(function(){
      $(this).parent().find('.sub-menu').toggleClass("siblings-list");
       $(this).toggleClass('move-class');

 });
 
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
<script > 
  $('#home').owlCarousel({
  loop: true,
  margin: 1,
dots: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})
</script>
<script > 
  $('#demo').owlCarousel({
  loop: true,
  margin: 3,
 items: 3,
 dots:false,
  responsiveClass:true,
  navText: [
    "<i class='fa fa-chevron-left'></i>",
    "<i class='fa fa-chevron-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      nav: true
    },
    600: {
      items: 3,
      nav: true
    },
    1000: {
      items: 3,
      nav: true
    }
  }
})
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script> -->
<script>
  //gsap.from("#logo", {repeat: 30,duration: 3, x: 300, opacity: 0, scale: 0.5});
</script>
<script>
  $(window).scroll(function(){
  var sticky = $('#header'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('sticky');
  else sticky.removeClass('sticky');
});
</script>

</div>
<?php wp_footer(); ?>
</body>
</html>