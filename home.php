<!--
    Template Name: 制作作品ページ
-->
<?php get_header(); ?>
<main class="l-main">
        <div class="p-works-fv">
            <div class="p-works-fv__inner">
                <span class="p-works-fv__sub-title u-bold">WORKS</span>
                <h2 class="p-works-fv__title u-bold">制作作品</h2>
            </div>
        </div>
        <section class="p-works-lists">
            <div class="p-works-lists__inner l-wrapper">
                <?php if(have_posts()):
                    while(have_posts()) : the_post();
                ?>
                <article class="p-works-lists__item">
                    <a class="p-works-lists__link" href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('thumbnail p-works-lists__img', array('alt'=> get_the_title()) ); ?>
                        <?php else: ?>
                            <img class="p-works-lists__img" src="https://yuta-mattari.site/yutanowebdesign.com/wp-content/uploads/2023/04/noimage.png" alt="noimage" />
                        <?php endif; ?>
                        <h3 class="p-works-lists__title u-bold"><?php the_title(); ?></h3>
                    </a>
                </article>
                <?php endwhile; endif; ?>
            </div>
        </section>
        <section class="l-to-contact">
            <div class="l-to-contact__inner l-wrapper">
                <h3 class="l-to-contact__title u-bold">お問い合わせ</h3>
                <p class="l-to-contact__text">気になること等ございましたら、お気軽にお問い合わせください。</p>
                <a class="l-to-contact__btn c-btn c-btn-see u-bold" href="<?php echo esc_url(home_url('/contact')); ?>"><span class="c-btn-see__over-color">お問い合わせはこちら</span></a>
            </div>
        </section>
    </main>
<?php get_footer(); ?>