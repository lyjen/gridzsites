<?php get_header(); ?>

<main role="main">
<!-- section -->
<section>

        <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

        <?php get_template_part('loop'); ?>

        <?php get_template_part('pagination'); ?>

</section>


            
            <!--Call to Action Start-->
            <section class="call-action">
            	<div class="content">
            		<h1>At vero <span class="text-colortwo">eos accusam</span> justo duo dolores...</h1>
                </div>
				<a href="#">
                	<div class="large-button">
                    	<span>GET MORE INFO</span>
                    </div>
				</a>
            </section>
            <!--Call to Action End-->
            
            <!--Service Start-->
            <section class="container service">
            	<ul>
                	
                    <!--Service 1-->
                    <li class="flip">
                    	<a href="service-single1.html">
                            <div class="flip-front">
                                <div class="service-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon/service-icon-1.png" alt="service" />
                                </div>
                                <h2 class="grid-title">Lorem Ipsum</h2>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">Dolor sit amet</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                	MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Service 2-->
                    <li class="flip">
                    	<a href="service-single2.html">
                            <div class="flip-front">
                                <div class="service-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon/service-icon-2.png" alt="service" />
                                </div>
                                <h2 class="grid-title">Dolor Sit Amet</h2>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">Consetetur sadip</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                	MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Service 3-->
                    <li class="flip">
                    	<a href="service-single1.html">
                            <div class="flip-front">
                                <div class="service-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon/service-icon-3.png" alt="service" />
                                </div>
                                <h2 class="grid-title">Sed Diam Nonumy</h2>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">Eirmod tempor</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                	MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Service 4-->
                    <li class="flip">
                    	<a href="service-single2.html">
                            <div class="flip-front">
                                <div class="service-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon/service-icon-4.png" alt="service" />
                                </div>
                                <h2 class="grid-title">Labore Dolore</h2>
                            </div>
                            <div class="flip-back active-details">
                                <h2 class="title-back">Aliquyam erat</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                	MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                </ul>
            </section>
            <!--Service End-->
            
            <div class="clearfix"></div>
            
            <!--Grid Content Start-->
            <section class="container">
            
            	<!--Left Area Start-->
            	<div class="grid-half left">
                
                	<!--Large Grid-->
                	<div class="large-grid flip">
                        <div class="flip-front">
                            <a href="blog-single.html">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/upload/large-thumbnail1.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <div class="flip-back">
                            <h1 class="large-title-back">Lorem ipsum dolor sit consetetur amet</h1>
                            <p class="large-description-back">Sed diam nonumy eirmod tempor ut labore et <span class="text-colortwo">dolore magna</span> aliquyam erat sed diam voluptua, at vero eos</p>
                            <a href="blog-single.html">
                                <div class="large-button">
                                    <span>GET MORE INFO</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--End-->
                    
                    <ul class="small-grid">
                    	
                        <!--Small Grid 1-->
                    	<li class="flip">
                        	<div class="flip-front">
                            	<a href="blog-single.html">
                                	<figure>
                                    	<img src="<?php echo get_template_directory_uri(); ?>/images/upload/small-thumbnail1.jpg" alt="image" />
                                    </figure>
                                </a>
                            </div>
                            <a href="blog-single.html">
                                <div class="flip-back active-details gray">
                                    <h2 class="title-back text-gray">Dolor sit amet</h2>
                                    <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                    <div class="more-details">
                                        MORE DETAILS
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--End-->
                        
                        <!--Small Grid 2-->
                        <li class="small-thumb">
                        	<h2>At vero eos et justo duo dolores et ea rebum</h2>
                            <p>At vero eos et accusam...</p>
                        </li>
                        <!--End-->
                        
                    </ul>
                    
                </div>
                <!--Left Area End-->
                
                <!--Right Area Start-->
                <div class="grid-half right">
                	<ul class="small-grid">
                    	
                        <!--Small Grid 3-->
                    	<li class="small-thumb">
                        	<h2>Nonumy eirmod<br><span class="large-font">50%</span></h2>
                            <p>At vero eos et accusam...</p>
                        </li>
                        <!--End-->
                        
                        <!--Small Grid 4-->
                        <li class="flip">
                        	<div class="flip-front">
                            	<a href="blog-single.html">
                                	<figure>
                                    	<img src="<?php echo get_template_directory_uri(); ?>/images/upload/small-thumbnail2.jpg" alt="image" />
                                    </figure>
                                </a>
                            </div>
                            <a href="blog-single.html">
                                <div class="flip-back active-details gray">
                                    <h2 class="title-back text-gray">Dolor sit amet</h2>
                                    <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                    <div class="more-details">
                                        MORE DETAILS
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--End-->
                        
                    </ul>
                    
                    <div class="clearfix"></div>

                    <!--Large Grid-->
                    <div class="large-grid">
                        <div class="flip-back">
                            <h1 class="large-title-back">At vero eos et accusam</h1>
                            <p class="large-description-back"><span class="largest-font">SHARE</span><br><br>Labore et <span class="text-colortwo">Diam Nonumy</span> aliquyam erat sed diam voluptua, at vero eos</p>
                            <a href="about-us.html">
                                <div class="large-button">
                                    <span>GET MORE INFO</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--End-->
         
                </div>
                <!--Right Area End-->
                
            </section>
            <!--Grid Content End-->
            
            <!--Portfolio Start-->
            <section class="container portfolio">
            	<ul>
                	<li class="item">
                        <div class="box-title">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon/service-icon-5.png" alt="service" />
                            </div>
                            <h2>PORTFOLIO</h2>
                        </div>
                    </li>
                    
                    <!--Portfolio 1-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/upload/portfolio-thumbnail-06.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details gray">
                                <h2 class="title-back text-gray">Dolor sit amet</h2>
                                <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 2-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/upload/portfolio-thumbnail-13.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details">
                                <h2 class="title-back">Lorem ipsum</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 3-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/upload/portfolio-thumbnail-03.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details gray">
                                <h2 class="title-back text-gray">Sadipscing elitr</h2>
                                <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 4-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/upload/portfolio-thumbnail-14.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details gray">
                                <h2 class="title-back text-gray">Eirmod tempor</h2>
                                <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 5-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/upload/portfolio-thumbnail-11.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details">
                                <h2 class="title-back">Dolore magna</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 6-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/upload/portfolio-thumbnail-04.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details gray">
                                <h2 class="title-back text-gray">Aliquyam erat</h2>
                                <p class="description-back text-dark">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                    <!--Portfolio 7-->
                    <li class="flip">
                        <div class="flip-front">
                            <a href="portfolio-single.html">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/upload/portfolio-thumbnail-05.jpg" alt="image" />
                                </figure>
                            </a>
                        </div>
                        <a href="portfolio-single.html">
                            <div class="flip-back active-details">
                                <h2 class="title-back">Diam Voluptua</h2>
                                <p class="description-back">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                                <div class="more-details">
                                    MORE DETAILS
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--End-->
                    
                </ul>
            </section>
            <!--Portfolio End-->
    
    <div class="clearfix"></div>
    <!-- /section -->
</main>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
