<?php
include_once("./includes/header.php");
?>
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.html">Home</a>
                  <span>/ /</span>
               </li>
               <li>Service</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--service -->
      <section class="service py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Services</h3>
            <div class="row text-center">
               <div class="col-lg-4 col-md-6 abut-gride">
                  <span class="fas fa-truck"></span>
                  <h5>Shipping</h5>
                  <p class="mt-3"> Your orders will be delivered as soon as possible in the best conditions.
                  </p>
               </div>
               <div class="col-lg-4 col-md-6 abut-gride">
                  <span class="fas fa-phone-volume"></span>  
                  <h5>Support</h5>
                  <p class="mt-3">All your questions, complains... are Welcome.We are all ears 24/7.
                  </p>
               </div>
               <div class="col-lg-4 col-md-6 abut-gride">
                  <span class="fas fa-undo"></span>
                  <h5> Return</h5>
                  <p class="mt-3"> Neend to return an item?no worries we have the best return system to suite your needs.
                  </p>
               </div>
               <div class="col-lg-4 col-md-6 mt-lg-4 mt-3 abut-gride">
                  <span class="fas fa-money-bill-alt"></span>
                  <h5>Online Cash</h5>
                  <p class="mt-3"> We provide you an easy payment system so that you can pay from the comfort of your home
                  </p>
               </div>
               <div class="col-lg-4 col-md-6 mt-lg-4 mt-3 abut-gride">
                  <span class="fas fa-exchange-alt"></span>
                  <h5>Exchange</h5>
                  <p class="mt-3"> Our flexible system gives you the opportunity to exchange your order.
                  </p>
               </div>
               <div class="col-lg-4 col-md-6 mt-lg-4 mt-3 abut-gride">
                  <span class="fas fa-thumbs-up"></span>
                  <h5>Quality</h5>
                  <p class="mt-3">We are well aware of how impprtant Quality is especially for kids . 
                  </p>
               </div>
            </div>
         </div>
      </section>
      <!--//service -->	 
      <?php
include_once("./includes/footer.php");
?> 
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->      <!-- //OnScroll-Number-Increase-JavaScript -->
   </body>
</html>