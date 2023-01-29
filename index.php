<!DOCTYPE html>
<html lang="en">
<?php

error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Foodie Restauarants</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> 
    <link href="footer.css" rel="stylesheet"> 
</head>

<body class="home">
    
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom headerBg">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> Foodie<span>..</span> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active bgGreen">Signup</a> </li>';
							}
						else
							{
									//if user is login
									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- banner part starts -->
        <section class="hero bg-image" data-image-src="images/img/main.jpg">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1>Food Order Website </h1>
                    <h5 class="font-white space-xs">Top restaurants and specials in town</h5>
                    <div class="banner-form">
                        <form class="form-inline">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">I would like to eat....</label>
                                <div class="form-group">
                                    <input type="text" class="input form-control form-control-lg" id="exampleInputAmount" placeholder="Enter Search..."> </div>
                            </div>
                            <button onclick="location.href='dishes.php'" type="button" class="btn input ">Search food</button>
                        </form>
                    </div>
                  
                    
                </div>
            </div>
            <!--end:Hero inner -->
        </section>
        <!-- banner part ends -->
      
        <!-- Popular block starts -->
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30" >
                    <h2 class= "title">Best Seller</h2>
                    <p class="subTitle">Our top selling dishes this month</p>
                </div>
                <div class="row">
				
				
				
						<?php 
						// fetch records from database to display popular first 3 dishes from table
						$query_res= mysqli_query($db,"select * from dishes LIMIT 3"); 
									      while($r=mysqli_fetch_array($query_res))
										  {
													
						                       echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
														<div class="food-item-wrap box">
															<div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/'.$r['img'].'">
																<div class="distance"><i class="fa fa-pin"></i>190m</div>
																<div class="stars rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
																<div class="review pull-right"><a href="#">107 reviews</a> </div>
															</div>
															<div class="content">
																<h5><a href="dishes.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h5>
																<div class="product-name">'.$r['slogan'].'</div>
																<div class="price-btn-block"> <span class="price">$'.$r['price'].'</span> <a href="dishes.php?res_id='.$r['rs_id'].'" class="btn ctaBtn  pull-right">Order Now</a> </div>
															</div>
															
														</div>
												</div>';
													
										  }
						
						
						?>
				
                </div>
            </div>
        </section>
        <!-- Popular block ends -->
 <!-- ABOUT  SECTION ===================================================== -->

 <section class="section aboutSection" id ="about">
        <div class="sectionContent container">
           <div class="sectionIntro">
               <div class="headerInfo">
                   <h2 class="title">Our unique story since 1996</h2>
                   <p class="subTitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias eaque fugiat recusandae suscipit, ipsam ullam, voluptatum odio itaque quo perferendis cupiditate modi alias tempore harum.</p>
               </div>
           </div>
           <div class="sectionData">
              <div class="leftImg">
                  <img src="./images/img10.jpg" alt="Food Image">
              </div>
              <div class="rightImgs">
                  <div class="rightImg">
                      <img src="./images/img4.jpg" alt="Food Image">
                  </div>
                  <div class="rightImg">
                      <img src="./images/img1.jpg" alt="Food Image">
                  </div>
                  <div class="rightImg">
                      <img src="./images/img12.jpg" alt="Food Image">
                  </div>
                  <div class="rightImg">
                      <img src="./images/img5.jpg" alt="Food Image">
                  </div>
              </div>
           </div>
        </div>
    </section>









        <!-- Featured restaurants starts -->
        <section class="featured-restaurants">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="title-block pull-left">
                            <h4 class= "title">Featured restaurants</h4> </div>
                    </div>
                    <div class="col-sm-8">
                        <!-- restaurants filter nav starts -->
                        <div class="restaurants-filter pull-right">
                            <nav class="primary pull-left">
                                <ul>
                                    <li><a href="#" class="selected" data-filter="*">all</a> </li>
									<?php 
									// display categories here
									$res= mysqli_query($db,"select * from res_category");
									      while($row=mysqli_fetch_array($res))
										  {
											echo '<li><a href="#" data-filter=".'.$row['c_name'].'"> '.$row['c_name'].'</a> </li>';
										  }
									?>
                                   
                                </ul>
                            </nav>
                        </div>
                        <!-- restaurants filter nav ends -->
                    </div>
                </div>
                <!-- restaurants listing starts -->
                <div class="row">
                    <div class="restaurant-listing">
                        
						
						<?php  //fetching records from table and filter using html data-filter tag
						$ress= mysqli_query($db,"select * from restaurant");  
									      while($rows=mysqli_fetch_array($ress))
										  {
													// fetch records from res_category table according to catgory ID
													$query= mysqli_query($db,"select * from res_category where c_id='".$rows['c_id']."' ");
													 $rowss=mysqli_fetch_array($query);
						
													 echo ' <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant all '.$rowss['c_name'].'">
														<div class="restaurant-wrap">
															<div class="row">
																<div class=" col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
																	<a class="restaurant-logo" href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Restaurant logo"> </a>
																</div>
																<!--end:col -->
																<div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
																	<h5><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>
																	<div class="bottom-part">
																		<div class="cost"><i class="fa fa-check"></i> Min $ 10,00</div>
																		<div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
																		<div class="ratings"> <span>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star-o"></i>
																			</span> (122) </div>
																	</div>
																</div>
																<!-- end:col -->
															</div>
															<!-- end:row -->
														</div>
														<!--end:Restaurant wrap -->
													</div>';
										  }
						
						
						?>
						
							
						
					
                    </div>
                </div>
                <!-- restaurants listing ends -->
               
            </div>
        </section>
        <!-- Featured restaurants ends -->
        <section class="app-section">
            <div class="app-wrap">
                <div class="container">
                    <div class="row text-img-block text-xs-left">
                        <div class="container">
                            <div class="col-xs-12 col-sm-5 right-image text-center">
                                <figure> <img src="images/4.png" alt="Right Image" class="img-fluid"> </figure>
                            </div>
                            <div class="col-xs-12 col-sm-7 left-text">
                                <h3>Download Foodie App</h3>
                                <p>You can now find our menu on our mobile applition wherever you are. Make your orders we will find you!</p>
                                <div class="social-btns">
                                    <a href="#" class="app-btn apple-button clearfix">
                                        <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                        <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                    </a>
                                    <a href="#" class="app-btn android-button clearfix">
                                        <div class="pull-left"><i class="fa fa-android"></i> </div>
                                        <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



  <!-- FOOTER SECTION ----------------------- -->
  <section class="footerSection">
    <div class="contentContainer container">
        <div class="footerIntro">
            <div class="footerLogoDiv">
                <span class="hotelName">
                    Foodie<span>..</span>
                </span>
            </div>
            <p>We are a trusted company in unity to provide quality service and food solution to the world around us.</p>

            <div class="footContactDetails">
                <div class="info">
                    <div class="iconDiv"><i class='bx bx-mail-send' ></i></div>
                    <span>support@gmail.com</span>
                </div>

                <div class="info">
                    <div class="iconDiv"><i class='bx bxs-phone-outgoing'></i></div>
                    <span>+216 96 360 024</span>
                </div>

                <div class="info">
                    <div class="iconDiv"><i class='bx bx-current-location' ></i></div>
                    <span>IHEC CARTHAGE TUNISIA</span>
                </div>
            </div>
        </div>

        <div class="linksDiv">
            <div class="footersectionTitle">
                <h5>USEFUL LINKS</h5>
            </div>
            <ul>
                <span>Careers</span>
                <span>Offers</span>
                <span>Stuff</span>
                <span>Outlets</span>
                <span>Affiliation</span>
                <span>FAQs</span>
            </ul>
        </div>

        <div class="linksDiv">
            <div class="footersectionTitle">
                <h5>OUR SERVICES</h5>
            </div>
            <ul>
                <span>Online shopping</span>
                <span>Free Home Delivery</span>
                <span>Return Money</span>
                <span>Delivery On Place</span>
                <span>Wishlist</span>
                <span>Discount</span>
            </ul>
        </div>

        <div class="linksDiv footerForm">
            <div class="footersectionTitle">
                <h5> OUR NEWSLETTER</h5>
            </div>
             
            <form action="">
                <label> Subscribe To Our Newsletter...</label>
                <input type="text" placeholder="Name" required>
                <input type="email" placeholder="Email" required>
                <button type="submit">Submit</button>
            </form>
        </div>

    </div>
    <div class="copyrightDiv">
       &copy; Copyright 2022 - MOHAMED OUSSAMA GHOZZI
    </div>
</section>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
    <script src="js/isratech.js"></script>

</body>

</html>