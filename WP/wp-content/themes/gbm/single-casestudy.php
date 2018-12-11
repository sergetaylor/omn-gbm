<?php
/**
 * Template Name: CaseStudy Article
 *
 * Template Post Type: casestudy
 *
 * @package GBM
 */
 
?>

<?php get_header(); ?>
<?php if ( have_posts() ) the_post(); ?>


    <!-- Page Cover -->
    <div class="widget-page-cover bg-gradient uk-flex uk-flex-middle">
        <div class="uk-width-extend">
            <div class="uk-container"></div>
        </div>
    </div>
    <!-- End Page Cover  -->


    <!-- End Widget Article  -->
    <div class="page-block bg-mute">

        <div class="uk-grid-collapse uk-flex uk-flex-center uk-child-width-extend">
            <div>
                <div class="widget-article article-news bg-white uk-box-shadow-small">
                    <div class="article-header">
                        <div class="header-title">
                            <div class="header-backdrop" style="background-image: url(<?php the_field('case_image'); ?>)"></div>

                            <div class="uk-grid uk-grid-collapse uk-flex-center" uk-grid>
                                <div class="uk-width-4-5">
                                    <div class="title-wrapper">
                                        <label><?php the_field('case_header'); ?></label>
                                        <h2><?php the_field('case_title'); ?></h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="header-meta">
                            <div class="uk-grid uk-grid-collapse uk-flex-center" uk-grid>
                                <div class="uk-width-4-5">
                                    <ul class="uk-iconnav">
                                        <li>
                                            <span>
                                                <span uk-icon="icon: location"></span> <?php the_field('case_location'); ?></span>
                                        </li>
                                        <li>
                                            <span>
                                                <span uk-icon="icon: calendar"></span> <?php the_field('case_date'); ?></span>
                                        </li>
                                        <li>
										 <span>
                                                <span uk-icon="icon: file-edit"></span> <?php the_field('case_type'); ?></span>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="article-body">

                        <div class="uk-grid uk-grid-collapse uk-flex-center" uk-grid>
                            <div class="uk-width-4-5">


                                <article>

									<?php the_field('case_article'); ?>
                                   

                                    <blockquote cite="#">
                                        <p class="uk-margin-small-bottom"><?php the_field('case_blockquote'); ?></p>
                                        <footer><?php the_field('case_author'); ?></footer>
                                    </blockquote>



                                </article>

                                <div class="card-action-buttons">
                                        <div class="action-item">
                                                <a class="uk-button button-aqua-outline share-button button-icon" data-text="Share" >Share <i data-uk-icon="push"></i></a>
                                        </div>
                                        <div class="action-item">
                                                <a href="<?php the_field('case_pdf'); ?>" class="uk-button button-aqua button-icon" target="_blank" data-text="Download PDF">Download PDF <i data-uk-icon="download"></i></a>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- End Widget Article  -->


<?php get_sidebar(); ?>

<?php get_footer(); ?>
