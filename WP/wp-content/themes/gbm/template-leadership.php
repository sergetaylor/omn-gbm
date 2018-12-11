<?php
/**
 * Template Name: Leadership
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
                        <h1><?php the_field("leadership_header_title"); ?></h1>
                        <p><?php the_field("leadership_header_subtitle"); ?></p>
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
                    <a href="/about-us">About</a>
                </li>
                <li><span>Leadership Team</span></li>
            </ul>


        </div>
    </div>
    <!-- End Breadcrumbs  -->

  	<!-- Block Leadership Listing -->
  	<div class="page-block uk-padding bg-mute">
    <div class="uk-container">
        <h2><?php the_field('team_title'); ?></h2>
    </div>
    <div class="uk-container">
        <div class="block-content uk-margin-medium-top uk-margin-large-bottom">

            <div class="widget-leadership">

                <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-match" uk-grid>

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

	<!-- Block News -->
    <div class="page-block bg-pale uk-padding block-newsroom">
        <div class="uk-container">
            <div class="block-header uk-margin-medium-top">
        <label><?php the_field("leadership_news_title"); ?></label>
        <h2><?php the_field("leadership_news_heading"); ?></h2>
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
  <!-- END Block NEwsroom-->

	<?php help_widget(); ?>

    <div class="widget-image-block bg-gradient no-transparency">
        <div class="uk-cover-container uk-height-medium">
            <img src="<?php echo get_template_directory_uri(); ?>/media/JPG/iStock-888775646.jpg" alt="" uk-cover>
        </div>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
