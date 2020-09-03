</div><?php //END MAIN ?>
<?php $my_lang = pll_current_language(); ?>
<?php $url = get_site_url() . '/wp-content/themes/365doktor-ux'; ?>

<!--FOOTER-->
<div class="container">
    <footer class="footer">
        <div class="footer__contacts">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="logo">
            <ul>
                <?php if ($my_lang == 'en') : ?>
                    <li><b>Local:</b> 0800-4725510 FREE in the UK</li>
                    <li><b>International:</b> +43-681-84665606</li>
                    <li><b>Email:</b> support@apomeds.com</li>
                <?php elseif ($my_lang == 'de') : ?>
                    <li><b>Lokal:</b> 0800-4725510 KOSTENLOS in Großbritannien</li>
                    <li><b>International:</b> +43-681-84665606</li>
                    <li><b>Email:</b> support@apomeds.com</li>
                <?php elseif ($my_lang == 'pl') : ?>
                    <li><b>Lokalny:</b> 0800-4725510 ZA DARMO w Wielkiej Brytanii</li>
                    <li><b>Międzynarodowy:</b> +43-681-84665606</li>
                    <li><b>E-mail:</b> support@apomeds.com</li>
                <?php endif; ?>
            </ul>
            <div class="footer__contacts-soc">
                <a href="#" class="footer__contacts-soc-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/facebook.svg" alt="facebook">
                </a>
                <a href="#" class="footer__contacts-soc-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/linkedin.svg" alt="linkedin">
                </a>
                <a href="#" class="footer__contacts-soc-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/tweetter.svg" alt="twitter">
                </a>
            </div>
        </div>
        <div class="footer__item">
            <?php if ($my_lang == 'en') : ?>
                <h5 class="footer__item-title">POPULAR TREATMENTS</h5>
            <?php elseif ($my_lang == 'de') : ?>
                <h5 class="footer__item-title">BELIEBTE BEHANDLUNGEN</h5>
            <?php elseif ($my_lang == 'pl') : ?>
                <h5 class="footer__item-title">POPULARNE ZABIEGI</h5>
            <?php endif; ?>

            <?php
            $nav_args = array(
                'theme_location' => 'footer_popular',
                'container' => 'ul',
                'menu_class' => '',
                'depth' => 2
            );
            wp_nav_menu($nav_args);
            ?>

        </div>
        <div class="footer__item hide-mob">
            <?php if ($my_lang == 'en') : ?>
                <h5 class="footer__item-title">USEFUL LINKS</h5>
            <?php elseif ($my_lang == 'de') : ?>
                <h5 class="footer__item-title">NÜTZLICHE LINKS</h5>
            <?php elseif ($my_lang == 'pl') : ?>
                <h5 class="footer__item-title">PRZYDATNE LINKI</h5>
            <?php endif; ?>

            <?php
            $nav_args = array(
                'theme_location' => 'footer_useful_links',
                'container' => 'ul',
                'menu_class' => '',
                'depth' => 2
            );
            wp_nav_menu($nav_args);
            ?>
        </div>
        <div class="footer__item hide-mob">
            <?php if ($my_lang == 'en') : ?>
                <h5 class="footer__item-title">LEGAL</h5>
            <?php elseif ($my_lang == 'de') : ?>
                <h5 class="footer__item-title">RECHTLICH</h5>
            <?php elseif ($my_lang == 'pl') : ?>
                <h5 class="footer__item-title">PRAWNY</h5>
            <?php endif; ?>
            <?php
            $nav_args = array(
                'theme_location' => 'footer_legal',
                'container' => 'ul',
                'menu_class' => '',
                'depth' => 2
            );
            wp_nav_menu($nav_args);
            ?>
        </div>
        <div class="footer__item-wrap">
            <div class="footer__item">
                <?php if ($my_lang == 'en') : ?>
                    <h5 class="footer__item-title">USEFUL LINKS</h5>
                <?php elseif ($my_lang == 'de') : ?>
                    <h5 class="footer__item-title">NÜTZLICHE LINKS</h5>
                <?php elseif ($my_lang == 'pl') : ?>
                    <h5 class="footer__item-title">PRZYDATNE LINKI</h5>
                <?php endif; ?>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact-Us</a></li>
                </ul>
            </div>
            <div class="footer__item">
                <h5 class="footer__item-title">LEGAL</h5>
                <ul>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookies Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__verify">
            <?php if ($my_lang == 'en') : ?>
                <span>Online consulting and<br>
                        prescribing service</span>
            <?php elseif ($my_lang == 'de') : ?>
                <span>Online-Beratung und <br>
                         Verschreibungsservice</span>
            <?php elseif ($my_lang == 'pl') : ?>
                <span>Doradztwo online i <br>
                         przepisywanie usług</span>
            <?php endif; ?>

            <img src="<?php bloginfo('template_url'); ?>/img/verify.png" alt="">
        </div>
    </footer>
