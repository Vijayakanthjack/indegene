<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/popper.min.js.map.js"></script>
<script src="public/js/jquery-ui.min.js"></script>
<script src="public/js/wow.min.js"></script>

      <script>
         $(document).ready(function(){

         $('.slider-sec').owlCarousel({
            autoplay: true,     
           autoplayHoverPause: true,
            autoplayTimeout: 10,
            autoplaySpeed: 12000,
            fluidSpeed:true,
            loop:true,
         
            dots:false,

           loop:true,
           margin:0,
          nav: true,
        
          dots:false,
         navText: [
           "<i class='fa fa-chevron-left'></i>",
           "<i class='fa fa-chevron-right'></i>"
         ],
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:1
               }
           }
         });
         

         
            $('.blog-sec-in').owlCarousel({
         
           margin:0,
          nav: false,
          dots:true,
         
          center: true,
           autoplay: false,
           center: true,
           loop: true,
         
         
   
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:3
               }
           }
         });


         

  
         });
                    
      </script>
      <script>
         $(".hovermenu").click(function(e){
              e.stopPropagation();
         });
         
         $('body').click( function() {
             $('.hovermenu').hide();
         });
      </script>
      <script>
         $(document).ready(function(){
           new WOW().init();
         });
      </script>




<script>
	
	$(document).on("scroll", function(){
		if
			($(document).scrollTop() > 86){
				$("#header-bottom").addClass("shrink");
			
			}
			else
			{
				$("#header-bottom").removeClass("shrink");
				
			}
		});


	</script>

	<script type="text/javascript">
		$(".dropdown").hover(
			function () {
				$('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
				$(this).addClass('open');
			},
			function () {
				$('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
				$(this).removeClass('open');
			});

		</script>


