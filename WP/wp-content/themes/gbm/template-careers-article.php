<?php
/**
 * Template Name: Careers Article
 *
 * @package GBM
 */
 
?>

<?php get_header(); ?>


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
                            <div class="header-backdrop" style="background-image: url(<?php the_field('careers_page_image'); ?>)"></div>

                            <div class="uk-grid uk-grid-collapse uk-flex-center" uk-grid>
                                <div class="uk-width-4-5">
                                    <div class="title-wrapper">
                                        <label><?php the_field('careers_page_title'); ?></label>
                                        <h2><?php the_field('careers_page_sub_title'); ?></h2>
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
                                                <span uk-icon="icon: location"></span> <?php the_field('careers_page_location'); ?></span>
                                        </li>
                                        <li>
                                            <span>
                                                <?php the_field('careers_page_date'); ?></span>
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

									<?php the_field('careers_page_article'); ?>
                                   

                                </article>

                                <div class="card-action-buttons">
                                    <div class="action-item linkedin-action">
                                        <div class="linkedin-form">
                                            <form action="https://jsonplaceholder.typicode.com/posts">
                                                <div class="form-inputs">
                                                    <div class="uk-inline">
                                                        <input class="uk-input" name="profile" type="url" placeholder="Add your Linkedin URL">
                                                        <button type="submit" class="uk-button button-aqua button-icon" target="_blank" data-text="Submit">Submit
                                                            <i data-uk-icon="linkedin"></i></button>
                                                    </div>
                                                </div>
                                            </form>

                                            <!-- <div uk-alert>
                                                    <button class="uk-alert-close" type="button" uk-close></button>
                                                    <p>Thank you for your interest in GBM! We will review your resume and get back to you as quickly as possible. </p>
                                                </div> -->
                                        </div>
                                        <a href="#" class="uk-button button-aqua button-icon" target="_blank" data-text="Apply" data-uk-toggle="target: .linkedin-action;cls:linkedin-active">Apply <i data-uk-icon="linkedin"></i></a>

                                        
                                    </div>
                                    <div class="action-item">
                                        <a class="uk-button button-aqua-outline share-button button-icon" data-text="Share">Share <i data-uk-icon="push"></i></a>
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
