<?php
/* Template Name: How it works */
?>
<?php $my_lang = pll_current_language(); ?>
<?php get_header(); ?>


    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1><?php the_field('how_it_works_title'); ?></h1>
                <p><?php the_field('how_it_works_desc'); ?></p>
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
            <img src="<?php the_field('image_how_it_works'); ?>" alt="<?php bloginfo('name'); ?>" class="how-it-works__img">
            <!--<img src="<?php /*bloginfo('template_url'); */?>/img/cta-how-back.png" alt="man" class="cta__img">-->
        </div>
    </div>
    <section class="container-section text-center">
        <h2><?php the_field('how_it_works_title_2'); ?></h2>
        <div class="secured">
            <div>
                <img src="<?php bloginfo('template_url'); ?>/img/comodo.png" alt="comodo">
            </div>
            <div>
                <img src="<?php bloginfo('template_url'); ?>/img/dmca.png" alt="dmca">
            </div>
            <div>
                <img src="<?php bloginfo('template_url'); ?>/img/trustpilot.png" alt="trustpilot">
            </div>
        </div>
        <p><?php the_field('how_it_works_desc_2'); ?></p>
    </section>
<?php /*if ($my_lang == 'de') : */?><!--
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Vertrauliche medizinische Beratungen <br>schnell und einfach erledigt</h1>
                <p>Jetzt müssen Sie Ihr Haus nicht mehr verlassen, um eine ärztliche Untersuchung in
                    Anspruch zu nehmen. Dank unserer Online Klinik können sich Männer und Frauen
                    bei häufigen Erkrankungen schneller und einfacher in ärztliche Behandlung
                    begeben.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Starten Sie die Online-Arztberatung</a>
            </div>
            <img src="<?php /*bloginfo('template_url'); */?>/img/cta-how-back.png" alt="man" class="cta__img">
        </div>
    </div>
    <section class="container-section text-center">
        <h2>Sicher. Reguliert. Abgesichert</h2>
        <div class="secured">
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/comodo.png" alt="comodo">
            </div>
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/dmca.png" alt="dmca">
            </div>
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/trustpilot.png" alt="trustpilot">
            </div>
        </div>
        <p>In nur 3 schnellen Schritten können Sie Ihre Behandlung und Ihr Rezept auf dem Weg zu Ihnen haben</p>
    </section>
<?php /*elseif ($my_lang == 'pl') : */?>
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Poufne konsultacje medyczne <br>w prosty i przystępny sposób</h1>
                <p>Nie musisz już wychodzić z domu, aby otrzymać poradę lekarską. Nasza
                    internetowa klinika medyczna oferuje kobietom i mężczyznom szybszy i łatwiejszy
                    sposób leczenia powszechnie występujących schorzeń. Aby otrzymać e-receptę online od licencjonowanego lekarza, 24 godziny na dobę
                    przez 7 dni w tygodniu, wystarczy odpowiedzieć na krótką ankietę. Przestań tracić
                    czas na jeżdżenie do przychodni. Nie chodź już więcej na krępujące wizyty
                    lekarskie. Jeśli zdecydujesz się na zrealizowanie swojej recepty elektronicznej w
                    naszej partnerskiej aptece internetowej, lek zostanie ci dostarczony pod same
                    drzwi, więc nie będziesz już nawet musiał chodzić do apteki.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Rozpocznij konsultację medyczną online</a>
            </div>
            <img src="<?php /*bloginfo('template_url'); */?>/img/cta-how-back.png" alt="man" class="cta__img">
        </div>
    </div>
    <section class="container-section text-center">
        <h2>Bezpieczeństwo. Regulacje. Ochrona.</h2>
        <div class="secured">
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/comodo.png" alt="comodo">
            </div>
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/dmca.png" alt="dmca">
            </div>
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/trustpilot.png" alt="trustpilot">
            </div>
        </div>
        <p>W zaledwie 3 szybkich krokach możesz otrzymać lek i receptę</p>
    </section>
<?php /*elseif ($my_lang == 'sv') : */?>
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Konfidentiella medicinska konsultationer <br>Gjord snabbt och enkelt</h1>
                <p>Nu behöver du inte längre lämna ditt hem för att få en medicinsk konsultation. Vår online-läkarmottagning erbjuder män och kvinnor ett snabbare och enklare sätt att få behandling för vanliga tillstånd. Svara bara på ett kort frågeformulär för att få ett recept online från en licensierad läkare 24/7. Inget mer slöseri med pendling. Inga fler obekväma läkarbesök.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Starta online läkarkonsultation</a>
            </div>
            <img src="<?php /*bloginfo('template_url'); */?>/img/cta-how-back.png" alt="man" class="cta__img">
        </div>
    </div>
    <section class="container-section text-center">
        <h2>Säker. Reglerad. Säkrad</h2>
        <div class="secured">
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/comodo.png" alt="comodo">
            </div>
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/dmca.png" alt="dmca">
            </div>
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/trustpilot.png" alt="trustpilot">
            </div>
        </div>
        <p>Med bara tre snabba steg kan du få din behandling och recept på väg till dig</p>
    </section>
<?php /*elseif ($my_lang == 'da') : */?>
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Fortrolige medicinske konsultationer <br>Lavet hurtigt og nemt</h1>
                <p>Nu behøver du ikke længere at forlade dit hjem for at få en lægehjælp. Vores online lægeklinik tilbyder mænd og kvinder en hurtigere og lettere måde at få behandling under almindelige tilstande. Du skal blot besvare et kort spørgeskema for at få en online recept fra en autoriseret læge 24/7. Ikke mere spild af tid på pendling. Ikke flere ubehagelige lægebesøg.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Start online lægehøring</a>
            </div>
            <img src="<?php /*bloginfo('template_url'); */?>/img/cta-how-back.png" alt="man" class="cta__img">
        </div>
    </div>
    <section class="container-section text-center">
        <h2>Sikker. Reguleret. Sikret</h2>
        <div class="secured">
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/comodo.png" alt="comodo">
            </div>
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/dmca.png" alt="dmca">
            </div>
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/trustpilot.png" alt="trustpilot">
            </div>
        </div>
        <p>På kun 3 hurtige trin kan du få din behandling og recept på vej til dig</p>
    </section>
<?php /*elseif ($my_lang == 'pt') : */?>
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Consultas Médicas Confidenciais <br>Tornado rápido e fácil</h1>
                <p>Agora você não precisa mais sair de casa para fazer uma consulta médica. Nossa clínica médica online oferece a homens e mulheres uma maneira mais rápida e fácil de obter tratamento para condições comuns. Basta responder a um pequeno questionário para obter uma receita online de um médico licenciado, 24 horas por dia, 7 dias por semana. Não perca mais tempo com o deslocamento. Não há mais visitas ao médico desconfortáveis.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Iniciar Consulta Médica Online</a>
            </div>
            <img src="<?php /*bloginfo('template_url'); */?>/img/cta-how-back.png" alt="man" class="cta__img">
        </div>
    </div>
    <section class="container-section text-center">
        <h2>Seguro. Regulamentado. Garantido</h2>
        <div class="secured">
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/comodo.png" alt="comodo">
            </div>
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/dmca.png" alt="dmca">
            </div>
            <div>
                <img src="<?php /*bloginfo('template_url'); */?>/img/trustpilot.png" alt="trustpilot">
            </div>
        </div>
        <p>Em apenas 3 passos rápidos você pode ter seu tratamento e prescrição a caminho de você</p>
    </section>
--><?php /*endif; */?>
<?php get_template_part('includes/inc', 'started-now-block'); ?>

<?php get_footer(); ?>