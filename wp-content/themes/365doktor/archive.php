<?php get_header(); ?>

<?php get_template_part('includes/inc', 'top-block-inner'); ?>
<?php get_template_part('includes/inc', 'breadcrumbs'); ?>

<!--CONTENT-->
<section class="archive-content content">
    <div class="container">

        <div class="articles-wrap">
            <?php get_template_part('loop'); ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>