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

                                                <section class="entry-content cf generic-content posts-content" itemprop="articleBody">

                                                    <h2>News</h2>

                                                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                                    <article class='clearfix' id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                                                        <h3 style='text-transform: initial;'><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                                        <p class="byline vcard">
                                                            <?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
                                                        </p>

                                                        <footer class="article-footer">
                                                            <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
                                                        </footer>

                                                        <hr />

                                                    </article>

                                                    <?php endwhile; bones_page_navi();  endif; ?>

                                                </section>

                                            </div>

                                    </div>

				</div>

			</div>


<?php get_footer(); ?>
