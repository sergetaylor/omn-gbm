<?php
/**
 * Template Name: Location
 *
 * Template Post Type: location
 *
 * @package GBM
 */
 
?>

<?php get_header(); ?>

    <!-- Page Cover -->
    <div class="widget-page-cover bg-gradient uk-flex uk-flex-middle">
        <div class="uk-width-extend">
            <div class="uk-container">
                <h1><?php the_field('country_title'); ?></h1>
                <p><?php the_field('country_sub_title'); ?></p>
            </div>
        </div>
    </div>
    <!-- End Page Cover  -->


    <!-- Breadcrumbs  -->
    <div class="widget-breadcumbs">
        <div class="uk-container">

            <ul class="uk-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/contact-us">Contact</a></li>
                <li><span><?php the_field('country_title'); ?></span></li>
                
            </ul>


        </div>
    </div>
    <!-- End Breadcrumbs  -->

    <!-- Block Article -->
    <div class="page-block uk-padding bg-mute ">
        <div class="uk-container ">
            <article>
               
                <?php the_field('country_article'); ?>

            </article>
        </div>
    </div>
    <!-- End Block Article -->


    <!-- Widget Map -->
    <div class="page-block uk-padding bg-mute ">
        <div class="uk-container ">
<div class="widget-map uk-box-shadow-medium">
        <div class="uk-padding-large">
                <div class="uk-grid  uk-child-width-1-1 uk-child-width-1-3@m uk-column-divider" data-uk-grid>
                        <div>
                            <dl class="uk-description-list">
                                <dt><i uk-icon="office-icon"></i> Office Address</dt>
                                <dd><?php the_field('country_address'); ?></dd>
                            </dl>
                        </div>
                        <div>
                            <dl class="uk-description-list">
                                <dt><i uk-icon="phonebook"></i> Contact Details</dt>
                                <dd>T: <?php the_field('country_phone'); ?> </dd>
                                <dd>F: <?php the_field('country_fax'); ?></dd>
                                <dd><a href="mailto:<?php the_field('country_email'); ?>">E: <?php the_field('country_email'); ?></a></dd>
                            </dl>
                        </div>
                        <div>
                            <dl class="uk-description-list">
                                <dt><i uk-icon="business-hours"></i> Business Hours</dt>
                                <dd><?php the_field('country_hours'); ?></dd>
                            </dl>
                        </div>
                    </div>
        </div>

        <div class="map-wrapper" map-wrapper>
                <div class="map-container" map-container='{"zoom": "<?php the_field('map_zoom'); ?>", "center":[<?php the_field('map_center'); ?>], "markers":[{"coordinates":[<?php the_field('map_coordinates'); ?>], "label":"<?php the_field('map_label'); ?>", "icon":"<?php echo get_template_directory_uri(); ?>/media/PNG/marker.png"}]}'></div>
              </div>
</div>
         
            
        </div></div>


  

    <!-- Block Clients -->
    <div class="page-block bg-mute uk-padding ">
        <div class="uk-container">
            <div class="uk-margin-small-top uk-position-relative">
                <H2><?php the_field('country_clients_title'); ?></H2>
            </div>
        </div>
        <div class="uk-container">
            <div class="block-content uk-margin-small-top  uk-margin-small-bottom">

                <div class="widget-partners">
                    <div class="uk-grid-small uk-flex-around uk-flex-middle uk-child-width-auto" data-uk-grid>
					<?php $clients = get_field('country_clients'); 
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



  <!-- Block Case Studies -->
  <div class="page-block bg-pale uk-padding ">
    <div class="uk-container">
        <div class="uk-margin-medium-top uk-position-relative">
        <h2><?php the_field("case_studies_title"); ?></h2>
      </div>
    </div>
    <div class="uk-container">
      <div class="block-content uk-margin-top uk-margin-medium-bottom">

        <div class="uk-child-width-1-2@m" uk-grid>
			<?php $case_studies = get_field('country_case_studies'); 
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


    <!-- Block Globe -->
    <div class="page-block page-block-inverse bg-slate-blue uk-padding ">
        <div class="uk-container">
          <div class="block-header uk-margin-top uk-position-relative">
        <label><?php the_field("country_locations_title"); ?></label>
        <h2><?php the_field("country_locations_heading"); ?></h2>
    
          </div>
        </div>
        <div class="uk-container">
          <div class="block-content uk-margin-medium-top">
            <div class="widget-globe">
              <div class="uk-grid-small uk-flex-middle" data-uk-grid="">
    
				<?php locations_widget(); ?>
    
                <!-- Globe Canvas-->
                <div class="uk-width-expand uk-width-extend@l">
    
                  <div class="uk-position-relative uk-margin-xlarge-bottom">
    
                    <div class="globe js-globe ">
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
    

	<?php help_widget(); ?>



    <div class="widget-image-block bg-gradient no-transparency">
        <div class="uk-cover-container uk-height-medium">
            <img src="<?php echo get_template_directory_uri(); ?>/media/JPG/iStock-888775646.jpg" alt="" uk-cover>
        </div>
    </div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
