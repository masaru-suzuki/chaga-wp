<?php
  $categories = get_the_category();
  //カテゴリの1つ目だけ
  $cat_name = $categories[0]->name;      //カテゴリ名
  // tagを生成
    if ($cat_name == 'news') {
      $tag = "お知らせ";
    } else if($cat_name == "production") {
      $tag = "商品情報";
    }else if($cat_name == "topics") {
      $tag = "トピック";
    }else if($cat_name == "other") {
      $tag = "その他";
    } else {
      $tag = null;
    }

?>
<div class="article__title-box">
  <h1 class="article__title"><span class="article__tag"><?php echo $tag; ?></span><?php the_title(); ?></h1>
  <p class="article__date"><?php the_time('Y.m.d'); ?></p>
</div>
<div class="article__contents">
  <?php the_content('Read more'); ?>
</div>