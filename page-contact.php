<?php
get_header();
?>

<section class="mainvisual-lower">
      <div class="mainvisual-lower__inner">
        <h1 class="mainvisual-lower__title">お問い合わせ</h1>
        <p class="mainvisual-lower__sub-title">Contact</p>
      </div>
    </section>
    <section class="contact-tel">
      <div class="contact-tel__wrapper">
        <h2 class="contact-tel__section-title">電話でのお問い合わせ</h2>
        <div class="contact-tel__text-box">
          <div class="contact-tel__tel"><img src="/img/common/icon-tel-black.svg" alt="">
            <h3><a href="tel:0112805220">0120-197-013</a></h3>
          </div>
          <p class="contact-tel__note">平日9:00~17:00（祝日・年末年始を除く）</p>
        </div>
      </div>
    </section>



      <section class="section-contact-form">
      <h2 class="section-contact-form__section-title">お問い合わせフォーム</h2>
      <div class="section-contact-form__wrapper">




      <?php echo do_shortcode('[contact-form-7 id="8" title="コンタクトフォーム 1"]'); ?>





      <p class="section-contact-form__note">担当者が確認の上、ご連絡させていただきます。<br>内容によってはお時間をいただく場合もございますので今しばらくお待ちください。</p>
      </div>
    </section>


<section class="section-faq-link is-contact">
      <div class="section-faq-link__inner">
        <div class="section-faq-link__box">
          <div class="section-faq-link__title">よくある質問</div>
          <div class="section-faq-link__text">よくある質問をまとめましたので<br>ぜひご参考ください。</div><a class="btn-type1" href="/faq">よくある質問
            <div class="arrow"></div></a>
        </div>
      </div>
    </section><a class="section-instagram" href="https://www.instagram.com/shisuichaga/" target="_blank">
      <p>Instagramでも各種商品の案内や情報を発信しています！</p><img src="/img/common/icon-instagram.svg" alt=""></a>
<?php
// get_sidebar();
get_footer();
