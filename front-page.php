<!--
    Template Name: トップページ
-->

<?php get_header(); ?>
    <main class="l-main">
        <section class="p-index-fv">
            <div class="p-index-fv__inner l-wrapper">
                <h2 class="p-index-fv__title u-bold">
                    <span class="p-index-fv__text p-index-fv__name u-bold">Yuta Maruo</span>
                    <span class="p-index-fv__text p-index-fv__portfolio u-bold">-Portfolio-</span>
                </h2>
                <div class="p-index-fv__arrow"></div>
                <div class="p-index-fv__arrow"></div>
                <div class="p-index-fv__arrow"></div>
                <span class="p-index-fv__scroll-text">scroll</span>
            </div>    
        </section>
        <section class="p-index-works">
            <div class="p-index-works__inner l-wrapper">        
                <h2 class="p-index-works__title c-section__title u-bold">制作作品</h2>
                <p class="p-index-works__text">- クリックで詳細をご覧いただけます -</p>
                <div class="p-index-works__lists">
                    <?php
                        $paged = ( get_query_var('paged') ) ? absint( get_query_var('paged') ) : 1;
                        $posts = array(
                            'paged' => $paged,
                            'post_type' => 'post',
                            'posts_per_page' => '4',
                            'order' => 'DESC'
                        );
                        $query = new WP_Query($posts);
                        if($query->have_posts()):
                        while($query->have_posts()) : $query->the_post();
                    ?>
                    <article class="p-index-works__item">
                        <div class="p-index-works__img-box">
                            <a class="p-index-works__link" href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('thumbnail p-index-works__img', array('alt'=> get_the_title()) ); ?>
                                <?php else: ?>
                                    <img class="p-index-works__img" src="https://yuta-mattari.site/yutanowebdesign.com/wp-content/uploads/2023/04/noimage.png" alt="noimage" />
                                <?php endif; ?>
                            </a>
                        </div>
                        <h3 class="p-index-works__work-name u-bold"><?php the_title(); ?></h3>
                    </article>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
                <a href="<?php echo esc_url(home_url('/works')); ?>" class="p-index-works__btn c-btn c-btn-see u-bold"><span class="c-btn-see__over-color">もっと見る</span></a>
            </div>
        </section>
        <section class="p-index-about">
            <div class="p-index-about__inner l-wrapper">
                <h2 class="p-index-about__title c-section__title u-bold">自己紹介</h2>
                <p class="p-index-about__text">
                    <span class="u-bold">丸尾 優太</span>と申します。<br>
                    熊本県生まれ・熊本県育ちの27歳。趣味は筋トレとプチ旅行です。<br>
                    エンジニアを目指して、独学で学習を行っております。
                    制作時はパーフェクトピクセルと、制作にかける時間を意識して行っています。
                    独学でコツコツと積み上げられた計画性と、前職で培ったコミュニケーション力で、クライアント先や職場の方々との円滑な業務を遂行できるかと思います。
                </p>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="p-index-about__btn c-btn c-btn-see u-bold"><span class="c-btn-see__over-color">もっと見る</span></a>
            </div>
        </section>
        <section class="p-index-skill">
            <div class="p-index-skill__inner l-wrapper">
                <h2 class="p-index-skill__title c-section__title u-bold">できること</h2>
                <ul class="p-index-skill__lists">
                    <li class="p-index-skill__item">
                        <i class="p-index-skill__font-awesome fa-brands fa-sass"></i>
                        <div class="p-index-skill__display-contents">
                            <h4 class="p-index-skill__name u-bold">HTML/CSSコーディング</h4>
                            <p class="p-index-skill__text">レスポンシブデザイン、CSSアニメーションやCSS設計ができます。学習の始めではBEMCSS、今ではFLOCSSでの記述をメインで行っております。</p>
                        </div>
                    </li>
                    <li class="p-index-skill__item">
                        <i class="p-index-skill__font-awesome fa-brands fa-wordpress"></i>
                        <div class="p-index-skill__display-contents">
                            <h4 class="p-index-skill__name u-bold">WordPress</h4>
                            <p class="p-index-skill__text">静的webサイトにWordPressを組み込みました。ACF,Contact Form7,CPTUIなどのプラグインを使用して、保全・運用も行いやすいように行っております。</p>
                        </div>
                    </li>
                    <li class="p-index-skill__item">
                        <i class="p-index-skill__font-awesome fa-brands fa-square-js"></i>
                        <div class="p-index-skill__display-contents">
                            <h4 class="p-index-skill__name u-bold">Javascript</h4>
                            <p class="p-index-skill__text">React.jsやjQueryなどのライブラリを使用することができます。</p>
                        </div>
                    </li>
                    <li class="p-index-skill__item">
                        <i class="p-index-skill__font-awesome fa-brands fa-php"></i>
                        <div class="p-index-skill__display-contents">
                            <h4 class="p-index-skill__name u-bold">PHP</h4>
                            <p class="p-index-skill__text">お問い合わせフォームでの正規表現の確認や、メール自動送信機能など実装できます。WordPressのコーディングも可能です。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="l-to-contact">
            <div class="l-to-contact__inner l-wrapper">
                <h2 class="l-to-contact__title u-bold">お問い合わせ</h2>
                <p class="l-to-contact__text">気になること等ございましたら、お気軽にお問い合わせください。</p>
                <a class="l-to-contact__btn c-btn c-btn-see u-bold" href="<?php echo esc_url(home_url('/contact')); ?>"><span class="c-btn-see__over-color">お問い合わせはこちら</span></a>
            </div>
        </section>
    </main>
<?php get_footer(); ?>