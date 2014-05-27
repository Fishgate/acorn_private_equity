<?php get_header(); ?>
                        
                            <div id="feature-generic">
                                <img src="<?php echo get_template_directory_uri(); ?>/library/images/News.jpg" alt="News page feature image" />
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
                                                            
                                                            <section class="entry-content cf generic-content" itemprop="articleBody">
                                                                <h2 style='text-transform: initial;'><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                                                <p class="byline vcard">
                                                                    <?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
                                                                </p>
                                                                
                                                                <!-- <?php// the_content(); ?> -->
                                                                <!-- the_excerpt() -->
                                                                
                                                                <!-- <p><a class="excerpt-read-more btn" href="<?php// echo get_permalink(get_the_ID()) ?>" title="<?php// echo __( 'Read ', 'bonestheme' ) . get_the_title(get_the_ID()) ?>"><?php// _e( 'Read more', 'bonestheme' ) ?></a></p> -->
                                                            </section>


                                                            <footer class="article-footer">
                                                                <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
                                                            </footer>
                                                            
                                                            <hr />

							</article>

							<?php endwhile; bones_page_navi(); else : ?>

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