</div>

<div class="right-modal__wrap">
    <?php if ($my_lang == 'en') : ?>
        <div class="right-modal">
            <button class="right-modal__close"><img src="<?php bloginfo('template_url'); ?>/img/close-right-modal.svg">
            </button>
            <section class="right-modal__header">
                <h2 class="right-modal__header-title">Select your treatment</h2>
                <span class="right-modal__header-text">and start online consultation</span>
            </section>
            <ul class="right-modal__body">
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erectile Dysfunction
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/contrac.svg" alt="">
                        </div>
                        Contraceptive Pills
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cyst.svg" alt="">
                        </div>
                        Cystitis
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-herpes.svg" alt="">
                        </div>
                        Genital Herpes
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/asthma-inhaler.svg" alt="">
                        </div>
                        Asthma Inhaler
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/quit-smoking.svg" alt="">
                        </div>
                        Quit Smoking
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/rosacea.svg" alt="">
                        </div>
                        Rosacea
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/prem-ejac.svg" alt="">
                        </div>
                        Premature Ejaculation
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/morning-after.svg" alt="">
                        </div>
                        Morning After Pill
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/bacter-vag.svg" alt="">
                        </div>
                        Bacterial Vaginosis
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-warts.svg" alt="">
                        </div>
                        Genital Warts
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/high-blood-pressure.svg" alt="">
                        </div>
                        High Blood Pressure
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/migraine.svg" alt="">
                        </div>
                        Migraine
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cold-sore.svg" alt="">
                        </div>
                        Cold Sore
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/hair-loss.svg" alt="">
                        </div>
                        Hair Loss
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/face-hair.svg" alt="">
                        </div>
                        Facial Hair Removal
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/chlamyd.svg" alt="">
                        </div>
                        Chlamydia
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erectile Dysfunction
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/malaria.svg" alt="">
                        </div>
                        Malaria
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/high-cholesterol.svg" alt="">
                        </div>
                        High Cholesterol
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/acne.svg" alt="">
                        </div>
                        Acne
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/weight-loss.svg" alt="">
                        </div>
                        Weight Loss
                    </a>
                </li>
            </ul>
        </div>
    <?php elseif ($my_lang == 'de') : ?>
        <div class="right-modal">
            <button class="right-modal__close"><img src="<?php bloginfo('template_url'); ?>/img/close-right-modal.svg">
            </button>
            <section class="right-modal__header">
                <h2 class="right-modal__header-title">Wählen Sie Ihre Behandlung</h2>
                <span class="right-modal__header-text">und starten Sie die Online-Beratung</span>
            </section>
            <ul class="right-modal__body">
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erektile Dysfunktion
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/contrac.svg" alt="">
                        </div>
                        Anti-Baby-Pillen
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cyst.svg" alt="">
                        </div>
                        Blasenentzündung
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-herpes.svg" alt="">
                        </div>
                        Herpes genitalis
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/asthma-inhaler.svg" alt="">
                        </div>
                        Asthma-Inhalator
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/quit-smoking.svg" alt="">
                        </div>
                        Rauchentwöhnung
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/rosacea.svg" alt="">
                        </div>
                        Rosazea
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/prem-ejac.svg" alt="">
                        </div>
                        Vorzeitige Ejakulation
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/morning-after.svg" alt="">
                        </div>
                        Die Pille danach
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/bacter-vag.svg" alt="">
                        </div>
                        Bakterielle Vaginose
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-warts.svg" alt="">
                        </div>
                        Genitalwarzen
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/high-blood-pressure.svg" alt="">
                        </div>
                        Bluthochdruck
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/migraine.svg" alt="">
                        </div>
                        Migräne
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cold-sore.svg" alt="">
                        </div>
                        Lippenherpes
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/hair-loss.svg" alt="">
                        </div>
                        Haarausfall
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/face-hair.svg" alt="">
                        </div>
                        Gesichtshaarentfernung
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/chlamyd.svg" alt="">
                        </div>
                        Chlamydien
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erektile Dysfunktion
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/malaria.svg" alt="">
                        </div>
                        Malaria
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/high-cholesterol.svg" alt="">
                        </div>
                        Hoher Cholesterinspiegel
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/acne.svg" alt="">
                        </div>
                        Akne
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/weight-loss.svg" alt="">
                        </div>
                        Gewichtsverlust
                    </a>
                </li>
            </ul>
        </div>
    <?php elseif ($my_lang == 'pl') : ?>
        <div class="right-modal">
            <button class="right-modal__close"><img src="<?php bloginfo('template_url'); ?>/img/close-right-modal.svg">
            </button>
            <section class="right-modal__header">
                <h2 class="right-modal__header-title">Wybierz zabieg</h2>
                <span class="right-modal__header-text">i rozpocznij konsultacje online</span>
            </section>
            <ul class="right-modal__body">
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/erect-disf.svg" alt="">
                        </div>
                        Zaburzenie erekcji
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/contrac.svg" alt="">
                        </div>
                        Tabletki antykoncepcyjne
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cyst.svg" alt="">
                        </div>
                        Zapalenie pęcherza
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-herpes.svg" alt="">
                        </div>
                        Opryszczka narządów płciowych
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/asthma-inhaler.svg" alt="">
                        </div>
                        Inhalator do astmy
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/quit-smoking.svg" alt="">
                        </div>
                        Rzuć palenie
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/rosacea.svg" alt="">
                        </div>
                        Trądzik różowaty
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/prem-ejac.svg" alt="">
                        </div>
                        Przedwczesny wytrysk
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/morning-after.svg" alt="">
                        </div>
                        Tabletka dzień po
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/bacter-vag.svg" alt="">
                        </div>
                        Bakteryjne zapalenie pochwy
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-warts.svg" alt="">
                        </div>
                        Brodawki narządów płciowych
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/high-blood-pressure.svg" alt="">
                        </div>
                        Wysokie ciśnienie krwi
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/migraine.svg" alt="">
                        </div>
                        Migrena
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cold-sore.svg" alt="">
                        </div>
                        Opryszczka
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/hair-loss.svg" alt="">
                        </div>
                        Wypadanie włosów
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/face-hair.svg" alt="">
                        </div>
                        Usuwanie owłosienia twarzy
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/chlamyd.svg" alt="">
                        </div>
                        Chlamydia
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/erect-disf.svg" alt="">
                        </div>
                        Zaburzenie erekcji
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/malaria.svg" alt="">
                        </div>
                        Malaria
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/high-cholesterol.svg" alt="">
                        </div>
                        Wysoki cholesterol
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/acne.svg" alt="">
                        </div>
                        Trądzik
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/weight-loss.svg" alt="">
                        </div>
                        Utrata wagi
                    </a>
                </li>
            </ul>
        </div>
    <?php endif; ?>
