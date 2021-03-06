<?php
/**
 * Template Name: Frontpage
 *
 * @package GBM
 */
 
?>

<?php get_header(); ?>


  <!-- Main Slider -->
  <div class="widget-cover-slider">
    <div class="swiper-container bg-gradient">
      <div class="swiper-wrapper">

        <!-- Start Swiper Slide -->
        <div class="swiper-slide ">
          <div class="swiper-slide-image" style="background-image: url('<?php the_field("header_background"); ?>')"></div>
          <div class="swiper-slide-content uk-flex uk-flex-middle uk-position-cover">
            <div class="uk-container ">
              <div class="cover-healine">
                <h1><?php the_field("header_title"); ?></h1>
                <p><?php the_field("header_subtitle"); ?></p>
                <div class="slide-cta">
                  <a href="<?php the_field("header_read_more"); ?>" class="uk-button button-aqua" data-text="Read more">Read More</a>

                  <a class="uk-button button-icon" data-text="Play Video" href="#modal-media-video" uk-toggle><i data-uk-icon="icon:play-circle;ratio:2"></i> Play Video</a>
                  <div id="modal-media-video" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <iframe src="<?php the_field("header_video_url"); ?>" width="560" height="315" frameborder="0" uk-video></iframe>
                    </div>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Swiper Slide -->

      </div>

    </div>
  </div>
  <!-- End Main Slider  -->


  <!-- Widget Help -->
  <div class="widget-help ">

    <div class="help-box bg-white uk-box-shadow-medium uk-padding ">
      <div class="card-brief">
        <h2><?php the_field("contact_title"); ?></h2>
        <p  class="uk-visible@m"><?php the_field("contact_summary"); ?></p>
        <a href="<?php the_field("contact_page"); ?>" class="uk-button button-aqua" data-text="<?php the_field("contact_label"); ?>"><?php the_field("contact_label"); ?></a>
      </div>
      <div class="particles-backdrop"></div>
    </div>

    
  </div>
  <!-- End Widget Help -->


  <!-- block Our Solutions-->
  <div class="page-block bg-pale uk-padding ">
    <div class="uk-container uk-margin-xlarge-top">
      <div class="block-header">
        <label><?php the_field("home_solutions_title"); ?></label>
        <h2><?php the_field("home_solutions_heading"); ?></h2>
      </div>
    </div>
    <div class="uk-container uk-margin-medium-top">
      <div class="block-content">
        <div class="widget-card-list">
          <div class="uk-grid-collapse uk-child-width-1-1 uk-child-width-1-3@m uk-child-width-1-6@l uk-flex-center" uk-grid>
			<?php $solutions = get_field('home_solutions'); 
				  foreach($solutions as $solution){ 
				  	setup_postdata($solution);
					$solution_icon = wp_get_attachment_image_src($solution->solution_icon, 'full' );
					$solution_icon = $solution_icon[0];
					$solution_name = $solution->solution_name;
					$solution_url = $solution->solution_url;
			?>
            <div>
              <div class="card-icon-text">
                <a href="<?php echo $solution_url; ?>">
                <img src="<?php echo $solution_icon; ?>" alt="<?php echo $solution_name; ?>" />
                <p><?php echo $solution_name; ?></p>
				</a>
              </div>
            </div>
			<?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Our Solutions -->


  <!-- Block Case Studies -->
  <div class="page-block bg-pale uk-padding ">
    <div class="uk-container">
      <div class="block-header">
        <label><?php the_field("case_studies_title"); ?></label>
      </div>
    </div>
    <div class="uk-container">
      <div class="block-content uk-margin-top">

        <div class="uk-child-width-1-2@m" uk-grid>
			<?php $case_studies = get_field('home_case_studies'); 
				  foreach($case_studies as $case){ 
				  	setup_postdata($case);
					$case_image = wp_get_attachment_image_src($case->case_image, 'full' );
					$case_image = $case_image[0];
					$case_title = $case->case_title;
					$case_description = $case->case_description;
					$case_location = $case->case_location;
					$case_type = $case->case_type;
					$case_url = $case->case_url;
			?>
          <div>
            <div class="card-case-study uk-card uk-card-default">
              <div class="uk-card-media-top uk-cover-container">
                <h3 class="uk-card-title uk-height-small">
                  <a href="<?php echo $case_url; ?>">
                    <?php echo $case_title; ?>
                  </a>
                </h3>
                <img src="<?php echo $case_image; ?>" alt="" uk-cover>
              </div>
              <div class="uk-card-body">

                <ul class="uk-iconnav">
                  <li>
                    <span>
                      <span uk-icon="icon: location"></span> <?php echo $case_location; ?></span>
                  </li>
                  <li>
                    <span>
                      <span uk-icon="icon: file-edit"></span> <?php echo $case_type; ?></span>
                  </li>
                </ul>

                <p><?php echo $case_description; ?></p>
                <p>
                  <a href="<?php echo $case_url; ?>">
                    <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                </p>
              </div>
            </div>
          </div>
		  <?php } wp_reset_postdata(); ?>
        </div>

      </div>
      <div class="block-footer uk-flex-center uk-text-center uk-padding">
        <a href="<?php the_field("solutions_page"); ?>" class="uk-button button-aqua" data-text="<?php the_field("solutions_label"); ?>">
          <?php the_field("solutions_label"); ?>
        </a>
      </div>
    </div>
  </div>
  <!-- END Block Case Studies -->

  <!-- Block News -->
  <div class="page-block bg-white uk-padding ">
    <div class="uk-container">
      <div class="block-header uk-margin-medium-top">
        <label><?php the_field("home_news_title"); ?></label>
        <h2><?php the_field("home_news_heading"); ?></h2>
      </div>
    </div>
    <div class="uk-container">
      <div class="block-content uk-margin-medium-top">
  		<?php 
			$news = get_news(3);

			if(count($news)){ foreach($news as $_news){ 

				$news_post = get_post($_news->post_id);
				$_news_image = wp_get_attachment_image_src($_news->news_image, 'full' );
				$news_image[] = $_news_image[0];
				$news_type[] = $_news->news_category;
				$news_date[] = date('d/m/Y',strtotime($news_post->post_date));
				$news_title[] = $_news->news_title;
				$news_description[] = substr($_news->news_article,0,100).'...';
				$news_url[] = $news_post->guid;;
			}}else{
				$news_image = array('','','');
				$news_type = array('','','');
				$news_date = array('','','');
				$news_title = array('','','');
				$news_description = array('','','');
				$news_url = array('','','');
			}
		?>

        <div class="uk-child-width-1-2@m uk-grid-match" uk-grid>
          <div>
            <div class="card-news uk-card uk-card-default card-news-blog">
              <div class="uk-card-media-top uk-cover-container uk-height-medium">

                <img src="<?php echo $news_image[0]; ?>" alt="" uk-cover>
              </div>
              <div class="uk-card-body">
                <span class="uk-label"><?php echo $news_type[0]; ?></span>
                <time><?php echo $news_date[0]; ?></time>
                <h3 class="uk-card-title">
                  <a href="<?php echo $news_url[0]; ?>"><?php echo $news_title[0]; ?></a>
                </h3>
                <p><?php echo $news_description[0]; ?></p>
                <p>
                  <a href="<?php echo $news_url[0]; ?>">
                    <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class=" uk-grid-small uk-child-width-1-1" uk-grid>

              <div>
                <div class="card-news uk-card uk-card-default uk-grid-collapse uk-margin card-news-press-release" uk-grid>
                  <div class="uk-card-media-left uk-cover-container uk-height-medium uk-width-small uk-visible@s">
                    <img src="<?php echo $news_image[1]; ?>" alt="" uk-cover>
                  </div>
                  <div class=" uk-width-expand">
                    <div class="uk-card-body">
                      <span class="uk-label"><?php echo $news_type[1]; ?></span>
                      <time><?php echo $news_date[1]; ?></time>
                      <h3 class="uk-card-title">
                        <a href="<?php echo $news_url[1]; ?>"><?php echo $news_title[1]; ?></a>
                      </h3>
                      <p>
                        <a href="<?php echo $news_url[1]; ?>">
                          <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                      </p>
                    </div>
                  </div>
                </div>

              </div>
              <div class="uk-grid-item-match">
                <div class="card-news uk-card uk-card-default uk-grid-collapse uk-margin card-news-press-release" uk-grid>

                  <div class=" uk-width-expand">
                    <div class="uk-card-body">
                      <span class="uk-label"><?php echo $news_type[2]; ?></span>
                      <time><?php echo $news_date[2]; ?></time>
                      <h3 class="uk-card-title">
                        <a href="<?php echo $news_url[2]; ?>"><?php echo $news_title[2]; ?></a>
                      </h3>
                      <p>
                        <a href="<?php echo $news_url[2]; ?>">
                          <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="block-footer uk-flex-center uk-text-center uk-padding">
        <a href="<?php the_field("news_page"); ?>" class="uk-button button-aqua" data-text="<?php the_field("news_label"); ?>">
          <?php the_field("news_label"); ?>
        </a>
      </div>
	  <div class="particles-backdrop" id="particles-js"></
div>
    </div>
  </div>
  </div>
  <!-- END Block News-->

  <!-- Block Careers -->
  <div class="page-block page-block-inverse bg-gradient uk-padding ">
    <div class="uk-container">
      <div class="block-header uk-margin-medium-top uk-position-relative">
        <label><?php the_field("home_careers_title"); ?></label>
        <h2><?php the_field("home_careers_heading"); ?></h2>
        <div class="uk-position-top-right uk-visible@m">
        <a href="<?php the_field("careers_page"); ?>" class="uk-button button-aqua" data-text="<?php the_field("careers_label"); ?>">
          <?php the_field("careers_label"); ?>
        </a>
        </div>
      </div>
    </div>
    <div class="uk-container">
      <div class="block-content uk-margin-medium-top">

        <div class="uk-grid-large" uk-grid>
          <div class="uk-width-1-2@s uk-width-1-3@m">
            <div class="uk-margin-right@m">
              <div class="widget-culture">

                <h3><?php the_field("summary_title"); ?></h3>
                <div class="card-culture">

                  <div class="uk-card-body">
                    <?php the_field("summary_text"); ?>
                  </div>
                  <div class="card-media">
                    <img src="<?php the_field("summary_image"); ?>" alt="<?php the_field("summary_title"); ?>" />
                  </div>
                </div>

              </div>

            </div>
          </div>

          <div class="uk-width-1-2@s uk-width-2-3@m">
            <div class="uk-margin-left@m">
              <div class="widget-testimonial-slider uk-margin">

                <h3>Employee testimonials</h3>
                <div class="swiper-controls uk-position-bottom-center">
                    <div class="swiper-prev" uk-icon="icon:chevron-left; ratio: 1.5"></div>
      
                    <div class="swiper-next" uk-icon="icon:chevron-right; ratio: 1.5"></div>
      
                  </div>
           
                  <div class="swiper-container">
                    <!-- Add Pagination -->
                    <!-- Add Pagination -->
         
                    <div class="swiper-wrapper">


					<?php $testimonials = get_field('home_testimonials'); 
						  foreach($testimonials as $testimonial){ 
						  	setup_postdata($testimonial);
							$testimonial_image = wp_get_attachment_image_src($testimonial->testimonial_image, 'full' );
							$testimonial_image = $testimonial_image[0];

							$testimonial_position = $testimonial->testimonial_position;
							$testimonial_author = $testimonial->testimonial_author;
							$testimonial_text = $testimonial->testimonial_text;
					?>
                      <!-- Start Slide-->
                      <div class="swiper-slide">
                        <div class="slide-content">

                          <div class="card-testimonial">

                            <div class="card-media">
                              <img src="<?php echo $testimonial_image; ?>" alt="<?php echo $testimonial_position; ?>" />
                              <div>
                                <h3><?php echo $testimonial_author; ?></h3>
                                <p><?php echo $testimonial_position; ?></p>
                              </div>
                            </div>

                            <div class="uk-card-body">
                              <?php echo $testimonial_text; ?>
                            </div>
                          </div>

                        </div>
                      </div>
                      <!-- END Slide -->
					  <?php } wp_reset_postdata(); ?>

                    </div>

                  </div>

         
             

              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="block-footer uk-flex-center uk-text-center uk-padding uk-hidden@m" >
        <a href="<?php the_field("careers_page"); ?>" class="uk-button button-aqua" data-text="<?php the_field("careers_label"); ?>">
          <?php the_field("careers_label"); ?>
        </a>
    </div>

    <div class="block-backdrop"  style="background-image:url(<?php echo get_template_directory_uri(); ?>/media/JPG/Careers-bg.jpg)"></div>
  </div>
  <!-- End Block Careers -->

  <!-- Block Partners -->
  <div class="page-block bg-white uk-padding ">
    <div class="uk-container">
      <div class="block-header uk-margin-medium-top uk-position-relative">
        <label><?php the_field("home_partners_title"); ?></label>
      </div>
    </div>
    <div class="uk-container">
      <div class="block-content uk-margin-medium-top">
        
         <div class="widget-partners">
            <div class="uk-grid-small uk-flex-around uk-flex-middle uk-child-width-auto" data-uk-grid>
				<?php $partners = get_field('home_partners'); 
					  foreach($partners as $partner){ 
					  	setup_postdata($partner);
						$partner_image = wp_get_attachment_image_src($partner->partner_image, 'full' );
						$partner_image = $partner_image[0];
				?>
                <div>
                    <img src="<?php echo $partner_image; ?>" alt="...">
                </div>
				<?php } wp_reset_postdata(); ?>
         	</div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Block Partners -->

  <!-- Block Tweets -->
  <div class="page-block page-block-inverse bg-gradient uk-padding ">
    <div class="uk-container">
      <div class="block-header uk-margin-medium-top uk-position-relative">
        <label><?php the_field("home_social_title"); ?></label>
        <h2><?php the_field("home_social_heading"); ?></h2>

      </div>
    </div>

    <div class="uk-container">
      <div class="block-content uk-margin-medium-top uk-margin-large-bottom">


        <!-- Start Twitter Swiper -->
        <div class="widget-twitter-slider">

          <div class="swiper-container">
            <!-- Add Pagination -->
            <div class="swiper-controls uk-position-bottom-center">
              <div class="swiper-prev" uk-icon="icon:chevron-left; ratio: 1.5"></div>

              <div class="swiper-next" uk-icon="icon:chevron-right; ratio: 1.5"></div>

            </div>
            <div class="swiper-wrapper">


              <!-- Start Slide-->
			  <?php
				$tweets = get_tweets();
			  	foreach ($tweets as $tweet) { $parsed_tweet = parse_tweet($tweet); ?>
              <div class="swiper-slide">

                <div class="card-tweet uk-card uk-card-default">
                  <i data-uk-icon="icon:twitter;ratio:2" class="uk-box-shadow-small"></i>
                  <div class="uk-card-body">
                    <h3 class="uk-card-title">
                      <a href="https://twitter.com/GBMcomms">@GBMcomms</a>
                    </h3>
                    <p><?php echo $parsed_tweet[0]; ?></p>
                  </div>
                  <div class="uk-card-media-bottom">
                      <img src="<?php echo $parsed_tweet[1]; ?>"  alt="">
                  </div>
                </div>

              </div>
			  <?php } ?>
              <!-- END Slide -->

            </div>

          </div>

        </div>
        <!-- END Twitter Swiper-->




      </div>
    </div>
    <div class="block-backdrop">
        
         <svg id="my-svg" width="100%" height="100%" viewBox="0 -110 1004 1200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>GBM Illustration</title>
        <defs>
            <filter x="-5.2%" y="-5.6%" width="110.5%" height="111.4%" filterUnits="objectBoundingBox" id="filter-1">
                <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                <feGaussianBlur stdDeviation="20" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                <feColorMatrix values="0 0 0 0 0.669342077   0 0 0 0 0.240214321   0 0 0 0 0.862138605  0 0 0 1 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                <feMerge>
                    <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                    <feMergeNode in="SourceGraphic"></feMergeNode>
                </feMerge>
            </filter>
            <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-2">
                <stop stop-color="#FF98FF" offset="0%"></stop>
                <stop stop-color="#3AF4FF" offset="100%"></stop>
            </linearGradient>
        </defs>
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="01_GBM_Home_desktop" transform="translate(-436.000000, 0.000000)" stroke="url(#linearGradient-2)" stroke-width="4">
                <g id="background-image">
                    <g id="Looper_Group" filter="url(#filter-1)" transform="translate(427.000000, -106.000000)">
                        <g id="GBM_Shape">
                            <path d="M330.355965,352.99068 C-246.267913,248.185435 223.224964,872.364196 659.988713,897.535858 C1096.75246,922.70752 1263.07913,361.844035 1101.01058,255.634361 C938.942032,149.424688 906.979843,457.795926 330.355965,352.99068 Z" id="duplicate_50_original_duplicate_1_original_Path-3_67095787_5149393" transform="translate(611.223091, 566.917979) rotate(352.800000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2877, 2879; stroke-dashoffset: 560;"></path>
                            <path d="M335.459655,356.8591 C-230.682038,253.944477 230.28186,866.831965 659.105302,891.552712 C1087.92874,916.273459 1251.22556,365.56213 1092.10237,261.272896 C932.979175,156.983663 901.601348,459.773723 335.459655,356.8591 Z" id="duplicate_49_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.98" transform="translate(611.223091, 566.917979) rotate(345.600000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2825, 2827; stroke-dashoffset: 550;"></path>
                            <path d="M340.563342,360.727505 C-215.096167,259.703494 237.338757,861.299749 658.221894,885.569586 C1079.10503,909.839423 1239.37199,369.280217 1083.19415,266.911416 C927.016316,164.542615 896.222852,461.751516 340.563342,360.727505 Z" id="duplicate_48_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.96" transform="translate(611.223091, 566.917979) rotate(338.400000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2772, 2774; stroke-dashoffset: 539;"></path>
                            <path d="M345.667028,364.595894 C-199.5103,265.462483 244.395657,855.76755 657.338488,879.586481 C1070.28132,903.405413 1227.51842,372.998296 1074.28594,272.54992 C921.053453,172.101543 890.844355,463.729304 345.667028,364.595894 Z" id="duplicate_47_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.94" transform="translate(611.223091, 566.917979) rotate(331.200000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2720, 2722; stroke-dashoffset: 529;"></path>
                            <path d="M350.770711,368.464266 C-183.924436,271.221444 251.452558,850.235368 656.455085,873.603399 C1061.45761,896.97143 1215.66485,376.716367 1065.37772,278.188406 C915.090587,179.660446 885.465858,465.707087 350.770711,368.464266 Z" id="duplicate_46_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.92" transform="translate(611.223091, 566.917979) rotate(324.000000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2668, 2670; stroke-dashoffset: 519;"></path>
                            <path d="M355.874391,372.33262 C-168.338577,276.980374 258.509461,844.703203 655.571685,867.620341 C1052.63391,890.537478 1203.81128,380.434429 1056.4695,283.826875 C909.127718,187.219322 880.087359,467.684865 355.874391,372.33262 Z" id="duplicate_45_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.9" transform="translate(611.223091, 566.917979) rotate(316.800000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2616, 2618; stroke-dashoffset: 509;"></path>
                            <path d="M360.978069,376.200955 C-152.752722,282.739272 265.566366,839.171058 654.688287,861.637307 C1043.81021,884.103557 1191.9577,384.152481 1047.56127,289.465325 C903.164844,194.778169 874.70886,469.662638 360.978069,376.200955 Z" id="duplicate_44_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.88" transform="translate(611.223091, 566.917979) rotate(309.600000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2564, 2566; stroke-dashoffset: 499;"></path>
                            <path d="M366.081744,380.069269 C-137.166872,288.498134 272.623273,833.638934 653.804893,855.654301 C1034.98651,877.669669 1180.10413,387.870523 1038.65305,295.103755 C897.201966,202.336986 869.330359,471.640404 366.081744,380.069269 Z" id="duplicate_43_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.86" transform="translate(611.223091, 566.917979) rotate(302.400000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2511, 2513; stroke-dashoffset: 489;"></path>
                            <path d="M371.185416,383.937562 C-121.581027,294.25696 279.680183,828.106831 652.921502,849.671324 C1026.16282,871.235817 1168.25055,391.588555 1029.74482,300.742162 C891.239084,209.89577 863.951858,473.618164 371.185416,383.937562 Z" id="duplicate_42_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.84" transform="translate(611.223091, 566.917979) rotate(295.200000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2459, 2461; stroke-dashoffset: 478;"></path>
                            <path d="M376.289084,387.805832 C-105.995187,300.015747 286.737096,822.574751 652.038114,843.688377 C1017.33913,864.802002 1156.39697,395.306575 1020.83658,306.380547 C885.276197,217.454519 858.573355,475.595917 376.289084,387.805832 Z" id="duplicate_41_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.82" transform="translate(611.223091, 566.917979) rotate(288.000000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2407, 2409; stroke-dashoffset: 468;"></path>
                            <path d="M381.392749,391.674077 C-90.4093524,305.774492 293.794011,817.042697 651.15473,837.705463 C1008.51545,858.368229 1144.54338,399.024583 1011.92834,312.018907 C879.313305,225.013232 853.194851,477.573663 381.392749,391.674077 Z" id="duplicate_40_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.8" transform="translate(611.223091, 566.917979) rotate(280.800000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2355, 2357; stroke-dashoffset: 458;"></path>
                            <path d="M386.496411,395.542296 C-74.8235241,311.533191 300.85093,811.510669 650.27135,831.722583 C999.691771,851.934498 1132.6898,402.742578 1003.0201,317.657241 C873.350408,232.571905 847.816346,479.551401 386.496411,395.542296 Z" id="duplicate_39_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.78" transform="translate(611.223091, 566.917979) rotate(273.600000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2303, 2305; stroke-dashoffset: 448;"></path>
                            <path d="M391.600068,399.410487 C-59.2377024,317.291843 307.907851,805.978669 649.387975,825.739742 C990.868099,845.500814 1120.83621,406.460558 994.111859,323.295547 C867.387505,240.130535 842.437839,481.529131 391.600068,399.410487 Z" id="duplicate_38_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.76" transform="translate(611.223091, 566.917979) rotate(266.400000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2250, 2252; stroke-dashoffset: 438;"></path>
                            <path d="M396.703721,403.278647 C-43.6518876,323.050443 314.964776,800.4467 648.504604,819.75694 C982.044433,839.067181 1108.98263,410.178524 985.203611,328.933822 C861.424596,247.68912 837.05933,483.506852 396.703721,403.278647 Z" id="duplicate_37_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.74" transform="translate(611.223091, 566.917979) rotate(259.200000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2198, 2200; stroke-dashoffset: 428;"></path>
                            <path d="M401.80737,407.146775 C-28.0660803,328.808987 322.021704,794.914764 647.621238,813.774182 C973.220772,832.6336 1097.12903,413.896474 976.295357,334.572065 C855.46168,255.247656 831.68082,485.484563 401.80737,407.146775 Z" id="duplicate_36_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.72" transform="translate(611.223091, 566.917979) rotate(252.000000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2146, 2148; stroke-dashoffset: 417;"></path>
                            <path d="M406.911013,411.014868 C-12.4802811,334.567472 329.078637,789.382863 646.737878,807.79147 C964.397119,826.200078 1085.27544,417.614406 967.387098,340.210272 C849.498756,262.806139 826.302308,487.462264 406.911013,411.014868 Z" id="duplicate_35_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.7" transform="translate(611.223091, 566.917979) rotate(244.800000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2094, 2096; stroke-dashoffset: 407;"></path>
                            <path d="M412.014652,414.882923 C3.10550934,340.325892 336.135574,783.851 645.854523,801.808809 C955.573473,819.766617 1073.42184,421.332319 958.478835,345.848442 C843.535826,270.364566 820.923794,489.439954 412.014652,414.882923 Z" id="duplicate_34_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.68" transform="translate(611.223091, 566.917979) rotate(237.600000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 2041, 2043; stroke-dashoffset: 397;"></path>
                            <path d="M417.118284,418.750937 C18.6912904,346.084242 343.192515,778.319178 644.971175,795.826201 C946.749834,813.333224 1061.56824,425.050212 949.570565,351.486571 C837.572886,277.92293 815.545278,491.417631 417.118284,418.750937 Z" id="duplicate_33_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.66" transform="translate(611.223091, 566.917979) rotate(230.400000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1989, 1991; stroke-dashoffset: 387;"></path>
                            <path d="M422.221911,422.618906 C34.2770613,351.842517 350.249461,772.787402 644.087833,789.843653 C937.926205,806.899904 1049.71464,428.768083 940.662289,357.124656 C831.609938,285.481229 810.16676,493.395296 422.221911,422.618906 Z" id="duplicate_32_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.64" transform="translate(611.223091, 566.917979) rotate(223.200000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1937, 1939; stroke-dashoffset: 377;"></path>
                            <path d="M427.32553,426.486828 C49.8628211,357.600709 357.306413,767.255673 643.204499,783.861168 C929.102584,800.466663 1037.86103,432.485929 931.754006,362.762692 C825.64698,293.039454 804.788239,495.372946 427.32553,426.486828 Z" id="duplicate_31_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.62" transform="translate(611.223091, 566.917979) rotate(216.000000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1885, 1887; stroke-dashoffset: 367;"></path>
                            <path d="M432.429142,430.354697 C65.4485688,363.358813 364.363371,761.723998 642.321173,777.878753 C920.278974,794.033509 1026.00742,436.20375 922.845716,368.400676 C819.684011,300.597602 799.409715,497.350581 432.429142,430.354697 Z" id="duplicate_30_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.6" transform="translate(611.223091, 566.917979) rotate(208.800000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1833, 1835; stroke-dashoffset: 357;"></path>
                            <path d="M437.532746,434.222509 C81.0343034,369.116818 371.420335,756.19238 641.437855,771.896414 C911.455375,787.600448 1014.15381,439.921543 913.937418,374.038603 C813.72103,308.155663 794.031189,499.3282 437.532746,434.222509 Z" id="duplicate_29_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.58" transform="translate(611.223091, 566.917979) rotate(201.600000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1780, 1782; stroke-dashoffset: 346;"></path>
                            <path d="M442.636341,438.090258 C96.6200236,374.874718 378.477306,750.660825 640.554547,765.914158 C902.631788,781.167491 1002.30019,443.639304 905.029111,379.676467 C807.758037,315.71363 788.652659,501.305799 442.636341,438.090258 Z" id="duplicate_28_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.56" transform="translate(611.223091, 566.917979) rotate(194.400000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1728, 1730; stroke-dashoffset: 336;"></path>
                            <path d="M447.739927,441.957939 C112.205728,380.6325 385.534285,745.129339 639.67125,759.931992 C893.808214,774.734646 990.44656,447.357032 896.120795,385.314263 C801.79503,323.271495 783.274126,503.283379 447.739927,441.957939 Z" id="duplicate_27_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.54" transform="translate(611.223091, 566.917979) rotate(187.200000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1676, 1678; stroke-dashoffset: 326;"></path>
                            <path d="M452.843502,445.825545 C127.791415,386.390154 392.591273,739.597929 638.787964,753.949927 C884.984655,768.301925 978.592928,451.074721 887.212468,390.951984 C795.832007,330.829246 777.895588,505.260936 452.843502,445.825545 Z" id="duplicate_26_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.52" transform="translate(611.223091, 566.917979) rotate(180.000000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1624, 1626; stroke-dashoffset: 316;"></path>
                            <path d="M457.947065,449.693067 C143.377083,392.147666 399.648269,734.066603 637.90469,747.967972 C876.161111,761.869341 966.73929,454.79237 878.304129,396.589621 C789.868967,338.386872 772.517047,507.238469 457.947065,449.693067 Z" id="duplicate_25_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.5" transform="translate(611.223091, 566.917979) rotate(172.800000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1572, 1574; stroke-dashoffset: 306;"></path>
                            <path d="M463.050615,453.560498 C158.96273,397.905021 406.705276,728.53537 637.021431,741.986139 C867.337586,755.436909 954.885645,458.509973 869.395777,402.227166 C783.905908,345.944359 767.1385,509.215975 463.050615,453.560498 Z" id="duplicate_24_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.48" transform="translate(611.223091, 566.917979) rotate(165.600000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1519, 1521; stroke-dashoffset: 295;"></path>
                            <path d="M468.154151,457.427826 C174.548353,403.662201 413.762295,723.00424 636.138188,736.004442 C858.51408,749.004645 943.031992,462.227524 860.48741,407.864609 C777.942829,353.501693 761.759949,511.19345 468.154151,457.427826 Z" id="duplicate_23_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.46" transform="translate(611.223091, 566.917979) rotate(158.400000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1467, 1469; stroke-dashoffset: 285;"></path>
                            <path d="M473.25767,461.295039 C190.13395,409.419187 420.819327,717.473225 635.254962,730.022897 C849.690597,742.572569 931.17833,465.94502 851.579028,413.501937 C771.979726,361.058855 756.381391,513.170892 473.25767,461.295039 Z" id="duplicate_22_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.44" transform="translate(611.223091, 566.917979) rotate(151.200000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1415, 1417; stroke-dashoffset: 275;"></path>
                            <path d="M478.361172,465.162125 C205.719517,415.175955 427.876372,711.942339 634.371755,724.041521 C840.867138,736.140703 919.324658,469.662451 842.670627,419.139138 C766.016597,368.615825 751.002827,515.148296 478.361172,465.162125 Z" id="duplicate_21_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.42" transform="translate(611.223091, 566.917979) rotate(144.000000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1363, 1365; stroke-dashoffset: 265;"></path>
                            <path d="M483.464653,469.029067 C221.305052,420.932477 434.933435,706.411598 633.488571,718.060336 C832.043707,729.709075 907.470975,473.379811 833.762207,424.776195 C760.053438,376.172579 745.624255,517.125658 483.464653,469.029067 Z" id="duplicate_20_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.4" transform="translate(611.223091, 566.917979) rotate(136.800000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1311, 1313; stroke-dashoffset: 255;"></path>
                            <path d="M488.568112,472.895847 C236.890549,426.688722 441.990515,700.881021 632.605411,712.079367 C823.220307,723.277714 895.617279,477.09709 824.853763,430.41309 C754.090246,383.729089 740.245675,519.102971 488.568112,472.895847 Z" id="duplicate_19_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.38" transform="translate(611.223091, 566.917979) rotate(129.600000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1258, 1260; stroke-dashoffset: 245;"></path>
                            <path d="M493.671544,476.762442 C252.476003,432.444652 449.047616,695.35063 631.72228,706.098643 C814.396943,716.846656 883.763569,480.814278 815.945293,436.049799 C748.127017,391.285321 734.867085,521.080231 493.671544,476.762442 Z" id="duplicate_18_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.36" transform="translate(611.223091, 566.917979) rotate(122.400000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1206, 1208; stroke-dashoffset: 234;"></path>
                            <path d="M498.774947,480.628825 C268.061409,438.200222 456.104741,689.820452 630.839181,700.118199 C805.57362,710.415947 871.909843,484.53136 807.036793,441.686298 C742.163744,398.841235 729.488484,523.057428 498.774947,480.628825 Z" id="duplicate_17_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.34" transform="translate(611.223091, 566.917979) rotate(115.200000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1154, 1156; stroke-dashoffset: 224;"></path>
                            <path d="M503.878315,484.494966 C283.646759,443.955378 463.161894,684.290518 629.956119,694.138078 C796.750343,703.985637 860.056098,488.248322 798.12826,447.322553 C736.200422,406.396785 724.109871,525.034553 503.878315,484.494966 Z" id="duplicate_16_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.32" transform="translate(611.223091, 566.917979) rotate(108.000000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1102, 1104; stroke-dashoffset: 214;"></path>
                            <path d="M508.981644,488.360826 C299.232045,449.710055 470.219078,678.760868 629.0731,688.158329 C787.927121,697.55579 848.202331,491.965144 789.219686,452.958528 C730.237042,413.951912 718.731243,527.011596 508.981644,488.360826 Z" id="duplicate_15_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.3" transform="translate(611.223091, 566.917979) rotate(100.800000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 1049, 1051; stroke-dashoffset: 204;"></path>
                            <path d="M514.084926,492.226357 C314.817254,455.464172 477.276299,673.231549 628.190131,682.179016 C779.103963,691.126483 836.348538,495.681803 780.311066,458.594174 C724.273595,421.506546 713.352598,528.988542 514.084926,492.226357 Z" id="duplicate_14_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.28" transform="translate(611.223091, 566.917979) rotate(93.600000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 997, 999; stroke-dashoffset: 194;"></path>
                            <path d="M519.188154,496.091503 C330.402375,461.217631 484.333563,667.702619 627.307221,676.200215 C770.280879,684.697811 824.494716,499.39827 771.402392,464.229435 C718.310069,429.0606 707.973933,530.965374 519.188154,496.091503 Z" id="duplicate_13_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.26" transform="translate(611.223091, 566.917979) rotate(86.400000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 945, 947; stroke-dashoffset: 184;"></path>
                            <path d="M524.291317,499.95619 C345.987391,466.970309 491.390879,662.174151 626.424381,670.222022 C761.457883,678.269893 812.640858,503.114509 762.493654,469.864237 C712.346449,436.613965 702.595244,532.942071 524.291317,499.95619 Z" id="duplicate_12_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.24" transform="translate(611.223091, 566.917979) rotate(79.200000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 893, 895; stroke-dashoffset: 174;"></path>
                            <path d="M529.394403,503.820327 C361.57228,472.722049 498.448257,656.646237 625.541626,664.244559 C752.634994,671.842881 800.786958,506.830475 753.584837,475.498489 C706.382717,444.166504 697.216526,534.918606 529.394403,503.820327 Z" id="duplicate_11_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.22" transform="translate(611.223091, 566.917979) rotate(72.000000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 841, 843; stroke-dashoffset: 163;"></path>
                            <path d="M534.497395,507.683797 C377.157015,478.47265 505.505711,651.118996 624.658972,658.267982 C743.812234,665.416967 788.933006,510.546108 744.675927,481.132074 C700.418848,451.718039 691.837774,536.894944 534.497395,507.683797 Z" id="duplicate_10_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.2" transform="translate(611.223091, 566.917979) rotate(64.800000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 789, 791; stroke-dashoffset: 153;"></path>
                            <path d="M539.600271,511.546445 C392.741561,484.22185 512.563256,645.592584 623.776445,652.292495 C734.989633,658.992407 777.07899,514.261334 735.7669,486.764836 C694.454811,459.268339 686.45898,538.87104 539.600271,511.546445 Z" id="duplicate_9_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.18" transform="translate(611.223091, 566.917979) rotate(57.600000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 736, 738; stroke-dashoffset: 143;"></path>
                            <path d="M544.703001,515.408065 C408.325871,489.969298 519.620918,640.067207 622.894074,646.318372 C726.16723,652.569537 765.224894,517.976048 726.857729,492.396572 C688.490564,466.817095 681.080131,540.846833 544.703001,515.408065 Z" id="duplicate_8_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.16" transform="translate(611.223091, 566.917979) rotate(50.400000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 684, 686; stroke-dashoffset: 133;"></path>
                            <path d="M549.805548,519.268378 C423.90988,495.714516 526.678727,634.543148 622.011903,640.345984 C717.34508,646.148819 753.370697,521.690113 717.948373,498.027 C682.526049,474.363886 675.701215,542.82224 549.805548,519.268378 Z" id="duplicate_7_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.14" transform="translate(611.223091, 566.917979) rotate(43.200000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 632, 634; stroke-dashoffset: 123;"></path>
                            <path d="M554.907854,523.126991 C439.493498,501.456836 533.736727,629.020803 621.129992,634.375851 C708.523258,639.730899 741.516369,525.403332 709.038778,503.655727 C676.561187,481.908123 670.322211,544.797147 554.907854,523.126991 Z" id="duplicate_6_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.12" transform="translate(611.223091, 566.917979) rotate(36.000000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 580, 582; stroke-dashoffset: 113;"></path>
                            <path d="M560.009841,526.983338 C455.076594,507.195291 540.794983,623.500742 620.248428,628.408726 C699.701874,633.31671 729.661865,529.115425 700.128863,509.282189 C670.595861,489.448953 664.943089,546.771385 560.009841,526.983338 Z" id="duplicate_5_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.1" transform="translate(611.223091, 566.917979) rotate(28.800000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 528, 530; stroke-dashoffset: 102;"></path>
                            <path d="M565.111389,530.836568 C470.658973,512.928432 547.853589,617.983822 619.367341,622.445736 C690.881093,626.907649 717.807119,532.825969 691.218508,514.905534 C664.629897,496.985099 659.563805,548.744705 565.111389,530.836568 Z" id="duplicate_4_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.08" transform="translate(611.223091, 566.917979) rotate(21.600000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 475, 477; stroke-dashoffset: 92;"></path>
                            <path d="M570.212309,534.685347 C486.240328,518.653982 554.912697,612.47139 618.486934,616.488653 C682.061171,620.505916 705.952028,536.5343 682.307526,520.524428 C658.663023,504.514555 654.18429,550.716712 570.212309,534.685347 Z" id="duplicate_3_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.06" transform="translate(611.223091, 566.917979) rotate(14.400000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 423, 425; stroke-dashoffset: 82;"></path>
                            <path d="M575.329381,538.64866 C501.848039,524.574837 561.958904,606.843506 617.589011,610.379587 C673.219119,613.915668 694.105814,540.299567 673.412696,526.257856 C652.719579,512.216145 648.810724,552.722483 575.329381,538.64866 Z" id="duplicate_2_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.04" transform="translate(611.223091, 566.917979) rotate(7.200000) translate(-611.223091, -566.917979) " style="stroke-dasharray: 371, 373; stroke-dashoffset: 72;"></path>
                            <path d="M580.298572,542.284428 C517.052528,529.955841 568.874852,601.582218 616.747691,604.724123 C664.62053,607.866027 682.505346,543.861962 664.682578,531.624249 C646.859811,519.386536 643.544616,554.613014 580.298572,542.284428 Z" id="duplicate_1_original_duplicate_1_original_Path-3_67095787_5149393" opacity="0.02" style="stroke-dasharray: 320, 322; stroke-dashoffset: 62;"></path>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </svg>

        
    </div>
  </div>
  <!-- END Block Tweets -->

	<?php help_widget(); ?>


  <!-- Block Globe -->
  <div class="page-block page-block-inverse bg-slate-blue uk-padding ">
    <div class="uk-container">
      <div class="block-header uk-margin-xlarge-top uk-position-relative">
        <label><?php the_field("home_locations_title"); ?></label>
        <h2><?php the_field("home_locations_heading"); ?></h2>

      </div>
    </div>
    <div class="uk-container">
      <div class="block-content uk-margin-medium-top">
        <div class="widget-globe">
          <div class="uk-grid-small uk-flex-middle" data-uk-grid="">

			<?php locations_widget(); ?>

            <!-- Globe Canvas-->
            <div class="uk-width-expand uk-width-extend@l">

              <div class="uk-position-relative">

                <div class="globe js-globe">
                  <ul class="globe-list js-list"></ul>
                  <canvas class="globe-canvas js-canvas"></canvas>
                </div>

              </div>

            </div>
            <!-- End Globe Canvas-->
          </div>
        </div>

      </div>
    </div>
  </div>
<!-- End Block Globe -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
