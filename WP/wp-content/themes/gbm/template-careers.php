<?php
/**
 * Template Name: Careers
 *
 * @package GBM
 */
 
?>

<?php get_header(); ?>


    <!-- Page Cover -->
    <div class="widget-page-cover bg-gradient uk-flex uk-flex-middle">
        <div class="uk-width-extend">
            <div class="uk-container">
               <h1><?php the_field("header_title"); ?></h1>
               <p><?php the_field("header_subtitle"); ?></p>
            </div>
        </div>
    </div>
    <!-- End Page Cover  -->


    <!-- Breadcrumbs  -->
    <div class="widget-breadcumbs">
        <div class="uk-container">

            <ul class="uk-breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><span>Careers</span></li>
            </ul>


        </div>
    </div>
    <!-- End Breadcrumbs  -->

    <!-- Widget Page Title  -->
    <div class="widget-page-title uk-flex uk-flex-middle">

        <div class="uk-width-extend">
            <div class="uk-container">
                <div class="title-wrapper">
                    <label><?php the_field("sub_header_title"); ?></label>
                    <h2><?php the_field("sub_header_subtitle"); ?></h2>
                </div>
                <div class="backdrop" style="background-image: url('<?php the_field("sub_header_background"); ?>')"></div>
            </div>
        </div>

        
    </div>
    <!-- End Widget Page Title  -->

<!-- Block Article -->
<div class="page-block uk-padding bg-mute ">
        <div class="uk-container uk-margin-top">
    <article>

            <?php the_field('careers_article'); ?>


            <a href="<?php the_field('jobs_button_url'); ?>" class="uk-button button-aqua uk-margin-top" data-text="View Jobs" data-scrollto><?php the_field('jobs_button_label'); ?></a>

    </article>
    </div></div>
    <!-- End Block Article -->


    <!-- Block Careers Card -->
<div class="page-block bg-mute uk-padding">
    <div class="uk-container">
<div class="card-shifted">
    <div class="uk-grid-collapse " data-uk-grid>
        <div class="uk-width-3-5@m">
            <img src="<?php the_field('careers_card_background'); ?>" alt=".."/>
        </div>
        <div class="uk-width-2-5@m uk-grid-item-match">
            <div class="uk-card uk-card-default">
                    <div class="uk-card-body">
                            <h3><?php the_field('careers_card_title'); ?></h3>
                            <?php the_field('careers_card_content'); ?>
                          </div>
            </div>
        </div>
        </div>
</div>
</div></div>
<!-- End Careers Card -->



    <!-- Block Career Listing -->
    <div class="page-block uk-padding bg-mute" id="job-list">
        <div class="uk-container">
            <h2><?php the_field('careers_jobs_title'); ?></h2>
        </div>
        <div class="uk-container">
            <div class="block-content uk-margin-medium-top uk-margin-large-bottom">

                <div class="uk-child-width-1-2@m" uk-grid="masonry: true">

                    <!-- Rpeat This -->
			  		<?php if( have_rows('careers_jobs') ) while( have_rows('careers_jobs') ){ the_row(); 
					$jobs_location = get_sub_field('jobs_location');
					$jobs_date = get_sub_field('jobs_date');
					$jobs_title = get_sub_field('jobs_title');
					$jobs_description = get_sub_field('jobs_description');
					$jobs_url = get_sub_field('jobs_url');
					?>
                    <div>
                        <div class="card-news uk-card uk-card-default uk-grid-collapse uk-margin card-news-press-release" uk-grid>

                            <div class=" uk-width-expand">
                                <div class="uk-card-body">
                                    <span class="uk-label"><?php echo $jobs_location; ?></span>
                                    <time><?php echo $jobs_date; ?></time>
                                    <h3 class="uk-card-title">
                                        <a href="#"><?php echo $jobs_title; ?></a>
                                    </h3>
                                    <p><?php echo $jobs_description; ?></p>
                                    <p>
                                        <a href="<?php echo $jobs_url; ?>">
                                            <i uk-icon="icon:chevron-right;ratio:0.7"></i> View Job Details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php } ?>
                    <!-- End Repeat This -->

                </div>

            </div>



        </div>
    </div>
    <!-- END Career Listing-->


      <!-- Widget sticker -->
      <div class="page-block bg-mute">
  	   <div class="widget-sticker ">
        <div class="sticker-box bg-white uk-box-shadow-medium uk-padding ">
          <div class="card-brief">
            <h2><?php the_field('careers_widget_title'); ?></h2>
            <?php the_field('careers_widget_content'); ?>
            <a href="<?php the_field('careers_widget_url'); ?>"><i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                
          </div>
          <div class="particles-backdrop" id="particles-js"></div>
        </div>
      </div>
    </div>
      <!-- End Widget sticker -->
    


    <div class="widget-image-block bg-gradient no-transparency">
        <div class="uk-cover-container uk-height-medium">
            <img src="<?php echo get_template_directory_uri(); ?>/media/JPG/iStock-888775646.jpg" alt="" uk-cover>
        </div>
    </div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
