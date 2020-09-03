<?php $my_lang = pll_current_language(); ?>

<?php if ($my_lang == 'en') : ?>
<div class="grey-back">
    <div class="container-section start">
        <h2>Ready to start your online medical questionnaire?</h2>
        <p>Prescription fee 19.00 €, <b>you pay nothing if no prescription is issued.</b></p>
        <a href="javascript:void(0);" class="btn_form btn btn-center">get started now</a>
    </div>
</div>
<?php elseif ($my_lang == 'de') : ?>
    <div class="grey-back">
        <div class="container-section start">
            <h2>Bereit, Ihren medizinischen Online-Fragebogen zu starten?</h2>
            <p>Rezeptgebühr 19,00 €, <b>Sie zahlen nichts, wenn kein Rezept ausgestellt wird.</b></p>
            <a href="javascript:void(0);" class="btn_form btn btn-center">Jetzt loslegen</a>
        </div>
    </div>
<?php elseif ($my_lang == 'pl') : ?>
    <div class="grey-back">
        <div class="container-section start">
            <h2>Gotowy do rozpoczęcia kwestionariusza medycznego online?</h2>
            <p>Opłata za receptę 19,00 €, <b>nic nie płacisz, jeśli nie wystawiono recepty.</b></p>
            <a href="javascript:void(0);" class="btn_form btn btn-center">Zacznij teraz</a>
        </div>
    </div>
<?php endif; ?>
