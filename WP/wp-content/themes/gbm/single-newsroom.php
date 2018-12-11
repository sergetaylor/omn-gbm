<?php
/**
 * Template Name: News Article
 *
 * Template Post Type: newsroom
 *
 * @package GBM
 */
 
?>

<?php get_header(); ?>

<?php if ( have_posts() ) the_post(); 
$next_post = get_next_post();
$previous_post = get_previous_post();
 ?>

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
                            <div class="header-backdrop" style="background-image: url(<?php the_field('news_image'); ?>)"></div>

                            <div class="uk-grid uk-grid-collapse uk-flex-center" uk-grid>
                                <div class="uk-width-4-5">
                                    <div class="title-wrapper">
                                        <label><?php the_field('news_category'); ?></label>
                                        <h2><?php the_field('news_title'); ?></h2>
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
                                                <span uk-icon="icon: location"></span> <?php the_field('news_location'); ?></span>
                                        </li>
                                        <li>
                                            <span>
                                                <span uk-icon="icon: file-edit"></span> <?php the_field('news_type'); ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="article-body">

                        <div class="uk-grid uk-grid-collapse uk-flex-center" uk-grid>
                            <div class="uk-width-4-5">
								<?php 
									$author_name = get_field('author_name');
									if($author_name){
									
								?>

                                <!-- Author Box-->
                                <div class="card-author">
                                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="uk-border-circle" src="<?php the_field('author_image'); ?>" width="80" height="80" alt="">
                                        </div>
                                        <div class="uk-width-expand">
                                            <b>Author</b>
                                            <h4><?php the_field('author_name'); ?></h4>
                                            <em><?php the_field('author_position'); ?></em>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div class="author-social">
                                                <a href="<?php the_field('author_facebook'); ?>" uk-icon="facebook" target="_blank"></a>
                                                <a href="<?php the_field('author_linkedin'); ?>" uk-icon="linkedin" target="_blank"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Author Box-->
								<?php } ?>

                                <article>
									<?php the_field('news_article'); ?>

                                    <blockquote cite="#">
                                        <p class="uk-margin-small-bottom"></p>
                                        <footer>Al Blooshi.</footer>
                                    </blockquote>



                                </article>

                                <div class="card-action-buttons">
                                        <div class="action-item">
                                                <a class="uk-button button-aqua-outline share-button button-icon" data-text="Share" >Share <i data-uk-icon="push"></i></a>
                                        </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <ul class="uk-pagination article-pagination">
					<?php if($previous_post){ ?>
                    <li>
                        <a href="<?php echo $previous_post->guid; ?>">
                            <span class="uk-margin-small-right" uk-icon="arrow-left"></span> Previous Article</a>
                    </li>
					<?php } ?>
					<?php if($next_post){ ?>
                    <li class="uk-margin-auto-left">
                        <a href="<?php echo $next_post->guid; ?>">Next Article 
                            <span class="uk-margin-small-left" uk-icon="arrow-right"></span>
                        </a>
                    </li>
					<?php } ?>
                </ul>
            </div>
        </div>

    </div>
    <!-- End Widget Article  -->




    <!-- Start Related News  -->
    <div class="page-block bg-mute uk-padding ">
        <div class="uk-container">
            <div class="block-content max-width ">
         
                        <div class="uk-grid-medium uk-grid-match uk-child-width-1-2@m" data-uk-grid>
					  		<?php 
							$related_news = get_field('related_news');
							if( count($related_news) ) foreach( $related_news as $post_id){ 
								$_news = get_news_by_id($post_id);
								$news_post = get_post($_news->post_id);
								$related_news_category = $_news->news_category;
								$related_news_date = date('d/m/Y',strtotime($news_post->post_date));
								$related_news_title = $_news->news_title;
								$related_news_url = $news_post->guid;
							?>

                            <div>
                                <div class="card-news uk-card uk-card-default uk-grid-collapse uk-margin card-news-press-release" uk-grid>

                                    <div class="uk-card-body">
                                        <span class="uk-label"><?php echo $related_news_category; ?></span>
                                        <time><?php echo $related_news_date; ?></time>
                                        <h3 class="uk-card-title">
                                            <a href="<?php echo $related_news_url; ?>"><?php echo $related_news_title; ?></a>
                                        </h3>
                                        <p>
                                            <a href="<?php echo $related_news_url; ?>">
                                                <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
                        </div>


            </div>
            <div class="block-footer uk-flex-center uk-text-center uk-padding">
                <a href="/newsroom" class="uk-button button-aqua" data-text="All News">
                    All News
                </a>
            </div>
        </div>
    </div>
    <!-- End Related -->

	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
