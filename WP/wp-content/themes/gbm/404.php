<?php
/**
 * Template Name: 404
 *
 * @package GBM
 */
 
?>

<?php get_header(); ?>


    <!-- Page Cover -->
    <div class="widget-page-cover bg-gradient uk-flex uk-flex-middle">
        <div class="uk-width-extend">
            <div class="uk-container">

                <h1>PAGE NOT FOUND</h1>
                <p>Sorry, we’re unable to find the page you’re looking for.</p>

            </div>
        </div>
    </div>
    <!-- End Page Cover  -->


    <!-- Block News -->
    <div class="page-block  uk-padding bg-mute">

        <div class="uk-container uk-margin-xlarge-bottom">
            <div class="block-content uk-margin-medium-top uk-margin-large-bottom">

                <div class="uk-child-width-1-2@m" uk-grid>

                    <div>
                        <h2>Helpful Links</h2>
                        <div class="uk-card uk-card-default card-helpful-links">

                            <div class=" uk-width-expand">
                                <div class="uk-card-body uk-padding-small">
                                    <div class="uk-column-1-2@m  uk-column-divider">
                                        <ul class="uk-list">
									  		<?php if( have_rows('links_404','option') ) while( have_rows('links_404','option') ){ the_row(); 
											$label = get_sub_field('label');
											$link = get_sub_field('link');
											?>
										
                                            <li>
                                                <a href="<?php echo $link; ?>">
                                                    <i uk-icon="chevron-right"></i> <?php echo $label; ?></a>
                                            </li>
											<?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>


        </div>
    </div>
    <!-- END Block NEwsroom-->


	<?php help_widget(); ?>


    <div class="widget-image-block bg-gradient">
        <div class="uk-cover-container uk-height-medium">
            <img src="<?php echo get_template_directory_uri(); ?>/media/JPG/iStock-888775646.jpg" alt="" uk-cover>
        </div>
    </div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