</div>

<!--<div class="right-modal__wrap">
    <?php /*if ($my_lang == 'en') : */ ?>
        <div class="right-modal">
            <button class="right-modal__close"><img src="<?php /*bloginfo('template_url'); */ ?>/img/close-right-modal.svg"></button>
            <section class="right-modal__header">
                <h2 class="right-modal__header-title">Select your treatment</h2>
                <span class="right-modal__header-text">and start online consultation</span>
            </section>
            <ul class="right-modal__body">
                <li class="right-modal__body-item">
                    <a href="/erectile-dysfunction/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erectile Dysfunction
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/contraceptive-pills/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/contrac.svg" alt="">
                        </div>
                        Contraceptive Pills
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/cystitis/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/cyst.svg" alt="">
                        </div>
                        Cystitis
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/genital-herpes/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/genital-herpes.svg" alt="">
                        </div>
                        Genital Herpes
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/asthma-inhaler/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/asthma-inhaler.svg" alt="">
                        </div>
                        Asthma Inhaler
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/quit-smoking/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/quit-smoking.svg" alt="">
                        </div>
                        Quit Smoking
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/rosacea/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/rosacea.svg" alt="">
                        </div>
                        Rosacea
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/premature-ejaculation/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/prem-ejac.svg" alt="">
                        </div>
                        Premature Ejaculation
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/morning-after-pill/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/morning-after.svg" alt="">
                        </div>
                        Morning After Pill
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/bacterial-vaginosis/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/bacter-vag.svg" alt="">
                        </div>
                        Bacterial Vaginosis
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/genital-warts/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/genital-warts.svg" alt="">
                        </div>
                        Genital Warts
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/high-blood-pressure/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/high-blood-pressure.svg" alt="">
                        </div>
                        High Blood Pressure
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/migraine/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/migraine.svg" alt="">
                        </div>
                        Migraine
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/cold-sore/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/cold-sore.svg" alt="">
                        </div>
                        Cold Sore
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/hair-loss/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/hair-loss.svg" alt="">
                        </div>
                        Hair Loss
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/facial-hair-removal/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/face-hair.svg" alt="">
                        </div>
                        Facial Hair Removal
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/chlamydia/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/chlamyd.svg" alt="">
                        </div>
                        Chlamydia
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/erectile-dysfunction/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erectile Dysfunction
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/malaria/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/malaria.svg" alt="">
                        </div>
                        Malaria
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/high-cholesterol/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/high-cholesterol.svg" alt="">
                        </div>
                        High Cholesterol
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/acne/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/acne.svg" alt="">
                        </div>
                        Acne
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/weight-loss/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/weight-loss.svg" alt="">
                        </div>
                        Weight Loss
                    </a>
                </li>
            </ul>
        </div>
    <?php /*elseif ($my_lang == 'de') : */ ?>
        <div class="right-modal">
            <button class="right-modal__close"><img src="<?php /*bloginfo('template_url'); */ ?>/img/close-right-modal.svg"></button>
            <section class="right-modal__header">
                <h2 class="right-modal__header-title">Wählen Sie Ihre Behandlung</h2>
                <span class="right-modal__header-text">und starten Sie die Online-Beratung</span>
            </section>
            <ul class="right-modal__body">
                <li class="right-modal__body-item">
                    <a href="/de/erektile-dysfunktion/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erektile Dysfunktion
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/anti-baby-pillen/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/contrac.svg" alt="">
                        </div>
                        Anti-Baby-Pillen
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/blasenentzundung/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/cyst.svg" alt="">
                        </div>
                        Blasenentzündung
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/herpes-genitalis/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/genital-herpes.svg" alt="">
                        </div>
                        Herpes genitalis
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/asthma-inhalator/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/asthma-inhaler.svg" alt="">
                        </div>
                        Asthma-Inhalator
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/rauchentwohnung/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/quit-smoking.svg" alt="">
                        </div>
                        Rauchentwöhnung
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/rosazea/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/rosacea.svg" alt="">
                        </div>
                        Rosazea
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/vorzeitige-ejakulation/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/prem-ejac.svg" alt="">
                        </div>
                        Vorzeitige Ejakulation
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/die-pille-danach/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/morning-after.svg" alt="">
                        </div>
                        Die Pille danach
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/bakterielle-vaginose/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/bacter-vag.svg" alt="">
                        </div>
                        Bakterielle Vaginose
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/genitalwarzen/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/genital-warts.svg" alt="">
                        </div>
                        Genitalwarzen
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/bluthochdruck/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/high-blood-pressure.svg" alt="">
                        </div>
                        Bluthochdruck
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/migrane/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/migraine.svg" alt="">
                        </div>
                        Migräne
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/lippenherpes/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/cold-sore.svg" alt="">
                        </div>
                        Lippenherpes
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/haarausfall/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/hair-loss.svg" alt="">
                        </div>
                        Haarausfall
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/gesichtshaarentfernung/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/face-hair.svg" alt="">
                        </div>
                        Gesichtshaarentfernung
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/chlamydien/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/chlamyd.svg" alt="">
                        </div>
                        Chlamydien
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/erektile-dysfunktion/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erektile Dysfunktion
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/malaria-de/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/malaria.svg" alt="">
                        </div>
                        Malaria
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/hoher-cholesterinspiegel/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/high-cholesterol.svg" alt="">
                        </div>
                        Hoher Cholesterinspiegel
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/akne/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/acne.svg" alt="">
                        </div>
                        Akne
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/de/gewichtsverlust/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/weight-loss.svg" alt="">
                        </div>
                        Gewichtsverlust
                    </a>
                </li>
            </ul>
        </div>
    <?php /*elseif ($my_lang == 'pl') : */ ?>
        <div class="right-modal">
            <button class="right-modal__close"><img src="<?php /*bloginfo('template_url'); */ ?>/img/close-right-modal.svg"></button>
            <section class="right-modal__header">
                <h2 class="right-modal__header-title">Select your treatment</h2>
                <span class="right-modal__header-text">and start online consultation</span>
            </section>
            <ul class="right-modal__body">
                <li class="right-modal__body-item">
                    <a href="/erectile-dysfunction/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erectile Dysfunction
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/contraceptive-pills/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/contrac.svg" alt="">
                        </div>
                        Contraceptive Pills
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/cystitis/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/cyst.svg" alt="">
                        </div>
                        Cystitis
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/genital-herpes/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/genital-herpes.svg" alt="">
                        </div>
                        Genital Herpes
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/asthma-inhaler/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/asthma-inhaler.svg" alt="">
                        </div>
                        Asthma Inhaler
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/quit-smoking/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/quit-smoking.svg" alt="">
                        </div>
                        Quit Smoking
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/rosacea/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/rosacea.svg" alt="">
                        </div>
                        Rosacea
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/premature-ejaculation/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/prem-ejac.svg" alt="">
                        </div>
                        Premature Ejaculation
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/morning-after-pill/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/morning-after.svg" alt="">
                        </div>
                        Morning After Pill
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/bacterial-vaginosis/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/bacter-vag.svg" alt="">
                        </div>
                        Bacterial Vaginosis
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/genital-warts/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/genital-warts.svg" alt="">
                        </div>
                        Genital Warts
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/high-blood-pressure/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/high-blood-pressure.svg" alt="">
                        </div>
                        High Blood Pressure
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/migraine/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/migraine.svg" alt="">
                        </div>
                        Migraine
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/cold-sore/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/cold-sore.svg" alt="">
                        </div>
                        Cold Sore
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/hair-loss/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/hair-loss.svg" alt="">
                        </div>
                        Hair Loss
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/facial-hair-removal/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/face-hair.svg" alt="">
                        </div>
                        Facial Hair Removal
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/chlamydia/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/chlamyd.svg" alt="">
                        </div>
                        Chlamydia
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/erectile-dysfunction/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erectile Dysfunction
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/malaria/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/malaria.svg" alt="">
                        </div>
                        Malaria
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/high-cholesterol/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/high-cholesterol.svg" alt="">
                        </div>
                        High Cholesterol
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/acne/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/acne.svg" alt="">
                        </div>
                        Acne
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="/weight-loss/">
                        <div class="right-modal__body-item-img">
                            <img src="<?php /*bloginfo('template_url'); */ ?>/img/weight-loss.svg" alt="">
                        </div>
                        Weight Loss
                    </a>
                </li>
            </ul>
        </div>
    <?php /*endif; */ ?>
