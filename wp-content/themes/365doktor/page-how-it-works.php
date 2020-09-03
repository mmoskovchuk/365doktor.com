<?php
/* Template Name: How it works */
?>
<?php $my_lang = pll_current_language(); ?>
<?php get_header(); ?>

<?php if ($my_lang == 'en') : ?>
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Confidential Medical Consultations <br>Made Fast And Easy</h1>
                <p>Now you no longer need to leave your home to get a medical consultation. Our online doctor clinic offers men and women a faster and easier way to get treatment for common conditions. Simply answer a short questionnaire to get an online prescription from a licensed doctor, 24/7. No more wasting time commuting. No more uncomfortable doctor visits.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Start Online Doctor Consultation</a>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/img/cta-how-back.png" alt="man" class="cta__img">
        </div>
    </div>
    <section class="container-section text-center">
        <h2>Safe. Regulated. Secured</h2>
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
        <p>In just 3 quick steps you can have your treatment and prescription on its way to you</p>
    </section>
<?php elseif ($my_lang == 'de') : ?>
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
            <img src="<?php bloginfo('template_url'); ?>/img/cta-how-back.png" alt="man" class="cta__img">
        </div>
    </div>
    <section class="container-section text-center">
        <h2>Sicher. Reguliert. Abgesichert</h2>
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
        <p>In nur 3 schnellen Schritten können Sie Ihre Behandlung und Ihr Rezept auf dem Weg zu Ihnen haben</p>
    </section>
<?php elseif ($my_lang == 'pl') : ?>
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
            <img src="<?php bloginfo('template_url'); ?>/img/cta-how-back.png" alt="man" class="cta__img">
        </div>
    </div>
    <section class="container-section text-center">
        <h2>Bezpieczeństwo. Regulacje. Ochrona.</h2>
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
        <p>W zaledwie 3 szybkich krokach możesz otrzymać lek i receptę</p>
    </section>
<?php endif; ?>
<?php get_template_part('includes/inc', 'started-now-block'); ?>

<?php get_footer(); ?>