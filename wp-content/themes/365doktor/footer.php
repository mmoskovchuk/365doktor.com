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
                    <!--<li><b>Local:</b> 0800-4725510 FREE in the UK</li>
                    <li><b>International:</b> +43-681-84665606</li>-->
                    <li><b>Email:</b> support@365doktor.com</li>
                <?php elseif ($my_lang == 'de') : ?>
                    <!--<li><b>Lokal:</b> 0800-4725510 KOSTENLOS in Großbritannien</li>
                    <li><b>International:</b> +43-681-84665606</li>-->
                    <li><b>Email:</b> support@365doktor.com</li>
                <?php elseif ($my_lang == 'pl') : ?>
                   <!-- <li><b>Lokalny:</b> 0800-4725510 ZA DARMO w Wielkiej Brytanii</li>
                    <li><b>Międzynarodowy:</b> +43-681-84665606</li>-->
                    <li><b>E-mail:</b> support@365doktor.com</li>
                <?php elseif ($my_lang == 'sv') : ?>
                    <!--<li><b>Lokal:</b> 0800-4725510 GRATIS i Storbritannien</li>
                    <li><b>Internationell:</b> +43-681-84665606</li>-->
                    <li><b>E-post:</b> support@365doktor.com</li>
                <?php elseif ($my_lang == 'da') : ?>
                    <!--<li><b>Lokal:</b> 0800-4725510 GRATIS i Storbritannien</li>
                    <li><b>International:</b> +43-681-84665606</li>-->
                    <li><b>E-mail:</b> support@365doktor.com</li>
                <?php elseif ($my_lang == 'pt') : ?>
                    <!--<li><b>Local:</b> 0800-4725510 GRÁTIS no Reino Unido</li>
                    <li><b>Internacional:</b> +43-681-84665606</li>-->
                    <li><b>O email:</b> support@365doktor.com</li>
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
            <?php elseif ($my_lang == 'sv') : ?>
                <h5 class="footer__item-title">POPULÄRA BEHANDLINGAR</h5>
            <?php elseif ($my_lang == 'da') : ?>
                <h5 class="footer__item-title">POPULÆRE BEHANDLINGER</h5>
            <?php elseif ($my_lang == 'pt') : ?>
                <h5 class="footer__item-title">TRATAMENTOS POPULARES</h5>
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
            <?php elseif ($my_lang == 'sv') : ?>
                <h5 class="footer__item-title">ANVÄNDBARA LÄNKAR</h5>
            <?php elseif ($my_lang == 'da') : ?>
                <h5 class="footer__item-title">NYTTIGE LINKS</h5>
            <?php elseif ($my_lang == 'pt') : ?>
                <h5 class="footer__item-title">LINKS ÚTEIS</h5>
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
            <?php elseif ($my_lang == 'sv') : ?>
                <h5 class="footer__item-title">ANVÄNDBARA LÄNKAR</h5>
            <?php elseif ($my_lang == 'da') : ?>
                <h5 class="footer__item-title">NYTTIGE LINKS</h5>
            <?php elseif ($my_lang == 'pt') : ?>
                <h5 class="footer__item-title">LINKS ÚTEIS</h5>
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
                <?php elseif ($my_lang == 'sv') : ?>
                    <h5 class="footer__item-title">ANVÄNDBARA LÄNKAR</h5>
                <?php elseif ($my_lang == 'da') : ?>
                    <h5 class="footer__item-title">NYTTIGE LINKS</h5>
                <?php elseif ($my_lang == 'pt') : ?>
                    <h5 class="footer__item-title">LINKS ÚTEIS</h5>
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
            <div class="footer__item">
                <?php if ($my_lang == 'en') : ?>
                    <h5 class="footer__item-title">LEGAL</h5>
                <?php elseif ($my_lang == 'de') : ?>
                    <h5 class="footer__item-title">RECHTLICH</h5>
                <?php elseif ($my_lang == 'pl') : ?>
                    <h5 class="footer__item-title">PRAWNY</h5>
                <?php elseif ($my_lang == 'sv') : ?>
                    <h5 class="footer__item-title">ANVÄNDBARA LÄNKAR</h5>
                <?php elseif ($my_lang == 'da') : ?>
                    <h5 class="footer__item-title">NYTTIGE LINKS</h5>
                <?php elseif ($my_lang == 'pt') : ?>
                    <h5 class="footer__item-title">LINKS ÚTEIS</h5>
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
            <?php elseif ($my_lang == 'sv') : ?>
                <span>Online-rådgivning och <br>
                         förskrivningstjänst</span>
            <?php elseif ($my_lang == 'da') : ?>
                <span>Online rådgivning og <br>
                         ordineringsservice</span>
            <?php elseif ($my_lang == 'pt') : ?>
                <span>Consultoria online e <br>
                         serviço de prescrição</span>
            <?php endif; ?>

            <!--<img src="<?php /*bloginfo('template_url'); */?>/img/verify.png" alt="">-->
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
    <?php elseif ($my_lang == 'sv') : ?>
        <div class="right-modal">
            <button class="right-modal__close"><img src="<?php bloginfo('template_url'); ?>/img/close-right-modal.svg">
            </button>
            <section class="right-modal__header">
                <h2 class="right-modal__header-title">Välj din behandling</h2>
                <span class="right-modal__header-text">och starta online-konsultation</span>
            </section>
            <ul class="right-modal__body">
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erektil dysfunktion
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/contrac.svg" alt="">
                        </div>
                        P-piller
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cyst.svg" alt="">
                        </div>
                        Cystit
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-herpes.svg" alt="">
                        </div>
                        Genital herpes
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/asthma-inhaler.svg" alt="">
                        </div>
                        Astmainhalator
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/quit-smoking.svg" alt="">
                        </div>
                        Sluta röka
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
                        För tidig utlösning
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/morning-after.svg" alt="">
                        </div>
                        Dagen efter-piller
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/bacter-vag.svg" alt="">
                        </div>
                        Bakteriell vaginos
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-warts.svg" alt="">
                        </div>
                        Könsvårtor
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/high-blood-pressure.svg" alt="">
                        </div>
                        Högt blodtryck
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/migraine.svg" alt="">
                        </div>
                        Migrän
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cold-sore.svg" alt="">
                        </div>
                        Munsår
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/hair-loss.svg" alt="">
                        </div>
                        Håravfall
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/face-hair.svg" alt="">
                        </div>
                        Ansiktshårborttagning
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/chlamyd.svg" alt="">
                        </div>
                        Klamydia
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erektil dysfunktion
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
                        Högt kolesterol
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
                        Viktminskning
                    </a>
                </li>
            </ul>
        </div>
    <?php elseif ($my_lang == 'da') : ?>
        <div class="right-modal">
            <button class="right-modal__close"><img src="<?php bloginfo('template_url'); ?>/img/close-right-modal.svg">
            </button>
            <section class="right-modal__header">
                <h2 class="right-modal__header-title">Vælg din behandling</h2>
                <span class="right-modal__header-text">og start online konsultation</span>
            </section>
            <ul class="right-modal__body">
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/erect-disf.svg" alt="">
                        </div>
                        Erektil dysfunktion
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/contrac.svg" alt="">
                        </div>
                        P-piller
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cyst.svg" alt="">
                        </div>
                        Blærebetændelse
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-herpes.svg" alt="">
                        </div>
                        Kønsherpes
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/asthma-inhaler.svg" alt="">
                        </div>
                        Astmainhalator
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/quit-smoking.svg" alt="">
                        </div>
                        Stop med at ryge
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
                        For tidlig sædafgang
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/morning-after.svg" alt="">
                        </div>
                        Fortrydelsespille
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/bacter-vag.svg" alt="">
                        </div>
                        Bakteriel vaginose
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-warts.svg" alt="">
                        </div>
                        Kønsvorter
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/high-blood-pressure.svg" alt="">
                        </div>
                        Højt blodtryk
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/migraine.svg" alt="">
                        </div>
                        Migræne
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cold-sore.svg" alt="">
                        </div>
                        Forkølelsessår
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/hair-loss.svg" alt="">
                        </div>
                        Hårtab
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/face-hair.svg" alt="">
                        </div>
                        Ansigtshårfjerning
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
                        Erektil dysfunktion
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
                        Højt kolesteroltal
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
                        Vægttab
                    </a>
                </li>
            </ul>
        </div>
    <?php elseif ($my_lang == 'pt') : ?>
        <div class="right-modal">
            <button class="right-modal__close"><img src="<?php bloginfo('template_url'); ?>/img/close-right-modal.svg">
            </button>
            <section class="right-modal__header">
                <h2 class="right-modal__header-title">Selecione seu tratamento</h2>
                <span class="right-modal__header-text">e comece a consulta online</span>
            </section>
            <ul class="right-modal__body">
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/erect-disf.svg" alt="">
                        </div>
                        Disfunção erétil
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/contrac.svg" alt="">
                        </div>
                        Pílulas anticoncepcionais
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cyst.svg" alt="">
                        </div>
                        Cistite
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-herpes.svg" alt="">
                        </div>
                        Herpes genital
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/asthma-inhaler.svg" alt="">
                        </div>
                        Asma Inalador
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/quit-smoking.svg" alt="">
                        </div>
                        Parar de fumar
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/rosacea.svg" alt="">
                        </div>
                        Rosácea
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/prem-ejac.svg" alt="">
                        </div>
                        Ejaculação precoce
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/morning-after.svg" alt="">
                        </div>
                        Pílula do dia seguinte
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/bacter-vag.svg" alt="">
                        </div>
                        Vaginose bacteriana
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/genital-warts.svg" alt="">
                        </div>
                        Verrugas genitais
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/high-blood-pressure.svg" alt="">
                        </div>
                        Pressão alta
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/migraine.svg" alt="">
                        </div>
                        Enxaqueca
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/cold-sore.svg" alt="">
                        </div>
                        Afta
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/hair-loss.svg" alt="">
                        </div>
                        Perda de cabelo
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/face-hair.svg" alt="">
                        </div>
                        Remoção de pêlos faciais
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/chlamyd.svg" alt="">
                        </div>
                        Clamídia
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/erect-disf.svg" alt="">
                        </div>
                        Disfunção erétil
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/malaria.svg" alt="">
                        </div>
                        Malária
                    </a>
                </li>
                <li class="right-modal__body-item">
                    <a href="javascript:void(0);" class="btn_form">
                        <div class="right-modal__body-item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/high-cholesterol.svg" alt="">
                        </div>
                        Colesterol alto
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
                        Perda de peso
                    </a>
                </li>
            </ul>
        </div>
    <?php endif; ?>
