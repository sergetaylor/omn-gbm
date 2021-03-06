<?php
/**
 * Template Name: Search
 *
 * @package GBM
 */
 
?>

<?php 

	get_header(); 

	$page_size = 7;
	$current_page = 1;
	$_location = '';
	$_category = '';
	$month = '';
	$searchtext = '';
	$_location_cond = '';
	$_category_cond = '';
	$month_cond = '';
	$searchtext_cond = '';
	$categories = $wpdb->get_results("select distinct news_category from wp_news_header");
	$locations = $wpdb->get_results("select distinct news_location from wp_news_header");
	if(isset($_POST['location'])){
		$_location = urldecode($_POST['location']);
		if(strlen($_location))
			$_location_cond = " and news_location = '".$_location."'";
	}
	if(isset($_POST['category'])){
		$_category = urldecode($_POST['category']);
		if(strlen($_category))
			$_category_cond = " and news_category = '".$_category."'";
	}
	if(isset($_POST['news_month'])){
		$month = urldecode($_POST['news_month']);
		if(strlen($month))
			$month_cond = " and DATE_FORMAT(post_date, '%m/%Y') = '".$month."'";
	}
	if(isset($_GET['searchtext']))
		$searchtext = $_GET['searchtext'];
	if(isset($_POST['searchtext']))
		$searchtext = $_POST['searchtext'];
	if(strlen($searchtext)){
		$searchtext_cond = " and ( lcase(news_article) like '%".strtolower($searchtext)."%' or lcase(news_blockquote) like '%".strtolower($searchtext)."%' or lcase(news_title) like '%".strtolower($searchtext)."%'  or lcase(news_category) like '%".strtolower($searchtext)."%')";
	}
	if(isset($_GET['page']))
		$current_page = $_GET['page'];
		
	$news = $wpdb->get_results("select * from wp_news_header,wp_posts,wp_news_article where wp_news_header.post_id=wp_posts.ID and wp_posts.ID = wp_news_article.post_id ".$_location_cond.$_category_cond.$searchtext_cond.$month_cond." order by post_date desc");

	$total_news = count($news);
	$limit_cond = " limit ".($current_page-1)*$page_size.",".$current_page*$page_size;

	$news = $wpdb->get_results("select * from wp_news_header,wp_posts,wp_news_article where wp_news_header.post_id=wp_posts.ID and wp_posts.ID = wp_news_article.post_id ".$_location_cond.$_category_cond.$searchtext_cond.$month_cond." order by post_date desc".$limit_cond);
	
	$pages_count = ceil($total_news / $page_size);
	
