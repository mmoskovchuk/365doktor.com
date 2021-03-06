<?php
/**
 * Template Name: Front Page
 */
?>
<?php $my_lang = pll_current_language(); ?>
<?php get_header(); ?>

<?php if ($my_lang == 'en') : ?>
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Online Doctors, <br>Online Prescriptions</h1>
                <p>Is there a medical condition you like to seek treatment for? Don’t have time to visit your doctor? We
                    are here to help.</p>
                <p>Click the button below to choose your treatment and get online doctor assessment followed by
                    electronic prescription.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Start Online Doctor Consultation</a>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/img/cta-home.png" alt="man" class="cta__img main">
        </div>
    </div>
    <div class="container-section text-center">
        <h2>Seek Treatment for Any Condition</h2>
        <p>Finally, online doctor services are here! Now you can get a doctors prescription online for common conditions
            affecting men and women. See our most popular conditions below.</p>
        <div class="categories">
        <?php
        // Check rows exists.
        if (have_rows('treatment_menu_repeater')):
            // Loop through rows.
            while (have_rows('treatment_menu_repeater')) : the_row();
                $postobject = get_sub_field('treatment_menu_page_name');
                ?>

                    <a href="<?php the_sub_field('treatment_menu_page_link') ?>" class="categories__item">
                        <?php
                        $image = get_sub_field('treatment_menu_page_img');
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image); ?>" class="categories__item-icon" />
                        <?php endif; ?>
                        <?php echo $postobject->post_title ?>
                    </a>


            <?php
            endwhile;
        endif;
        ?>
        </div>
        <!--<div class="categories">
            <a href="/erectile-dysfunction/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/erect-disf.svg" class="categories__item-icon">
                Erectile Dysfunction
            </a>
            <a href="/contraceptive-pills/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/prem-ejac.svg" class="categories__item-icon">
                Premature Ejaculation
            </a>
            <a href="/hair-loss/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/hair-loss.svg" class="categories__item-icon">
                Hair Loss
            </a>
            <a href="/contraceptive-pills/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/contrac.svg" class="categories__item-icon">
                Contraceptive Pills
            </a>
            <a href="/morning-after-pill/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/morning-after.svg" class="categories__item-icon">
                Morning After Pill
            </a>
            <a href="/facial-hair-removal/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/face-hair.svg" class="categories__item-icon">
                Facial Hair Removal
            </a>
            <a href="/cystitis/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/cyst.svg" class="categories__item-icon">
                Cystitis
            </a>
            <a href="/bacterial-vaginosis/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/bacter-vag.svg" class="categories__item-icon">
                Bacterial Vaginosis
            </a>
            <a href="/chlamydia/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/chlamyd.svg" class="categories__item-icon">
                Chlamydia
            </a>
        </div>-->
        <a href="/our-treatments/" class="btn-stroke btn-center">All Treatments</a>
    </div>
    <div class="grey-back">
        <div class="container-section">
            <div class="flex-block">
                <div class="flex-block__text">
                    <h2>Confidential Medical Consultations Made Fast And Easy</h2>
                    <p>Now you no longer need to leave your home to get a medical consultation. Our online doctor clinic
                        offers men and women a faster and easier way to get treatment for common conditions. Simply
                        answer a short questionnaire to get an online prescription from a licensed doctor, 24/7. No more
                        wasting time commuting. No more uncomfortable doctor visits. No more hassle at your local
                        pharmacy (if) you choose to redeem your e-prescription and get your medication delivered to your
                        doorstep through our partner mail-order pharmacy.</p>
                    <a href="javascript:void(0);" class="btn">read more</a>
                </div>
                <div class="flex-block__img mob-none">
                    <img src="<?php bloginfo('template_url'); ?>/img/man-notebook.png">
                </div>
            </div>
            <div class="safe">
                <div><img src="<?php bloginfo('template_url'); ?>/img/dmca.png" alt="dmca"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/registered-pharmacy.png"
                          alt="registered pharmacy"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/verify.png" alt=""></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/cyber-essentials.png" alt="cyber essentials">
                </div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/care-quality.png" alt="carequality"></div>
            </div>
        </div>
    </div>
    <section class="container-section">
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
    </section>
    <section class="container-section">
        <div class="flex-block">
            <div class="flex-block__text">
                <h2>Advanced Telemedicine In Europe</h2>
                <p>Telemedicine in Europe has completely transformed the way people get medical consultations and
                    prescriptions. The evolving climate of regulations in the EU has taken many patients out of doctor
                    waiting rooms and into online health clinics, where they can get an online doctor consultation from
                    the comfort of their home. 365Doktor is one of the first and leading telemedicine companies offering
                    online doctor consultations for men and women seeking treatment for a wide variety of
                    conditions.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Start Online Doctor Consultation</a>
            </div>
            <div class="flex-block__img">
                <img src="<?php bloginfo('template_url'); ?>/img/phone.png">
            </div>
        </div>
    </section>
