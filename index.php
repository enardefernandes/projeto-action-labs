<?php include(TEMPLATEPATH . '/header.php'); ?>

<main>
    <div class="main_cta">
        <div class="main_cta_content_bg_all">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Portal do Cliente</h1>
                    </header>
                </div>
            </article>
            <div class="main_cta_content_bg"></div>
            <img class="filter_blur" src="<?php bloginfo('template_directory'); ?>/img/adobestock.jpg" />
        </div>
    </div>

    <section class="main_blog">
        <?php
        $current_post_id = get_the_ID(); // Obtém o ID do post atual
        $query = new WP_Query(array(
            'posts_per_page' => 6,
            'cat' => 1,
            'orderby' => 'date',
            'order' => 'DESC'
        ));

        while ($query->have_posts()) : $query->the_post();
            $categories = get_the_category(); // Obtém as categorias do post atual
        ?>
            <article class="card">
                <div class="category">
                    <?php
                    if ($categories) {
                        foreach ($categories as $category) {
                            echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                        }
                    }
                    ?>
                </div>
                <?php the_post_thumbnail('blogHome', array('class' => 'img_responsive', 'alt' => get_the_title())); ?>
                <div class="card_info">
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo excerpt('20'); ?></p>
                    <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Leia mais <i class="fa-solid fa-angles-right"></i></a></p>
                </div>
            </article>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </section>
</main>

<?php include(TEMPLATEPATH . '/footer.php'); ?>