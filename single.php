<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * sumigoya
 */

get_header();
?>
 <section class="mainvisual-lower">
      <div class="mainvisual-lower__inner">
        <h1 class="mainvisual-lower__title">お知らせ</h1>
        <p class="mainvisual-lower__sub-title">Information</p>
      </div>
    </section>
    <article class="article">
      <div class="article__wrapper">
        <?php
          while (have_posts()) :
            the_post();

            get_template_part('template-parts/content', get_post_type());

          endwhile; // End of the loop.
          ?>
      </div><a class="btn-type1" href="/contact">お問い合わせ
        <div class="arrow"></div></a><a class="btn-type1 is-outside-link" href="https://shisui-chaga.myshopify.com/">オンラインショップへ
        <div class="arrow"></div></a>
    </article>
    <section class="section-faq-link">
      <div class="section-faq-link__inner">
        <div class="section-faq-link__box">
          <div class="section-faq-link__title">お問い合わせ</div>
          <div class="section-faq-link__text">ご注文や商品に関するご相談は<br>お問い合わせフォームをご利用ください。</div><a class="btn-type1" href="/contact">お問い合わせ
            <div class="arrow"></div></a>
        </div>
        <div class="section-faq-link__box">
          <div class="section-faq-link__title">よくある質問</div>
          <div class="section-faq-link__text">よくある質問をまとめましたので<br>ぜひご参考ください。</div><a class="btn-type1" href="/faq">よくある質問
            <div class="arrow"></div></a>
        </div>
      </div>
    </section><a class="section-instagram" href="">
      <p>Instagramでも各種商品の案内や情報を発信しています！</p><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-instagram.svg" alt=""></a>
<?php
get_footer();