<?php elseif ($my_lang == 'de') : ?>
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Online Arzt, <br>Online Rezept.</h1>
                <p>Haben Sie ein medizinisches Problem, das Sie gerne untersuchen lassen möchten?
                    Sie haben jedoch keine Zeit für einen Arztbesuch? Wir helfen Ihnen gerne.</p>
                <p>Klicken Sie auf den folgenden Button, um Ihre gewünschte medizinische
                    Behandlung auszuwählen und eine online Diagnose des Arztes mit
                    anschließendem Online Rezept zu erhalten.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Jetzt mit Ihrem Online Arzt sprechen</a>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/img/cta-home.png" alt="man" class="cta__img main">
        </div>
    </div>
    <div class="container-section text-center">
        <h2>Behandlung für jede Art von Erkrankung finden</h2>
        <p>Endlich sind die medizinischen Online-Dienstleistungen da! Jetzt können Sie
            online ein Privatrezept für häufige Erkrankungen bei Männern und Frauen
            erhalten. Sehen Sie nachfolgend die häufigsten Beschwerden.</p>
        <div class="categories">
            <?php
            // Check rows exists.
            if (have_rows('treatment_menu_repeater')):
                // Loop through rows.
                while (have_rows('treatment_menu_repeater')) : the_row();
                    $postobject = get_sub_field('treatment_menu_page_name');
                    ?>

                    <a href="<?php the_sub_field('treatment_menu_page_link') ?>" class="categories__item">
                        <?php
                        $image = get_sub_field('treatment_menu_page_img');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image); ?>" class="categories__item-icon" />
                        <?php endif; ?>
                        <?php echo $postobject->post_title ?>
                    </a>


                <?php
                endwhile;
            endif;
            ?>
        </div>
        <!--<div class="categories">
            <a href="/de/erektile-dysfunktion/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/erect-disf.svg" class="categories__item-icon">
                Erektile Dysfunktion
            </a>
            <a href="/de/vorzeitige-ejakulation/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/prem-ejac.svg" class="categories__item-icon">
                Vorzeitige Ejakulation
            </a>
            <a href="/de/haarausfall/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/hair-loss.svg" class="categories__item-icon">
                Haarausfall
            </a>
            <a href="/de/anti-baby-pillen/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/contrac.svg" class="categories__item-icon">
                Anti-Baby-Pillen
            </a>
            <a href="/de/die-pille-danach/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/morning-after.svg" class="categories__item-icon">
                Die Pille danach
            </a>
            <a href="/de/gesichtshaarentfernung/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/face-hair.svg" class="categories__item-icon">
                Gesichtshaarentfernung
            </a>
            <a href="/de/blasenentzundung/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/cyst.svg" class="categories__item-icon">
                Blasenentzündung
            </a>
            <a href="/de/bakterielle-vaginose/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/bacter-vag.svg" class="categories__item-icon">
                Bakterielle Vaginose
            </a>
            <a href="/de/chlamydien/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/chlamyd.svg" class="categories__item-icon">
                Chlamydien
            </a>
        </div>-->
        <a href="/de/unsere-behandlungen/" class="btn-stroke btn-center">Alle Therapien anzeigen</a>
    </div>
    <div class="grey-back">
        <div class="container-section">
            <div class="flex-block">
                <div class="flex-block__text">
                    <h2>Vertrauliche medizinische Beratungen schnell und einfach erledigt</h2>
                    <p>Jetzt müssen Sie Ihr Haus nicht mehr verlassen, um eine ärztliche Untersuchung in
                        Anspruch zu nehmen. Dank unserer Online Klinik können sich Männer und Frauen
                        bei häufigen Erkrankungen schneller und einfacher in ärztliche Behandlung
                        begeben.</p>
                    <a href="javascript:void(0);" class="btn">Mehr dazu</a>
                </div>
                <div class="flex-block__img mob-none">
                    <img src="<?php bloginfo('template_url'); ?>/img/man-notebook.png">
                </div>
            </div>
            <div class="safe">
                <div><img src="<?php bloginfo('template_url'); ?>/img/dmca.png" alt="dmca"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/registered-pharmacy.png"
                          alt="registered pharmacy"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/verify.png" alt=""></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/cyber-essentials.png" alt="cyber essentials">
                </div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/care-quality.png" alt="carequality"></div>
            </div>
        </div>
    </div>
    <section class="container-section">
        <h2 class="text-center">Und so funktioniert’s</h2>
        <div class="how">
            <div class="how__item">
                <img src="<?php bloginfo('template_url'); ?>/img/desc.svg" alt="questionnaire">
                <div>Wählen Sie Ihren Gesundheitszustand aus und füllen Sie einen kurzen medizinischen Fragebogen aus
                </div>
            </div>
            <div class="how__item">
                <img src="<?php bloginfo('template_url'); ?>/img/paper.svg" alt="Prescription">
                <div>Unser Arzt wird die Behandlung empfehlen und das Rezept ausstellen (falls zutreffend).</div>
            </div>
            <div class="how__item">
                <img src="<?php bloginfo('template_url'); ?>/img/list.svg" alt="Delivered">
                <div>Senden Sie das Rezept an Ihre Heimapotheke oder lassen Sie sich die Medikamente an Ihre Tür
                    liefern
                </div>
            </div>
        </div>
    </section>
    <section class="container-section">
        <div class="flex-block">
            <div class="flex-block__text">
                <h2>Fortschrittliche Telemedizin in Europa</h2>
                <p>Die Telemedizin in Europa hat die Art und Weise, wie Menschen
                    medizinische Konsultationen und Privatrezepte erhalten, völlig
                    verändert. Die sich wandelnden gesetzlichen Regelungen in der
                    EU haben viele Patienten aus den Wartezimmern zu einer online
                    Diagnose geführt, wo sie bequem von zu Hause aus einen Arzt
                    online fragen können und ebenso mehr zu Ihrem
                    Gesundheitszustand erfahren können.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Jetzt mit Ihrem Online Arzt sprechen</a>
            </div>
            <div class="flex-block__img">
                <img src="<?php bloginfo('template_url'); ?>/img/phone.png">
            </div>
        </div>
    </section>