?>



  <!-- Page Cover -->
  <div class="widget-page-cover bg-gradient uk-flex uk-flex-middle">
    <div class="uk-width-extend">
      <div class="uk-container">


        <h1><?php echo $total_news ?> Results for “<?php echo $searchtext ?>”</h1>
        
        
        <?php if($total_news > 0)
        {
        ?>
            <p>Not findng what you are looking for?
            <br/>
            Use the The Advanced Filter below to narrow down your search query</p>
        <?php
            
        }
        else{
            ?>
            <p>Sorry, we couldn’t find any search results for that term.</p>
        <?php }
        
        ?>
       

      </div>
    </div>
  </div>
  <!-- End Page Cover  -->

  <div class="widget-filters bg-white">
    <div class="uk-container">

      <!-- Desktop Search Filters -->
      <form action="/search" method="post" id="filters">
        <div class="uk-grid-small uk-child-width-1-5@m" data-uk-grid>
          <div>
            <div class="uk-margin">
              <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: search"></span>
                <input class="uk-input" type="text" name="searchtext" value="<?php echo $searchtext; ?>" placeholder="Search...">
                <a class="uk-form-icon uk-form-icon-flip uk-hidden@m" href="#" uk-icon="icon: filter" uk-toggle="target: .responsive-filter ;cls: filter-hidden;"></a>

              </div>
            </div>

          </div>

          <div class="responsive-filter filter-hidden">
            <div class="uk-margin">
              <div class="uk-form-controls">
                <select class="uk-select" name="category">
                  <option value="">Select Category</option>
				  <?php foreach($categories as $category){ ?>
                  <option <?php if(!strcmp($_category ,$category->news_category)) echo 'selected="selected"'; ?> value="<?php echo $category->news_category; ?>"><?php echo $category->news_category; ?></option>
				  <?php } ?>
                </select>
              </div>
            </div>
          </div>

          <div class="responsive-filter filter-hidden">
            <div class="uk-margin">
              <div class="uk-form-controls">
                <input class="uk-select date-picker" name="news_month" id="news_month" placeholder="Select Date">

              </div>
            </div>
          </div>

          <div class="responsive-filter filter-hidden">
            <div class="uk-margin">
              <div class="uk-form-controls uk-position-relative">
                <select class="uk-select" name="location">
                  <option value="">Select Location</option>
				  <?php foreach($locations as $location){ ?>
                  <option <?php if(!strcmp($_location,$location->news_location)) echo 'selected="selected"'; ?> value="<?php echo $location->news_location; ?>"><?php echo $location->news_location; ?></option>
				  <?php } ?>
                </select>
              </div>
            </div>
          </div>

          <div class="responsive-filter filter-hidden">
            <div class="uk-margin">
              <button type="submit" class="uk-button button-aqua uk-width-extend" data-text="Filter">Filter</button>
            </div>
          </div>
        </div>
      </form>
      <!-- End Desktop Search Filters -->
    </div>
  </div>
	<?php if(!count($news)){ ?>
    <!-- No Results Block -->
    <div class="page-block  uk-padding bg-mute">

        <div class="uk-container uk-margin-xlarge-bottom">
            <div class="block-content uk-margin-medium-top uk-margin-large-bottom">

                <div class="uk-child-width-1-2@m" uk-grid>

                    <div>
                        <h2>Search Tips</h2>
                        <ul class="uk-list uk-list-bullet">

                            <li>Check your spelling and try again</li>
                            <li>Keep your search term simple, try searching for one word</li>
                            <li>Be less specific in your wording for a wider search result </li>
                            <li>Use one of the Helpful Links</li>
                        </ul>

                    </div>

                    <div>
                        <h2>Helpful Links</h2>
                        <div class="uk-card uk-card-default card-helpful-links">

                            <div class=" uk-width-expand">
                                <div class="uk-card-body uk-padding-small">
                                    <div class="uk-column-1-2@m  uk-column-divider">
                                        <ul class="uk-list">
                                            <li>
                                                <a href="/">
                                                    <i uk-icon="chevron-right"></i> Home</a>
                                            </li>
                                            <li>
                                                <a href="/solutions">
                                                    <i uk-icon="chevron-right"></i> Solutions</a>
                                            </li>
                                            <li>
                                                <a href="/newsroom">
                                                    <i uk-icon="chevron-right"></i> Newsroom</a>
                                            </li>
                                            <li>
                                                <a href="/careers">
                                                    <i uk-icon="chevron-right"></i> Careers</a>
                                            </li>
                                            <li>
                                                <a href="/about-us">
                                                    <i uk-icon="chevron-right"></i> About Us</a>
                                            </li>
                                            <li>
                                                <a href="/contact-us">
                                                    <i uk-icon="chevron-right"></i> Contact Us</a>
                                            </li>
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
    <!-- END Results Block-->
	<?php }else{ ?>

  	<!-- Block News -->
  	<div class="page-block  uk-padding bg-mute">

    <div class="uk-container">
      <div class="block-content uk-margin-medium-top">

        <div class="uk-child-width-1-2@m" uk-grid="masonry: true">
		  <?php for($i=0,$c=count($news); $i<2 && $i<$c; $i++){ 
		    $_news = $news[$i];
		  	$news_post = get_post($_news->post_id);
			$news_image = wp_get_attachment_image_src($_news->news_image, 'full' );
			$news_image = $news_image[0];
		  ?>
          <div>
            <div class="card-news uk-card uk-card-default card-news-blog">
              <div class="uk-card-media-top uk-cover-container uk-height-medium">

                <img src="<?php echo $news_image; ?>" alt="" uk-cover>
              </div>
              <div class="uk-card-body">
                <span class="uk-label"><?php echo $_news->news_category; ?></span>
                <time><?php echo $_news_post->post_date; ?></time>
                <h3 class="uk-card-title">
                  <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>"><?php echo $_news->news_title; ?></a>
                </h3>
                <p><?php echo substr($_news->news_article,0,100); ?>...</p>
                <p>
                  <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>">
                    <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                </p>
              </div>
            </div>
          </div>
		  <?php } ?>

		  <?php 
		  	if(isset($news[2])){
			  	$_news = $news[2]; 
			  	$news_post = get_post($_news->post_id);
				$news_image = wp_get_attachment_image_src($_news->news_image, 'full' );
				$news_image = $news_image[0];
		  ?>

          <div>

            <div class="card-news uk-card uk-card-default uk-grid-collapse uk-margin card-news-press-release" uk-grid>

              <div class=" uk-width-expand">
                <div class="uk-card-body">
                  <span class="uk-label"><?php echo $_news->news_category; ?></span>
                  <time><?php echo $_news_post->post_date; ?></time>
                  <h3 class="uk-card-title">
                    <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>"><?php echo $_news->news_title; ?></a>
                  </h3>
                  <p>
                    <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>">
                      <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

		  <?php 
			}
		  	if(isset($news[3])){
			  	$_news = $news[3]; 
			  	$news_post = get_post($_news->post_id);
				$news_image = wp_get_attachment_image_src($_news->news_image, 'full' );
				$news_image = $news_image[0];
		  ?>

          <div>
            <div class="card-news uk-card uk-card-default uk-grid-collapse uk-margin card-news-press-release" uk-grid>
              <div class="uk-card-media-left uk-cover-container uk-height-medium uk-width-small uk-visible@s">
                <img src="<?php echo $news_image; ?>" alt="" uk-cover>
              </div>
              <div class=" uk-width-expand">
                <div class="uk-card-body">
                  <span class="uk-label"><?php echo $_news->news_category; ?></span>
                  <time><?php echo $_news_post->post_date; ?></time>
                  <h3 class="uk-card-title">
                    <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>"><?php echo $_news->news_title; ?></a>
                  </h3>
                  <p>
                    <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>">
                      <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

		  <?php
			}
		  	if(isset($news[4])){
			  	$_news = $news[4]; 
			  	$news_post = get_post($_news->post_id);
				$news_image = wp_get_attachment_image_src($_news->news_image, 'full' );
				$news_image = $news_image[0];
		  ?>

          <div>

            <div class="card-news uk-card uk-card-default uk-grid-collapse uk-margin card-news-press-release" uk-grid>

              <div class=" uk-width-expand">
                <div class="uk-card-body">
                  <span class="uk-label"><?php echo $_news->news_category; ?></span>
                  <time><?php echo $_news_post->post_date; ?></time>
                  <h3 class="uk-card-title">
                    <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>"><?php echo $_news->news_title; ?></a>
                  </h3>
                  <p>
                    <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>">
                      <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

		  <?php 
			}
		  	if(isset($news[5])){
			  	$_news = $news[5]; 
			  	$news_post = get_post($_news->post_id);
				$news_image = wp_get_attachment_image_src($_news->news_image, 'full' );
				$news_image = $news_image[0];
		  ?>


          <div>
            <div class="card-news uk-card uk-card-default card-news-blog">
              <div class="uk-card-media-top uk-cover-container uk-height-medium">

                <img src="<?php echo $news_image; ?>" alt="" uk-cover>
              </div>
              <div class="uk-card-body">
                <span class="uk-label"><?php echo $_news->news_category; ?></span>
                <time><?php echo $_news_post->post_date; ?></time>
                <h3 class="uk-card-title">
                  <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>"><?php echo $_news->news_title; ?></a>
                </h3>
                <p><?php echo substr($_news->news_article,0,100); ?>...</p>
                <p>
                  <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>">
                    <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                </p>
              </div>
            </div>
          </div>

		  <?php 
			}
		  	if(isset($news[6])){
			  	$_news = $news[6]; 
			  	$news_post = get_post($_news->post_id);
				$news_image = wp_get_attachment_image_src($_news->news_image, 'full' );
				$news_image = $news_image[0];
		  ?>

          <div>

            <div class="card-news uk-card uk-card-default uk-grid-collapse uk-margin card-news-press-release" uk-grid>

              <div class=" uk-width-expand">
                <div class="uk-card-body">
                  <span class="uk-label"><?php echo $_news->news_category; ?></span>
                  <time><?php echo $_news_post->post_date; ?></time>
                  <h3 class="uk-card-title">
                    <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>"><?php echo $_news->news_title; ?></a>
                  </h3>
                  <p>
                    <a href="<?php echo home_url().'/newsroom/'.$news_post->post_name; ?>">
                      <i uk-icon="icon:chevron-right;ratio:0.7"></i> Read more</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
		  <?php } ?>

        </div>

      </div>


      <div class="block-footer uk-flex-center uk-text-center uk-padding uk-margin-medium-bottom">
        <ul class="uk-pagination" uk-margin>
          <li <?php if($current_page == 1) echo 'class="uk-disabled"'; ?>>
            <a href="?page=<?php echo $current_page-1; ?>">
              <span uk-pagination-previous></span>
            </a>
          </li>
		  <?php for($i=1 ; $i<=$pages_count ; $i++){ ?>
          <li <?php if($current_page == $i) echo 'class="uk-active"'; ?>>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
          </li>
		  <?php } ?>
          <li <?php if($current_page == $pages_count) echo 'class="uk-disabled"'; ?>>
            <a href="?page=<?php echo $current_page+1; ?>">
              <span uk-pagination-next></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  	<!-- END Block NEwsroom-->
	<?php } ?>

    <!-- Widget Help -->
    <div class="widget-help ">
        <div class="help-box bg-white uk-box-shadow-medium uk-padding ">
            <div class="card-brief">
                <h2><?php the_field('news_help_title','option'); ?></h2>
                <p class="uk-visible@m"><?php the_field('news_help_content','option'); ?></p>
                <a href="<?php the_field('news_contact_page','option'); ?>" class="uk-button button-aqua" data-text="<?php the_field('news_button_label','option'); ?>"><?php the_field('news_button_label','option'); ?></a>
            </div>
            <div class="particles-backdrop"></div>
        </div>
    </div>
    <!-- End Widget Help -->


  <div class="widget-image-block bg-gradient">
    <div class="uk-cover-container uk-height-medium">
      <img src="<?php echo get_template_directory_uri(); ?>/media/JPG/iStock-888775646.jpg" alt="" uk-cover>
    </div>
  </div>

<script>
// jQuery(document).ready(function(e) {
// 	jQuery('#news_month').val('03/2018');
// });
</script>	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
