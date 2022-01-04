<?php
get_header();

// クエリパラメーターを取得
$url =  $_SERVER['REQUEST_URI'];
// クエリの取得
$query_str = parse_url($url)['query'];
// カテゴリーの抽出
$cat = substr($query_str, 4);



?>
    <section class="mainvisual-lower">
      <div class="mainvisual-lower__inner">
        <h1 class="mainvisual-lower__title">お知らせ</h1>
        <p class="mainvisual-lower__sub-title">Information</p>
      </div>
    </section>
    <div class="sidebar">
      <div class="sidebar__inner">
        <p class="sidebar__title u-hidden-u-md">記事カテゴリー</p>
        <ul class="sidebar__nav">



          <?php
            // "全て"のリンクを生成
            if ($cat) {
              echo '<li class="sidebar__nav-item"><a href="/info">全て</a></li>';
            } else{
              echo '<li class="sidebar__nav-item"><a class="is-current" href="/info">全て</a></li>';
            }

            // カテゴリー一覧を取得
            $args = array(
              'parent' => 0,
              'orderby' => 'term_order',
              'order' => 'ASC',
              'include' => [2,6,7,4]//テストように仮で入れている
            );
            $categories = get_categories( $args );

            // カテゴリーごとにリンクを出し分ける
            foreach ($categories as $category) {
              $category_name = $category->name;

              // カテゴリー名を生成
              if ($category_name == 'news') {
                $tag = "お知らせ";
              } else if($category_name == "production") {
                $tag = "商品情報";
              }else if($category_name == "topics") {
                $tag = "トピック";
              }else if($category_name == "other") {
                $tag = "その他";
              } else {
                $tag = null;
              }

              if ($cat == $category_name) {
                echo '<li class="sidebar__nav-item"><a class="is-current" href="/info/?cat=' . $category_name . '">' . $tag . '</a></li>';
              } else {
                echo '<li class="sidebar__nav-item"><a href="/info/?cat=' . $category_name . '">' . $tag . '</a></li>';
              }
            }
          ?>

        </ul>
      </div>
    </div>
    <section class="section-articles">
      <div class="section-articles__inner">
        <ul class="section-articles__list">


          <?php
          $wp_query = new WP_Query();
          $my_posts = array(
            'post_type' => 'post',
            'post__not_in' => get_option('sticky_posts'),
            'paged' => $paged,
            'category_name' => $cat,
          );
          $wp_query->query($my_posts);
          if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
              // タイトル
              $title = wp_trim_words(get_the_title(), 50, '...');
              // 本文
              $text = wp_trim_words(get_the_content(), 50, '...');
              //記事の作成日
              $date = get_the_date('Y-n-j');
              //記事のリンク
              $link = get_permalink();
              //画像のリンク
              $image_path = get_the_post_thumbnail_url();
              if(!$image_path){
                $image_path = 'http://chaga.wp/wp-content/uploads/2021/12/img-news-3-scaled.jpg';
              }
          ?>

          <li class="article-card"><a href="<?php echo $link; ?>"></a>
            <div class="article-card__img"><img src="<?php echo $image_path; ?>" alt=""></div>
            <p class="article-card__date"><?php echo $date; ?></p>
            <h3 class="article-card__title"><?php echo $title; ?></h3>
            <p class="article-card__text u-hidden-u-md"><?php echo $text; ?></p>
            <p class="article-card__more u-hidden-u-md">more</p>
          </li>

          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>


        </ul>
      </div>
    </section>

    <?php
        if( function_exists('pagenation') ){ // 関数が定義されていたらtrueになる
            pagenation();
        }
      ?>


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
      <p>Instagramでも各種商品の案内や情報を発信しています！</p><img src="/img/common/icon-instagram.svg" alt=""></a>
<?php
get_footer();