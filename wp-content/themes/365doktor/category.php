<?php get_header(); ?>



<!-- BREADCRUMBS -->
<?php get_template_part('includes/inc', 'breadcrumbs'); ?>

<!--CONTENT-->
<section class="content-block">
    <div class="container">
        <div class="content-block__wrap">

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content-block__order-1">
                <?php get_template_part('loop'); ?>
                <?php get_template_part('includes/inc', 'pagination'); ?>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 content-block__order-2 content-block__mobile-margin">

                <aside class="sidebar">

                </aside>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