</div>

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
            <p class="contact-modal__text">Bitte hinterlassen Sie Ihre Kontaktdaten und wir werden Sie informieren,
                sobald wir live gehen</p>
            <?php echo do_shortcode('[contact-form-7 id="231" title="contact form DE" html_class="contact-modal__form"]'); ?>

        <?php elseif ($my_lang == 'pl') : ?>

            <h2 class="contact-modal__title">Skontaktuj się z nami</h2>
            <p class="contact-modal__text">Prosimy o pozostawienie danych kontaktowych, a poinformujemy Cię, gdy
                rozpoczniemy transmisję</p>
            <?php echo do_shortcode('[contact-form-7 id="232" title="contact form PL" html_class="contact-modal__form"]'); ?>

        <?php elseif ($my_lang == 'sv') : ?>

            <h2 class="contact-modal__title">Kontakta oss</h2>
            <p class="contact-modal__text">Lämna dina kontaktuppgifter så meddelar vi dig när vi går live</p>
            <?php echo do_shortcode('[contact-form-7 id="1026" title="contact form SV" html_class="contact-modal__form"]'); ?>

        <?php elseif ($my_lang == 'da') : ?>

            <h2 class="contact-modal__title">Kontakt os</h2>
            <p class="contact-modal__text">Efterlad dine kontaktoplysninger, så informerer vi dig, når vi går live</p>
            <?php echo do_shortcode('[contact-form-7 id="1029" title="contact form DA" html_class="contact-modal__form"]'); ?>

        <?php elseif ($my_lang == 'pt') : ?>

            <h2 class="contact-modal__title">Contate-Nos</h2>
            <p class="contact-modal__text">Por favor, deixe seus dados de contato e iremos informá-lo assim que entrarmos ao vivo</p>
            <?php echo do_shortcode('[contact-form-7 id="1030" title="contact form PT" html_class="contact-modal__form"]'); ?>

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
