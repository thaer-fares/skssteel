@extends('site.layout.master')

@section('title')
    SKSsteel for General Trading
@stop

@section('css')

@stop

<body>




  <header id="header">
<div class="container">

      <div id="logo" class="pull-left">

          <a href="index.html"><img src="assets/site/img/logo2.png" alt="" title="" /></a>

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">



          <li class="menu-active"><a href="index.html"><i class="fa fa-home"></i>&nbsp;Home</a></li>
          <li><a href="about.html"><i class="fa fa-flag"></i>&nbsp;About Us</a></li>


          <li class="menu-has-children"><a href="#">Products</a>
            <ul>

              <li class="menu-has-children"><a href="#">Fence Post</a>
                <ul>
                  <li><a href="ypost.html">Y Post</a></li>

                </ul>
              </li>




			        <li class="menu-has-children"><a href="#">Wire Mesh</a>
                <ul>
                  <li><a href="BarbedWire.html">Barbed Wire</a></li>
                  <li><a href="ChainIink.html">Chain Iink Fence</a></li>
                  <li><a href="HexagonalWire.html">hexagonal wire mesh</a></li>
                  <li><a href="RazorWire.html">Razor Wire</a></li>
                  <li><a href="WeldedWire.html">welded wire mesh</a></li>

                </ul>
              </li>

			  	         <li class="menu-has-children"><a href="#">Wire</a>
                <ul>
                   <li><a href="BlackWire.html">Black Annealed Wire</a></li>
                  <li><a href="GalvanizedWire.html">Galvanized Wire</a></li>
                </ul>
              </li>


			           <li class="menu-has-children"><a href="#">Pipes</a>
                <ul>
                  <li><a href="SeamlessPipe.html">Seamless steel pipe</a></li>
                  <li><a href="WeldedPipe.html">Welded Steel Pipe</a></li>
                </ul>
              </li>

			            <li class="menu-has-children"><a href="#">Steel Coil</a>
                <ul>
                  <li><a href="GalvanizedCoil.html">Galvanized Steel Coil</a></li>
                  <li><a href="ColorCoil.html">Color Coated Steel Coil(PPGI)</a></li>
                </ul>
              </li>

			           <li class="menu-has-children"><a href="#">Nails</a>
                <ul>
                      <li><a href="CommonNail.html">Common Nail</a></li>

                  <li><a href="RoofingNail.html">Roofing Nail</a></li>

                </ul>
              </li>

			             <li class="menu-has-children"><a href="#">BAR</a>
                <ul>
                      <li><a href="SquareBar.html">SQUARE BAR</a></li>

                  <li><a href="FlatBar.html">FLAT BAR</a></li>

                </ul>
              </li>

			  <li class="menu-has-children"><a href="#">Pvc</a><ul>
<li><a href="pvc.html">Pvc Roofing Sheet</a></li>
<li><a href="syntheticpvc.html">Synthetic Resin Pvc Roof Tile</a></li>
</ul>
</li>


			     <li><a href="CastIron.html">Cast Iron Fittings</a>

              </li>


			  <li><a href="Angles.html">Galvanized and Angles</a></li>



            </ul>
          </li>


          <li><a href="contact.html"><i class="fa fa-phone"></i>&nbsp;Contact Us</a></li>

		            <li class="menu-has-children"><a href="#">Languages</a>
            <ul>
              <li><a href="{{ route('site.Arabicwelcome') }}">Arabic</a></li>
              <li><a href="{{ route('site.welcome') }}">English</a></li>

            </ul>
          </li>


        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


<div class="divider">
</div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
	   <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
	<li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/site/imgs/1.jpg" height="550px" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
    <h1>We pride ourselves on giving high quality service to all our customers.</h1>
  </div>
    </div>


    <div class="carousel-item">
      <img class="d-block w-100" src="assets/site/imgs/2.jpg" height="550px" alt="Second slide">
	  	  <div class="carousel-caption d-none d-md-block">
    <h1>We pride ourselves on giving high quality service to all our customers.</h1>
  </div>
    </div>


    <div class="carousel-item">
      <img class="d-block w-100" src="assets/site/imgs/3.jpg" height="550px" alt="Third slide">
	  	  <div class="carousel-caption d-none d-md-block">
    <h1>We pride ourselves on giving high quality service to all our customers.</h1>
  </div>
    </div>


	  <div class="carousel-item">
      <img class="d-block w-100" src="assets/site/imgs/4.jpg" height="550px" alt="Fourth slide">
	  	  <div class="carousel-caption d-none d-md-block">
    <h1>We pride ourselves on giving high quality service to all our customers.</h1>
  </div>
    </div>


	  <div class="carousel-item">
      <img class="d-block w-100" src="assets/site/imgs/5.jpg" height="550px" alt="Fifth slide">
	  	  <div class="carousel-caption d-none d-md-block">
    <h1>We pride ourselves on giving high quality service to all our customers.</h1>
  </div>
    </div>



  	  <div class="carousel-item">
      <img class="d-block w-100" src="assets/site/imgs/6.jpg" height="550px" alt="sixth slide">
	  	  <div class="carousel-caption d-none d-md-block">
    <h1>We pride ourselves on giving high quality service to all our customers.</h1>

  </div>
    </div>


  </div>

