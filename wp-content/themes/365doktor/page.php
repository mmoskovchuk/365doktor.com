<?php get_header(); ?>


<div class="container">
    <div class="content-block__default-page">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h3>
                    <?php the_title(); ?>
                </h3>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>