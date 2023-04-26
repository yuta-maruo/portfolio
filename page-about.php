<!--
    Template Name: 自己紹介
-->
<?php get_header(); ?>
<main class="l-main">
        <section class="p-about-fv">
            <div class="p-about-fv__inner">
                <span class="p-about-fv__sub-title u-bold">ABOUT</span>
                <h2 class="p-about-fv__title u-bold">私について</h2>
            </div>
        </section>
        <section class="p-about-intro">
            <div class="p-about-intro__inner">
                <h3 class="p-about-intro__title c-section__title u-bold">プロフィール</h3>
                <figure class="p-about-intro__img-box">
                    <img class="p-about-intro__img" src="<?php echo esc_url(get_theme_file_uri('/images/face.png')); ?>" alt="丸尾優太の顔写真">
                </figure>
                <div class="p-about-intro__text-box l-wrapper">
                    <h4 class="p-about-intro__name u-bold">丸尾優太</h4>
                    <span class="p-about-intro__name-under">-Web制作者を目指しています</span>
                    <p class="p-about-intro__text">
                        熊本県出身、1996年4月2日生まれの27歳。<br>
                        2022年12月から、独学にてプログラミングを学習しています。
                        実務経験はありませんが、学生時代・前職で培い続けた集中力と忍耐力、コミュニケーション力でどんどん成長していきたいと思います。
                    </p>
                    <p class="p-about-intro__intro-title u-bold">略歴</p>
                    <p class="p-about-intro__text">
                        熊本県生まれ。学生時代はサッカー部・バドミントン部に所属し、文武両道に励んでいました。<br>
                        大学は熊本県立大学に進学。統計学を専門的に学び、卒業後は県内の派遣会社で営業職をしておりました。<br>
                        大学でR言語を触ってプログラミングに少し興味を持っていたこと、
                        前職で取引先からWebサイトでの集客で課題が解決したお話を伺い、
                        興味を持った事がきっかけで、独学で勉強を始めました。
                    </p>
                    <p class="p-about-intro__intro-title u-bold">制作時に意識していること</p>
                    <p class="p-about-intro__text">
                        意識していることは3つでした。<br>
                        1)パーフェクトピクセルを心がける<br>
                        2)今制作しているサイトは「どこの・どんな人が・どんな時に見るか」というペルソナを意識する。<br>
                        3)決めた時間内に終わらせる。<br>
                        1と2に関しては、この完成度でユーザーのUI/UXは大丈夫か、顧客の課題は解決されそうかを考えています。
                        3に関しては、学習中から実践を想定して、時間内に納品できるかを常に意識して行っていました。
                    </p>
                    <p class="p-about-intro__intro-title u-bold">将来像</p>
                    <p class="p-about-intro__text">
                        将来的には、エンジニアのスキルを高めながら、Webディレクター側の仕事も務め、より顧客のニーズを汲み取ったものを制作できるようになりたいと思っております。
                        前職で培ったコミュニケーション力と、先を見越した計画性を活かして、
                        円滑な業務を遂行できるよう努めて参ります。
                    </p>
                </div>
            </div>
        </section>
        <section class="p-about-skill">
            <div class="p-about-skill__inner l-wrapper">
                <h3 class="p-about-skill__title c-section__title u-bold">使えるスキル</h3>
                <ul class="p-about-skill__lists">
                    <li class="p-about-skill__item">
                        <i class="p-about-skill__font-awesome fa-solid fa-code"></i>
                        <div class="p-about-skill__display-contents">
                            <h5 class="p-about-skill__name u-bold">HTML</h5>
                            <p class="p-about-skill__text">理解しやすいコーディングを心がけています。</p>
                        </div>
                    </li>
                    <li class="p-about-skill__item">
                        <i class="p-about-skill__font-awesome fa-brands fa-css3-alt"></i>
                        <div class="p-about-skill__display-contents">
                            <h5 class="p-about-skill__name u-bold">CSS</h5>
                            <p class="p-about-skill__text">レスポンシブ対応、アニメーションCSSができます。また、FLOCSSを用いたクラス名付与ができます。</p>
                        </div>
                    </li>
                    <li class="p-about-skill__item">
                        <i class="p-about-skill__font-awesome fa-brands fa-sass"></i>
                        <div class="p-about-skill__display-contents">
                            <h5 class="p-about-skill__name u-bold">Sass</h5>
                            <p class="p-about-skill__text">保守性・運用性を意識したコーディング・FLOCSSを意識したファイル構成ができます。</p>
                        </div>
                    </li>
                    <li class="p-about-skill__item">
                        <i class="p-about-skill__font-awesome fa-brands fa-square-js"></i>
                        <div class="p-about-skill__display-contents">
                            <h5 class="p-about-skill__name u-bold">Javascript</h5>
                            <p class="p-about-skill__text">React.jsやjQueryなどのライブラリを使用できます。Ajax機能やスライダー等の組み込みができます。</p>
                        </div>
                    </li>
                    <li class="p-about-skill__item">
                        <i class="p-about-skill__font-awesome fa-brands fa-wordpress"></i>
                        <div class="p-about-skill__display-contents">
                            <h5 class="p-about-skill__name u-bold">WordPress</h5>
                            <p class="p-about-skill__text">オリジナルテーマの作成ができます。ACF,Contact Form7,CPTUIなどのプラグインを使用して、運用も行いやすいようにできます。</p>
                        </div>
                    </li>
                    <li class="p-about-skill__item">
                        <i class="p-about-skill__font-awesome fa-brands fa-php"></i>
                        <div class="p-about-skill__display-contents">
                            <h5 class="p-about-skill__name u-bold">PHP</h5>
                            <p class="p-about-skill__text">お問い合わせフォームでの正規表現の確認や、メール自動送信機能など実装できます。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="l-to-contact">
            <div class="l-to-contact__inner l-wrapper">
                <h3 class="l-to-contact__title u-bold">お問い合わせ</h3>
                <p class="l-to-contact__text">気になること等ございましたら、お気軽にお問い合わせください。</p>
                <a class="l-to-contact__btn c-btn c-btn-see u-bold" href="<?php echo esc_url(home_url('/contact')); ?>"><span class="c-btn__over-color">お問い合わせはこちら</span></a>
            </div>
        </section>
    </main>
<?php get_footer(); ?>