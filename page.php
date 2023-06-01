<?php include(TEMPLATEPATH . '/header.php'); ?>

<main>
    <div class="main_blog_content main_blog_page">
        <section class="main_blog_content_left">
            <article>
                <header>
                    <h1><?php the_title() ?></h1>
                </header>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content() ?>
                <?php endwhile; ?>
            </article>
        </section>
    </div>
</main>

<?php include(TEMPLATEPATH . '/footer.php'); ?>