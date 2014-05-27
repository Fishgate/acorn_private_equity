<?php get_header(); ?>
                        <div id="feature-generic">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/feature_about.jpg" alt="About page feature image" />
                        </div>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-all d-all cf" role="main">
                                                    <div class='left m-all t-1of4 d-1of4 generic-side-nav'>                                                                
                                                            <?php get_sidebar(); ?>
                                                        </div>
                                                        
                                                    <div class='left m-all t-3of4 d-3of4'>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article class='clearfix' id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                                                            
                                                            <section class="m-all t-3of4 d-3of4 entry-content cf generic-content" itemprop="articleBody">
                                                                <h2><?php the_title(); ?></h2>
                                                                <?php the_content(); ?>
                                                            </section>


                                                            <footer class="article-footer">
                                                                <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
                                                            </footer>


							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
                                                                                <header class="article-header">
                                                                                        <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                                                                                </header>
                                                                                <section class="entry-content">
                                                                                    <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                                                                                </section>
										<footer class="article-footer">
                                                                                    <p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
                                                    </div>
						</div>

						
				</div>

			</div>


<?php get_footer(); ?>
