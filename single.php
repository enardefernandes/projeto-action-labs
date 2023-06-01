<?php include(TEMPLATEPATH . '/header.php'); ?>

<main>
    <div class="main_blog_content_bg_all">
        <div class="main_blog_content_bg">
            <div class="main_blog_content_bg_overlay"></div>
            <?php the_post_thumbnail('blogSingle', array('class' => 'filter_blur')); ?>
        </div>
    </div>

    <section class="main_blog_content">
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <?php the_post_thumbnail('blogSingle', array('class' => 'img_responsive', 'alt' => get_the_title())); ?>
                <div class="main_blog_content_info">
                    <?php the_category(); ?>

                    <i class="fa-solid fa-calendar"></i> <span><?php the_time(get_option('date_format')) ?></span>
                    <?php
                    // Verifica se há tags para exibir
                    $post_tags = get_the_tag_list('', ', ');
                    if ($post_tags) {
                        echo '<span class="main_blog_content_tags">';
                        echo '<i class="fa-solid fa-tag"></i> ' . $post_tags;
                        echo '</span>';
                    }
                    ?>
                </div>

                <header>
                    <h1><?php the_title() ?></h1>
                    <span>Autor: <?php the_author(); ?></span>
                </header>

                <?php the_content() ?>

            </article>
        <?php endwhile; ?>
    </section>

</main>

<?php include(TEMPLATEPATH . '/footer.php'); ?>