<?php elseif ($my_lang == 'pl') : ?>
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Lekarze i e-recepty online.</h1>
                <p>Czy cierpisz na jakąś dolegliwość, którą chciałbyś wyleczyć? Brakuje ci czasu na
                    wizytę u lekarza? Jesteśmy tu, aby ci w tym pomóc.</p>
                <p>Kliknij poniższy przycisk, aby wybrać leczenie i otrzymać poradę lekarską online,
                    dzięki której zdobędziesz e-receptę przez internet.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Rozpocznij konsultację medyczną online</a>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/img/cta-home.png" alt="man" class="cta__img main">
        </div>
    </div>
    <div class="container-section text-center">
        <h2>Wylecz się z każdej choroby</h2>
        <p>Dostępne są już konsultacje medyczne przez internet! Teraz możesz otrzymać e-
            receptę online na powszechne schorzenia dotykające kobiety i mężczyzn. Poniżej
            znajdziesz listę najpopularniejszych dolegliwości.</p>

        <div class="categories">
            <?php
            // Check rows exists.
            if (have_rows('treatment_menu_repeater')):
                // Loop through rows.
                while (have_rows('treatment_menu_repeater')) : the_row();
                    $postobject = get_sub_field('treatment_menu_page_name');
                    ?>

                    <a href="<?php the_sub_field('treatment_menu_page_link') ?>" class="categories__item">
                        <?php
                        $image = get_sub_field('treatment_menu_page_img');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image); ?>" class="categories__item-icon" />
                        <?php endif; ?>
                        <?php echo $postobject->post_title ?>
                    </a>


                <?php
                endwhile;
            endif;
            ?>
        </div>
        
        <!--<div class="categories">
            <a href="/pl/zaburzenie-erekcji/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/erect-disf.svg" class="categories__item-icon">
                Zaburzenie erekcji
            </a>
            <a href="/pl/tabletki-antykoncepcyjne/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/prem-ejac.svg" class="categories__item-icon">
                Tabletki antykoncepcyjne
            </a>
            <a href="/pl/wypadanie-wlosow/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/hair-loss.svg" class="categories__item-icon">
                Wypadanie włosów
            </a>
            <a href="/pl/tabletki-antykoncepcyjne/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/contrac.svg" class="categories__item-icon">
                Tabletki antykoncepcyjne
            </a>
            <a href="/pl/tabletka-dzien-po/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/morning-after.svg" class="categories__item-icon">
                Tabletka dzień po
            </a>
            <a href="/pl/usuwanie-owlosienia-twarzy/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/face-hair.svg" class="categories__item-icon">
                Usuwanie owłosienia twarzy
            </a>
            <a href="/pl/zapalenie-pecherza/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/cyst.svg" class="categories__item-icon">
                Zapalenie pęcherza
            </a>
            <a href="/pl/bakteryjne-zapalenie-pochwy/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/bacter-vag.svg" class="categories__item-icon">
                Bakteryjne zapalenie pochwy
            </a>
            <a href="/pl/chlamydia-pl/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/chlamyd.svg" class="categories__item-icon">
                Chlamydia
            </a>
        </div>-->
        <a href="/pl/nasze-zabiegi/" class="btn-stroke btn-center">Wszystkie zabiegi</a>
    </div>
    <div class="grey-back">
        <div class="container-section">
            <div class="flex-block">
                <div class="flex-block__text">
                    <h2>Poufne konsultacje medyczne w prosty i przystępny sposób</h2>
                    <p>Nie musisz już wychodzić z domu, aby otrzymać poradę lekarską. Nasza
                        internetowa klinika medyczna oferuje kobietom i mężczyznom szybszy i łatwiejszy
                        sposób leczenia powszechnie występujących schorzeń.Aby otrzymać e-receptę online od
                        licencjonowanego lekarza, 24 godziny na dobę
                        przez 7 dni w tygodniu, wystarczy odpowiedzieć na krótką ankietę. Przestań tracić
                        czas na jeżdżenie do przychodni. Nie chodź już więcej na krępujące wizyty
                        lekarskie. Jeśli zdecydujesz się na zrealizowanie swojej recepty elektronicznej w
                        naszej partnerskiej aptece internetowej, lek zostanie ci dostarczony pod same
                        drzwi, więc nie będziesz już nawet musiał chodzić do apteki.</p>
                    <a href="javascript:void(0);" class="btn">Czytaj więcej</a>
                </div>
                <div class="flex-block__img mob-none">
                    <img src="<?php bloginfo('template_url'); ?>/img/man-notebook.png">
                </div>
            </div>
            <div class="safe">
                <div><img src="<?php bloginfo('template_url'); ?>/img/dmca.png" alt="dmca"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/registered-pharmacy.png"
                          alt="registered pharmacy"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/verify.png" alt=""></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/cyber-essentials.png" alt="cyber essentials">
                </div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/care-quality.png" alt="carequality"></div>
            </div>
        </div>
    </div>
    <section class="container-section">
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
    </section>
    <section class="container-section">
        <div class="flex-block">
            <div class="flex-block__text">
                <h2>Zaawansowana telemedycyna w Europie</h2>
                <p>Europejska telemedycyna całkowicie zmieniła sposób, w jaki
                    ludzie otrzymują porady lekarskie i recepty. Zmieniający się klimat
                    przepisów unijnych spowodował, że wielu pacjentów wyszło z
                    poczekalni i udało się do internetowych klinik, gdzie mogą
                    otrzymać poradę lekarską online z zacisza własnego domu.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Rozpocznij konsultację medyczną online</a>
            </div>
            <div class="flex-block__img">
                <img src="<?php bloginfo('template_url'); ?>/img/phone.png">
            </div>
        </div>
    </section>
