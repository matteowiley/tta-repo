<?php

/*
Template Name: Adventure
*/


get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <h1>Adventures</h1>
        <div class="products-search-container"> 
            <div class="tamarindo">
                <h2>Tamarindo</h2>
                <div class="products-search"></div>
            </div>
            <div class="la-fortuna-arenal-volcano">
                <h2>La Fortuna/Arenal Volcano</h2>
                <div class="products-search"></div>
            </div>  
            <div class="manuel-antonio">
                <h2>Manuel Antonio</h2>
                <div class="products-search"></div>
            </div>
            <div class="jaco">
                <h2>Jaco Beach</h2>
                <div class="products-search"></div>
            </div>
            <div class="playa-hermosa">
                <h2>Playa Hermosa</h2>
                <div class="products-search"></div>
            </div>
            <div class="monteverde">
                <h2>Monteverde</h2>
                <div class="products-search"></div>
            </div>
            <div class="san-jose">
                <h2>San Jose</h2>
                <div class="products-search"></div>
            </div>
            <div class="isla-tortuga">
                <h2>Isla Tortuga</h2>
                <div class="products-search"></div>
            </div>
        </div>
		<?php
        $args = array('post_type' => 'product', 
                      'posts_per_page' => -1,
                      'product_cat' => 'adventure', 
                      'orderby' => 'rand',
                      'taxonomy' => 'product_cat' ); ?>
        <div class="remove">              
        <?php
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
                $cat = strip_tags($product->get_categories(), ' ');
                $cat = str_replace(',', ' ', $cat);
                $cat = str_replace('/', ' ', $cat);
                ?>
                <li class="products <?php echo $cat ?>">    

                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

                        <h3><?php the_title(); ?></h3>

                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

                    </a>

                </li>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
        </div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>