</div>-->


</footer>
<div class="contact-modal__wrap">
    <div class="contact-modal">
        <img src="<?php bloginfo('template_url'); ?>/img/mail.png" class="contact-modal__mail">
        <button class="contact-modal__close"><img src="<?php bloginfo('template_url'); ?>/img/close-dark.svg"></button>
        <?php if ($my_lang == 'en') : ?>

            <h2 class="contact-modal__title">Contact us</h2>
            <p class="contact-modal__text">Please leave your contact details and we will inform you once we go live</p>
            <?php echo do_shortcode('[contact-form-7 id="147" title="contact form EN" html_class="contact-modal__form"]'); ?>

        <?php elseif ($my_lang == 'de') : ?>

            <h2 class="contact-modal__title">Kontaktiere uns</h2>
            <p class="contact-modal__text">Bitte hinterlassen Sie Ihre Kontaktdaten und wir werden Sie informieren, sobald wir live gehen</p>
            <?php echo do_shortcode('[contact-form-7 id="231" title="contact form DE" html_class="contact-modal__form"]'); ?>

        <?php elseif ($my_lang == 'pl') : ?>

            <h2 class="contact-modal__title">Skontaktuj się z nami</h2>
            <p class="contact-modal__text">Prosimy o pozostawienie danych kontaktowych, a poinformujemy Cię, gdy rozpoczniemy transmisję</p>
            <?php echo do_shortcode('[contact-form-7 id="232" title="contact form PL" html_class="contact-modal__form"]'); ?>

        <?php endif; ?>

        <!--<form class="contact-modal__form">
            <input class="contact-modal__input" type="text" placeholder="Name">
            <input class="contact-modal__input" type="email" placeholder="Email">
            <div class="contact-modal__checkbox">
                <label class="contact-modal__checkbox-label">
                    <input type="checkbox" class="contact-modal__checkbox-input">
                    <span class="contact-modal__checkbox-span"></span>
                </label>
                I agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
            </div>
            <button class="btn btn-center">send</button>
        </form>-->


    </div>
</div>
<?php wp_footer(); ?>

</body>

</html>