</div>








<div class="marquee2 mt-1">
<marquee behavior="scroll">
<img src="assets/site/slidspic/1.jpg" width="200" height="120" alt="Flying Bat">
<img src="assets/site/slidspic/2.jpg" width="200" height="120" alt="Flying Bat">
<img src="assets/site/slidspic/4.jpg" width="200" height="120" alt="Flying Bat">
<img src="assets/site/slidspic/5.jpg" width="200" height="120" alt="Flying Bat">
<img src="assets/site/slidspic/6.jpg" width="200" height="120" alt="Flying Bat">
<img src="assets/site/slidspic/1.jpg" width="200" height="120" alt="Flying Bat">
</marquee>
</div>


	      		<div class="simple-marquee-container">

	<div class="marquee">
		<ul class="marquee-content-items">
			<li>
	Alkassas Company for General Tarde is developed new web site , so you can take an overview about it and about all
	the products which the company can prdouces it.
			</li>
			<li>
			 The company shows the details and the specifications for each produc with samples of picuters.
			</li>


		</ul>
	</div>
</div>




  <main id="main">
<hr>
<hr>
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container mt-3">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">About Us</h2>
            <p>

Al-kassas for Industry and Commerce was founded in 1999 and it's one of the most important companies operating in Palestine, The company Holds seriously development for the feature by doing their respective areas of industrial, commercial and through the products offered by the company to the customer by providing products according to international standards and it's working hardly to strengthen this position to provide all the requirements of high-quality products and reliable of the major international companies in the manufacture of Iron and steel.

            </p>
			<div class="more">
			<a href="about.html">More Click Her</a>
			</div>


          </div>

          <div class="col-lg-6 background3 order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->



	  <hr>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp ">
        <div class="section-header">
          <h3 class="section-title"><br>Products</h3>
          <p class="section-description">

		  Her you can see overview about some of our products which we can produce</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-post,  .filter-wiremesh, .filter-wire, .filter-pipes,
			  .filter-steelcoil, .filter-nails, .filter-bar , .filter-cast, .filter-angles, .filter-pvc" class="filter-active">All</li>
              <li data-filter=".filter-post">post</li>
			  <li data-filter=".filter-wiremesh">Wire Mesh</li>
			  <li data-filter=".filter-wire">Wire</li>
              <li data-filter=".filter-pipes">Pipes </li>
              <li data-filter=".filter-steelcoil">Steel COil</li>
			     <li data-filter=".filter-nails">Nails</li>
              <li data-filter=".filter-bar">Bar</li>
			  <li data-filter=".filter-cast">Cast Iron</li>
			     <li data-filter=".filter-angles">Angles</li>
              <li data-filter=".filter-pvc">Pvc</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-post">
            <a href="ypost.html" target="_blank">
              <img src="assets/site/imgs/ypost/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Y Post</h4>

              </div>
            </a>
          </div>


		      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-wiremesh">
            <a href="BarbedWIre.html" target="_blank">
              <img src="assets/site/imgs/BarbedWire/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Barbed Wire</h4>

              </div>
            </a>
          </div>


		      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-wiremesh">
            <a href="ChainIink.html" target="_blank">
              <img src="assets/site/imgs/ChainIink/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Chali Link Fence</h4>

              </div>
            </a>
          </div>

		  	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-wiremesh">
            <a href="HexagonalWire.html" target="_blank">
              <img src="assets/site/imgs/HexagonalWire/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Hexagonal Wire</h4>

              </div>
            </a>
          </div>

		  	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-wiremesh">
            <a href="RazorWire.html" target="_blank">
              <img src="assets/site/imgs/RazorWire/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Razor Wire</h4>

              </div>
            </a>
          </div>

		    	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-wiremesh">
            <a href="WeldedWire.html" target="_blank">
              <img src="assets/site/imgs/WeldedWire/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Wleded Wire Mesh</h4>

              </div>
            </a>
          </div>
		    	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-wire">
            <a href="BlackWire.html" target="_blank">
              <img src="assets/site/imgs/BlackWire/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Black Annelded Wire</h4>

              </div>
            </a>
          </div>


		      	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-wire">
            <a href="GalvanizedWire.html" target="_blank">
              <img src="assets/site/imgs/GalvanizedWire/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Galvanized Wire</h4>

              </div>
            </a>
          </div>


		  		      	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-pipes">
            <a href="SeamlessPipe.html" target="_blank">
              <img src="assets/site/imgs/SeamlessPipe/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Seamless Steel Pipe</h4>

              </div>
            </a>
          </div>

		  	  		      	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-pipes">
            <a href="WeldedPipe.html" target="_blank">
              <img src="assets/site/imgs/WeldedPipe/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Welded Steel Pipe</h4>

              </div>
            </a>
          </div>


		   	  		      	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-steelcoil">
            <a href="GalvanizedCoil.html" target="_blank">
              <img src="assets/site/imgs/GalvanizedCoil/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Galvanized ٍSteel Coil</h4>

              </div>
            </a>
          </div>



		     	  		      	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-steelcoil">
            <a href="ColorCoil.html" target="_blank">
              <img src="assets/site/imgs/ColorCoil/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Color Coasted Steel</h4>

              </div>
            </a>
          </div>



		     	  		      	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-nails">
            <a href="CommonNail.html" target="_blank">
              <img src="assets/site/imgs/CommonNail/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Common Nail</h4>

              </div>
            </a>
          </div>

		  		     	  		      	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-nails">
            <a href="RoofingNail.html" target="_blank">
              <img src="assets/site/imgs/RoofingNail/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Roofing Nail</h4>

              </div>
            </a>
          </div>


		    		     	  		      	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-bar">
            <a href="SquareBar.html" target="_blank">
              <img src="assets/site/imgs/SquareBar/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Square Bar</h4>

              </div>
            </a>
          </div>


		      		     	  		      	      <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-bar">
            <a href="FlatBar.html" target="_blank">
              <img src="assets/site/imgs/FlatBar/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Flat Bar</h4>

              </div>
            </a>
          </div>


		  		      	 <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-cast">
            <a href="CastIron.html" target="_blank">
              <img src="assets/site/imgs/CastIron/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Cast Iron Fitting</h4>

              </div>
            </a>
          </div>

		  	  		      	 <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-angles">
            <a href="Angles.html" target="_blank">
              <img src="assets/site/imgs/Angles/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Galvanaized and Angles</h4>

              </div>
            </a>
          </div>

		    	  		      	 <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-pvc">
            <a href="Pvc.html" target="_blank">
              <img src="assets/site/imgs/Pvc/8.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Pvc Roofing Sheet</h4>

              </div>
            </a>
          </div>


		  	    	  		      	 <div class="col-lg-4 col-md-6 col-5 portfolio-item filter-pvc">
            <a href="syntheticpvc.html" target="_blank">
              <img src="assets/site/imgs/Pvc/9.jpg" alt="" class="img-product">
              <div class="details">
                <h4>Synthetic Resin Pvc Roof Tile</h4>

              </div>
            </a>
          </div>



        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->

	  <hr>
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Team</h3>
          <p class="section-description">The team work photos in the SKSSteel Company</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/site/img/team-1.jpg" alt=""></div>
              <h4>The Manager</h4>


            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/site/img/team-2.jpg" alt=""></div>
              <h4>The Management</h4>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/site/img/team-3.jpg" alt=""></div>
              <h4>The Secretary</h4>

            </div>
          </div>



      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
	  <hr>
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">Leave A message, or give us Feedback about our products</p>
        </div>
      </div>


      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-4 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Gaza Strip - Omar Almokhtar st. </p>

              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@SKSsteel.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>Phone :  +970599328854 <br>TelFax :      +97082840572</p>

              </div>
            </div>

            <div class="social-links">
              <a href="https://twitter.com/skmetalpower" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/smir.alkassas" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/smiralkassas/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Alkassas Company</strong>. All Rights Reserved - 2023
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://www.facebook.com/thaer.alhabbashlicense/
          Purchase the pro version with working PHP/AJAX contact form: https://www.facebook.com/thaer.alhabbashbuy/?theme=Regna
        -->
        Designed by: <a href="https://www.facebook.com/thaer.alhabbash" target="_blank">Thaer Alhabbash</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>




</body>
@section('js')

@stop
</html>
