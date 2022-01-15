<?php
get_header();
?>

    <section class="main-visual" id="js-main-visual">
      <div class="main-visual__title-box">
        <p class="main-visual__sub-title">What is the “chaga”</p>
        <h2 class="main-visual__title">チャーガとは</h2>
      </div>
      <div class="main-visual__text-box">
        <p class="main-visual__lead">和名はカバノアナタケ。<br>｢森の宝石｣とも呼ばれる<br>白樺の幹に寄生するキノコのことです。</p>
      </div>
    </section>
    <section class="section-about">
      <div class="accordion js-accordion section-about__accordion">
        <div class="accordion__item section-about__accordion-block">
          <p class="section-about__sub-title">チャーガについて</p>
          <div class="section-about__title-box js-accordion-trigger">
            <h2 class="section-about__title">｢幻のキノコ｣として<br>伝承されてきたチャーガ</h2>
            <button class="u-hidden-o-sm section-about__trigger-btn"><img src="/img/common/icon-circle-arrow.svg" alt="矢印"></button>
          </div>
          <div class="accordion__content section-about__content">
            <p>チャーガとは、白樺の幹に寄生するサルノコシカケ類のキノコのことです。ロシア語のЧага＝chaga、和名はカバノアナタケと言います。</p>
            <p>元来、白樺の樹液にはアミノ酸・リンゴ酸・ミネラル類などの栄養が豊富に含まれており、その樹液を栄養源として20～30年かけて成長する大型の菌核を作ります。</p>
            <p>極寒の地でしか栽培されないチャーガは、その生命力の強さから最後には宿木を枯らしてしまうほど、白樺樹液の成分を吸収します。</p>
            <p>ロシアでは古く民族医薬として使用され、心臓病、肝臓病、胃病等様々な病気治療に効能を発揮してきた歴史があり、その驚異的な効能ゆえ幻のキノコと呼ばれ伝承されてきております。</p>
          </div>
          <button class="u-hidden-u-md section-about__trigger-btn js-accordion-trigger"><img src="/img/common/icon-circle-arrow.svg" alt="矢印"></button>
        </div>
        <div class="accordion__item section-about__accordion-block">
          <p class="section-about__sub-title">チャーガの栄養</p>
          <div class="section-about__title-box js-accordion-trigger">
            <h2 class="section-about__title">体のサビ(酸化)とコゲ(糖化)を<br>防ぐチャーガの栄養素</h2>
            <button class="u-hidden-o-sm section-about__trigger-btn js-accordion-trigger"><img src="/img/common/icon-circle-arrow.svg" alt="矢印"></button>
          </div>
          <div class="accordion__content section-about__content">
            <p>チャーガが健康に良いとされてる理由には体の酸化と糖化を防ぐ成分にあります。<br>酸化と糖化は「体のサビ」「体のコゲ」と表現され、細胞機能を低下させ老化や糖尿病、認知症、脳梗塞、心筋梗塞など様々な病気の原因となります。</p>
            <p>チャーガには、強い抗酸化作用を持つフラボノイドをはじめβカロテン、リグニン、メラニンなどの抗酸化物質、免疫細胞を活性化するβグルカン（多糖類）などの豊富な栄養素を主成分とすることで、私たちの体内の細胞機能低下を防ぎ免疫力を増強してくれます。</p>
            <p>実際に近年の様々な研究により、各種ガン、慢性胃炎、胃潰瘍、肝臓病、消化器系疾患、動脈硬化、リウマチなどに対する免疫力の増強等に優れた有効性があることも広く認知されてます。</p>
          </div>
          <button class="u-hidden-u-md section-about__trigger-btn js-accordion-trigger"><img src="/img/common/icon-circle-arrow.svg" alt="矢印"></button>
        </div>
        <div class="accordion__item section-about__accordion-block">
          <p class="section-about__sub-title">チャーガの希少価値</p>
          <div class="section-about__title-box js-accordion-trigger">
            <h2 class="section-about__title">別名｢森のダイヤモンド｣と<br>呼ばれるほど希少価値が高い</h2>
            <button class="u-hidden-o-sm section-about__trigger-btn"><img src="/img/common/icon-circle-arrow.svg" alt="矢印"></button>
          </div>
          <div class="accordion__content section-about__content">
            <p>チャーガはその希少価値の高さから「森のダイヤモンド」といわれております。</p>
            <p>チャーガは寒冷地に育つ白樺に寄生しますが、通常、若い白樺には寄生しない(ある程度成長した白樺でないと菌核が育たない)ことから、白樺の樹液を蓄え育つには20年~30年の歳月がかかります。</p>
            <p>成熟したチャーガが「見つかる確率は白樺2万本に1本」ともいわれるほどに希少価値が高いキノコです。</p>
            <p>加えて、チャーガはシベリアや北海道を含め様々な地域での栽培が可能ですが、-40℃の肥沃な極寒地域であるロシア、バイカル湖地域で育つ「紫翠チャーガ」が持つ栄養分は他と比べはるかに上回ります。</p>
          </div>
          <button class="u-hidden-u-md section-about__trigger-btn js-accordion-trigger"><img src="/img/common/icon-circle-arrow.svg" alt="矢印"></button>
        </div>
      </div><a class="btn-type1" href="https://shisui-chaga.myshopify.com/collections/all/" target="_blank">商品を見る
        <div class="arrow"></div></a>
    </section>
    <section class="section-topics">
      <h2 class="section-topics__title">Topics</h2>
      <ul class="section-topics__card-list">

        <?php
          $wp_query = new WP_Query();
          $my_posts = array(
            'post_type' => 'post',
            'post__not_in' => get_option('sticky_posts'),
            'posts_per_page' => '3',
            'category_name' => 'topics',
          );
          $wp_query->query($my_posts);
          if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
              // タイトル
              $title = wp_trim_words(get_the_title(), 32, '...');
              // text
              $text = wp_trim_words(get_the_excerpt(), 50, '...');
              //記事の作成日
              $date = get_the_date('Y-n-j');
              //記事のリンク
              $link = get_permalink();
          ?>

              <li class="topics-card">
              <div class="topics-card__img-box"><img class="topics-card__img" src="<?php echo the_post_thumbnail_url(); ?>" alt=""></div>
              <p class="topics-card__date"><?php echo $date; ?></p>
              <h3 class="topics-card__title"><?php echo $title; ?></h3>
              <p class="topics-card__text"><?php echo $text; ?></p><a class="topics-card__link" href="">more</a>
            </li>

          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>



      </ul><a class="btn-type1" href="/info">もっと見る
        <div class="arrow"></div></a>
    </section>
    <section class="section-how-to-make">
      <h2 class="section-how-to-make__title">紫翠チャーガの召し上がり方</h2>
      <ul class="section-how-to-make__contents">
        <li class="section-how-to-make__step"><img src="/img/about/img-howto-make-1.png" alt="コップのイラスト1"></li>
        <li class="section-how-to-make__step"><img src="/img/about/img-howto-make-2.png" alt="コップのイラスト2"></li>
        <li class="section-how-to-make__step"><img src="/img/about/img-howto-make-3.png" alt="コップのイラスト3"></li>
        <li class="section-how-to-make__step"><img src="/img/about/img-howto-make-4.png" alt="チャーガを飲んでいる女性のイラスト"></li>
      </ul>
      <p class="section-how-to-make__note">*健康に不安のある方は複数回の<span class="u-d-ib-xs">飲用をおすすめしております。</span></p><a class="btn-type1" href="https://shisui-chaga.myshopify.com/collections/all/" target="_blank">商品を見る
        <div class="arrow"></div></a>
    </section>
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
    </section><a class="section-instagram" href="https://www.instagram.com/shisuichaga/" target="_blank">
      <p>Instagramでも各種商品の案内や情報を発信しています！</p><img src="/img/common/icon-instagram.svg" alt="インスタグラムのアイコン"></a>

<?php
get_footer();