<?php elseif ($my_lang == 'sv') : ?>
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Läkare online, <br>recept online.</h1>
                <p>Har du ett medicinskt tillstånd som du behöver söka behandling för? Har du inte
                    tid att besöka en vårdcentral? Vi finns här för att hjälpa dig.</p>
                <p>Klicka på knappen nedan för att välja din behandling och rådfråga en läkare på
                    nätet. Efter det får du ett recept på medicin online.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Inled rådgivning med läkare</a>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/img/cta-home.png" alt="man" class="cta__img main">
        </div>
    </div>
    <div class="container-section text-center">
        <h2>Sök behandling och få recept oavsett tillstånd</h2>
        <p>Äntligen finns det en läkartjänst online! Du kan nu få ett recept från en läkare
            online för vanliga tillstånd som påverkar både män och kvinnor. Se de vanligaste
            tillstånden nedan.</p>
        <div class="categories">
            <?php
            // Check rows exists.
            if (have_rows('treatment_menu_repeater')):
                // Loop through rows.
                while (have_rows('treatment_menu_repeater')) : the_row();
                    $postobject = get_sub_field('treatment_menu_page_name');
                    ?>

                    <a href="<?php the_sub_field('treatment_menu_page_link') ?>" class="categories__item">
                        <?php
                        $image = get_sub_field('treatment_menu_page_img');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image); ?>" class="categories__item-icon" />
                        <?php endif; ?>
                        <?php echo $postobject->post_title ?>
                    </a>


                <?php
                endwhile;
            endif;
            ?>
        </div>
        <!--<div class="categories">
            <a href="/erectile-dysfunction/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/erect-disf.svg" class="categories__item-icon">
                Erectile Dysfunction
            </a>
            <a href="/contraceptive-pills/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/prem-ejac.svg" class="categories__item-icon">
                Premature Ejaculation
            </a>
            <a href="/hair-loss/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/hair-loss.svg" class="categories__item-icon">
                Hair Loss
            </a>
            <a href="/contraceptive-pills/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/contrac.svg" class="categories__item-icon">
                Contraceptive Pills
            </a>
            <a href="/morning-after-pill/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/morning-after.svg" class="categories__item-icon">
                Morning After Pill
            </a>
            <a href="/facial-hair-removal/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/face-hair.svg" class="categories__item-icon">
                Facial Hair Removal
            </a>
            <a href="/cystitis/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/cyst.svg" class="categories__item-icon">
                Cystitis
            </a>
            <a href="/bacterial-vaginosis/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/bacter-vag.svg" class="categories__item-icon">
                Bacterial Vaginosis
            </a>
            <a href="/chlamydia/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/chlamyd.svg" class="categories__item-icon">
                Chlamydia
            </a>
        </div>-->
        <a href="/sv/vara-behandlingar/" class="btn-stroke btn-center">Alla behandlingar</a>
    </div>
    <div class="grey-back">
        <div class="container-section">
            <div class="flex-block">
                <div class="flex-block__text">
                    <h2>Konfidentiell rådgivning med läkare online snabbt och enkelt</h2>
                    <p>Du behöver inte längre lämna ditt hem för att få en medicinsk rådgivning. Vår
                        vårdcentral med läkare online erbjuder män och kvinnor ett snabbare och enklare
                        sätt att få vård och behandling för vanliga tillstånd.</p>
                    <a href="javascript:void(0);" class="btn">Läs mer</a>
                </div>
                <div class="flex-block__img mob-none">
                    <img src="<?php bloginfo('template_url'); ?>/img/man-notebook.png">
                </div>
            </div>
            <div class="safe">
                <div><img src="<?php bloginfo('template_url'); ?>/img/dmca.png" alt="dmca"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/registered-pharmacy.png"
                          alt="registered pharmacy"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/verify.png" alt=""></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/cyber-essentials.png" alt="cyber essentials">
                </div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/care-quality.png" alt="carequality"></div>
            </div>
        </div>
    </div>
    <section class="container-section">
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
    </section>
    <section class="container-section">
        <div class="flex-block">
            <div class="flex-block__text">
                <h2>Avancerad telemedicin i Europa</h2>
                <p>Telemedicin i Europa har helt och hållet förändrat hur människor
                    får medicinsk rådgivning och recept. Reglerna för läkarvård har
                    förändrats i EU, vilket har lett till att många väljer att lämna sina
                    lokala vårdcentraler och istället vända sig till läkare online där de
                    kan få rådgivning och recept online, utan att behöva lämna
                    hemmet.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Inled rådgivning med läkare</a>
            </div>
            <div class="flex-block__img">
                <img src="<?php bloginfo('template_url'); ?>/img/phone.png">
            </div>
        </div>
    </section>
