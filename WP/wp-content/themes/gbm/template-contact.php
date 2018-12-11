<?php
/**
 * Template Name: Contact Us
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
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li><span>Contact Us</span></li>
            </ul>


        </div>
    </div>
    <!-- End Breadcrumbs  -->

    <!-- Block Globe -->
    <div class="page-block bg-pale uk-padding ">
        <div class="uk-container">
            <div class="block-header uk-margin-medium-top uk-position-relative">
                    <label><?php the_field("sub_header_title"); ?></label>
                    <h2><?php the_field("sub_header_subtitle"); ?></h2>

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


    <!-- block Contact Form -->
    <div class="page-block bg-mute uk-padding ">

        <div class="uk-container ">
            <div class="block-content uk-padding-small">

                <div class="uk-grid-medium " data-uk-grid>
                    <!-- Form -->
                    <div class="uk-width-2-3@m uk-width-4-5@l">

                        <div class="uk-card uk-card-default uk-card-body card-form">
                            <?php echo do_shortcode( get_field("contact_form_shortcode") ); ?>

                        </div>

                    </div>
                    <!-- End Form -->

                    <!-- Social Links-->
                    <div class="uk-width-1-3@m uk-width-1-5@l">
                        <div class="uk-card uk-card-default uk-card-body card-social-list">
                            <h3>Social</h3>
                            <ul class="uk-list">
                                <li>
                                    <i uk-icon="icon:twitter; ratio:1.2"></i>
                                    <a href="<?php echo the_field('twitter'); ?>">@GBMComms</a>
                                </li>
                                <li>
                                    <i uk-icon="icon:facebook; ratio:1.2"></i>
                                    <a href="<?php echo the_field('facebook'); ?>">@GBMME</a>
                                </li>
                                <li>
                                    <i uk-icon="icon:linkedin; ratio:1.2"></i>
                                    <a href="<?php echo the_field('linkedin'); ?>">GBM</a>
                                </li>
                                <li>
                                    <i uk-icon="icon:youtube; ratio:1.2"></i>
                                    <a href="<?php echo the_field('youtube'); ?>">Gulf Business Machines</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Social Links-->
                </div>

            </div>
        </div>
    </div>
    <!-- End block Contact Form -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
