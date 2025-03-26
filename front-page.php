<?php
/*
  Template Name: front page
 */
 get_header();
 ?>

<div class="hero-area hero-style-three">
        <img src="<?php echo get_template_directory_uri()?>/images/banner/banner-plane.svg" class="img-fluid banner-plane">
        <div class="hero-main-wrapper position-relative">
            <div class="swiper hero-slider-three ">
                <div class="swiper-wrapper">
                  <?php if( have_rows('banner_section') ):
                   while ( have_rows('banner_section') ) : the_row();

                     $image = get_sub_field('image');
                     $banner_title = get_sub_field('banner_title');
                     $banner_subtitle = get_sub_field('banner_subtitle');
                     $banner_description = get_sub_field('banner_description');
                     $buton_title = get_sub_field('buton_title'); ?>
                
                    <div class="swiper-slide">
                        <div class="slider-bg-1">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-lg-9">
                                        <div class="hero3-content">
                                            <span class="title-top"><?php echo $banner_title; ?></span>
                                            <h1><?php echo $banner_subtitle; ?></h1>
                                            <?php echo $banner_description; ?>
                                            <a href="#" class="button-fill-primary banner3-btn"><?php echo $buton_title['title']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php endwhile; ?>
<?php endif; ?>
                   
                </div>
            </div>
            <div class="slider-arrows text-center d-lg-flex flex-column d-none gap-5">
                <div class="hero-prev3" tabindex="0" role="button" aria-label="Previous slide"> <i class="bx bxs-left-arrow-alt"></i></div>
                <div class="hero-next3" tabindex="0" role="button" aria-label="Next slide"><i class="bx bxs-right-arrow-alt"></i></div>
            </div>
        </div>
    </div>

    <div class="package-area offer-package-style-one pt-110 pb-110">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center fetured-tour-sec">
            <?php if( have_rows('feature_section') ):
                   while ( have_rows('feature_section') ) : the_row(); 
                   
                   $title = get_sub_field('title');
                   $description = get_sub_field('description');
                   $button_title = get_sub_field('button_title');

                   ?>
                <div class="col-lg-6 col-sm-10">
                    <div class="section-head-alpha">
                        <h2><?php echo $title; ?></h2>
                        <?php echo $description; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-10">
                    <div class="package-btn text-lg-end">
                        <a href="<?php echo $button_title['url']; ?>" class="button-fill-primary all-package-btn"><?php echo $button_title['title']; ?></a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif;?>
            </div>
            <div class="row align-items-center">
                <div class="offer-switch-button2">
                    <ul class="nav nav-pills mb-3 justify-content-center gap-sm-4 gap-3" id="pills-tab" role="tablist">
                       <?php         $newcat = get_terms( array(
                                        'taxonomy'   => 'tour',
                                        'hide_empty' => false,
                                    ) );
                              $i=1;
                              foreach($newcat as $newcatdata)
                              {
                                $tab_id= "pills-offer" .$i;
                                $pan_id= "pills-offer-tab" .$i; ?>

                              
                        <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo ($i == 1) ? 'active' : ''; ?>" id="<?php echo $tab_id; ?>"
                    data-bs-toggle="pill" data-bs-target="#<?php echo $pan_id; ?>" type="button" role="tab"
                    aria-controls="<?php echo $pan_id; ?>" aria-selected="<?php echo ($i == 1) ? 'true' : 'false'; ?>"
                    data-category-id="<?php echo $newcatdata->term_id; ?>">
                    <?php echo esc_html($newcatdata->name); ?>
                </button>
                        </li>

                        <?php $i++; } ?>
                        
                       
                    </ul>
                </div>
                <div class="offer-single-tabs">
                    <div class="tab-content" id="pills-tabContent">
                        <?php
                       $j=1;
                       foreach($newcat as $newcatdata)
                       {
                         $pan_id = "pills-offer-tab" .$j;
                       ?>


                        <div class="tab-pane fade <?php echo ($j==1)?'show active':'';?>" id="<?php echo $pan_id; ?>" role="tabpanel"
                            aria-labelledby="pills-offer<?php echo $j; ?>">
                            <div class="row d-flex justify-content-center g-4">
                           <?php  $args = Array( 
                                'post_type' => 'tours',
                                'posts_per_page' => '-1',
                                'post_status' => 'publish',
                                'tax_query' => Array( Array ( 
                                'taxonomy' => 'tour' ,
                                'terms' => $newcatdata->term_id
                                )) );
                                $query = new WP_Query($args);
                                if ($query->have_posts()) :
                                    while ($query->have_posts()) : $query->the_post();
                                    

                                    
                                    ?>
                                <div class="col-lg-4 col-md-6 fadeffect">
                                    <div class="package-card-beta">
                                        <div class="package-thumb">

                                        <?php if(has_post_thumbnail()):?>
                          
                              
                                            <a href="<?php the_permalink(); ?>"><img
                                                    src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
                                                    <?php endif;?>
                                            <p class="card-lavel">
                                                <i class="bi bi-clock"></i> <span><?php echo get_field('description'); ?></span>
                                            </p>
                                        </div>
                                        <div class="package-card-body">
                                            <h3 class="p-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <div class="p-card-bottom">
                                                <div class="book-btn">
                                                    <?php 
                                                          $button_link = get_field('button_title'); ?>
                                                    <a href="<?php the_permalink(); ?>"><?php echo $button_link['title'];?><i
                                                            class='bx bxs-right-arrow-alt'></i></a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                        <?php endwhile;
                            wp_reset_postdata();?>
                            <?php endif; ?>
                            
                              
                            </div>
                            <!-- <div class="package-page-btn text-center mt-60">
                                <a href="package.html" class="button-fill-round">View All Offer</a>
                            </div> -->
                        </div>
                      <?php $j++; } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="destination-area destination-style-two pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head-gamma">
                        <h2>Top Destination</h2>
                    </div>
                </div>
            </div>
            <div class="swiper destination-slider-two">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm1.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">Tanzania</a></h4>
                                <div class="place-count">
                                    8 Days & 7 nights
                                    <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm2.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">Europe</a></h4>
                                <div class="place-count">
                                    11 Days & 10 nights
                                     <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm3.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">New Zealand</a></h4>
                                <div class="place-count">
                                    12 Days & 11 nights
                                    <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm4.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">Australia</a></h4>
                                <div class="place-count">
                                    8 Days & 9 nights
                                    <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm5.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">Turkey</a></h4>
                                <div class="place-count">
                                    6 Days & 7 nights
                                    <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm6.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">America</a></h4>
                                <div class="place-count">
                                    11 Days & 10 nights
                                    <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm7.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">Canada</a></h4>
                                <div class="place-count">
                                    9 Days & 8 nights
                                    <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm8.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">Mauritius</a></h4>
                                <div class="place-count">
                                    10 Days & 9 nights
                                    <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm7.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">Bangkok</a></h4>
                                <div class="place-count">
                                    10 Days & 9 nights
                                    <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm8.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">Ireland</a></h4>
                                <div class="place-count">
                                    10 Days & 9 nights
                                    <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm3.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">Morocco</a></h4>
                                <div class="place-count">
                                    7 Days & 6 nights
                                    <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="destination-card-style-two">
                            <div class="d-card-thumb">
                                <img src="<?php echo get_template_directory_uri()?>/images/destination/des-sm4.png" alt="">
                            </div>
                            <div class="d-card-content">
                                <h4 class="destination-title"><a href="#">Bhutan</a></h4>
                                <div class="place-count">
                                    9 Day & 8 night
                                    <div class="book-now_btn">
	                                    <a href="#">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
	                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-pagination text-center"></div>
            </div>
        </div>
    </div>

    <div class="newslatter-wrapper">
        <div class="container">
            <div class="row align-items-center a_about_info">
                <div class="col-lg-6">
                    <div class="newslatter-side text-center text-lg-start mx-auto mx-lg-0">
                        <h2>About Our <span>Journey</span></h2>
                        <p>Welcome to Believe Tours And Travels. Where we're in the business of making your travel dreams come true.</p>
                        <p>Since Our inception, we have earned three very important distinctions:</p>
                        <ul class="about_journey list-unstyled">
                        	<li>A reputation for excellence in customer service and reliability.</li>
                        	<li>Dedication and loyalty to our valued clients. We're here to answer questions and provide helpful information throughout the trips. There's service even after the sale.</li>
                        	<li>A responsible tourism tour operator</li>
                        </ul>
                        <div class="package-btn">
	                        <a href="#" class="button-fill-primary all-package-btn">Read More</a>
	                    </div>
                       
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="achievement-counter-side">
                        <div class="row g-4">
                            <div class="col-lg-6  col-md-6">
                                <div class="achievement-box-style-one">
                                    <div class="achievement-icon">
                                        <img src="<?php echo get_template_directory_uri()?>/images/icons/counter-icon2.svg" alt="">
                                    </div>
                                    <div class="achievement-box-content">
                                        <h2>500+</h2>
                                        <h4>Awesome Tour</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-6">
                                <div class="achievement-box-style-one">
                                    <div class="achievement-icon">
                                        <img src="<?php echo get_template_directory_uri()?>/images/icons/counter-icon3.svg" alt="">
                                    </div>
                                    <div class="achievement-box-content">
                                        <h2>300+</h2>
                                        <h4>New Destinations</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-6">
                                <div class="achievement-box-style-one">
                                    <div class="achievement-icon">
                                        <img src="<?php echo get_template_directory_uri()?>/images/icons/counter-icon1.svg" alt="">
                                    </div>
                                    <div class="achievement-box-content">
                                        <h2>05+</h2>
                                        <h4>Years Experience</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-6">
                                <div class="achievement-box-style-one">
                                    <div class="achievement-icon">
                                        <img src="<?php echo get_template_directory_uri()?>/images/icons/counter-icon4.svg" alt="">
                                    </div>
                                    <div class="achievement-box-content">
                                        <h2>150+</h2>
                                        <h4>Best Mountains</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-main-wrappper pt-110">
        <div class="container">
            <div class="row align-items-center belive-tour">
                <div class="col-lg-6">
                    <div class="achievement-counter-wrap">
                        <h2 class="about-wrap-title">
                            Why package book with
                            <span>Believe Tours</span>
                        </h2>
                        <div class="achievement-counter-cards">
                            <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center ">
                                <div class="counter-box mb-sm-0 mb-3">
                                    <h2>500+</h2>
                                    <h6>awesome tour</h6>
                                </div>
                                <p>duis rutrum nisl urna. maecenas vel libero faucibus nisi venenatis hendrerit a id
                                    lectus. suspendissendt enlane
                                    molestie turpis nec lacinia vehicula.</p>
                            </div>
                            <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center">
                                <div class="counter-box mb-3">
                                    <h2>300+</h2>
                                    <h6>destinations</h6>
                                </div>
                                <p>duis rutrum nisl urna. maecenas vel libero faucibus nisi venenatis hendrerit a id
                                    lectus. suspendissendt enlane
                                    molestie turpis nec lacinia vehicula.</p>
                            </div>
                            <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center">
                                <div class="counter-box mb-3">
                                    <h2>150+</h2>
                                    <h6> mountains</h6>
                                </div>
                                <p>duis rutrum nisl urna. maecenas vel libero faucibus nisi venenatis hendrerit a id
                                    lectus. suspendissendt enlane
                                    molestie turpis nec lacinia vehicula.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-group d-flex justify-content-end mt-5 mt-lg-0">
                        <img src="<?php echo get_template_directory_uri()?>/images/banner/hero2-image-group.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <div class="testimonial-area testimonial-style-one mt-120">
        <div class="testimonial-shape-group"></div>
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-head-alpha">
                        <h2>What our client say About us</h2>
                        <p>duis rutrum nisl urna. maecenas vel libero faucibus nisi venenatis hendrerit a id lectus.
                            suspendissendt
                            blandit interdum. sed pellentesque at nunc eget consectetur.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="slider-arrows text-center d-lg-flex d-none justify-content-end mb-3">
                        <div class="testi-prev custom-swiper-prev" tabindex="0" role="button"
                            aria-label="previous slide"> <i class="bx bxs-left-arrow-alt"></i> </div>
                        <div class="testi-next custom-swiper-next" tabindex="0" role="button" aria-label="next slide"><i class="bx bxs-right-arrow-alt"></i></div>
                    </div>
                </div>
            </div>
            <div class="swiper testimonial-slider-one position-relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card testimonial-card-alpha">
                            <div class="testimonial-card-top">
                                <div class="qoute-icon"><i class='bx bxs-quote-left'></i></div>
                                <div class="testimonial-thumb"><img src="assets/images/reviewer/r-sm1.png" alt=""></div>
                                <h3 class="testimonial-count">01</h3>
                            </div>
                            <div class="testimonial-body">
                                <p>Travelling with Flamingo for the second time. As always up to the mark. Thank you for all your organization of the tour, we had a fantastic time in Dubai. Everything was arranged professionally and worked out well for us.</p>
                                <div class="testimonial-bottom">
                                    <div class="reviewer-info">
                                        <h4 class="reviewer-name">Mr. Abhi Patel</h4>
                                        <h6>traveller</h6>
                                    </div>
                                    <ul class="testimonial-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card testimonial-card-alpha">
                            <div class="testimonial-card-top">
                                <div class="qoute-icon"><i class='bx bxs-quote-left'></i></div>
                                <div class="testimonial-thumb"><img src="assets/images/reviewer/r-sm2.png" alt=""></div>
                                <h3 class="testimonial-count">02</h3>
                            </div>
                            <div class="testimonial-body">
                                <p>Amazing experience at kevadiya with stay in eco camp resort as full of greenery. And thanks to flamingo we could planned it properly. Weather was wonderful in July so cherry on cake. Many things to look out for at unity city.</p>
                                <div class="testimonial-bottom">
                                    <div class="reviewer-info">
                                        <h4 class="reviewer-name">Mr. Darshil Shah</h4>
                                        <h6>traveller</h6>
                                    </div>
                                    <ul class="testimonial-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card testimonial-card-alpha">
                            <div class="testimonial-card-top">
                                <div class="qoute-icon"><i class='bx bxs-quote-left'></i></div>
                                <div class="testimonial-thumb"><img src="assets/images/reviewer/r-sm3.png" alt=""></div>
                                <h3 class="testimonial-count">03</h3>
                            </div>
                            <div class="testimonial-body">
                                <p>Travelling to Turkey was fun especially in this pandemic situation. Hotel & travel arrangements were very good. The Indian restaurants where our meals were arranged in Istanbul & Cappadocia had delicious food.</p>
                                <div class="testimonial-bottom">
                                    <div class="reviewer-info">
                                        <h4 class="reviewer-name">Mr. Akar Patel</h4>
                                        <h6>traveller</h6>
                                    </div>
                                    <ul class="testimonial-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <div class="contenr_section pt-110 pb-110 chain">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-sm-10 mx-auto">
                    <div class="contenr_part">
                        <h2>Believe: Holiday Tour Packages Tailored to Your Needs</h2>
                        <p>Believe Travels trusts in "You Travel We Care". We guarantee to serve the best occasion bundles and satisfy your travel dreams. Believe Transworld is known as the most reliable Gujarati International Tour Operator based out of Ahmedabad, especially to organize vegetarian dinners and moreover considering Jain meals on tour. Our clients are our spine and most noteworthy advertisers. We have a 100% recurrent client proportion. We try to turn into the best vegetarian meal tour operator on the planet for both India tour packages as well as International tour packages and reliably wish to serve value.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

















<?php

 get_footer();
?>