<?php elseif ($my_lang == 'da') : ?>
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Online Læger, <br>Online Recepter.</h1>
                <p>Is there a medical condition you like to seek treatment for? Don’t have time to visit your doctor? We
                    are here to help.</p>
                <p>Har du en medicinsk tilstand, du ønsker at søge behandling for? Har du ikke tid til at
                    besøge din læge? Vi er her for at hjælpe.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Start Online Lægekonsultation</a>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/img/cta-home.png" alt="man" class="cta__img main">
        </div>
    </div>
    <div class="container-section text-center">
        <h2>Søg Behandling For Enhver Tilstand</h2>
        <p>Nu har vi endelig fået online lægehjælp! Nu kan du få en recept fra en online læge til
            almene tilstande, der påvirker mænd og kvinder. Se vores mest populære tilstande
            nedenfor.</p>
        <div class="categories">
            <?php
            // Check rows exists.
            if (have_rows('treatment_menu_repeater')):
                // Loop through rows.
                while (have_rows('treatment_menu_repeater')) : the_row();
                    $postobject = get_sub_field('treatment_menu_page_name');
                    ?>

                    <a href="<?php the_sub_field('treatment_menu_page_link') ?>" class="categories__item">
                        <?php
                        $image = get_sub_field('treatment_menu_page_img');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image); ?>" class="categories__item-icon" />
                        <?php endif; ?>
                        <?php echo $postobject->post_title ?>
                    </a>


                <?php
                endwhile;
            endif;
            ?>
        </div>
        <!--<div class="categories">
            <a href="/erectile-dysfunction/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/erect-disf.svg" class="categories__item-icon">
                Erectile Dysfunction
            </a>
            <a href="/contraceptive-pills/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/prem-ejac.svg" class="categories__item-icon">
                Premature Ejaculation
            </a>
            <a href="/hair-loss/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/hair-loss.svg" class="categories__item-icon">
                Hair Loss
            </a>
            <a href="/contraceptive-pills/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/contrac.svg" class="categories__item-icon">
                Contraceptive Pills
            </a>
            <a href="/morning-after-pill/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/morning-after.svg" class="categories__item-icon">
                Morning After Pill
            </a>
            <a href="/facial-hair-removal/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/face-hair.svg" class="categories__item-icon">
                Facial Hair Removal
            </a>
            <a href="/cystitis/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/cyst.svg" class="categories__item-icon">
                Cystitis
            </a>
            <a href="/bacterial-vaginosis/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/bacter-vag.svg" class="categories__item-icon">
                Bacterial Vaginosis
            </a>
            <a href="/chlamydia/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/chlamyd.svg" class="categories__item-icon">
                Chlamydia
            </a>
        </div>-->
        <a href="/da/vores-behandlinger/" class="btn-stroke btn-center">Alle Behandlinger</a>
    </div>
    <div class="grey-back">
        <div class="container-section">
            <div class="flex-block">
                <div class="flex-block__text">
                    <h2>Fortrolig Lægekonsultation Og Recept Online - Hurtigt Og Nemt</h2>
                    <p>Nu behøver du ikke længere at forlade dit hjem for at få en lægekonsultation. Vores online
                        lægeklinik tilbyder mænd og kvinder en hurtigere og lettere måde at få behandling til
                        almindelige tilstande på.</p>
                    <a href="javascript:void(0);" class="btn">read more</a>
                </div>
                <div class="flex-block__img mob-none">
                    <img src="<?php bloginfo('template_url'); ?>/img/man-notebook.png">
                </div>
            </div>
            <div class="safe">
                <div><img src="<?php bloginfo('template_url'); ?>/img/dmca.png" alt="dmca"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/registered-pharmacy.png"
                          alt="registered pharmacy"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/verify.png" alt=""></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/cyber-essentials.png" alt="cyber essentials">
                </div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/care-quality.png" alt="carequality"></div>
            </div>
        </div>
    </div>
    <section class="container-section">
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
    </section>
    <section class="container-section">
        <div class="flex-block">
            <div class="flex-block__text">
                <h2>Avanceret Telemedicin I Europa</h2>
                <p>Telemedicin i Europa har fuldstændigt ændret måden, hvorpå folk får
                    medicinsk konsultation og recept. Et klima af endeløst udviklende
                    reguleringer i EU har fået mange patienter ud af lægers venteværelser og
                    videre til online sundhedsklinikker, hvor de kan få en online
                    lægekonsultation i afslappede omgivelser fra eget hjem.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Start Online Lægekonsultation</a>
            </div>
            <div class="flex-block__img">
                <img src="<?php bloginfo('template_url'); ?>/img/phone.png">
            </div>
        </div>
    </section>
