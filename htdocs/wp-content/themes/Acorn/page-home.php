<?php
/*
 Template Name: Home
*/
?>

<?php get_header(); ?>
                        <div id="feature" class="cycle-slideshow"
                             data-cycle-fx="fade"
                             data-cycle-timeout="6000"
                             data-cycle-prev="#prev"
                             data-cycle-next="#next"
                         >
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/Header_Agri Businesses.jpg" alt="Home page feature image" />
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/Header_Basic-Consumer-Goods.jpg" alt="Home page feature image" />
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/Header_Financial-Services.jpg" alt="Home page feature image" />
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/Header_Waste-Remediation.jpg" alt="Home page feature image" />
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/Header_Utilities.jpg" alt="Home page feature image" />
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/Header_Health-Care.jpg" alt="Home page feature image" />
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/Header_Food-Processing.jpg" alt="Home page feature image" />
                        </div>

                        <span id="prev"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Left.png" alt="Previous" /></span>
                        <span id="next"><img src="<?php echo get_template_directory_uri(); ?>/library/images/Right.png" alt="Next" /></span>

                        <div class="wrap feature-info-holder">
                            <div class="slide_infos cycle-slideshow"
                                data-cycle-fx="slideHorz"
                                data-cycle-timeout="6000"
                                data-cycle-slides="h1"
                                data-cycle-prev="#prev"
                                data-cycle-next="#next"
                            >
                                <h1>Agri Business</h1>
                                <h1>Basic Consumer Goods</h1>
                                <h1>Financial Services</h1>
                                <h1>Waste Remediation</h1>
                                <h1>Utilities</h1>
                                <h1>Healthcare</h1>
                                <h1>Food Processing</h1>
                            </div>
                            
                            <!-- desktop homepage sidebar -->
                            <div class="floating_home_sidebar">
                                <h2>Latest News</h2>
                                <div class='inner_wrap'>
                                    <?php get_latest_news(); ?>

                                    <p><a href="<?php echo site_url('/news/'); ?>" class="btn">More News</a></p>
                                    
                                    <hr />

                                    <?php get_home_feature_page('our-mission'); ?>
                                    
                                    
                                </div>
                            </div>
                        </div>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-1of2 d-2of3 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


								<section class="home-entry-content entry-content cf" itemprop="articleBody">
                                                                
                                                                <!-- mobile homepage sidebar -->
                                                                <div class="static_home_sidebar">
                                                                    <h2>Latest News</h2>
                                                                    <div class='inner_wrap'>
                                                                        <?php get_latest_news(); ?>

                                                                        <p><a href="<?php echo site_url('/news/'); ?>" class="btn">More News</a></p>

                                                                        <hr />

                                                                        <?php get_home_feature_page('our-mission'); ?>
                                                                    </div>
                                                                </div>
                                                                    
                                                                    <?php the_content(); ?>                                                                    
                                                                    
								</section>

								<footer class="article-footer">
                                                                    
                                                                    <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

							</article>

							<?php endwhile; endif; ?>

						</div>

				</div>

			</div>


<?php get_footer(); ?>
