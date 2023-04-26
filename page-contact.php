<!--
    Template Name: お問い合わせページ
-->
<?php get_header(); ?>
    <main class="l-main">
    <div class="p-contact-fv">
        <div class="p-contact-fv__inner">
            <span class="p-contact-fv__sub-title u-bold">CONTACT</span>
            <h2 class="p-contact-fv__title u-bold">お問い合わせ</h2>
        </div>
    </div>
    <div class="p-contact">
        <div class="p-contact__inner l-wrapper">
            <h3 class="p-contact__title c-section__title u-bold">お問い合わせ</h3>
            <p class="p-contact__text">
                下記よりお気軽にお問い合わせください。<br>
                3日以内にご返信いたします。<br>
                <p class="p-contact__text p-contact__text--red"><span class="p-contact__attention u-bold">*</span>は入力必須項目です。</p>
            </p>
            <div class="p-contact__form c-form">
                <?php echo do_shortcode('[contact-form-7 id="48" title="portfolio Form"]'); ?>
            </div>
        </div>
    </div>
    </main>
<?php get_footer(); ?>