<?php elseif ($my_lang == 'pt') : ?>
    <div class="container cta__back">
        <div class="cta">
            <div class="cta__text">
                <h1>Médicos online, <br>receitas online.</h1>
                <p>Procura tratamento para algum problema de saúde? Não tem tempo para marcar
                    consulta com o seu médico? Estamos aqui para ajudar.</p>
                <p>Clique no botão abaixo para escolher o seu tratamento e receber um diagnóstico
                    médico online, seguido de receita eletrónica.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Iniciar consulta médica online</a>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/img/cta-home.png" alt="man" class="cta__img main">
        </div>
    </div>
    <div class="container-section text-center">
        <h2>Procure tratamento para qualquer problema de saúde</h2>
        <p>Chegaram finalmente os serviços médicos online! Agora, já pode obter uma
            receita médica online para problemas comuns que afetam homens e mulheres.
            Consulte os problemas mais frequentes abaixo.</p>
        <div class="categories">
            <?php
            // Check rows exists.
            if (have_rows('treatment_menu_repeater')):
                // Loop through rows.
                while (have_rows('treatment_menu_repeater')) : the_row();
                    $postobject = get_sub_field('treatment_menu_page_name');
                    ?>

                    <a href="<?php the_sub_field('treatment_menu_page_link') ?>" class="categories__item">
                        <?php
                        $image = get_sub_field('treatment_menu_page_img');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image); ?>" class="categories__item-icon" />
                        <?php endif; ?>
                        <?php echo $postobject->post_title ?>
                    </a>


                <?php
                endwhile;
            endif;
            ?>
        </div>
        <!--<div class="categories">
            <a href="/erectile-dysfunction/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/erect-disf.svg" class="categories__item-icon">
                Erectile Dysfunction
            </a>
            <a href="/contraceptive-pills/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/prem-ejac.svg" class="categories__item-icon">
                Premature Ejaculation
            </a>
            <a href="/hair-loss/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/hair-loss.svg" class="categories__item-icon">
                Hair Loss
            </a>
            <a href="/contraceptive-pills/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/contrac.svg" class="categories__item-icon">
                Contraceptive Pills
            </a>
            <a href="/morning-after-pill/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/morning-after.svg" class="categories__item-icon">
                Morning After Pill
            </a>
            <a href="/facial-hair-removal/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/face-hair.svg" class="categories__item-icon">
                Facial Hair Removal
            </a>
            <a href="/cystitis/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/cyst.svg" class="categories__item-icon">
                Cystitis
            </a>
            <a href="/bacterial-vaginosis/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/bacter-vag.svg" class="categories__item-icon">
                Bacterial Vaginosis
            </a>
            <a href="/chlamydia/" class="categories__item">
                <img src="<?php /*bloginfo('template_url'); */?>/img/chlamyd.svg" class="categories__item-icon">
                Chlamydia
            </a>
        </div>-->
        <a href="/pt/nossos-tratamentos/" class="btn-stroke btn-center">Alle behandlinger</a>
    </div>
    <div class="grey-back">
        <div class="container-section">
            <div class="flex-block">
                <div class="flex-block__text">
                    <h2>Consultas médicas online rápidas e fáceis</h2>
                    <p>Agora, já não precisa de sair de casa para ir ao médico. O nosso médico online
                        oferece a todos os utentes uma forma rápida e fácil de tratar problemas de saúde
                        comuns.</p>
                    <a href="javascript:void(0);" class="btn">Сonsulte Mais informação</a>
                </div>
                <div class="flex-block__img mob-none">
                    <img src="<?php bloginfo('template_url'); ?>/img/man-notebook.png">
                </div>
            </div>
            <div class="safe">
                <div><img src="<?php bloginfo('template_url'); ?>/img/dmca.png" alt="dmca"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/registered-pharmacy.png"
                          alt="registered pharmacy"></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/verify.png" alt=""></div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/cyber-essentials.png" alt="cyber essentials">
                </div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/care-quality.png" alt="carequality"></div>
            </div>
        </div>
    </div>
    <section class="container-section">
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
    </section>
    <section class="container-section">
        <div class="flex-block">
            <div class="flex-block__text">
                <h2>Telemedicina avançada na Europa</h2>
                <p>A telemedicina na Europa transformou por completo o modo
                    como as pessoas procuram aconselhamento e receitas médicas. O
                    contexto em evolução das regulamentações na UE transferiu
                    muitos pacientes das salas de espera dos consultórios para
                    clínicas online, onde podem consultar um médico a partir do
                    conforto do lar.</p>
                <a href="javascript:void(0);" class="cta__btn btn">Iniciar consulta médica online</a>
            </div>
            <div class="flex-block__img">
                <img src="<?php bloginfo('template_url'); ?>/img/phone.png">
            </div>
        </div>
    </section>
<?php endif; ?>



<?php get_template_part('includes/inc', 'started-now-block'); ?>


<?php get_footer(); ?>