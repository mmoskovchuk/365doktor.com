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
                <?php elseif ($my_lang == 'sv') : ?>
                    <a href="javascript:void(0);" class="cta__btn btn">Starta online läkarkonsultation</a>
                <?php elseif ($my_lang == 'da') : ?>
                    <a href="javascript:void(0);" class="cta__btn btn">Start online lægehøring</a>
                <?php elseif ($my_lang == 'pt') : ?>
                    <a href="javascript:void(0);" class="cta__btn btn">Iniciar Consulta Médica Online</a>
                <?php endif; ?>
            </div>
        </div>
        <img src="<?php the_field('image_cta'); ?>" class="cta__img" alt="<?php bloginfo('name'); ?>">
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
        <?php elseif ($my_lang == 'sv') : ?>
            <h2 class="text-center">Hur det fungerar</h2>
            <div class="how">
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/desc.svg" alt="questionnaire">
                    <div>Välj ditt medicinska tillstånd och fyll i ett kort medicinskt frågeformulär</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/paper.svg" alt="Prescription">
                    <div>Vår läkare kommer att rekommendera behandling och utfärda receptet (om det är lämpligt)</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/list.svg" alt="Delivered">
                    <div>Skicka receptet till ditt hemapotek eller få medicinen levererad till din dörr</div>
                </div>
            </div>
        <?php elseif ($my_lang == 'da') : ?>
            <h2 class="text-center">Hvordan det virker</h2>
            <div class="how">
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/desc.svg" alt="questionnaire">
                    <div>Vælg din medicinske tilstand, og udfyld et kort medicinsk spørgeskema</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/paper.svg" alt="Prescription">
                    <div>Vores læge vil anbefale behandling og udstede recept (hvis relevant)</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/list.svg" alt="Delivered">
                    <div>Send receptet til dit hjemmeapotek eller få medicinen leveret til din dør</div>
                </div>
            </div>
        <?php elseif ($my_lang == 'pt') : ?>
            <h2 class="text-center">Como funciona</h2>
            <div class="how">
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/desc.svg" alt="questionnaire">
                    <div>Selecione sua condição médica e preencha um breve questionário médico</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/paper.svg" alt="Prescription">
                    <div>Nosso médico recomendará o tratamento e emitirá a receita (se apropriado)</div>
                </div>
                <div class="how__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/list.svg" alt="Delivered">
                    <div>Envie a receita para a sua farmácia doméstica ou faça com que o medicamento seja entregue à sua porta</div>
                </div>
            </div>
        <?php endif; ?>

    </section>

    <section class="container full_page_1">
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

            <?php if ($my_lang == 'en') : ?>

                <?php
                // Check rows exists.
                if (have_rows('sidebar_treatment_page_tpl')): ?>
                    <aside class="with-sidebar__aside">
                    <?php  // Loop through rows.  ?>
                    <?php while (have_rows('sidebar_treatment_page_tpl')) : the_row(); ?>
                    <div class="with-sidebar__aside-item">
                                <?php
                                $image = get_sub_field('sidebar_img');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image); ?>" />
                                <?php endif; ?>
                                <p><b>Medication:</b> <?php the_sub_field('medication') ?></p>
                                <p><b>Active ingredient:</b> <?php the_sub_field('active_ingredient') ?></p>
                                <p><b>How it works:</b> <?php the_sub_field('how_it_works') ?></p>
                                <p><b>Advantages and disadvantages:</b> <?php the_sub_field('advantages_and_disadvantages') ?></p>
                                <p><b>Risks:</b> <?php the_sub_field('risks') ?></p>
                            </a>
                    </div>
                    <?php endwhile ?>
                    </aside>
                <?php endif; ?>

            <?php elseif ($my_lang == 'de') : ?>

                <?php
                // Check rows exists.
                if (have_rows('sidebar_treatment_page_tpl')): ?>
                    <aside class="with-sidebar__aside">
                    <?php  // Loop through rows.  ?>
                    <?php while (have_rows('sidebar_treatment_page_tpl')) : the_row(); ?>
                            <div class="with-sidebar__aside-item">
                                <?php
                                $image = get_sub_field('sidebar_img');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image); ?>" />
                                <?php endif; ?>
                                <p><b>Medikament:</b> <?php the_sub_field('medication') ?></p>
                                <p><b>Wirkstoff:</b> <?php the_sub_field('active_ingredient') ?></p>
                                <p><b>Wie es funktioniert:</b> <?php the_sub_field('how_it_works') ?></p>
                                <p><b>Vorteile und Nachteile:</b> <?php the_sub_field('advantages_and_disadvantages') ?></p>
                                <p><b>Risiken:</b> <?php the_sub_field('risks') ?></p>
                                </a>
                            </div>
                    <?php endwhile ?>
                    </aside>
                <?php endif; ?>

            <?php elseif ($my_lang == 'pl') : ?>


                    <?php
                    // Check rows exists.
                    if (have_rows('sidebar_treatment_page_tpl')): ?>
                        <aside class="with-sidebar__aside">
                       <?php  // Loop through rows.  ?>
                       <?php while (have_rows('sidebar_treatment_page_tpl')) : the_row(); ?>
                            <div class="with-sidebar__aside-item">
                                <?php
                                $image = get_sub_field('sidebar_img');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image); ?>" />
                                <?php endif; ?>
                                <p><b>Lek:</b> <?php the_sub_field('medication') ?></p>
                                <p><b>Składnik czynny:</b> <?php the_sub_field('active_ingredient') ?></p>
                                <p><b>Jak to działa:</b> <?php the_sub_field('how_it_works') ?></p>
                                <p><b>Zalety i wady:</b> <?php the_sub_field('advantages_and_disadvantages') ?></p>
                                <p><b>Ryzyka:</b> <?php the_sub_field('risks') ?></p>
                                </a>
                            </div>
                        <?php endwhile ?>
                        </aside>
                    <?php endif; ?>


            <?php elseif ($my_lang == 'sv') : ?>
                <?php
                // Check rows exists.
                if (have_rows('sidebar_treatment_page_tpl')): ?>
                    <aside class="with-sidebar__aside">
                        <?php  // Loop through rows.  ?>
                        <?php while (have_rows('sidebar_treatment_page_tpl')) : the_row(); ?>
                            <div class="with-sidebar__aside-item">
                                <?php
                                $image = get_sub_field('sidebar_img');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image); ?>" />
                                <?php endif; ?>
                                <p><b>Medicin:</b> <?php the_sub_field('medication') ?></p>
                                <p><b>Aktiv beståndsdel:</b> <?php the_sub_field('active_ingredient') ?></p>
                                <p><b>Hur det fungerar:</b> <?php the_sub_field('how_it_works') ?></p>
                                <p><b>Fördelar och nackdelar:</b> <?php the_sub_field('advantages_and_disadvantages') ?></p>
                                <p><b>Risker:</b> <?php the_sub_field('risks') ?></p>
                                </a>
                            </div>
                        <?php endwhile ?>
                    </aside>
                <?php endif; ?>
            <?php elseif ($my_lang == 'da') : ?>
                <?php
                // Check rows exists.
                if (have_rows('sidebar_treatment_page_tpl')): ?>
                    <aside class="with-sidebar__aside">
                        <?php  // Loop through rows.  ?>
                        <?php while (have_rows('sidebar_treatment_page_tpl')) : the_row(); ?>
                            <div class="with-sidebar__aside-item">
                                <?php
                                $image = get_sub_field('sidebar_img');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image); ?>" />
                                <?php endif; ?>
                                <p><b>Medicin:</b> <?php the_sub_field('medication') ?></p>
                                <p><b>Aktiv ingrediens:</b> <?php the_sub_field('active_ingredient') ?></p>
                                <p><b>Hvordan det virker:</b> <?php the_sub_field('how_it_works') ?></p>
                                <p><b>Fordele og ulemper:</b> <?php the_sub_field('advantages_and_disadvantages') ?></p>
                                <p><b>Risici:</b> <?php the_sub_field('risks') ?></p>
                                </a>
                            </div>
                        <?php endwhile ?>
                    </aside>
                <?php endif; ?>
            <?php elseif ($my_lang == 'pt') : ?>
                <?php
                // Check rows exists.
                if (have_rows('sidebar_treatment_page_tpl')): ?>
                    <aside class="with-sidebar__aside">
                        <?php  // Loop through rows.  ?>
                        <?php while (have_rows('sidebar_treatment_page_tpl')) : the_row(); ?>
                            <div class="with-sidebar__aside-item">
                                <?php
                                $image = get_sub_field('sidebar_img');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image); ?>" />
                                <?php endif; ?>
                                <p><b>Medicamento:</b> <?php the_sub_field('medication') ?></p>
                                <p><b>Ingrediente ativo:</b> <?php the_sub_field('active_ingredient') ?></p>
                                <p><b>Como funciona:</b> <?php the_sub_field('how_it_works') ?></p>
                                <p><b>Vantagens e desvantagens:</b> <?php the_sub_field('advantages_and_disadvantages') ?></p>
                                <p><b>Riscos:</b> <?php the_sub_field('risks') ?></p>
                                </a>
                            </div>
                        <?php endwhile ?>
                    </aside>
                <?php endif; ?>
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