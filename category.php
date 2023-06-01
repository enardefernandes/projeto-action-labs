<?php include(TEMPLATEPATH . '/header.php'); ?>

<main>
    <div class="main_blog_content main_blog_category">
        <section>
            <header>
                <h1><?php the_category(); ?></h1>
            </header>

            <?php while (have_posts()) : the_post(); ?>
                <article class="category_blog">
                    <?php the_post_thumbnail('blogSingle', array('class' => 'img_responsive', 'alt' => get_the_title())); ?>
                    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h1>
                    <span>Autor: <?php the_author(); ?></span>
                    <p><?php echo excerpt('20'); ?></p>
                    <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Leia mais <i class="fa-solid fa-angles-right"></i></a></p>
                </article>
            <?php endwhile; ?>

            <div class="pagination">
                <?php wordpress_pagination(); ?>
            </div>
        </section>

    </div>
</main>

<?php include(TEMPLATEPATH . '/footer.php'); ?>