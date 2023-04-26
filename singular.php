<?php get_header(); ?>
<main class="l-main">
    <section class="p-singular-fv">
        <div class="p-singular-fv__inner">
            <span class="p-singular-fv__sub-title u-bold">WORKS</span>
            <h2 class="p-singular-fv__title u-bold">制作作品</h2>
        </div>
    </section>
    <section class="p-singular-work">
        <div class="p-singular-work__inner l-wrapper">
            <article class="p-singular-work__item">
                <?php the_content(); ?>
            </article>
        </div>
    </section>
</main>
<?php get_footer(); ?>