<?php get_header(); ?>


<?php get_template_part('includes/inc', 'breadcrumbs'); ?>

<!--CONTENT-->
<section class="index-page-content content">
    <div class="container">
        <?php get_template_part('loop'); ?>
    </div>
</section>

<?php get_footer(); ?>