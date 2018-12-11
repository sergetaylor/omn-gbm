<?php
/**
 * Template Name: Solutions Details
 *
 * Template Post Type: solutions
 *
 * @package GBM
 */
 
?>

<?php get_header(); ?>


    <!-- Page Cover -->
    <div class="widget-page-cover bg-gradient uk-flex uk-flex-middle">
        <div class="uk-width-extend">
            <div class="uk-container">
                <div class="uk-grid-small uk-flex-top" uk-grid>
                    <div class="uk-width-auto">
                        <img width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/media/SVG/solutions-avatar.svg" alt="...">
                    </div>
                    <div class="uk-width-expand">
                        <h1><?php the_field("header_title"); ?></h1>
                        <p><?php the_field("header_subtitle"); ?></p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Page Cover  -->

	<div class="widget-secondary-nav uk-visible@s">

        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="swiper-container">

                <ul class="uk-navbar-nav swiper-wrapper">
                    <li class="slide active">
                        <a href="#">Overview</a>
                    </li>
					<?php
						$sub_solutions = get_posts( array('post_parent' => $post->parent_id,
						 'post_type' => $post->post_type , 'posts_per_page' => -1) );
						foreach($sub_solutions as $solution){
							$solution_name = $solution->solution_name;
							$solution_url = $solution->solution_url;
					?>
                    <li class="slide">
                        <a href="<?php echo $solution_url; ?>"><?php echo $solution_name; ?></a>
                    </li>
					<?php } ?>
                </ul>
                    <!-- Add Arrows -->
            <div class="swiper-button-next"><i uk-icon="icon:chevron-right;ratio:1"></i></div>
            <div class="swiper-button-prev"><i uk-icon="icon:chevron-left;ratio:1"></i></div>

            </div>
        </nav>
    </div>

    <!-- Breadcrumbs  -->
    <div class="widget-breadcumbs">
        <div class="uk-container">

            <ul class="uk-breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/solutions/">Solutions</a>
                </li>
				<?php 
					$parent_post = get_post($post->post_parent);
					$parent_parent_post = get_post($parent_post->post_parent);
					if($parent_parent_post->ID != $post->ID){
				?>
                <li>
                    <a href="<?php echo $parent_parent_post->guid; ?>"><?php echo $parent_parent_post->header_title; ?></a>
                </li>
				<?php } ?>
                <li>
                    <a href="<?php echo $parent_post->guid; ?>"><?php echo $parent_post->header_title; ?></a>
                </li>
                <li>
                    <span><?php the_field("header_title"); ?></span>
                </li>
            </ul>


        </div>
    </div>
    <!-- End Breadcrumbs  -->



    <div class="widget-secondary-nav-mob uk-hidden@s bg-pale uk-padding">
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-select">Go to section</label>
            <div class="uk-form-controls">
                <select class="uk-select" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Overview</option>
                    <?php
						$sub_solutions = get_posts( array('post_parent' => $post->parent_id,
						 'post_type' => $post->post_type , 'posts_per_page' => -1) );
						foreach($sub_solutions as $solution){
							$solution_name = $solution->solution_name;
							$solution_url = $solution->solution_url;
					?>
                    <option value="<?php echo $solution_url; ?>">
                        <?php echo $solution_name; ?>
                    </option>
					<?php } ?>
                </select>
            </div>
        </div>
    </div>

    <!-- Widget Page Title  -->
    <div class="widget-page-title uk-flex uk-flex-middle">

        <div class="uk-width-extend">
            <div class="uk-container">
                <div class="title-wrapper">
                    <h2><?php the_field("solutions_details_title"); ?></h2>
                    <p><?php the_field("solutions_details_heading"); ?></p>
                </div>
                <div class="backdrop" style="background-image: url('<?php the_field("solutions_details_background"); ?>')"></div>
            </div>
        </div>


    </div>
    <!-- End Widget Page Title  -->

    <!-- Block Article -->
    <div class="page-block uk-padding bg-mute ">
        <div class="uk-container uk-margin-top">
            <article>
                <?php the_field("solutions_details_description"); ?>
            </article>
        </div>
    </div>
    <!-- End Block Article -->

    <!-- Block Accordion -->
    <div class="page-block uk-padding bg-mute ">
        <div class="uk-container ">
            <div class="widget-accordion">
                <ul uk-accordion="multiple: true">
                    <!-- Repeat Element -->
	  				<?php if( have_rows('articles') ) while( have_rows('articles') ){ the_row(); 
					$title = get_sub_field('title');
					$sub_title = get_sub_field('sub_title');
					$background = get_sub_field('background');
					$content = get_sub_field('content');
					$blockquote = get_sub_field('blockquote');
					$author = get_sub_field('author');
					?>
                    <li>
                        <a class="uk-accordion-title" href="#">
                            <div class="title-wrapper">

                                <h2><?php echo $title; ?></h2>
                                <p><?php echo $sub_title; ?></p>
                            </div>
                            <div class="backdrop" style="background-image: url('<?php echo $background; ?>')"></div>
                        </a>
                        <div class="uk-accordion-content">
                            <div class="widget-article article-news uk-margin-top">
                                <div class="article-body">

                                    <div class="uk-grid uk-grid-collapse uk-flex-center" uk-grid>
                                        <div class="uk-width-4-5">


                                            <article>

												<?php echo $content; ?>

                                                <blockquote cite="#">
                                                    <p class="uk-margin-small-bottom"><?php echo $blockquote; ?></p>
                                                    <footer><?php echo $author; ?></footer>
                                                </blockquote>



                                            </article>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
					<?php } ?>
                    <!-- End Repeat Element -->
                </ul>
            </div>
        </div>
    </div>
    <!-- End Block Accordion -->

	<?php
		$other_solutions = get_field('other_solutions');
		if($other_solutions){
	?>

    <!-- Block Solution Slider -->
    <div class="page-block bg-pale uk-padding ">
        <div class="uk-container uk-margin-medium-top">
            <h2><?php the_field('other_solutions_title'); ?></h2>
        </div>
        <div class="uk-container">

            <div class="block-content uk-margin-medium-top">
                <div class="uk-grid uk-flex-center">
                    <div class="uk-width-5-6@xl">
                        <!-- Start Solutions Swiper -->
                        <div class="widget-solutions-slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper ">
					  				<?php 
										foreach($other_solutions as $solution){
											$solution_icon = wp_get_attachment_image_src($solution->solution_icon, 'full' );
											$solution_icon = $solution_icon[0];
											$solution_name = $solution->solution_name;
											$solution_description = $solution->solution_description;
											$solution_url = $solution->solution_url;
									?>
                                    <!-- Start Slide-->
                                    <div class="swiper-slide">
                                        <div class="slide-content">
                                            <div class="uk-card uk-card-default card-solution">
                                                <div class="uk-card-media-top">
                                                    <a href="<?php echo $solution_url; ?>">
                                                        <img src="<?php echo $solution_icon; ?>" alt="Digital solutions" uk-svg/>
                                                        <p><?php echo $solution_name; ?></p>
                                                    </a>
                                                </div>
                                                <div class="uk-card-body">
                                                    <p><?php echo $solution_description; ?></p>
                                                    <p>
                                                        <a href="<?php echo $solution_url; ?>">
                                                            <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Slide -->
									<?php } ?>

                                </div>


                            </div>

                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- END Solutions Swiper-->
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- End Solution Slider -->
	
	<?php } ?>

    <!--  Block Solution List -->
    <div class="page-block bg-mute">

        <div class="uk-container">
            <div class="block-content shift-top">

                <div class="uk-grid uk-flex-center">
                    <div class="uk-width-5-6@xl">
                            <div class="uk-child-width-1-2@s uk-child-width-1-3@l" uk-grid>
	  		<?php if( have_rows('solutions_solutions') ) while( have_rows('solutions_solutions') ){ the_row(); 
			$solution_icon = get_sub_field('solution_icon');
			$solution_name = get_sub_field('solution_name');
			$solution_description = get_sub_field('solution_description');
			$solution_url = get_sub_field('solution_url');
			?>
                                    <!-- Repeat Item-->
                                    <div>
                                        <div class="uk-card uk-card-default card-solution">
                                            <div class="uk-card-media-top">
                
                                                <a href="<?php echo $solution_url; ?>">
                                                    <img src="<?php echo $solution_icon; ?>" alt="Digital solutions" uk-svg/>
                                                    <p><?php echo $solution_name; ?></p>
                                                </a>
                
                                            </div>
                                            <div class="uk-card-body">
                
                
                                                <p><?php echo $solution_description; ?></p>
                
                                                <p>
                                                    <a href="<?php echo $solution_url; ?>">
                                                        <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
			<?php } ?>
                                    <!-- END Repeat Item-->

                                </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- END Block Solution List -->


  <!-- Block Case Studies -->
       <div class="page-block bg-mute uk-padding">

            <div class="uk-container uk-margin-medium-top">
    
    
                <h2><?php the_field("case_studies_title"); ?></h2>
    
            </div>
    <div class="uk-container">
      <div class="block-content uk-margin-top">

        <div class="uk-child-width-1-2@m" uk-grid>
			<?php $case_studies = get_field('solutions_details_case_studies'); 
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
      
    </div>
  </div>
  <!-- END Block Case Studies -->

<!-- Block News -->
    <div class="page-block bg-pale uk-padding block-newsroom">
        <div class="uk-container">
            <div class="block-header uk-margin-medium-top">
        <label><?php the_field("solutions_details_news_title"); ?></label>
        <h2><?php the_field("solutions_details_news_heading"); ?></h2>
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
    </div>
        <div class="particles-backdrop" id="particles-js"></div>
  </div>
  <!-- END Block News-->

	<?php help_widget(); ?>

    <div class="widget-image-block bg-gradient no-transparency">
        <div class="uk-cover-container uk-height-medium">
<!--            <img src="<?php echo get_template_directory_uri(); ?>/media/JPG/iStock-888775646.jpg" alt="" uk-cover> -->
			<img src="https://vaipe.com.br/blog/wp-content/uploads/2017/12/rawpixel-660716-unsplash-1-e1531764137620.jpg" alt="" uk-cover>
        </div>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
