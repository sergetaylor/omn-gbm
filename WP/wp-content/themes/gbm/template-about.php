<?php
/**
 * Template Name: About Us
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
                    <div class="uk-width-expand">
                        <h1><?php the_field("about_header_title"); ?></h1>
                        <p><?php the_field("about_header_subtitle"); ?></p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Page Cover  -->

    <!-- Breadcrumbs  -->
    <div class="widget-breadcumbs">
        <div class="uk-container">

            <ul class="uk-breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>About</span>
                </li>
            </ul>


        </div>
    </div>
    <!-- End Breadcrumbs  -->

    <!-- Widget Page Title  -->
    <div class="widget-page-title uk-flex uk-flex-middle">
        <div class="uk-width-extend">
            <div class="uk-container">
                <div class="title-wrapper">
                    <label><?php the_field('sub_header_title'); ?></label>
                    <h2><?php the_field('sub_header_subtitle'); ?></h2>
                </div>
                <div class="backdrop" style="background-image: url('<?php the_field('sub_header_background'); ?>')"></div>
            </div>
        </div>
    </div>
    <!-- End Widget Page Title  -->

    <!-- Block Article -->
    <div class="page-block uk-padding bg-mute ">
        <div class="uk-container uk-margin-top">
            <article>
                <?php echo the_field('article_top_text'); ?>
                <div class="uk-grid uk-child-width-1-2@m" uk-grid>
                    <div>
	                <?php echo the_field('article_left_text'); ?>
                    </div>

                    <div>
                        <div class="card-video uk-position-relative">
                            <div class="uk-position-center">
                                <a href="#modal-media-video" uk-toggle><i data-uk-icon="icon:play-circle;ratio:3"></i></a>
                            </div>

                            <img src="<?php echo the_field('article_video_cover'); ?>" alt="..." />

                            <div id="modal-media-video" class="uk-flex-top" uk-modal>
                                <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                                    <button class="uk-modal-close-outside" type="button" uk-close></button>
                                    <iframe src="<?php echo the_field('article_video_url'); ?>" width="560" height="315" frameborder="0" uk-video></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </article>
        </div>
    </div>
    <!-- End Block Article -->

    <!-- timeline -->
    <div class="widget-timeline uk-padding">
        <div class="uk-container">
            <div class="uk-margin-medium-top uk-position-relative">
                <h2><?php the_field('timeline_title'); ?></h2>
            </div>
        </div>




        <div class="timeline-swiper uk-margin" uk-switcher="toggle: .swiper-slide ;animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
            <div class="uk-container">
                <div class="swiper-container">
                    <!-- <div class="swiper-control">
                              <button type="button" class="btn btn-default btn-sm prev-slide">Prev</button>
                              <button type="button" class="btn btn-default btn-sm next-slide">Next</button>
                            </div> -->
                    <div class="swiper-wrapper">
						<?php if( have_rows('timeline_years') ) while( have_rows('timeline_years') ){ the_row(); 
						$year = get_sub_field('year');
						?>

                        <div class="swiper-slide">
                            <div class="timestamp">
                                <span class="date"><?php echo $year; ?></span>
                            </div>

                        </div>
						<?php } ?>
                    </div>


                </div>
            </div>


        </div>

        <!-- Important : The li items below should be same number as in the .swiper-slide above -->
        <ul id="timeline-switcher" class="uk-switcher uk-margin ">
			<?php if( have_rows('timeline_stories') ) while( have_rows('timeline_stories') ){ the_row(); 
			$story_number = get_sub_field('story_number');
			$story_type = get_sub_field('story_type');
			$story_title = get_sub_field('story_title');
			$story_content = get_sub_field('story_content');
			?>
            <li>
                <div class="uk-container">
                    <div class="uk-grid uk-flex-middle" uk-grid>
                        <div class="uk-width-auto@m">
                            <div class="card-big-number">
                                <b><?php echo $story_number; ?></b>
                                <p><?php echo $story_type; ?></p>
                            </div>
                        </div>
                        <div class="uk-width-expand@m">
                            <div class="card-brief">
                                <h3><?php echo $story_title; ?></h3>
                                <p><?php echo $story_content; ?></p>

                            </div>
                        </div>

                    </div>

                </div>
            </li>
			<?php } ?>
            
        </ul>
    </div>
    <!-- end timeline -->

    <!-- Widget Mission Vision -->
    <div class="widget-block-split-shifted bg-white">
        <div class="uk-cover-container uk-height-medium">
            <img src="<?php echo get_template_directory_uri(); ?>/media/JPG/julentto-photography-184055-unsplash.jpg" alt="" uk-cover>
        </div>

        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-2@m" uk-grid>
                <div>
                    <div class="uk-card">
                        <div class="uk-card-media-top">
                            <img src="<?php the_field('mission_image'); ?>" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title"><?php the_field('mission_title'); ?></h3>
                            <?php the_field('mission_content'); ?>
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-card">

                        <div class="uk-card-body">
                            <h3 class="uk-card-title"><?php the_field('vision_title'); ?></h3>
							<?php the_field('vision_content'); ?>
                        </div>
                        <div class="uk-card-media-bottom">
                            <img src="<?php the_field('vision_image'); ?>" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- END Widget Mission Vision -->

  	<!-- Block Leadership Listing -->
    <div class="page-block uk-padding bg-mute">
        <div class="uk-container">
            <div class="uk-margin-medium-top uk-position-relative">
                <h2><?php the_field('team_title'); ?></h2>
                <div class="uk-position-top-right uk-visible@m">
                    <a href="/leadership" class="uk-button button-aqua" data-text="View All">
                        View All
                    </a>
                </div>
            </div>
        </div>
    
		<div class="uk-container">
            <div class="block-content uk-margin-medium-top uk-margin-large-bottom">

                <div class="widget-leadership">

                    <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-flex-center uk-grid-match" uk-grid>

				  		<?php if( have_rows('persons') ) while( have_rows('persons') ){ the_row(); 
							$person_image = get_sub_field('person_image');
							$person_name = get_sub_field('person_name');
							$person_position = get_sub_field('person_position');
							$person_description = get_sub_field('person_description');
						?>
                        <!-- Rpeat This -->
                        <div>
                            <div class="card-profile uk-card uk-grid-collapse uk-margin card-news-press-release" uk-grid>
                                <div class="uk-card-media-top">
                                    <img class="uk-border-circle" src="<?php echo $person_image; ?>" alt="Martin" />
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title"><?php echo $person_name; ?></h3>
                                    <p><?php echo $person_position; ?></p>
                                </div>

                                <div class="uk-width-1-1 card-content uk-hidden uk-column-1-2@m uk-padding-large">
                                    <button class="uk-alert-close" type="button" uk-close></button>

                                    <?php echo $person_description; ?>
                                </div>
                            </div>

                        </div>
                        <!-- End Repeat This -->
						<?php } ?>

                    </div>

                </div>

            </div>



        </div>
	</div>
	<!-- END Leadership Listing-->

    <!-- Block Article -->
    <div class="page-block uk-padding bg-mute ">
        <div class="uk-container">
            <div class=" uk-position-relative">
                <h2><?php the_field('about_partners_title'); ?></h2>
            </div>
        </div>
        <div class="uk-container uk-margin-small-top">
            <article>
				<?php $partners = get_field('about_partners'); 
					  for($i=0,$c=count($partners) ; $i<$c ; $i++){ 
					  	setup_postdata($partners[$i]);
						$partner_image = wp_get_attachment_image_src($partners[$i]->partner_image, 'full' );
						$partner_image = $partner_image[0];

				?>
                <img src="<?php echo $partner_image; ?>" alt="..." width="250"><br>
				<p><?php echo $partners[$i]->partner_description; ?></p>
				<?php if($i<$c-1){ ?><hr /><?php } } wp_reset_postdata(); ?>

            </article>
        </div>
    </div>
    <!-- End Block Article -->


    <!-- Block Clients -->
    <div class="page-block bg-white uk-padding uk-hidden">
        <div class="uk-container">
            <div class="uk-margin-medium-top uk-position-relative">
                <H2><?php the_field('about_clients_title'); ?></H2>
            </div>
        </div>
        <div class="uk-container">
            <div class="block-content uk-margin-medium-top  uk-margin-xlarge-bottom">

                <div class="widget-partners">
	             <div class="uk-grid-small uk-flex-around uk-flex-middle uk-child-width-auto" data-uk-grid>
				<?php $clients = get_field('about_clients'); 
					  for($i=0,$c=count($clients) ; $i<$c ; $i++){ 
					  	setup_postdata($clients[$i]);
						$client_image = wp_get_attachment_image_src($clients[$i]->client_image, 'full' );
						$client_image = $client_image[0];

				?>
                        <div>
                            <a href="#"><img src="<?php echo $client_image; ?>" alt="..." /></a>
                        </div>
				<?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Block Clients -->

	<?php help_widget(); ?>

    <div class="widget-image-block bg-gradient no-transparency">
        <div class="uk-cover-container uk-height-medium">
            <img src="<?php echo get_template_directory_uri(); ?>/media/JPG/iStock-888775646.jpg" alt="" uk-cover>
        </div>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
