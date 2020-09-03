<?php
/* Template Name: Treatment page */
?>
<?php $my_lang = pll_current_language(); ?>
<?php get_header(); ?>

    <div class="container cta__back page">
        <div class="cta">
            <div class="cta__text">
                <h1><?php the_field('treatment_title'); ?></h1>
                <?php the_field('description_cta'); ?>
                <?php if ($my_lang == 'en') : ?>
                    <a href="javascript:void(0);" class="cta__btn btn">Start Online Doctor Consultation</a>
                <?php elseif ($my_lang == 'de') : ?>
                    <a href="javascript:void(0);" class="cta__btn btn">Starten Sie die Online-Arztberatung</a>
                <?php elseif ($my_lang == 'pl') : ?>
                    <a href="javascript:void(0);" class="cta__btn btn">Rozpocznij konsultację lekarską online</a>
                <?php endif; ?>
            </div>
            <img src="<?php the_field('image_cta'); ?>" class="cta__img" alt="<?php bloginfo('name'); ?>">
        </div>
    </div>
    <!--How it works-->
    <section class="container-section">
        <?php if ($my_lang == 'en') : ?>
            <h2 class="text-center">How It Works</h2>
            <div class="how">
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/desc.svg" alt="questionnaire">
                    <div>Select Your Medical Condition and Complete a Short Medical Questionnaire</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/paper.svg" alt="Prescription">
                    <div>Our Doctor Will Recommend Treatment and Issue the Prescription (if appropriate)</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/list.svg" alt="Delivered">
                    <div>Send the Prescription to Your Home Pharmacy or get the Medication Delivered to Your Door</div>
                </div>
            </div>
        <?php elseif ($my_lang == 'de') : ?>
            <h2 class="text-center">Wie es funktioniert</h2>
            <div class="how">
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/desc.svg" alt="questionnaire">
                    <div>Wählen Sie Ihren Gesundheitszustand aus und füllen Sie einen kurzen medizinischen Fragebogen aus</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/paper.svg" alt="Prescription">
                    <div>Unser Arzt wird die Behandlung empfehlen und das Rezept ausstellen (falls zutreffend).</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/list.svg" alt="Delivered">
                    <div>Senden Sie das Rezept an Ihre Heimapotheke oder lassen Sie sich die Medikamente an Ihre Tür liefern</div>
                </div>
            </div>
        <?php elseif ($my_lang == 'pl') : ?>
            <h2 class="text-center">Jak to działa</h2>
            <div class="how">
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/desc.svg" alt="questionnaire">
                    <div>Wybierz swój stan zdrowia i wypełnij krótki kwestionariusz medyczny</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/paper.svg" alt="Prescription">
                    <div>Nasz lekarz zaleci leczenie i wypisze receptę (jeśli to stosowne)</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/list.svg" alt="Delivered">
                    <div>Wyślij receptę do swojej domowej apteki lub zamów lekarstwo dostarczone do domu</div>
                </div>
            </div>
        <?php endif; ?>

    </section>

    <section class="container">
        <div class="toggle-block">
            <h2 class="toggle-block-title"><?php the_field('full_page_title_1'); ?></h2>
            <div class="toggle-block-text">
                <?php the_field('full_page_description_1'); ?>
            </div>
        </div>
        <div class="with-sidebar">
            <div class="with-sidebar__text">
                <div class="toggle-block">
                    <?php the_field('main_content'); ?>
                </div>
            </div>
            <?php if (is_active_sidebar('sidebar_treatment_page')) : ?>

                <?php dynamic_sidebar('sidebar_treatment_page'); ?>

            <?php endif; ?>
        </div>
        <div class="toggle-block">
            <h2 class="toggle-block-title"><?php the_field('full_page_title_2'); ?></h2>
            <div class="toggle-block-text">
                <?php the_field('full_page_description_2'); ?>
            </div>
        </div>
    </section>

<?php get_template_part('includes/inc', 'started-now-block'); ?>

<?php get_footer(); ?>