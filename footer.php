<footer>
<div class="container">
<div class="row">
<?php dynamic_sidebar('footerwid'); ?>
</div>
<div class="footer_contant">
<p>Lifetime Dentistry of Royal Palm welcomes patients with disabilities. If you need an accommodation to receive dental services, we would be happy to provide one. 
Please contact us at 561-814-2138 to let us know how we may be of assistance. </p>
<p>IT IS OUR OFFICE POLICY THAT THE PATIENT AND ANY OTHER PERSON RESPONSIBLE FOR PAYMENT HAS THE RIGHT TO REFUSE TO PAY, CANCEL PAYMENT 
OR BE REIMBURSED FOR PAYMENT FOR ANY OTHER SERVICE, EXAMINATION OR TREATMENT WHICH IS PERFORMED AS A RESULT OF AND WITHIN 72 HOURS OF 
RESPONDING TO THE ADVERTISEMENT FOR THE FREE, DISCOUNTED-FEE OR REDUCED-FEE SERVICE, EXAMINATION OR TREATMENT.</p>
<a href="http://artifexedge.com/dev/lakeview_wp/policy-privacy/">Privacy Policy</a>    



</div>
</div>
	</footer>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php bloginfo('template_url'); ?>/js/ie10-viewport-bug-workaround.js"></script>
<script>
 $(document).ready(function() {
     
      $("#owl-demo").owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
    margin:30,
          items : 5,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
     
      });
     
    });
	 var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin:30,
        loop: true,
		 autoplay:true,
        responsive: {
			 0: {
            items: 2
          },
          420: {
            items: 4
          },
          600: {
            items: 5
          },
          1000: {
            items: 6
          }
		  ,
          1200: {
            items: 6
          }
        }
      })


</script>

<?php wp_footer(); ?>


<script>

 // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

	</script>

</body>
</html>




	 
	 


